<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\SecondCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\MainCategory;
use App\Models\SecondCategory;
use App\Models\StickerCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class StickerCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['second_categories'] = StickerCategory::all();
        return view('backend.admin.productsManage.stickerCategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.admin.productsManage.stickerCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SecondCategoryRequest $request)
    {
        $second_category = new StickerCategory();
        $second_category->title = $request->title;
        $second_category->slug = $request->slug;
        $second_category->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $second_category, 'image');
        }
        $second_category->save();
        return redirect()->route('admin.sticker-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['second_categories'] = StickerCategory::with('mainCategory')->findOrFail(decrypt($id));
        return view('backend.admin.productsManage.stickerCategory.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['second_categories'] = StickerCategory::findOrFail(decrypt($id));
        return view('backend.admin.productsManage.stickerCategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SecondCategoryRequest $request, string $id)
    {
        $id = decrypt($id);
        $second_category = StickerCategory::findOrFail($id);
        $second_category->main_category_id = $request->main_category_id;
        $second_category->title = $request->title;
        $second_category->slug = $request->slug;
        $second_category->description = $request->description;
        $second_category->image = $request->image;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $second_category, 'image');
        }

        $second_category->save();
        return redirect()->route('admin.sticker-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $second_category = StickerCategory::findOrFail($id);
        $second_category->deleted_by = admin()->id;
        $second_category->delete();
        return redirect()->route('admin.sticker-category.index');
    }
}

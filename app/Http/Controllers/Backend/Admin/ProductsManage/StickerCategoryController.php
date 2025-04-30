<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StickerCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\StickerCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StickerCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sticker_categories'] = StickerCategory::all();
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
    public function store(StickerCategoryRequest $request)
    {
        $sticker_category = new StickerCategory();
        $sticker_category->title = $request->title;
        $sticker_category->slug = $request->slug;
        $sticker_category->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $sticker_category, 'image');
        }
        $sticker_category->created_by = admin()->id;
        $sticker_category->save();
        session()->flash('success', 'Sticker Category added successfully');
        return redirect()->route('admin.sticker-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['sticker_categories'] = StickerCategory::findOrFail(decrypt($id));
        return view('backend.admin.productsManage.stickerCategory.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['sticker_categories'] = StickerCategory::findOrFail(decrypt($id));
        return view('backend.admin.productsManage.stickerCategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StickerCategoryRequest $request, string $id)
    {
        $id = decrypt($id);
        $sticker_category = StickerCategory::findOrFail($id);
        $sticker_category->title = $request->title;
        $sticker_category->slug = $request->slug;
        $sticker_category->description = $request->description;
        
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $sticker_category, 'image');
        }
        // $sticker_category->updated_by = admin()->id;
        $sticker_category->save();
        session()->flash('success', 'Sticker Category updated successfully');
        return redirect()->route('admin.sticker-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $sticker_category = StickerCategory::findOrFail($id);
        $sticker_category->deleted_by = admin()->id;
        $sticker_category->delete();
        return redirect()->route('admin.sticker-category.index');
    }
    public function status(string $id, string $status)
    {
        $sticker_category = StickerCategory::findOrFail(decrypt($id));
        $sticker_category->status = decrypt($status);
        $sticker_category->update();

        session()->flash('success', 'Product Status Updated Successfully');
        return redirect()->route('admin.sticker-category.index');
    }
}

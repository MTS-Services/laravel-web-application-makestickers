<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\SecondCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\MainCategory;
use App\Models\SecondCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class SecondCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['second_categories'] = SecondCategory::with('mainCategory')->get();
        return view('backend.admin.productsManage.secondCategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $data['main_categories'] = MainCategory::all();
        return view('backend.admin.productsManage.secondCategory.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SecondCategoryRequest $request)
    {
        $second_category = new SecondCategory();
        $second_category->main_category_id = $request->main_category_id;
        $second_category->title = $request->title;
        $second_category->slug = $request->slug;
        $second_category->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $second_category, 'image');
        }
        $second_category->save();
        return redirect()->route('admin.second-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $data['second_categories'] = SecondCategory::with('mainCategory')->findOrFail($id);
        return view('backend.admin.productsManage.secondCategory.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $data['second_categories'] = SecondCategory::findOrFail($id);
        $data['main_categories'] = MainCategory::all();
        return view('backend.admin.productsManage.secondCategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SecondCategoryRequest $request, string $id)
    {
        $id = decrypt($id);
        $second_category = SecondCategory::findOrFail($id);
        $second_category->main_category_id = $request->main_category_id;
        $second_category->title = $request->title;
        $second_category->slug = $request->slug;
        $second_category->description = $request->description;
        $second_category->image = $request->image;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $second_category, 'image');
        }

        $second_category->save();
        return redirect()->route('admin.second-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $second_category = SecondCategory::findOrFail($id);
        $second_category->deleted_by = admin()->id;
        $second_category->delete();
        return redirect()->route('admin.second-category.index');
    }
}

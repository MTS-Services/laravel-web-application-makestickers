<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabelCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\LabelCategory;
use Illuminate\Http\Request;

class LabelCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['label_categories'] = LabelCategory::all();
        return view('backend.admin.productsManage.labelCategory.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.productsManage.labelCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabelCategoryRequest $request)
    {
        $labelCategory = new LabelCategory();
        $labelCategory->title = $request->title;
        $labelCategory->slug = $request->slug;
        $labelCategory->description = $request->description;

        if($request->hasFile('image')) {
            $this->handleFileUpload($request, $labelCategory, 'image');
        }
        $labelCategory->save();
        session()->flash('success', 'Label Category added successfully');
        return redirect()->route('admin.label-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['label_category'] = LabelCategory::findOrFail(decrypt($id));
        return view('backend.admin.productsManage.labelCategory.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['label_category'] = LabelCategory::findOrFail(decrypt($id));
        return view('backend.admin.productsManage.labelCategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabelCategoryRequest $request, string $id)
    {
        $labelCategory = LabelCategory::findOrFail(decrypt($id));
        $labelCategory->title = $request->title;
        $labelCategory->slug = $request->slug;
        $labelCategory->description = $request->description;

        if($request->hasFile('image')) {
            $this->handleFileUpload($request, $labelCategory, 'image');
        }
        $labelCategory->update();
        session()->flash('success', 'Label Category updated successfully');
        return redirect()->route('admin.label-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LabelCategory::findOrFail(decrypt($id))->delete();
        session()->flash('success', 'Label Category deleted successfully');
        return redirect()->route('admin.label-category.index');
    }
    
    public function status(string $id, string $status)
    {
        $labelCategory = LabelCategory::findOrFail($id);
        $labelCategory->status = $status;
        $labelCategory->update();
    
        session()->flash('success', 'Label Category Status Updated Successfully');
        return redirect()->route('admin.label-category.index');
    }
}

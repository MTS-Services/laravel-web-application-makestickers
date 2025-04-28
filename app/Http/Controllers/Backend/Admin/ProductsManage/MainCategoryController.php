<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\MainCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $main_categories = MainCategory::all();
        return view('backend.admin.productsManage.mainCategory.index', compact('main_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('backend.admin.productsManage.mainCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MainCategoryRequest $request)
    {
        // dd($request->all());
        $main_category = new MainCategory();
        $main_category->title = $request->title;
        $main_category->slug = $request->slug;
        $main_category->description = $request->description;
        
        if($request->hasFile('image')) {
            $this->handleFileUpload($request, $main_category, 'image');        
        }
        $main_category->save();
        return redirect()->route('admin.main-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $main_category = MainCategory::findOrFail($id);
        return view('backend.admin.productsManage.mainCategory.details', compact('main_category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $main_category = MainCategory::findOrFail($id);
        return view('backend.admin.productsManage.mainCategory.edit', compact('main_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MainCategoryRequest $request, string $id)
    {
        $id = decrypt($id);
        $main_category = MainCategory::findOrFail($id);
        $main_category->title = $request->title;
        $main_category->slug = $request->slug;
        $main_category->description = $request->description;
                
        if($request->hasFile('image')) {
            $this->handleFileUpload($request, $main_category, 'image');        
        }
        $main_category->save();
        return redirect()->route('admin.main-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $main_category = MainCategory::findOrFail($id);
        $main_category->deleted_by = admin()->id;
        $main_category->delete();
        return redirect()->route('admin.main-category.index');
    }
}

<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThirdCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\MainCategory;
use App\Models\ThirdCategory;
use App\Models\SecondCategory;
use Illuminate\Http\Request;

class ThirdCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['third_categories'] = ThirdCategory::with(['secondCategory','mainCategory'])->get();
        return view('backend.admin.productsManage.thirdCategory.index', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['main_categories'] = MainCategory::all();
        $data['second_categories'] = SecondCategory::all();
        return view('backend.admin.productsManage.thirdCategory.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ThirdCategoryRequest $request)
    {
        $third_category = new ThirdCategory();
        $third_category->title = $request->title;
        $third_category->main_category_id = $request->main_category_id;
        $third_category->second_category_id = $request->second_category_id;
        $third_category->slug = $request->slug;
        $third_category->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $third_category, 'image');
        }

        $third_category->save();
        return redirect()->route('admin.third-category.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $data['third_categories'] = ThirdCategory::with(['secondCategory','mainCategory'])->findOrFail($id);
        return view('backend.admin.productsManage.thirdCategory.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $data['third_categories'] = ThirdCategory::findOrFail($id);
        $data['main_categories'] = MainCategory::all();
        $data['second_categories'] = SecondCategory::all();
        return view('backend.admin.productsManage.thirdCategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ThirdCategoryRequest $request, string $id)
    {
        $id = decrypt($id);
        $third_category = ThirdCategory::findOrFail($id);   
        $third_category->title = $request->title;
        $third_category->main_category_id = $request->main_category_id;
        $third_category->second_category_id = $request->second_category_id;
        $third_category->slug = $request->slug;
        $third_category->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $third_category, 'image');
        }

        $third_category->save();
        return redirect()->route('admin.third-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $third_category = ThirdCategory::findOrFail($id)->delete();
        $third_category->delete();
        return redirect()->route('admin.third-category.index');
    }
}

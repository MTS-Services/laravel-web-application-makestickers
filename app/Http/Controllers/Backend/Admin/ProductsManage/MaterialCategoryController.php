<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\MaterialCategory;
use App\Models\StickerCategory;

class MaterialCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['material_categories'] = MaterialCategory::with('stickerCategory')->get();
        return view('backend.admin.productsManage.materialCategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['sticker_categories'] = StickerCategory::all();
        return view('backend.admin.productsManage.materialCategory.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaterialCategoryRequest $request)
    {
        $material_category = new MaterialCategory();
        $material_category->title = $request->title;
        $material_category->sticker_category_id = $request->sticker_category_id;
        $material_category->slug = $request->slug;
        $material_category->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $material_category, 'image');
        }

        $material_category->save();
        return redirect()->route('admin.material-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $data['material_categories'] = MaterialCategory::findOrFail($id);
        $data['sticker_categories'] = StickerCategory::all();
        return view('backend.admin.productsManage.materialCategory.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $data['material_categories'] = MaterialCategory::findOrFail($id);
        $data['sticker_categories'] = StickerCategory::all();
        return view('backend.admin.productsManage.materialCategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialCategoryRequest $request, string $id)
    {
        $id = decrypt($id);
        $material_category = MaterialCategory::findOrFail($id);
        $material_category->title = $request->title;
        $material_category->sticker_category_id = $request->sticker_category_id;
        $material_category->slug = $request->slug;
        $material_category->description = $request->description;
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $material_category, 'image');
        }
        $material_category->save();
        return redirect()->route('admin.material-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        MaterialCategory::findOrFail($id)->delete();
        return redirect()->route('admin.material-category.index');
    }
}

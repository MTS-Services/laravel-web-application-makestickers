<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\Product;
use App\Models\SizeCategory;
use App\Models\StickerCategory;

class ProductsController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::with(['stickerCategory', 'SizeCategory', 'admin'])->get();
        return view('backend.admin.productsManage.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['sticker_categories'] = StickerCategory::all();
        $data['size_categories'] = SizeCategory::all();
        return view('backend.admin.productsManage.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->sticker_category_id = $request->sticker_category_id;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        if ($request->hasFile('preview_image')) {
            $this->handleFileUpload($request, $product, 'preview_image');
        }

        $product->save();
        session()->flash('success', 'Product added successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $data['products'] = Product::with(['stickerCategory', 'SizeCategory'])->findOrFail($id);
        return view('backend.admin.productsManage.products.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $data['products'] = Product::findOrFail($id);
        $data['sticker_categories'] = StickerCategory::all();
        $data['size_categories'] = SizeCategory::all();
        return view('backend.admin.productsManage.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $id = decrypt($id);
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->status = $request->status;
        if ($request->hasFile('preview_image')) {
            $this->handleFileUpload($request, $product, 'preview_image');
        }

        $product->save();
        session()->flash('success', 'Product updated successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        Product::findOrFail($id)->delete();
        session()->flash('success', 'Product deleted successfully');
        return redirect()->route('admin.product.index');
    }
    public function status(string $id, string $status)
    {
        $product = Product::findOrFail(decrypt($id));
        $product->status = decrypt($status);
        $product->update();

        session()->flash('success', 'Product Status Updated Successfully');
        return redirect()->route('admin.product.index');
    }
}

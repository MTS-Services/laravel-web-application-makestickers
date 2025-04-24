<?php

namespace App\Http\Controllers\Backend\Admin\ProductsManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\Admin;
use App\Models\Products;
use App\Models\SizeCategory;
use App\Models\ThirdCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Products::with(['thirdCategory', 'SizeCategory', 'admin'])->get();
        return view('backend.admin.productsManage.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['third_categories'] = ThirdCategory::all();
        $data['size_categories'] = SizeCategory::all();
        return view('backend.admin.productsManage.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $products = new Products();
        $products->third_category_id = $request->third_category_id;
        $products->size_category_id = $request->size_category_id;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->unit_price = $request->unit_price;

        if ($request->hasFile('preview_image')) {
            $this->handleFileUpload($request, $products, 'preview_image');
        }

        $products->save();
        session()->flash('success', 'Product added successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $data['products'] = Products::findOrFail($id);
        $data['third_categories'] = ThirdCategory::all();
        $data['size_categories'] = SizeCategory::all();
        $data['admin'] = Admin::all();
        return view('backend.admin.productsManage.products.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $data['products'] = Products::findOrFail($id);
        $data['third_categories'] = ThirdCategory::all();
        $data['size_categories'] = SizeCategory::all();
        return view('backend.admin.productsManage.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $id = decrypt($id);
        $products = Products::findOrFail($id);
        $products->third_category_id = $request->third_category_id;
        $products->size_category_id = $request->size_category_id;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->unit_price = $request->unit_price;

        if ($request->hasFile('preview_image')) {
            $this->handleFileUpload($request, $products, 'preview_image');
        }

        $products->save();
        session()->flash('success', 'Product updated successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        Products::findOrFail($id)->delete();
        session()->flash('success', 'Product deleted successfully');
        return redirect()->route('admin.product.index');
    }
}

<?php

namespace App\Http\Controllers\Backend\Admin\TemplateCategory;

use Illuminate\Http\Request;
use App\Models\TemplateCategory;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileManagementTrait;

class TemplateCategoryController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = TemplateCategory::all();
        return view('backend.admin.TemplateCategory.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.TemplateCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $templates = new TemplateCategory();
        $templates->name = $request->name;
        $templates->email = $request->email;
        $templates->phone_number = $request->phone_number;
        $templates->address = $request->address;
        $templates->city = $request->city;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $templates, 'image', 'image');
        }

        $templates->save();
        session()->flash('success', 'Size created successfully');
        return redirect()->route('admin.template-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $templates = TemplateCategory::findOrFail($id);
        return view('backend.admin.TemplateCategory.details', compact('templates'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $templates = TemplateCategory::findOrFail($id);
        session()->flash('success', 'Size updated successfully');
        return view('backend.admin.TemplateCategory.edit', compact('templates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = decrypt($id);
        $templates = TemplateCategory::findOrFail($id);
        $templates->name = $request->name;
        $templates->email = $request->email;
        $templates->phone_number = $request->phone_number;
        $templates->address = $request->address;
        $templates->city = $request->city;

        // Handle file uploads for each specific field
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $templates, 'image', 'image');
        }
        $templates->update();
        session()->flash('success', 'Size updated successfully');
        return redirect()->route('admin.template-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $templates = TemplateCategory::findOrFail($id);
        $templates->deleted_by = admin()->id;
        $templates->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('admin.template-category.index');
    }
}

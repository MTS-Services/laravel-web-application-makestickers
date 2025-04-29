<?php

namespace App\Http\Controllers\Backend\Admin\FaqManage\FaqCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqManage\FaqcategoryRequest;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqcategories = FaqCategory::all();
        return view('backend.admin.faqManage.faqcategory.index', compact('faqcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.faqManage.faqcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqcategoryRequest $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:faq_categories',
        ]);

        FaqCategory::create($request->only(['title', 'slug']));

        return redirect(route('admin.faqcategory.index'))->with('success', 'FAQ category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faqcategory = FaqCategory::findOrFail(decrypt($id));
        return view('backend.admin.faqManage.faqcategory.edit', compact('faqcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqcategoryRequest $request, string $id)
    {
        $validated = $request->validated();
        
        $faqcategory = FaqCategory::findOrFail($id);
        $faqcategory->update($validated);

        return redirect()->route('admin.faqcategory.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faqcategory = FaqCategory::findOrFail(decrypt($id));
        $faqcategory->delete();

        return redirect()->route('admin.faqcategory.index')->with('success', 'Category deleted successfully!');
    }
}

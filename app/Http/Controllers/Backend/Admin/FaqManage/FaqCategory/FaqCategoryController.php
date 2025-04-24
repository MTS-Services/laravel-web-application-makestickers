<?php

namespace App\Http\Controllers\Backend\Admin\FaqManage\FaqCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqManage\FaqCategoryRequest;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $faqCategories = FaqCategory::all();
        return view('backend.admin.faqManage.faqCategory.index', compact('faqCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.faqManage.faqCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqCategoryRequest $request)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:faq_categories',
        ]);

        FaqCategory::create($request->only(['title', 'slug']));

        return redirect(route('admin.faqCategory.index'))->with('success', 'FAQ category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faqCategory = FaqCategory::findOrFail($id);
        return view('backend.admin.faqManage.faqCategory.edit', compact('faqCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqCategoryRequest $request, string $id)
    {
        $validated = $request->validated();
        
        $faqCategory = FaqCategory::findOrFail($id);
        $faqCategory->update($validated);

        return redirect()->route('admin.faqCategory.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faqCategory = FaqCategory::findOrFail($id);
        $faqCategory->delete();

        return redirect()->route('admin.faqCategory.index')->with('success', 'Category deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers\Backend\Admin\FaqManage\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqCategry\faqRequest;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->with('faqCategory')->get();
        return view('backend.admin.faqManage.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faqCategories = FaqCategory::all();
        return view('backend.admin.faqManage.faq.create', compact('faqCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(faqRequest $request)
    {
        $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($request->all());

        return redirect(route('admin.faq.index'))->with('success', 'FAQ created successfully.');
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
        $faq = Faq::findOrFail($id);
        $faqCategories = FaqCategory::all();
        return view('backend.admin.faqManage.faq.edit', compact('faq', 'faqCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(faqRequest $request, string $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->update($request->only('faq_category_id', 'question', 'answer'));

        return redirect(route('admin.faq.index'))->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin.faq.index')->with('success', 'Category deleted successfully!');
    }
}

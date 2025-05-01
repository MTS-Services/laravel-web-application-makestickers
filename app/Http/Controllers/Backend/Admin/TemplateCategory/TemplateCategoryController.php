<?php

namespace App\Http\Controllers\Backend\Admin\TemplateCategory;

use App\Models\SizeCategory;
use Illuminate\Http\Request;
use App\Models\LabelCategory;
use App\Models\StickerCategory;
use App\Models\MaterialCategory;
use App\Models\TemplateCategory;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileManagementTrait;
use App\Http\Requests\TemplateCategory as tempcat;

class TemplateCategoryController extends Controller
{
    use FileManagementTrait;
    public function index()
    {
        $TemplateCategory = TemplateCategory::with(['stickerCategory', 'materialCategory', 'labelCategory'])->get();
        return view('backend.admin.TemplateCategory.index', compact('TemplateCategory'));
    }

    public function create()
    {
        $data['sizecategories'] = SizeCategory::all();
        $data['stickerCategories'] = StickerCategory::all();
        $data['materialCategories'] = MaterialCategory::all();
        $data['labelCategories'] = LabelCategory::all();
        return view('backend.admin.TemplateCategory.create', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(tempcat $request)
    {
        $Templates = new TemplateCategory();
        $Templates->title = $request->title;
        $Templates->size_categories_id = $request->size_categories_id;
        $Templates->sticker_category_id = $request->sticker_category_id;
        $Templates->material_category_id = $request->material_category_id;
        $Templates->label_category_id = $request->label_category_id;


        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $Templates, 'image', 'image');
        }

        $Templates->save();

        session()->flash('success', 'Template category created successfully');
        return redirect()->route('admin.template-category.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $template = TemplateCategory::with(['sizeCategory', 'stickerCategory', 'materialCategory', 'labelCategory'])->findOrFail($id);
        return view('backend.admin.TemplateCategory.details', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $Template = TemplateCategory::findOrFail($id);
        $sizecategories = SizeCategory::all();
        $stickerCategories = StickerCategory::all();
        $materialCategories = MaterialCategory::all();
        $labelCategories = LabelCategory::all();

        return view('backend.admin.TemplateCategory.edit', compact('Template', 'sizecategories', 'stickerCategories', 'materialCategories', 'labelCategories'));
    }
    public function update(tempcat $request, string $id)
    {
        $id = decrypt($id);
        $Templates = TemplateCategory::findOrFail($id);
        $Templates->title = $request->title;
        $Templates->size_categories_id = $request->size_categories_id;
        $Templates->sticker_category_id = $request->sticker_category_id;
        $Templates->material_category_id = $request->material_category_id;
        $Templates->label_category_id = $request->label_category_id;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $Templates, 'image', 'image');
        }
        $Templates->save();
        session()->flash('success', 'Templates updated successfully');
        return redirect()->route('admin.template-category.index');
    }


    public function destroy(string $id)
    {
        $id = decrypt($id);
        $Templates = TemplateCategory::findOrFail($id);
        $Templates->save();
        $Templates->delete();
        session()->flash('success', 'Templates deleted successfully');
        return redirect()->route('admin.template-category.index');
    }
}

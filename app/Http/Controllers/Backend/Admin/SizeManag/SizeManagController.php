<?php

namespace App\Http\Controllers\Backend\Admin\SizeManag;

use App\Http\Controllers\Controller;
use App\Http\Traits\FileManagementTrait;
use App\Models\LabelCategory;
use App\Models\MaterialCategory;
use Illuminate\Http\Request;
use App\Http\Requests\Sizemanage;
use App\Models\SizeCategory;
use App\Models\StickerCategory;

class SizeManagController extends Controller
{
    use FileManagementTrait;
    public function index()
    {
        $sizeCategories = SizeCategory::with(['stickerCategory', 'materialCategory', 'labelCategory'])->get();
        return view('backend.admin.SizeManage.index', compact('sizeCategories'));
    }

    public function create()
    {
        $data['stickerCategories'] = StickerCategory::all();
        $data['materialCategories'] = MaterialCategory::all();
        $data['labelCategories'] = LabelCategory::all();
        return view('backend.admin.SizeManage.create', $data);

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Sizemanage $request)
    {
        $sizes = new SizeCategory();
        $sizes->height = $request->height;
        $sizes->width = $request->width;
        $sizes->sticker_category_id = $request->sticker_category_id;
        $sizes->material_category_id = $request->material_category_id;
        $sizes->label_category_id = $request->label_category_id;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $sizes, 'image', 'image');
        }

        $sizes->save();

        session()->flash('success', 'Size category created successfully');
        return redirect()->route('admin.size.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $size = SizeCategory::with(['stickerCategory', 'materialCategory', 'labelCategory'])->findOrFail($id);
        return view('backend.admin.SizeManage.details', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $size = SizeCategory::findOrFail($id);

        $stickerCategories = StickerCategory::all();
        $materialCategories = MaterialCategory::all();
        $labelCategories = LabelCategory::all();

        return view('backend.admin.SizeManage.edit', compact('size', 'stickerCategories', 'materialCategories', 'labelCategories'));
    }
    public function update(Sizemanage $request, string $id)
    { {
            $id = decrypt($id);
            $sizes = SizeCategory::findOrFail($id);
            $sizes->height = $request->height;
            $sizes->width = $request->width;
            $sizes->sticker_category_id = $request->sticker_category_id;
            $sizes->material_category_id = $request->material_category_id;
            $sizes->label_category_id = $request->label_category_id;

            if ($request->hasFile('image')) {
                $this->handleFileUpload($request, $sizes, 'image', 'image');
            }

            $sizes->save();

            session()->flash('success', 'Size updated successfully');
            return redirect()->route('admin.size.index');
        }
    }

    public function destroy(string $id)
    {
        $id = decrypt($id);
    $size = SizeCategory::findOrFail($id);
    $size->save();
    $size->delete();
    session()->flash('success', 'Size deleted successfully');
    return redirect()->route('admin.size.index');
    }
}

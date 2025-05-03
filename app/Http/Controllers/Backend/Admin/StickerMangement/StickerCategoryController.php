<?php

namespace App\Http\Controllers\Backend\Admin\StickerMangement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StickerManagement\StickerCategoryRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\StickerCategory;
use Illuminate\Support\Facades\Storage;

class StickerCategoryController extends Controller
{
    use FileManagementTrait;

    public function __construct()
    {
        $this->middleware('auth:admin');

        // Define permissions for each method
        // $this->middleware('permission:sticker-category-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:sticker-category-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:sticker-category-edit', ['only' => ['edit', 'update', 'status']]);
        // $this->middleware('permission:sticker-category-delete', ['only' => ['destroy']]);
        // $this->middleware('permission:sticker-category-trash', ['only' => ['trash', 'restore']]);
        // $this->middleware('permission:sticker-category-restore', ['only' => ['restore']]);
        // $this->middleware('permission:sticker-category-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $categories = StickerCategory::orderBy('sort_order')->paginate(10);
            return view('backend.admin.stickerMangement.stickerCategory.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.stickerMangement.StickerCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StickerCategoryRequest $request)
    {
        $stickerCategory = new StickerCategory();

        // if ($request->hasFile('image')) {
        //     $validated['image'] = $request->file('image')->store('sticker-categories', 'public');
        // }

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $stickerCategory, 'image', 'image');
        }

        $validated = $request->validated();
        $validated['image'] = $stickerCategory['image'];
        $validated['created_by'] = admin()->id;
        StickerCategory::create($validated);

        return redirect()->route('am.sticker-category.index')
            ->with('success', 'Sticker category created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $stickerCategory = StickerCategory::findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.stickerCategory.show', compact('stickerCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stickerCategory = StickerCategory::findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.stickerCategory.edit', compact('stickerCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StickerCategoryRequest $request, string $id)
    {
        $validated = $request->validated();

        $stickerCategory = StickerCategory::findOrFail(decrypt($id));


        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $stickerCategory, 'image', 'image');
        }

        $validated['image'] = $stickerCategory['image'];
        $validated['status'] = $request->has('status') ? 1 : 0;
        $validated['updated_by'] = admin()->id;

        // Update category
        $stickerCategory->update($validated);

        return redirect()->route('am.sticker-category.index')
            ->with('success', 'Sticker category updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stickerCategory = StickerCategory::findOrFail(decrypt($id));
        if ($stickerCategory->image) {
            Storage::disk('public')->delete($stickerCategory->image);
        }

        $stickerCategory->delete();

        return redirect()->route('am.sticker-category.index')->with('success', 'Category deleted successfully.');
    }

    public function status(string $id, string $status)
    {
        //
    }

    public function trash()
    {
        //
    }
    public function restore(string $id)
    {
        //
    }
    public function forceDelete(string $id)
    {
        //
    }
}

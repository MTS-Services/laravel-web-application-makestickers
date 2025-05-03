<?php

namespace App\Http\Controllers\Backend\Admin\StickerMangement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StickerManagement\StickerTypeRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\StickerCategory;
use App\Models\StickerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StickerTypeContoller extends Controller
{
    use FileManagementTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');

        // Define permissions for each method
        // $this->middleware('permission:sticker-type-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:sticker-type-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:sticker-type-edit', ['only' => ['edit', 'update', 'status']]);
        // $this->middleware('permission:sticker-type-delete', ['only' => ['destroy']]);
        // $this->middleware('permission:sticker-type-trash', ['only' => ['trash', 'restore']]);
        // $this->middleware('permission:sticker-type-restore', ['only' => ['restore']]);
        // $this->middleware('permission:sticker-type-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stickerTypes = StickerType::orderBy('sort_order')->paginate(10);
        return view('backend.admin.stickerMangement.stickerType.index', compact('stickerTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = StickerCategory::where('status', true)->orderBy('sort_order')->pluck('name', 'id');
        return view('backend.admin.stickerMangement.stickerType.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StickerTypeRequest $request)
    {
        $stickerType = new StickerType();
        // if ($request->hasFile('image')) {
        //     $validated['image'] = $request->file('image')->store('sticker-type', 'public');
        // }

        if ($request->hasFile('thumbnail')) {
            $this->handleFileUpload($request, $stickerType, 'thumbnail', 'thumbnail');
        }

        $validated = $request->validated();
        $validated['thumbnail'] = $stickerType['thumbnail'];

        $validated['created_by'] = admin()->id;
        StickerType::create($validated);

        session()->flash('success', 'Sticker Type Created Successfully');
        return redirect()->route('am.sticker-type.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stickerType = StickerType::findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.stickerType.show', compact('stickerType'));
    }

    /**
     * Show the form for editing the specified resource.
     */ public function edit(string $id)
    {
        $stickerType = StickerType::findOrFail(decrypt($id));

        $categories = StickerCategory::where('status', true)
            ->orderBy('sort_order')
            ->pluck('name', 'id');

        return view('backend.admin.stickerMangement.stickerType.edit', compact('stickerType', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StickerTypeRequest $request, string $id)
    {
        $stickerType = StickerType::findOrFail(decrypt($id));
        // if ($request->hasFile('image')) {
        //     $validated['image'] = $request->file('image')->store('sticker-type', 'public');
        // }

        if ($request->hasFile('thumbnail')) {
            $this->handleFileUpload($request, $stickerType, 'thumbnail', 'thumbnail');
        }

        $validated = $request->validated();
        $validated['thumbnail'] = $stickerType['thumbnail'];

        $validated['updated_by'] = admin()->id;
        $stickerType->update($validated);

        session()->flash('success', 'Sticker Type Updated Successfully');
        return redirect()->route('am.sticker-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stickerType = StickerType::findOrFail(decrypt($id));
        if ($stickerType->thumbnail) {
            Storage::disk('public')->delete($stickerType->thumbnail);
        }

        $stickerType->delete();

        return redirect()->route('am.sticker-type.index')->with('success', 'Type deleted successfully.');
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
    public function status(string $id, string $status)
    {
        $stickerType = StickerType::findOrFail(decrypt($id));
        $stickerType->status = decrypt($status);
        $stickerType->save();
        session()->flash('success', 'StickerType Attribute status updated successfully');
        return redirect()->route('am.sticker-type.index');
    }
}

<?php

namespace App\Http\Controllers\Backend\Admin\StickerMangement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StickerManagement\StickerShapesRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\StickerShape;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class StickerShapeController extends Controller
{
    use FileManagementTrait;

    public function __construct()
    {
        $this->middleware('auth:admin');

        // // Define permissions for each method
        // $this->middleware('permission:Sticker-Shape-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:Sticker-Shape-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:Sticker-Shape-edit', ['only' => ['edit', 'update', 'status']]);
        // $this->middleware('permission:Sticker-Shape-delete', ['only' => ['destroy']]);
        // $this->middleware('permission:Sticker-Shape-trash', ['only' => ['trash', 'restore']]);
        // $this->middleware('permission:Sticker-Shape-restore', ['only' => ['restore']]);
        // $this->middleware('permission:Sticker-Shape-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stickerShapes = StickerShape::orderBy('sort_order')->paginate(10);
        return view('backend.admin.stickerMangement.stickerShapes.index', compact('stickerShapes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.stickerMangement.stickerShapes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StickerShapesRequest $request)
    {
        $stickershapes = new StickerShape();
        // if ($request->hasFile('image')) {
        //     $validated['image'] = $request->file('image')->store('sticker-shape', 'public');
        // }

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $stickershapes, 'image', 'image');
        }

        $validated = $request->validated();
        $validated['image'] = $stickershapes['image'];

        $validated['created_by'] = admin()->id;
        StickerShape::create($validated);

        session()->flash('success', 'Sticker Shapes Created Successfully');
        return redirect()->route('am.sticker-shape.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stickershape = StickerShape::findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.stickerShapes.show', compact('stickershape'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stickershape = StickerShape::findOrFail($id);
        return view('backend.admin.stickerMangement.stickerShapes.edit', compact('stickershape'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StickerShapesRequest $request, string $id)
    {
        $stickershape = StickerShape::findOrFail(decrypt($id));
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $stickershape, 'image', 'image');
        }

        $validated = $request->validated();
        $validated['image'] = $stickershape['image'];

        $validated['created_by'] = admin()->id;

        $validated['status'] = $request->has('status') ? 1 : 0;
        $validated['updated_by'] = admin()->id;
        $stickershape->update($validated);

        session()->flash('success', 'Sticker Shapes Created Successfully');
        return redirect()->route('am.sticker-shape.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stickershape = StickerShape::findOrFail(decrypt($id));
        if ($stickershape->image) {
            FacadesStorage::disk('public')->delete($stickershape->image);
        }
        $stickershape->delete();
        session()->flash('success', 'Sticker Shapes Deleted Successfully');
        return redirect()->route('am.sticker-shape.index');
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

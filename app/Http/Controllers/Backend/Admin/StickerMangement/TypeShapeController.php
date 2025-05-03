<?php

namespace App\Http\Controllers\Backend\Admin\StickerMangement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StickerManagement\ShapeTypeRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\StickerShape;
use App\Models\StickerType;
use App\Models\StickerTypeShape;
use Illuminate\Http\Request;

class TypeShapeController extends Controller
{
    use FileManagementTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');

        // Define permissions for each method
        // $this->middleware('permission:Shape-Types-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:Shape-Types-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:Shape-Types-edit', ['only' => ['edit', 'update', 'status']]);
        // $this->middleware('permission:Shape-Types-delete', ['only' => ['destroy']]);
        // $this->middleware('permission:Shape-Types-trash', ['only' => ['trash', 'restore']]);
        // $this->middleware('permission:Shape-Types-restore', ['only' => ['restore']]);
        // $this->middleware('permission:Shape-Types-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeshapes = StickerTypeShape::orderBy('sort_order')->paginate(10);
        return view('backend.admin.stickerMangement.shapeType.index', compact('typeshapes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stickerTypes = StickerType::orderBy('name')->get();
        $stickerShapes = StickerShape::orderBy('name')->get();
        return view('backend.admin.stickerMangement.shapeType.create', compact('stickerTypes', 'stickerShapes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShapeTypeRequest $request)
    {
        // Check if the relationship already exists

        $data = $request->validated();
        $data['created_by'] = admin()->id;

        StickerTypeShape::create($data);
        session()->flash('success', 'Sticker type-shape relationship created successfully.');
        return redirect()->route('am.type-shape.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $typeShape=StickerTypeShape::with('stickerType', 'stickerShape')->findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.shapeType.show', compact('typeShape'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stickerTypes = StickerType::orderBy('name')->get();
        $stickerShapes = StickerShape::orderBy('name')->get();
        $typeshape = StickerTypeShape::findOrFail($id);
        return view('backend.admin.stickerMangement.shapeType.edit', compact('typeshape', 'stickerTypes', 'stickerShapes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShapeTypeRequest $request, $id)
{
    $data = $request->validated();
    $data['updated_by'] = admin()->id;
    $typeShape = StickerTypeShape::findOrFail(decrypt($id));
    $typeShape->update($data);

    // Flash success message and redirect
    session()->flash('success', 'Sticker type-shape relationship updated successfully.');
    return redirect()->route('am.type-shape.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $typeShape = StickerTypeShape::findOrFail(decrypt($id));
        $typeShape->delete();
        session()->flash('success', 'Sticker type-shape relationship deleted successfully.');
        return redirect()->route('am.type-shape.index');
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

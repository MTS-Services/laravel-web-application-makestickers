<?php

namespace App\Http\Controllers\Backend\Admin\MaterialManagement;

use App\Http\Controllers\Controller;
use App\Models\MaterialAttribute;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MaterialAttributeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        
        // Define permissions for each method
        $this->middleware('permission:admin-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:admin-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:admin-edit', ['only' => ['edit', 'update', 'status']]);
        $this->middleware('permission:admin-delete', ['only' => ['destroy']]);
        $this->middleware('permission:admin-trash', ['only' => ['trash', 'restore']]);
        $this->middleware('permission:admin-restore', ['only' => ['restore']]);
        $this->middleware('permission:admin-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $material_attributes = MaterialAttribute::latest()->get();
        return view('backend.admin.materialManage.materialAttribute.index', compact('material_attributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('backend.admin.materialManage.materialAttribute.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materialAttribute = new MaterialAttribute();
        $materialAttribute->sort_order = $request->sort_order;
        $materialAttribute->name = $request->name;
        $materialAttribute->save();
        return redirect()->route('am.material-attribute.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materialAttribute = MaterialAttribute::findOrFail(decrypt($id));
        return view('backend.admin.materialManage.materialAttribute.view', compact('materialAttribute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materialAttribute = MaterialAttribute::findOrFail(decrypt($id));
        return view('backend.admin.materialManage.materialAttribute.edit', compact('materialAttribute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $materialAttribute = MaterialAttribute::findOrFail(decrypt($id));
        $materialAttribute->name = $request->name;

        $materialAttribute->update();
        session()->flash('success', 'Material Attribute updated successfully');
        return redirect()->route('am.material-attribute.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materialAttribute = MaterialAttribute::findOrFail(decrypt($id));
        $materialAttribute->delete();

        session()->flash('success', 'Material Attribute deleted successfully');
        return redirect()->route('am.material-attribute.index');
    }

    public function status(string $id, string $status)
    {
        $materialAttribute = MaterialAttribute::findOrFail(decrypt($id));
        $materialAttribute->status = $status;
        $materialAttribute->update();

        session()->flash('success', 'Material Attribute status updated successfully');
        return redirect()->route('am.material-attribute.index');
    }

    public function trash()
    {
        $materialAttributes = MaterialAttribute::onlyTrashed()->get();
        return view('backend.admin.materialManage.materialAttribute.trash', compact('materialAttributes'));
    }
    public function restore(string $id)
    {
        $materialAttribute = MaterialAttribute::onlyTrashed()->findOrFail(decrypt($id));
        $materialAttribute->restore();

        session()->flash('success', 'Material Attribute restored successfully.');
        return redirect()->route('am.material-attribute.index');
    }
    public function forceDelete(string $id)
    {
        $materialAttribute = MaterialAttribute::onlyTrashed()->findOrFail(decrypt($id));
        $materialAttribute->forceDelete();

        session()->flash('success', 'Material Attribute deleted permanently.');
        return redirect()->route('am.material-attribute.trash');
    }
}

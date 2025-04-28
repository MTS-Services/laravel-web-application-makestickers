<?php

namespace App\Http\Controllers\Backend\Admin\AdminManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminManage\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::latest()->get();
        return view('backend.admin.adminManage.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.adminManage.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by'] = admin()->id;
        Permission::create($validated);
        session()->flash('success', 'Permission Created Successfully');
        return redirect()->route('am.permission.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $permission = Permission::findOrFail(decrypt($id));
        $permission->load(['createdBy', 'updatedBy']);
        return view('backend.admin.adminManage.permission.view', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = Permission::findOrFail(decrypt($id));
        $permission->load(['createdBy']);
        return view('backend.admin.adminManage.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, string $id)
    {
        $permission = Permission::findOrFail(decrypt($id));
        $validated = $request->validated();
        $validated['updated_by'] = admin()->id;
        $permission->update($validated);

        session()->flash('success', 'Permission Updated Successfully');
        return redirect()->route('am.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::findOrFail(decrypt($id));
        $permission->update([
            'deleted_by' => admin()->id
        ]);

        $permission->delete();
        session()->flash('success', 'Permission Deleted Successfully');
        return redirect()->route('am.permission.index');
    }

    public function trash()
    {
        $permissions = Permission::onlyTrashed()->latest()->get();
        return view('backend.admin.adminManage.permission.trash', compact('permissions'));
    }

    public function restore(string $id)
    {
        $permission = Permission::onlyTrashed()->findOrFail(decrypt($id));
        $permission->update(['deleted_by' => null, 'deleted_at' => null, 'updated_by' => admin()->id]);
        $permission->restore();

        session()->flash('success', 'Permission restored successfully.');
        return redirect()->route('am.permission.index');
    }

    public function forceDelete(string $id)
    {
        $permission = Permission::onlyTrashed()->findOrFail(decrypt($id));
        $permission->forceDelete();

        session()->flash('success', 'Permission permanently deleted successfully.');
        return redirect()->route('am.permission.index');
    }
}

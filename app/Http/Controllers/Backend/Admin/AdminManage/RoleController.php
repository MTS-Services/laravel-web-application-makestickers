<?php

namespace App\Http\Controllers\Backend\Admin\AdminManage;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminManage\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'asc')->get();
        return view('backend.admin.adminManage.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grouped_permissions = Permission::orderBy('prefix')->get()->groupBy('prefix');
        return view('backend.admin.adminManage.role.create', compact('grouped_permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $validated = $request->validated();
        DB::transaction(function () use ($validated, $request) {
            $validated['created_by'] = admin()->id;
            $role = Role::create($validated);
            $role->givePermissionTo($request->permissions);
        });

        session()->flash('success', 'Role Created Successfully');
        return redirect()->route('am.role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::with(['permissions:id,name,prefix', 'createdBy', 'updatedBy'])->findOrFail(decrypt($id));
        $role->permissions_group = $role->permissions->groupBy('prefix');
        return view('backend.admin.adminManage.role.view', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail(decrypt($id));
        $role->load(['createdBy']);
        $grouped_permissions = Permission::orderBy('prefix')->get()->groupBy('prefix');
        return view('backend.admin.adminManage.role.edit', compact('role', 'grouped_permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, string $id)
    {
        DB::transaction(function () use ($request, $id) {
            $role = Role::findOrFail(decrypt($id));
            $validated = $request->validated();
            $validated['updated_by'] = admin()->id;
            $role->update($validated);
            $role->syncPermissions($request->permissions);
        });

        session()->flash('success', 'Role Updated Successfully');
        return redirect()->route('am.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail(decrypt($id));
        $role->update([
            'deleted_by' => admin()->id
        ]);

        $role->delete();
        session()->flash('success', 'Role Deleted Successfully');
        return redirect()->route('am.role.index');
    }

    public function trash()
    {
        $roles = Role::onlyTrashed()->latest()->get();
        return view('backend.admin.adminManage.role.trash', compact('roles'));
    }

    public function restore(string $id)
    {
        $role = Role::onlyTrashed()->findOrFail(decrypt($id));
        $role->update(['deleted_by' => null, 'deleted_at' => null, 'updated_by' => admin()->id]);
        $role->restore();

        session()->flash('success', 'Role restored successfully.');
        return redirect()->route('am.role.index');
    }

    public function forceDelete(string $id)
    {
        $role = Role::onlyTrashed()->findOrFail(decrypt($id));
        $role->forceDelete();

        session()->flash('success', 'Role permanently deleted successfully.');
        return redirect()->route('am.role.index');
    }
}

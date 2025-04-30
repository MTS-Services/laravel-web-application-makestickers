<?php

namespace App\Http\Controllers\Backend\Admin\AdminManage;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminManage\AdminRequest;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::orderBy('id', 'asc')->with('createdBy')->get();
        return view('backend.admin.adminManage.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('name')->get();
        return view('backend.admin.adminManage.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        DB::transaction(function () use ($validated, $request) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('admin', $fileName, 'public');
                $path = 'admin/' . $fileName;
                $validated['image'] = $path;
            }
            $validated['created_by'] = admin()->id;

            $admin = Admin::create($validated);
            $role = Role::findOrFail($request->role_id);
            $admin->assignRole($role);
        });

        session()->flash('success', 'Admin Created Successfully');
        return redirect()->route('am.admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::with(['createdBy', 'updatedBy'])->findOrFail(decrypt($id));
        $admin->permissions_group = $admin->role->permissions->groupBy('prefix');
        return view('backend.admin.adminManage.admin.view', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::findOrFail(decrypt($id));
        $roles = Role::orderBy('name')->get();
        return view('backend.admin.adminManage.admin.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, string $id)
    {
        $admin = Admin::findOrFail(decrypt($id));
        $validated = $request->validated();

        DB::transaction(function () use ($validated, $request, $admin) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('admin', $fileName, 'public');
                $path = 'admin/' . $fileName;
                $validated['image'] = $path;
                if ($admin->image) {
                    Storage::disk('public')->delete($admin->image);
                }
            }
    
            $validated['password'] = isset($request->password) ? $request->password : $admin->password;
    
            $validated['updated_by'] = admin()->id;
    
            $admin->update($validated);
            $role = Role::findOrFail($request->role_id);
            $admin->syncRoles($role);
        });
        session()->flash('success', 'Admin Updated Successfully');
        return redirect()->route('am.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail(decrypt($id));
        $admin->update([
            'deleted_by' => admin()->id
        ]);

        $admin->delete();
        return redirect()->route('am.admin.index');
    }

    public function status(string $id, string $status)
    {
        $admin = Admin::findOrFail(decrypt($id));
        $admin->update([
            'status' => decrypt($status),
            'updated_by' => admin()->id,
        ]);

        session()->flash('success', 'Admin Status Updated Successfully');
        return redirect()->route('am.admin.index');
    }

    public function trash()
    {
        $admins = Admin::onlyTrashed()->latest()->get();
        $admins->load('deletedBy');
        return view('backend.admin.adminManage.admin.trash', compact('admins'));
    }

    public function restore(string $id)
    {
        $admin = Admin::onlyTrashed()->findOrFail(decrypt($id));
        $admin->update(['deleted_by' => null, 'deleted_at' => null, 'updated_by' => admin()->id]);
        $admin->restore();

        session()->flash('success', 'Admin restored successfully.');
        return redirect()->route('am.admin.index');
    }

    public function forceDelete(string $id)
    {
        $admin = Admin::onlyTrashed()->findOrFail(decrypt($id));
        if ($admin->image) {
            Storage::disk('public')->delete($admin->image);
        }
        $admin->forceDelete();

        session()->flash('success', 'Admin permanently deleted successfully.');
        return redirect()->route('am.admin.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\StickerSizeManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminManage\SizeRequest;
use App\Models\Admin;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
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
        $sizes = Size::latest()->paginate(10);
        return view('backend.admin.sizeManagement.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.sizeManagement.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SizeRequest $request)
    {
        

        Size::create([
            'sort_order' => $request->sort_order ?? 0,
            'name' => $request->name,
            'width_inches' => $request->width_inches,
            'height_inches' => $request->height_inches,
            'status' => $request->status,
            'created_by' => auth()->guard('admin')->id()
        ]);
    
        return redirect()->route('size.size.index')->with('success', 'Size created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::findOrFail(decrypt($id));
        return view('backend.admin.sizeManagement.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SizeRequest $request, string $id)
    {
        $size = Size::findOrFail(decrypt($id));
        $size->update([
            'sort_order' => $request->sort_order ?? 0,
            'name' => $request->name,
            'width_inches' => $request->width_inches,
            'height_inches' => $request->height_inches,
            'status' => $request->status,
            'updated_by' => admin()->id, // For audit columns
        ]);
    
        return redirect()->route('size.size.index')->with('success', 'Size updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Size::findOrFail(decrypt($id))->delete();

        return redirect()->route('size.size.index')->with('success', 'Size deleted successfully!');
    
    }

    public function status(string $id, string $status)
    {
        $size = Size::findOrFail(decrypt($id));
        $size->update([
            'status' => decrypt($status),
            'updated_by' => admin()->id,
        ]);

        session()->flash('success', 'Admin Status Updated Successfully');
        return redirect()->route('size.size.index');
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

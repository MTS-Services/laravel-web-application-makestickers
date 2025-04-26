<?php

namespace App\Http\Controllers\Backend\Admin\SizeManag;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileManagementTrait;
use Illuminate\Http\Request;
use App\Models\SizeCategory;

class SizeManagController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = SizeCategory::all();
        return view('backend.admin.SizeManage.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.SizeManage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sizes = new SizeCategory();
        $sizes->name = $request->name;
        $sizes->email = $request->email;
        $sizes->phone_number = $request->phone_number;
        $sizes->address = $request->address;
        $sizes->city = $request->city;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $sizes, 'image', 'image');
        }

        $sizes->save();
        session()->flash('success', 'Size created successfully');
        return redirect()->route('admin.size.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $sizes = SizeCategory::findOrFail($id);
        return view('backend.admin.SizeManage.details', compact('sizes'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $sizes = SizeCategory::findOrFail($id);
        session()->flash('success', 'Size updated successfully');
        return view('backend.admin.SizeManage.edit', compact('sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = decrypt($id);
        $sizes = SizeCategory::findOrFail($id);
        $sizes->name = $request->name;
        $sizes->email = $request->email;
        $sizes->phone_number = $request->phone_number;
        $sizes->address = $request->address;
        $sizes->city = $request->city;

        // Handle file uploads for each specific field
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $sizes, 'image', 'image');
        }
        $sizes->update();
        session()->flash('success', 'Size updated successfully');
        return redirect()->route('admin.size.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $sizes = SizeCategory::findOrFail($id)->delete();
        $sizes->deleted_by = admin()->id;
        $sizes->delete();
        session()->flash('success', 'Size deleted successfully');
        return redirect()->route('admin.size.index');
    }
}

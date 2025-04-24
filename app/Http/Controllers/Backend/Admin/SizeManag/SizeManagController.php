<?php

namespace App\Http\Controllers\Backend\Admin\SizeManag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SizeCategory;

class SizeManagController extends Controller
{
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
        $test = new SizeCategory();
        $test->name = $request->name;
        $test->slug = $request->slug;
        $test->description = $request->description;

        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $test, 'image', 'image');
        }

        $test->save();
        return redirect()->route('admin.size.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $test = SizeCategory::findOrFail($id);
        return view('backend.admin.SizeManage.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = decrypt($id);
        $test = SizeCategory::findOrFail($id);
        $test->name = $request->name;
        $test->slug = $request->slug;
        $test->description = $request->description;

        // Handle file uploads for each specific field
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $test, 'image', 'image');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $test = SizeCategory::findOrFail($id);
        $test->deleted_by = admin()->id;
        $test->delete();
        return redirect()->route('admin.size.index');
    }
}

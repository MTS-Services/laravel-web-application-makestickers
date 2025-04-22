<?php

namespace App\Http\Controllers\Backend\Admin\TestManage;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileManagementTrait;

class TestController extends Controller
{

    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all();
        return view('backend.admin.testManage.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.testManage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $test = new Test();
        $test->name = $request->name;
        $test->slug = $request->slug;
        $test->description = $request->description;

        // Handle file uploads for each specific field
        if ($request->hasFile('image1')) {
            $this->handleFileUpload($request, $test, 'image1', 'image1');
        }
        if ($request->hasFile('image2')) {
            $this->handleFileUpload($request, $test, 'image2', 'image2');
        }
        if ($request->hasFile('video1')) {
            $this->handleFileUpload($request, $test, 'video1', 'video1');
        }
        if ($request->hasFile('video2')) {
            $this->handleFileUpload($request, $test, 'video2', 'video2');
        }
        if ($request->hasFile('pdf1')) {
            $this->handleFileUpload($request, $test, 'pdf1', 'pdf1');
        }
        if ($request->hasFile('pdf2')) {
            $this->handleFileUpload($request, $test, 'pdf2', 'pdf2');
        }

        $test->save();
        return redirect()->route('admin.test.index');
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
        $id = decrypt($id);
        $test = Test::findOrFail($id);
        return view('backend.admin.testManage.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = decrypt($id);
        $test = Test::findOrFail($id);
        $test->name = $request->name;
        $test->slug = $request->slug;
        $test->description = $request->description;

        // Handle file uploads for each specific field
        if ($request->hasFile('image1')) {
            $this->handleFileUpload($request, $test, 'image1', 'image1');
        }
        if ($request->hasFile('image2')) {
            $this->handleFileUpload($request, $test, 'image2', 'image2');
        }
        if ($request->hasFile('video1')) {
            $this->handleFileUpload($request, $test, 'video1', 'video1');
        }
        if ($request->hasFile('video2')) {
            $this->handleFileUpload($request, $test, 'video2', 'video2');
        }
        if ($request->hasFile('pdf1')) {
            $this->handleFileUpload($request, $test, 'pdf1', 'pdf1');
        }
        if ($request->hasFile('pdf2')) {
            $this->handleFileUpload($request, $test, 'pdf2', 'pdf2');
        }
        $test->update();
        return redirect()->route('admin.test.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);
        $test = Test::findOrFail($id);
        $test->deleted_by = admin()->id;
        $test->delete();
        return redirect()->route('admin.test.index');
    }
}

<?php

namespace App\Http\Controllers\Backend\Admin\StickerMangement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StickerTypeContoller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');

        // Define permissions for each method
        // $this->middleware('permission:sticker-type-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:sticker-type-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:sticker-type-edit', ['only' => ['edit', 'update', 'status']]);
        // $this->middleware('permission:sticker-type-delete', ['only' => ['destroy']]);
        // $this->middleware('permission:sticker-type-trash', ['only' => ['trash', 'restore']]);
        // $this->middleware('permission:sticker-type-restore', ['only' => ['restore']]);
        // $this->middleware('permission:sticker-type-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.admin.stickerMangement.stickerType.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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

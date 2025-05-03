<?php

namespace App\Http\Controllers\Backend\Admin\StickerMangement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StickerManagement\QuantityTierRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\QuantityTier;
use Illuminate\Http\Request;

class QuantityTierController extends Controller
{
    use FileManagementTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');

        // // Define permissions for each method
        // $this->middleware('permission:quantity-tier-list', ['only' => ['index', 'show']]);
        // $this->middleware('permission:quantity-tier-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:quantity-tier-edit', ['only' => ['edit', 'update', 'status']]);
        // $this->middleware('permission:quantity-tier-delete', ['only' => ['destroy']]);
        // $this->middleware('permission:quantity-tier-trash', ['only' => ['trash', 'restore']]);
        // $this->middleware('permission:quantity-tier-restore', ['only' => ['restore']]);
        // $this->middleware('permission:quantity-tier-force-delete', ['only' => ['forceDelete']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quantityTiers = QuantityTier::orderBy('sort_order')->paginate(10);
        return view('backend.admin.stickerMangement.quantityTier.index', compact('quantityTiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.stickerMangement.quantityTier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuantityTierRequest $request)
    {

        $data = $request->validated();
        $data['created_by'] = admin()->id;
        QuantityTier::create($data);
        session()->flash('success', 'Quantity Tier created successfully.');
        return redirect()->route('am.quantity-tier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $quantityTier = QuantityTier::findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.quantityTier.show', compact('quantityTier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $quantityTier = QuantityTier::findOrFail(decrypt($id));
        return view('backend.admin.stickerMangement.quantityTier.edit', compact('quantityTier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuantityTierRequest $request, string $id)
    {
        $quantityTier=QuantityTier::findOrFail(decrypt($id));
        $data = $request->validated();
        $data['updated_by'] = admin()->id;
        $quantityTier->update($data);
        session()->flash('success', 'Quantity Tier Updated successfully.');
        return redirect()->route('am.quantity-tier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quantityTier = QuantityTier::findOrFail(decrypt($id));
        $quantityTier->delete();
        session()->flash('success', 'Quantity Tier deleted successfully.');
        return redirect()->route('am.quantity-tier.index');
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

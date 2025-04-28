<?php

namespace App\Http\Controllers\Backend\Admin\SiteSetting;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SiteSettingRequest;
use App\Http\Traits\FileManagementTrait;

class SiteSettingController extends Controller
{
    use FileManagementTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $site_setting = SiteSetting::first();
        return view('backend.admin.siteSetting.index', compact('site_setting'));
    }

    public function store(Request $request)
    {
        $site_setting = new SiteSetting();

        $site_setting->title = $request->title;
        $site_setting->description = $request->description;
        $site_setting->keywords = $request->keywords;
        $site_setting->address = $request->address;
        $site_setting->phone = $request->phone;
        $site_setting->email = $request->email;
        $site_setting->facebook = $request->facebook;
        $site_setting->twitter = $request->twitter;
        $site_setting->instagram = $request->instagram;
        $site_setting->youtube = $request->youtube;
        $site_setting->linkedin = $request->linkedin;
        $site_setting->created_by = admin()->id;

        // Handle file uploads for each specific field
        if ($request->hasFile('logo')) {
            $this->handleFileUpload($request, $site_setting, 'logo', 'logo');
        }
        if ($request->hasFile('favicon')) {
            $this->handleFileUpload($request, $site_setting, 'favicon', 'favicon');
        }

        $site_setting->save();

        session()->flash('success', 'Site Setting Updated Successfully');
        return redirect()->route('settings.index');
    }

    public function update(Request $request, string $id)
    {
        $site_setting = SiteSetting::findOrFail(decrypt($id));

        $site_setting->title = $request->title;
        $site_setting->description = $request->description;
        $site_setting->keywords = $request->keywords;
        $site_setting->address = $request->address;
        $site_setting->phone = $request->phone;
        $site_setting->email = $request->email;
        $site_setting->facebook = $request->facebook;
        $site_setting->twitter = $request->twitter;
        $site_setting->instagram = $request->instagram;
        $site_setting->youtube = $request->youtube;
        $site_setting->linkedin = $request->linkedin;
        $site_setting->updated_by = admin()->id;

        // Handle file uploads for each specific field
        if ($request->hasFile('logo')) {
            $this->handleFileUpload($request, $site_setting, 'logo', 'logo');
        }
        if ($request->hasFile('favicon')) {
            $this->handleFileUpload($request, $site_setting, 'favicon', 'favicon');
        }

        $site_setting->update();

        session()->flash('success', 'Site Setting Updated Successfully');
        return redirect()->route('settings.index');
    }
}

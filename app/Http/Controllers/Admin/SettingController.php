<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;

class SettingController extends Controller
{
    use PhotoTrait;
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(SettingUpdateRequest $request)
    {
        $settings = Setting::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->hasFile('logo')) {
            $oldLogoPath = public_path('assets/uploads/admins/settings/images') . $settings->logo;

            if (file_exists($oldLogoPath)) {
                unlink($oldLogoPath);
            }

            $logoImage = $request->file('logo');
            $logoName = $this->saveImage($logoImage, 'assets/uploads/admins/settings/images', 'logo');

            $inputs['logo'] = $logoName;
        }


        if ($settings->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
} 
// end class

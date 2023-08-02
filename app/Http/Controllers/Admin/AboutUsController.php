<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsUpdateRequest;
use App\Models\AboutUs;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    use PhotoTrait;
    public function index()
    {
        $about_us = AboutUs::first();
        return view('admin.about_us.index', compact('about_us'));
    }

    public function update(AboutUsUpdateRequest $request)
    {
        $about_us = AboutUs::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->has('images')) {
            if (file_exists(public_path('assets/uploads/admins/about_us/images') . $about_us->images)) {
                unlink(public_path('assets/uploads/admins/about_us/images') . $about_us->images);
            }

            $images = [];

            foreach ($request->file('images') as $image) {
                $imageName = $this->saveImage($image, 'assets/uploads/admins/about_us/images', 'photo');
                $images[] = $imageName;
            }

            $inputs['images'] = json_encode($images);
        }

        if ($about_us->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
} // end class

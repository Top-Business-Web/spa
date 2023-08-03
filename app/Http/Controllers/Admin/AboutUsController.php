<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsUpdateRequest;

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
        $inputs = $this->prepareInputs($request);

        if ($this->hasNewImages($request)) {
            $this->deleteOldImages($about_us);
            $images = $this->uploadNewImages($request);
            $inputs['images'] = $images;
        }

        if ($about_us->update($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    protected function prepareInputs(AboutUsUpdateRequest $request): array
    {
        return $request->all();
    }

    protected function hasNewImages(AboutUsUpdateRequest $request): bool
    {
        return $request->has('images');
    }

    protected function deleteOldImages(AboutUs $about_us): void
    {
        foreach ($about_us->images as $image) {
            $imagePath = public_path('assets/uploads/admins/about_us/images') . $image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    protected function uploadNewImages(AboutUsUpdateRequest $request): array
    {
        $images = [];
        foreach ($request->file('images') as $image) {
            $imageName = $this->saveImage($image, 'assets/uploads/admins/about_us/images', 'photo');
            $images[] = $imageName;
        }
        return $images;
    }

    protected function saveImage(UploadedFile $image, string $path, string $filename): string
    {
        $extension = $image->getClientOriginalExtension();
        $imageName = $filename . '_' . time() . '.' . $extension;
        $image->move(public_path($path), $imageName);
        return $imageName;
    }
} // end class

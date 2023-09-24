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

        // Prepare the inputs directly here
        $inputs = $request->all();

        if($request->has('top_image')){
            $inputs['top_image'] = $this->saveImage($request->top_image,'uploads/about_us', 'image');
        }

        if ($request->hasFile('images')) {
            $this->deleteOldImages($about_us);
            $images = $this->uploadNewImages($request);
            $inputs['images'] = $images; // Save the image paths instead of image names
        }

        if ($about_us->update($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    protected function deleteOldImages(AboutUs $about_us): void
    {
        foreach ($about_us->images as $image) {
            $imagePath = public_path($image);
            if (file_exists($imagePath)) {
                // Add a delay before attempting to delete the file
                sleep(1);
                unlink($imagePath);
            }
        }
    }

    protected function uploadNewImages(AboutUsUpdateRequest $request): array
    {
        $images = [];
        foreach ($request->file('images') as $index => $image) {
            $imagePath = $this->saveImage($image, 'uploads/admins/about_us', 'photo_' . $index);
            $images[] = $imagePath; // Save the image path instead of image name
        }
        return $images;
    }

    protected function saveImage(UploadedFile $image, string $path, string $filename): string
    {
        $extension = $image->getClientOriginalExtension();
        $imageName = $filename . '.' . $extension;
        $image->move(public_path($path), $imageName);
        return $path . '/' . $imageName; // Return the full image path
    }
} // end class

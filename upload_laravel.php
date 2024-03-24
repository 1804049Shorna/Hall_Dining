<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Assuming you have an Image model
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'my_image' => 'required|file|mimes:jpg,jpeg,png|max:125000', // Validate file type and size
        ]);

        $image = $request->file('my_image');
        $newImageName = uniqid("IMG-", true).'.'.$image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $newImageName, 'public');

        $imageModel = new Image;
        $imageModel->image_url = $newImageName;
        $imageModel->image_name = $image->getClientOriginalName();
        $imageModel->save();

        return redirect('view')->with('success', 'Image uploaded successfully');
    }
}
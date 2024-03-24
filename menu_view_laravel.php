<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Assuming you have an Image model

class ImageViewController extends Controller
{
    public function index()
    {
        $images = Image::orderBy('SerialNo', 'desc')->get();
        return view('view', compact('images'));
    }
}
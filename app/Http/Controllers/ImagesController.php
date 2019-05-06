<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function storeFile()
    {
        $product = Product::all();
        return view('image.create', compact('product'));
    }
    // upload nhieu image
    public function createFile(Request $request)
    {

        if ($request->hasFile('file')) {
            $images = $request->file;
            foreach ($images as $image) {
                $imageDetail = new Image();
                $imageDetail->product_id = $request->input('product_id');
                $path = $image->store('upload', 'public');
                $imageDetail->image = $path;
                $imageDetail->save();
            }
        }
        return redirect()->route('admin.list');
    }
}

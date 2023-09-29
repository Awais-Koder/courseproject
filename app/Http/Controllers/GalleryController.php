<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // user side index
    public function Userindex()
    {
        $images = Gallery::paginate(50);
        return view('home.gallery.index', compact('images'));
    }
    public function index()
    {
        $images = Gallery::paginate(30);
        return view('Admin.gallery.index', compact('images'));
    }
    public function store(Request  $request)
    {
        $request->validate([
            'image.*' => 'required|image',
        ]);
        $images = $request->file('image');
        foreach ($images as $image) {
            $path = $image->store('gallery', 'public');
            Gallery::create(['image' => $path]);
        }
        return redirect()->back();
    }
    public function show($id)
    {
    $image = Gallery::find($id);
    return view('Admin.gallery.show' , compact('image'));
    }
    public function delete($id)
    {
        $image = Gallery::find($id);
        if ($image->image) {
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
        return redirect()->back();
    }
}

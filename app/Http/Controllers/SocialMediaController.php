<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialMediaController extends Controller
{
    public function index()
    {
       return view('Admin.socialMedia.index');
    }
    public function show()
    {
        return view('Admin.socialMedia.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'link' =>'required',
            'image' =>'required|image',
        ]);
        $input = $request->all();
        $input['image'] = $request->file('image')->store('social' , 'public');
        Media::create($input);
        return redirect()->back();
    }
    public function delete($id)
    {
       $link =  Media::find($id);
       if($link->image){
        Storage::disk('public')->delete($link->image);
       }
       $link->delete();
       return redirect()->back();
    }
}

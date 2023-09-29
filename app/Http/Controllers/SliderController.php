<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('Admin.slider.view', compact('sliders'));
    }
    public function create()
    {
        return view('Admin.slider.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        $input = $request->all();
        $input['image'] = $request->file('image')->store('slider', 'public');
        Slider::create($input);
        return redirect()->back();
    }
    public function edit($id)
    {
        $slider  = Slider::find($id);
        return view('Admin.slider.edit', compact('slider'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        $slider  = Slider::find($id);
        if ($request->hasFile('image')) {
            if ($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }
            $slider->image = $request->file('image')->store('slider', 'public');
        }
        $slider->update($request->except('image'));
        return redirect()->back();
    }
    public function delete($id)
    {
        $slider  = Slider::find($id);
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();
        return redirect()->back();
    }
}

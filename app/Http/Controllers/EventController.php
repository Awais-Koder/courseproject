<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(15);
        return view('Admin.events.index' , compact('events'));
    }
    public function create(){
        return view('Admin.events.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image',
        ]);
        $input = $request->all();
        $input['image'] = $request->file('image')->store('event' , 'public');
        Event::create($input);
        return redirect()->back();
    }
    public function edit($id){
        $event = Event::find($id);
        return view('Admin.events.edit' , compact('event'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'image',
        ]);
        $event = Event::find($id);
        if($request->hasFile('image')){
            Storage::disk('public')->delete($event->image);
        }
        $event->image = $request->file('image')->store('event' , 'public');
        $event->update($request->except('image'));
        return redirect()->back();
    }
    public function delete($id)
    {
        $event = Event::find($id);
        if($event->image){
            Storage::disk('public')->delete($event->image);
        }
        $event->delete();
        return redirect()->back();
    }
}
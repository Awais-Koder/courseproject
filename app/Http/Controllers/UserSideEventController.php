<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class UserSideEventController extends Controller
{
    public function index(){
        $events = Event::paginate(16);
        return view('home.events.index', compact('events'));
    }
    public function show($id){
        $decoedId = base64_decode($id);
        $r_event = Event::find($decoedId);
        $randomEvents = Event::inRandomOrder()->take(5)->get();
        return view('home.events.event-details' , compact('r_event', 'randomEvents'));
    }
}

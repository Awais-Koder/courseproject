<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Slider;
use App\Models\Event;
use App\Models\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $images = Gallery::paginate(50);
        $courses = Course::take(6)->get(['name', 'image', 'id', 'details']);
        $sliders = Slider::all();
        $events = Event::take(6)->get(['name', 'image', 'id']);
        return view('index', compact('sliders', 'courses', 'events' , 'images'));
    }
}

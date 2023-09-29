@extends('layouts.app')

@section('content')
    

<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>All <span>Courses</span></h2>
                <p>"Welcome to Adepts institute! Explore a transformative learning journey with our dynamic online course. Dive into engaging modules, interactive discussions, and expert-led instruction that will empower you. Join our community of learners and unlock your potential today!"</p>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-md-6">
                <div class="home-top-cour">
                    <!--POPULAR COURSES IMAGE-->
                    <div class="col-md-3"> <img src="{{Storage::url($course->image)}}" alt=""> </div>
                    <!--POPULAR COURSES: CONTENT-->
                    <div class="col-md-9 home-top-cour-desc">
                        <a href="/course/details/{{base64_encode($course->id)}}">
                            <h3>{{$course->name}}</h3>
                        </a>
                        <p>{!!Str::limit($course->details , 200)!!}</p> 
                        <div class="hom-list-share">
                            <ul>
                                <li><a href="/course/details/{{base64_encode($course->id)}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> View Details</a> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('home.footer-files')
@endsection
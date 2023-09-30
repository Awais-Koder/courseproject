@extends('layouts.app')

@section('content')

<section>
    <div class="container com-sp pad-bot-70 pg-inn">
        <div class="row">
            <div class="cor">
                <div class="col-md-3">
                    <div class="cor-side-com">
                        <div class="">
                            <div class="de-left-tit">
                                <h4>More Courses</h4>
                            </div>
                        </div>
                        <div class="ho-event">
                            <ul>
                                @foreach ($randomCourses as $course)
                                <li>
                                    <div class="ho-ev-link ho-ev-link-full">
                                        <a href="/course/details/{{base64_encode($course->id)}}">
                                            <h4>{{$course->name}}</h4>
                                        </a>
                                        <div>{!! Str::limit($course->details , 100) !!}</div>
                                        <a href="/course/details/{{base64_encode($course->id)}}" class="btn"
                                            style="margin-top:10px">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View Details</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="" style="height: 300px">
                        <img src="{{Storage::url($r_course->image)}}" alt="" height="100%" style="border-radius: 2px">
                    </div>
                    <div class="cor-con-mid">
                        <div class="cor-p1">
                            <h3>Name:</h3>
                            <p>{{$r_course->name}}</p>
                        </div>
                        <div class="cor-p4">
                            <h3>Course Details:</h3>
                            <p>{!!$r_course->details!!}</p>
                        </div>
                        <div class="hom-list-share">
                            <ul>
                                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal1"><i
                                            class="fa fa-bar-chart"></i> Enroll Now</a> </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="modal1" class="modal fade in" role="dialog">
    <div class="log-in-pop">
        <div class="log-in-pop-left">
            <h1>Hello...</h1>
            <p>"Welcome to Adepts institute! Explore a transformative learning journey with our dynamic online course.
                Dive into engaging modules, interactive discussions, and expert-led instruction that will empower you.
                Join our community of learners and unlock your potential today!"</p>
        </div>
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal"><img src="assets/images/cancel.png" alt="">
            </a>
            <h4>Enroll Now!</h4>
            <p>"Welcome to Adepts institute! Explore a transformative learning journey with our dynamic online course.
                Dive into engaging modules, interactive discussions, and expert-led instruction that will empower you.
                Join our community of learners and unlock your potential today!"</p>
            <form class="s12" action="register/course/{{base64_encode($r_course->id)}}" method="POST">
                @csrf
                <div>
                    <div class="input-field s12">
                        <input type="text" data-ng-model="name" class="validate" name="email">
                        <label>Enter Your Email here...</label>
                    </div>
                </div>
                <div>
                </div>
                <div>
                    <div class="input-field s4">
                        <i class="waves-effect waves-light log-in-btn waves-input-wrapper" style=""><input type="submit"
                                value="Enroll Now" class="waves-button-input"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('home.social-media')
@include('home.footer-files')
@endsection
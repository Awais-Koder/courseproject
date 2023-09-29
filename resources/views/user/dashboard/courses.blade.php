@extends('layouts.app')

@section('content')
    <section>
        <style>
            .input-field label {
                position: relative;
            }
        </style>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="javascript:void(0)" class="pro-act">My Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn" style="margin: 10p 0px">
                <div class="col-md-12">
                    <div class="udb">
                        <div class="udb-sec udb-cour">
                            <h4><img src="assets/images/icon/db2.png" alt="">Selected Courses</h4>
                            @if(count($courses)>0)
                            <p>All the courses you have enrolled are listed here.</p>
                            <div class="sdb-cours">
                                <ul>
                                    @foreach ($courses as $course)
                                            <li style="margin-top: 15px">
                                                <a href="user/view/course/content/{{ base64_encode($course->id) }}">
                                                    <div class="list-mig-like-com com-mar-bot-30">
                                                        <div class="list-mig-lc-img">
                                                            <img src="{{ Storage::url($course->image) }}" alt="">
                                                        </div>
                                                        <div class="list-mig-lc-con">
                                                            <h5>{{ $course->name }}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                            @else
                            <p>No courses are approved yet.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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
                                <h4>More Events</h4>
                            </div>
                        </div>
                        <div class="ho-event">
                            <ul>
                                @foreach ($randomEvents as $event)
                                <li>
                                    <div class="ho-ev-link ho-ev-link-full">
                                        <a href="/event/details/{{base64_encode($event->id)}}">
                                            <h4>{{$event->name}}</h4>
                                        </a>
                                        <div>{!! Str::limit($event->details , 100) !!}</div>
                                        <a href="/event/details/{{base64_encode($event->id)}}" class="btn btn-sm "
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
                        <img src="{{Storage::url($r_event->image)}}" alt="" width="50%" style="border-radius: 2px" class="materialboxed">
                    </div>
                    <div class="cor-con-mid">
                        <div class="cor-p1">
                            <h3>Name:</h3>
                            <p>{{$r_event->name}}</p>
                        </div>
                        <div class="cor-p4">
                            <h3>Event Details:</h3>
                            <p>{!!$r_event->details!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('home.social-media')
@include('home.footer-files')
@endsection
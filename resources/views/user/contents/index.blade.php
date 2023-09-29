@extends('layouts.app')
@section('content')
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="cor-p4">
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>{{ $profile->name }}</h4>
                        </div>
                    </div>
                    <hr>
                    @if(count($profile->courses)>0)
                    @foreach ($profile->courses as $course)
                    @foreach ($course->manyLevels as $level)
                    <div class="row" style="display: flex;align-items: center">
                        <div class="col s8">
                            <p><b>{{ $level->name }}</b></p>
                        </div>
                        <div class="col s4" style="display: flex;justify-content: end">
                            @foreach ($level->tests as $test)
                                <a href="{!! $test->link !!}" class="btn btn-sm" style="margin-left: 1px;" target="_blank">Take Test</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    @foreach ($level->lessons as $lesson)
                    <div class="cor-p4">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li class="">
                                <div class="collapsible-header">{{$lesson->name}}</div>
                                <div class="collapsible-body cor-tim-tab"
                                    style="padding-top: 20px; margin-top: 0px; padding-bottom: 20px; margin-bottom: 0px; display: none;">
                                    @foreach ($lesson->content as $content)
                                        <p>{!! $content->name !!}</p>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                    @endforeach
                    @endforeach
                    @else
                    <p>Courses Are hidden by Admin..</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

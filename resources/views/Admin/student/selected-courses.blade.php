@extends('Admin.layouts.app')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="sb2-2-add-blog sb2-2-1">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>{{ $student->name }}</h4>
                            </div>
                        </div>
                        <hr>
                        @foreach ($student->courses as $course)
                        <div class="cor-p4">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li class="">
                                    <div class="collapsible-header" style="justify-content: space-between;align-items: center;display: flex">
                                        <div>
                                            {{$course->name}}
                                        </div>
                                        <div>
                                            <span for="">Status</span>
                                            <span for="">:</span>
                                            <span for="">{{$course->status}}</span>
                                        </div>
                                        <div>
                                            <span>update status: </span>
                                            <a href="/update/course/status/{{$course->id}}" style="text-decoration: underline">{{$course->status === 'shown' ? 'hide' : 'show'}}</a>
                                        </div>
                                    </div>
                                    <div class="collapsible-body cor-tim-tab"
                                        style="padding-top: 20px; margin-top: 0px; padding-bottom: 20px; margin-bottom: 0px; display: none;">
                                        @foreach ($course->manyLevels as $level)
                                        <div class="collapsible-header" style="justify-content: space-between;align-items: center;display: flex">
                                            <div>
                                                {{$level->name}}
                                            </div>
                                            <div>
                                                <span for="">Status</span>
                                                <span for="">:</span>
                                                <span for="">{{$level->status}}</span>
                                            </div>
                                            <div>
                                                <span>update status: </span>
                                                <a href="/update/level/status/{{$level->id}}" style="text-decoration: underline">{{$level->status === 'shown' ? 'hide' : 'show'}}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
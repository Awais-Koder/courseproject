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
                                    <h4>{{ $course->name }}</h4>
                                </div>
                            </div>
                            <hr>
                            @foreach ($course->manyLevels as $level)
                                <div style="display: flex;justify-content: space-between;align-items: center">
                                    <h3 style="margin-left: 20px;"><b>{{ $level->name }}</b></h3>
                                    {{-- for opening modal --}}
                                    <div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#modal{{ $level->id }}" class="btn btn-sm">create test</a>
                                        {{-- for listing all tests --}}
                                        <a href="level/tests/{{ $level->id }}" class="btn btn-sm">see tests</a>
                                    </div>
                                    <!-- Modal for creating test -->
                                    <div id="modal{{ $level->id }}" class="modal fade in" role="dialog" style="display: none;">
                                        <div class="log-in-pop">
                                            <div class="log-in-pop-right">
                                                <a href="javascript:void(0)" class="pop-close" data-dismiss="modal">
                                                    <img src="assets/images/cancel.png" alt="">
                                                </a>
                                                <form class="s12" action="/create/test/{{ $level->id }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{$course->id}}" name="course_id">
                                                    <div>
                                                        <div class="input-field s12">
                                                            <input type="text" data-ng-model="link" class="validate" name="link">
                                                            <label>Enter Your Test Link here...</label>
                                                        </div>
                                                        @error('link')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                    </div>
                                                    <div>
                                                        <div class="input-field s4">
                                                            <i class="waves-effect waves-light log-in-btn waves-input-wrapper" style=""><input
                                                                    type="submit" value="create test" class="waves-button-input"  autocomplete="off"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Structure -->
                                </div>
                                <hr>

                                @foreach ($level->lessons as $lesson)
                                    <div class="cor-p4">
                                        <ul class="collapsible" data-collapsible="accordion">
                                            <li class="">
                                                <div class="collapsible-header">{{ $lesson->name }}</div>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

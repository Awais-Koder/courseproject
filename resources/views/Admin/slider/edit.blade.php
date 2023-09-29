@extends('Admin.layouts.app')
@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Slider details</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="update/slider/{{$slider->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate" value="{{$slider->title}}" name="title">
                                    <label class="">Slider title</label>
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" class="validate" value="{{$slider->description}}"
                                        name="description">
                                    <label>Descriptio(max:2 lines)</label>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file" multiple="" name="image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Slider image">
                                    </div>
                                </div>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <h3 for="">Slider Image</h3>
                                <img src="{{Storage::url($slider->image)}}" alt="" style="width: 200px">
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">
                                        <input type="submit" class="waves-button-input" value="Submit"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@extends('Admin.layouts.app')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Home Page Slider</h4>
                    <p>All about students like name, student id, phone, email, country, city and more</p>
                </div>
                <div class="tab-inn">
                    <form method="POST" action="store/slider" enctype="multipart/form-data">
                        @csrf
                        <h4>create new slider</h4>
                        <div class="row ad-p-lr ad-mar-bot-20">
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="title" style="font-size: 15px">
                                <label class="" style="font-size: 15px">Title</label>
                                @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="input-field col s12">
                                <input type="text" value="" class="validate" name="description" style="font-size: 15px">
                                <label class="" style="font-size: 15px">Description</label>
                                @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span style="font-size: 15px">Image</span>
                                    <input type="file" multiple="" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Slider image" style="font-size: 15px">
                                </div>
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn waves-effect waves-light">
                                {{ __('Create slider') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('Admin.layouts.app')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Social Link</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="/store/icon" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="name" style="font-size: 15px">
                                <label class="" style="font-size: 15px">Name (Facebook, twitter)</label>
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="link" style="font-size: 15px">
                                <label class="" style="font-size: 15px">Add Link</label>
                                @error('link')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="file-field input-field col s12" style="margin-top: 15px">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <input type="file" multiple="" name="image">
                                </div>
                                
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="social icon"
                                        style="font-size: 15px">
                                </div>
                            </div>
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn waves-input-wrapper" style="font-size: 15px">
                                        <input type="submit" class="waves-button-input" value="Submit"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




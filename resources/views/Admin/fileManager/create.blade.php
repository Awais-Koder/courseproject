@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add File</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="/store/file" enctype="multipart/form-data">
                                @csrf
                                <div class="input-field col s12">
                                    <input type="text" class="validate" name="name" style="font-size: 15px">
                                    <label class="" style="font-size: 15px">File Name</label>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="file-field input-field col s12" style="margin-top: 15px">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file" multiple="" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="upload file"
                                            style="font-size: 15px">
                                    </div>
                                </div>
                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="file-field input-field col s12" style="margin: 15px 0px">
                                    <input type="checkbox" id="footer" class="filled-in" name="footer_file" value="true">
                                    <label for="footer" style="font-size: 15px">Keep file for footer?</label>
                                </div>
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

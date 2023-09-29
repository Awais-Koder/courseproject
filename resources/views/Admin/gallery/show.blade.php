@extends('Admin.layouts.app')

@section('content')
    <div id="modal" class="modal fade in" role="dialog" style="display: none;">
        <div class="log-in-pop">
            <div class="log-in-pop-right">
                <a href="javascript:void(0)" class="pop-close" data-dismiss="modal">
                    <img src="assets/images/cancel.png" alt="">
                </a>
                <form class="s12" action="store/image" method="POST" enctype="multipart/form-data">
                    Note:You can add 1 or multiple images at a time.
                    @csrf
                    <div class="file-field input-field col s12" style="margin-top: 15px">
                        <div class="btn admin-upload-btn">
                            <span>File</span>
                            <input type="file" multiple="" name="image[]">
                        </div>

                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="event image"
                                style="font-size: 15px">
                        </div>
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="waves-effect waves-light btn waves-input-wrapper" style="font-size: 15px">
                                <input type="submit" class="waves-button-input" value="Submit" style="padding: 0px"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{Storage::url($image->image)}}" alt="" class="materialboxed" width="90%">
                </div>
            </div>
        </div>
    </div>
@endsection

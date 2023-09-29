@extends('Admin.layouts.app')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Course</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="store/course" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="name" style="font-size: 15px">
                                <label class="" style="font-size: 15px">Course title</label>
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <label for="" class="list-enq-name">Course Details</label>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"
                                    style="font-size: 15px;padding:0px" name="details"></textarea>
                                {{-- <label style="font-size: 15px">Course Details</label> --}}
                                @error('details')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <!DOCTYPE html>
                            <html>

                            <head>
                                <script
                                    src="https://cdn.tiny.cloud/1/eoe3hgk632pcd6ls7hm49drdlf9gqie86gkagu39c3tetoo1/tinymce/6/tinymce.min.js"
                                    referrerpolicy="origin"></script>

                            </head>

                            <body>
                                <script>
                                    tinymce.init({
                                                selector: 'textarea',
                                                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                            });
                                </script>
                            </body>

                            </html>
                            <div class="file-field input-field col s12" style="margin-top: 15px">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <input type="file" multiple="" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="course image"
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




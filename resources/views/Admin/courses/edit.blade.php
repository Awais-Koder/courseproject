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
                                <h4>Edit Course</h4>
                            </div>
                        </div>
                        <hr>
                        <form action="update/content" method="POST">
                            <label>Course Name</label>
                            <input value="{{ $course->name }}" id="" name="course_name">
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            @error('course_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            @foreach ($course->manyLevels as $level)
                            <label>level Name</label>
                            <input value="{{ $level->name }}" name="level_name[]">
                            <input type="hidden" name="level_id[]" value="{{ $level->id }}">
                            @error('level_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @foreach ($level->lessons as $lesson)
                            @csrf
                            <div class="cor-p4">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li class="">
                                        <div class="collapsible-header">
                                            <label for="">lesson Name</label>
                                            <input type="text" value="{{ $lesson->name }}" name="lesson_name[]">
                                            <input type="hidden" name="lesson_id[]" value="{{ $lesson->id }}">
                                            @error('course_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="collapsible-body cor-tim-tab"
                                            style="padding-top: 20px; margin-top: 0px; padding-bottom: 20px; margin-bottom: 0px; display: none;">
                                            @foreach ($lesson->content as $content)
                                            <textarea name="content[]">{!! $content->name !!}</textarea>
                                            <input type="hidden" name="content_id[]" value="{{ $content->id }}">
                                            @error('content')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
                                                                        plugins: ' mentions anchor autolink charmap codesample emoticons link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                                                                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table mergetags | align lineheight  | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                                                    });
                                                </script>
                                            </body>
                                            </html>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            @endforeach
                            <button class="btn" style="margin-top: 10px">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
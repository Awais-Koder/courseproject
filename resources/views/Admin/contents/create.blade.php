@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add Course Contents</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="store/course/content" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @foreach ($course as $course)
                                        <input type="hidden" name="course_id" id="" value="{{ $course->id }}">
                                        <div class="input-field col s12">
                                            <span class="list-enq-name" style="display: inline">Course Name</span>:
                                            {{ $course->name }}
                                        </div>
                                        <hr>
                                        <div class="cor-p4">
                                            <ul class="collapsible" data-collapsible="accordion">
                                                <li class="collapsible-item">
                                                    <div class="collapsible-header">Add New Level</div>
                                                    <div class="collapsible-body cor-tim-tab">
                                                        <label class="" style="font-size: 15px">Enter Level
                                                            Name</label>
                                                        <input type="text" class="validate" name="level_name"
                                                            style="font-size: 15px">
                                                    </div>
                                                </li>
                                                @if (count($course->manyLevels) > 0)
                                                    <li class="collapsible-item">
                                                        <div class="collapsible-header">Existing Levels</div>
                                                        <div class="collapsible-body cor-tim-tab">
                                                            @foreach ($course->manyLevels as $level)
                                                                <input type="radio" id="level{{ $level->id }}"
                                                                    name="level_id" value="{{ $level->id }}">
                                                                <label style="font-size: 15px"
                                                                    for="level{{ $level->id }}">{{ $level->name }}</label>
                                                            @endforeach
                                                        </div>
                                                    </li>
                                                @endif
                                                @error('level_*')
                                                            <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </ul>
                                        </div>
                                    @endforeach
                                    <hr>
                                    <div class="input-field col s12">
                                        <span class="list-enq-name">Enter Lesson Name</span>
                                        <input type="text" class="validate" name="lesson_name" style="font-size: 15px">
                                        @error('lesson_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="input-field col s12">
                                        <span class="list-enq-name">Enter Content</span>
                                        <textarea id="textarea1" class="materialize-textarea" style="font-size: 15px;padding:0px" name="content">{{ old('name') }}</textarea>
                                    </div>
                                    <!DOCTYPE html>
                                    <html>

                                    <head>
                                        <script src="https://cdn.tiny.cloud/1/eoe3hgk632pcd6ls7hm49drdlf9gqie86gkagu39c3tetoo1/tinymce/6/tinymce.min.js"
                                            referrerpolicy="origin"></script>

                                    </head>

                                    <body>
                                        <script>
                                            tinymce.init({
                                                selector: 'textarea',
                                                plugins: 'mentions anchor autolink charmap codesample emoticons link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                                                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                            });
                                        </script>
                                    </body>

                                    </html>
                                    @error('content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="input-field col s12">
                                        <i class="waves-effect waves-light btn waves-input-wrapper" style="font-size: 15px">
                                            <input type="submit" class="waves-button-input" value="Submit"></i>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

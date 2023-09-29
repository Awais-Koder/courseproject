@extends('Admin.layouts.app')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Home Page Slider</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Slider image</th>
                                    <th>Slider Title</th>
                                    <th>Slider description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>1</td>
                                    <td><span class="list-img"><img src="{{Storage::url($slider->image)}}"
                                                alt="$slider->image"></span></td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{Str::limit($slider->description , 50)}}</td>
                                    <td><a href="edit/slider/{{$slider->id}}">
                                        <i class="fa fa-edit" style="color: blue;background:#fff"></i>
                                    </a></td>
                                    <td><a href="delete/slider/{{$slider->id}}"
                                            onclick="return confirm('Are you sure you want to delete this?')">
                                           <i class="fa fa-trash" style="color: red;background:#fff"></i>
                                        </a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
</div> --}}
@endsection
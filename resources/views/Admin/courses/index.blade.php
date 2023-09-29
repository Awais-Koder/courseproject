@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Course Details</h4>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Course Name</th>
                                            <th>Details</th>
                                            <th>Add content</th>
                                            <th>view content</th>
                                            <th style="width:300px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td><span class="list-img">
                                                        <img src="{{ Storage::url($course->image) }}" alt=""></span>
                                                </td>
                                                <td>
                                                    <span class="list-enq-name">{{ $course->name }}</span>
                                                </td>
                                                <td>{!! Str::limit($course->details, 40) !!}
                                                </td>
                                                <td>
                                                    <a href="add/course/content/{{$course->id}}"
                                                        style="cursor: pointer">
                                                        <i class="fa fa-plus" aria-hidden="true"
                                                            style="color:green;background:#fff;font-size: 15px"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="view/course/content/{{$course->id}}"
                                                        style="cursor: pointer">
                                                        <i class="fa fa-eye" aria-hidden="true"
                                                            style="color:yellow;background:#fff;font-size: 15px"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="edit/course/{{ $course->id }}">
                                                        <i class="fa fa-pencil" aria-hidden="true"
                                                            style="color:blue;background:#fff"></i>
                                                    </a>
                                                    <a href="delete/course/{{ $course->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this? This will delete all its related content')">
                                                        <i class="fa fa-trash" aria-hidden="true"
                                                            style="color:red;background:#fff"></i>
                                                    </a>
                                                </td>
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
    </div>
@endsection

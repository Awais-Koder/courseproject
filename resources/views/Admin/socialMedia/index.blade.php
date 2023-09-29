@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Events</h4>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th style="width:300px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse (App\services\CourseService::getLinks() as $key=>$link)
                                        <tr>
                                            <td>
                                                <span>{{$key+=1}}</span>
                                            </td>
                                            <td>
                                                <span class="list-img">
                                                    <img src="{{Storage::url($link->image)}}" alt="" width="50px">
                                                </span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">{{$link->name}}</span>
                                            </td>
                                            <td>
                                                <a href="{{$link->link}}" target="_blank">{{$link->name}}</a>
                                            </td>
                                            <td>
                                                <a href="delete/link/{{$link->id}}"
                                                    onclick="return confirm('Are you sure you want to delete this?')">
                                                    <i class="fa fa-trash" aria-hidden="true" style="color:red;background:#fff">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                            <h3 class="text-center">No records found</h3>
                                        @endforelse
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

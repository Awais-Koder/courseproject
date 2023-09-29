<!--== BODY INNER CONTAINER ==-->
@extends('Admin.layouts.app')
@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    @if(count($users) > 0)
                    <div class="inn-title" style="display: flex;width:100%;justify-content:space-between">
                        <h4>Searched Students</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Id</th>
                                        <th>Date of birth</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td><a href="javascript:void(0)"><span class="list-enq-name">{{$user->name}}</span><span
                                                    class="list-enq-city">{{$user->address}}</span></a>
                                        </td>
                                        <td>{{$user->telephone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->nationality}}</td>
                                        <td>{{$user->roll_no}}</td>
                                        <td>{{ $user->selected_date ?? 'null' }}</td>
                                        <td>
                                            <span class="label label-success">{{$user->status}}</span>
                                        </td>
                                        <td>
                                            <a href="view/details/{{$user->id}}">
                                                <i class="fa fa-eye" aria-hidden="true" style="color:blue;background:#fff"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="delete/student/{{$user->id}}" onclick="return confirm('Are you sure you want to delete this?')">
                                                <i class="fa fa-trash" aria-hidden="true" style="color:red;background:#fff"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                    <div class="inn-title" style="display: flex;width:100%;justify-content:space-between">
                        <h4>No results found..</h4>
                    </div>
                    @endif
                </div>
                
<div class="pg-pagina">
    <ul class="pagination">
        <!-- Previous Page Link -->
        @if ($users->onFirstPage())
            <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
        @else
            <li class=""><a href="{{ $users->previousPageUrl() }}"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></a></li>
        @endif

        <!-- Pagination Elements -->
        @for ($i = 1; $i <= $users->lastPage(); $i++)
            @if ($i == $users->currentPage())
                <li class=""><a href="{{ $users->url($i) }}">{{ $i }}</a></li>
            @else
                <li class=""><a href="{{ $users->url($i) }}">{{ $i }}</a></li>
            @endif
        @endfor

        <!-- Next Page Link -->
        @if ($users->hasMorePages())
            <li class=""><a href="{{ $users->nextPageUrl() }}"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></a></li>
        @else
            <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        @endif
    </ul>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
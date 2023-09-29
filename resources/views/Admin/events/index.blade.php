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
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Details</th>
                                            <th style="width:300px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($events as $event)
                                        <tr>
                                            <td><span class="list-img">
                                                    <img src="{{Storage::url($event->image)}}" alt=""></span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">{{$event->name}}</span>
                                            </td>
                                            <td>
                                                <p>{!!Str::limit($event->details , 100)!!}</p>
                                            </td>
                                            <td>
                                                <a href="edit/event/{{$event->id}}">
                                                    <i class="fa fa-pencil" aria-hidden="true"
                                                        style="color:blue;background:#fff"></i>
                                                </a>
                                                <a href="delete/event/{{$event->id}}"
                                                    onclick="return confirm('Are you sure you want to delete this?')">
                                                    <i class="fa fa-trash" aria-hidden="true"
                                                        style="color:red;background:#fff"></i>
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
            <div class="pg-pagina">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    @if ($events->onFirstPage())
                        <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @else
                        <li class=""><a href="{{ $events->previousPageUrl() }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @endif
            
                    <!-- Pagination Elements -->
                    @for ($i = 1; $i <= $events->lastPage(); $i++)
                        @if ($i == $events->currentPage())
                            <li class=""><a href="{{ $events->url($i) }}">{{ $i }}</a></li>
                        @else
                            <li class=""><a href="{{ $events->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
            
                    <!-- Next Page Link -->
                    @if ($events->hasMorePages())
                        <li class=""><a href="{{ $events->nextPageUrl() }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection

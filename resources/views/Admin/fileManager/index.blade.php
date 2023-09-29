@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Files</h4>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th style="width:300px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($files as $key=>$file)
                                        <tr>
                                            <td>
                                                <span class="list-enq-name"> {{$key+=1}} </span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">{{$file->name}}</span>
                                            </td>
                                            <td>
                                                <a href="{{Storage::url($file->file)}}">
                                                    <i class="fa fa-eye" aria-hidden="true"
                                                        style="color:dodgerblue;background:#fff"></i>
                                                </a>
                                                <a href="/delete/file/{{$file->id}}" onclick="return confirm('Are you sure you want to delete this?')">
                                                    <i class="fa fa-trash" aria-hidden="true" style="color:red;background:#fff"></i>
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
                    @if ($files->onFirstPage())
                        <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @else
                        <li class=""><a href="{{ $files->previousPageUrl() }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @endif
            
                    <!-- Pagination Elements -->
                    @for ($i = 1; $i <= $files->lastPage(); $i++)
                        @if ($i == $files->currentPage())
                            <li class=""><a href="{{ $files->url($i) }}">{{ $i }}</a></li>
                        @else
                            <li class=""><a href="{{ $files->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
            
                    <!-- Next Page Link -->
                    @if ($files->hasMorePages())
                        <li class=""><a href="{{ $files->nextPageUrl() }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection

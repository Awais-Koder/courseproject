@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Messages</h4>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>Countary</th>
                                            <th>Message</th>
                                            <th style="width:300px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $key=>$message)
                                            <tr>
                                                <td>
                                                    {{$key+=1}}
                                                </td>
                                                <td>
                                                    <span class="list-enq-name">{{ $message->name }}</span>
                                                </td>
                                                <td>{{ $message->phone ?? 'Null' }}
                                                </td>
                                                <td>{{ $message->city ?? 'Null' }}
                                                </td>
                                                <td>{{ $message->countary ?? 'Null' }}
                                                </td>
                                                <td>{{ Str::limit($message->message , 20) }}
                                                </td>
                                                <td>
                                                    <a href="view/message/{{ $message->id }}">
                                                        <i class="fa fa-eye" aria-hidden="true"
                                                            style="color:dodgerblue;background:#fff"></i>
                                                    </a>
                                                    <a href="delete/message/{{ $message->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this?')">
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
            <div class="pg-pagina">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    @if ($messages->onFirstPage())
                        <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @else
                        <li class=""><a href="{{ $messages->previousPageUrl() }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @endif
            
                    <!-- Pagination Elements -->
                    @for ($i = 1; $i <= $messages->lastPage(); $i++)
                        @if ($i == $messages->currentPage())
                            <li class=""><a href="{{ $messages->url($i) }}">{{ $i }}</a></li>
                        @else
                            <li class=""><a href="{{ $messages->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
            
                    <!-- Next Page Link -->
                    @if ($messages->hasMorePages())
                        <li class=""><a href="{{ $messages->nextPageUrl() }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection

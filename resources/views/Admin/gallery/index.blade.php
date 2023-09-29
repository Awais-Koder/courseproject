@extends('Admin.layouts.app')

@section('content')
    <div id="modal" class="modal fade in" role="dialog" style="display: none;">
        <div class="log-in-pop">
            <div class="log-in-pop-right">
                <a href="javascript:void(0)" class="pop-close" data-dismiss="modal">
                    <img src="assets/images/cancel.png" alt="">
                </a>
                <form class="s12" action="store/image" method="POST" enctype="multipart/form-data">
                    Note:You can add 1 or multiple images at a time.
                    @csrf
                    <div class="file-field input-field col s12" style="margin-top: 15px">
                        <div class="btn admin-upload-btn">
                            <span>File</span>
                            <input type="file" multiple="" name="image[]">
                        </div>

                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="event image"
                                style="font-size: 15px">
                        </div>
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="waves-effect waves-light btn waves-input-wrapper" style="font-size: 15px">
                                <input type="submit" class="waves-button-input" value="Submit" style="padding: 0px"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal" class="btn btn-sm red"
                        style="margin: 10px 0px">Upload Image</a>
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>images</h4>
                        </div>

                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Image</th>
                                            <th style="width:300px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($images as $key=> $image)
                                            <tr>
                                                <td>
                                                    {{$key+=1}}
                                                </td>
                                                <td><span class="list-img">
                                                        <img src="{{ Storage::url($image->image) }}" alt=""></span>
                                                </td>
                                                <td>
                                                    <a href="delete/image/{{ $image->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this?')">
                                                        <i class="fa fa-trash" aria-hidden="true"
                                                            style="color:red;background:#fff"></i>
                                                    </a>
                                                    <a href="view/image/{{ $image->id }}">
                                                        <i class="fa fa-eye" aria-hidden="true"
                                                            style="color:blue;background:#fff"></i>
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
                    @if ($images->onFirstPage())
                        <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @else
                        <li class=""><a href="{{ $images->previousPageUrl() }}"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i></a></li>
                    @endif

                    <!-- Pagination Elements -->
                    @for ($i = 1; $i <= $images->lastPage(); $i++)
                        @if ($i == $images->currentPage())
                            <li class=""><a href="{{ $images->url($i) }}">{{ $i }}</a></li>
                        @else
                            <li class=""><a href="{{ $images->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor

                    <!-- Next Page Link -->
                    @if ($images->hasMorePages())
                        <li class=""><a href="{{ $images->nextPageUrl() }}"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection

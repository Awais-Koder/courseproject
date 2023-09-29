@extends('layouts.app')

@section('content')
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            @include('home.gallery')
            <div class="pg-pagina">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    @if ($images->onFirstPage())
                        <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @else
                        <li class=""><a href="{{ $images->previousPageUrl() }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
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
                        <li class=""><a href="{{ $images->nextPageUrl() }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </section>
    
@include('home.footer-files')
@endsection


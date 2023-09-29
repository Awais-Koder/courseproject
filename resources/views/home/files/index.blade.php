@extends('layouts.app')

@section('content')
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="con-title">
                    <h2><span>Files</span></h2>
                    <p>Here you can check and download the files.</p>
                </div>
                <ul style="display: flex;flex-wrap: wrap;">
                    @forelse(App\services\CourseService::getFiles() as $file)
                        <li style="margin: 10px;">
                            <a href="{{ Storage::url($file->file) }}" target="_blank">{{ $file->name }}</a>
                        </li>
                    @empty
                        <li style="margin: 10px;">
                            <p>No files found..</p>
                        </li>
                    @endforelse
                </ul>
            </div>
            <div class="pg-pagina">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    @if ($files->onFirstPage())
                        <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    @else
                        <li class=""><a href="{{ $files->previousPageUrl() }}"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i></a></li>
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
                        <li class=""><a href="{{ $files->nextPageUrl() }}"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>

        </div>
    </section>
@endsection

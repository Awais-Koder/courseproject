@extends('layouts.app')

@section('content')
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="con-title">
                    <h2>Our <span>Events</span></h2>
                    <p>Explore our exciting events! Join us for a variety of engaging activities, workshops, and sessions designed to inspire, educate, and entertain. From guest speakers to interactive discussions and networking opportunities, there's something for everyone. Stay tuned for upcoming events, and be sure to register to secure your spot.</p>
                </div>
                @forelse ($events as $event)
                <div class="cor">
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{Storage::url($event->image)}}" class="materialboxed">
                                <span class="card-title">{{$event->name}}</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red" href="event/details/{{base64_encode($event->id)}}"><i
                                        class="material-icons">more_vert</i></a>
                            </div>
                            <div class="card-content">
                                <a href="event/details/{{base64_encode($event->id)}}">
                                <p>{!! Str::limit($event->details ,100 )!!}</p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <h3 class="text-center">No events Found..</h3>
                @endforelse             
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
    </section>
    @include('home.footer-files')
@endsection
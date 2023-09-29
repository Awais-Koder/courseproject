<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Our <span>Events</span></h2>
                <p>Explore a retrospective of past events at Adepts Institute. Dive into a visual journey capturing the excitement, learning, and camaraderie that characterized these memorable occasions. Our events archive showcases the institute's commitment to fostering a dynamic and engaging environment for our community. Join us in reliving the vibrant moments and experiences from our past events.</p>
            </div>
        </div>
        <div class="row">
            <div class="ed-course">
                @forelse ($events as $event)
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="event/details/{{base64_encode($event->id)}}">
                                <img src="{{Storage::url($event->image)}}" alt="">
                                <span>{{$event->name}}</span>
                            </a>
                        </div>
                    </div>
                    @empty
                    <h3 class="text-center">No events found..</h3>
                @endforelse
            </div>
        </div>
    </div>
</section>

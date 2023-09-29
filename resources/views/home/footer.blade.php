<section class="wed-hom-footer">
    <div class="container">
        <div class="row wed-foot-link">
            <div class="col-md-6">
                <h4>Our Courses</h4>
                <ul>
                    @forelse (App\services\CourseService::getCourses() as $course)
                    <li><a href="/course/details/{{base64_encode($course->id)}}">{{$course->name}}</a></li>
                    @empty
                        <p class="text-center">No items found.</p>
                    @endforelse
                </ul>
            </div>
            <div class="col-md-6">
                <h4>HELP & SUPPORT</h4>
                <ul>
                    <li><a href="#">24x7 Live help</a>
                    </li>
                    <li><a href="#">Contact us</a>
                    </li>
                    <li><a href="#">Feedback</a>
                    </li>
                    <li><a href="#">FAQs</a>
                    </li>
                    <li><a href="#">Safety Tips</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row wed-foot-link-1">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>Get In Touch</h4>
                @forelse (App\services\CourseService::getAddress() as $address)
                <p>Address: {{$address->address}}</p>
                <p>Phone: <a href="tel:{{$address->phone}}">{{$address->phone}}</a></p>
                <p>Email: <a href="mailto:{{$address->email}}">{{$address->email}}</a></p>
                @empty
                    <p class="text-center">No items found.</p>
                @endforelse
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h4>SOCIAL MEDIA</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
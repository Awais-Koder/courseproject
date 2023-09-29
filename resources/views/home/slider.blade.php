<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @if(count($sliders) > 0)
            @foreach ($sliders as $key=>$slider)
            <div class="item slider1 @if($key==0) active @endif">
                <img src="{{Storage::url($slider->image)}}" alt="" style="height: 600px">
                <div class="carousel-caption slider-con">
                    <h2>{{$slider->title}}</h2>
                    <p>{{$slider->description}}</p>
                    <a href="show/courses" class="bann-btn-1">All Courses</a>
                    <a href="register/user" class="bann-btn-2">Admission</a>
                </div>
            </div>
            @endforeach
            @else
            <div class="item active">
                <img src="assets/images/slider/2.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Dummy Text</h2>
                    <p>This is dummy text go to admin pannel to set the slider</p>
                    <a href="show/courses" class="bann-btn-1">All Courses</a>
                    <a href="register/user" class="bann-btn-2">Admission</a>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/slider/1.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Dummy Text</h2>
                    <p>This is dummy text go to admin pannel to set the slider</p>
                    <a href="show/courses" class="bann-btn-1">All Courses</a>
                    <a href="register/user" class="bann-btn-2">Admission</a>
                </div>
            </div>
            @endif
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
</section>
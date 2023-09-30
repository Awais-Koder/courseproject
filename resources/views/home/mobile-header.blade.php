<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo" style="padding-bottom: 10px">
                    <a href="/"><img src="assets/images/icon.png" alt="" style="width: 40px" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="javascript:void(0)" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <ul>
                            <li ><a href="/" class="{{Request::is('/') ? 'active' : ''}}">Home</a>
                            </li>
                            <li><a href="/gallery" class="{{Request::is('gallery') ? 'active' : ''}}">Gallery</a></li>
                            <li>
                                <a href="/show/courses" class="{{Request::is('show/courses') ? 'active' : ''}}">Courses</a>
                            </li>
                            <li><a href="/files" class="{{Request::is('files') ? 'active' : ''}}">files</a></li>
                            <li><a href="/events/show/" class="{{Request::is('events/show') ? 'active' : ''}}">Events</a></li>
                            <li><a href="/check/certificate" class="{{Request::is('check/certificate') ? 'active' : ''}}">check validity</a></li>
                            <li><a href="/register/user" class="{{Request::is('register/user') ? 'active' : ''}}">Register</a></li>
                            <li><a href="/user/dashboard" class="{{Request::is('user/dashboard') ? 'active' : ''}}">Dashboard</a></li>
                            <li><a href="/about/us" class="{{Request::is('about/us') ? 'active' : ''}}">About us</a></li>
                            <li><a href="/contact/us" class="{{Request::is('contact/us') ? 'active' : ''}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
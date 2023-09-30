<section>
    <style>
        .active{
            color: #e66030 !important;
        }
    </style>
    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo" style="padding-bottom: 10px">
                        <a href="/"><img src="assets/images/icon.png" alt="" style="width: 50px" />
                        </a>
                    </div>
                    <div class="main-menu">
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
                <div class="all-drop-down-menu">
                </div>
            </div>
        </div>
    </div>
    @if (Request::has('/'))
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            @for ($i = 1; $i <= 10; $i++)
                                                <li>
                                                    <a href="course-details.html">Course {{ $i }}</a>
                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
{{-- javascript --}}
{{--
<script>
    var profileBtn = document.getElementById('navbarDropdownMenuLink');
    var profileDropdown = document.getElementById('profileDropdown');
    var isDropdownVisible = false;

    profileBtn.addEventListener('click', function(e) {
        e.preventDefault();

        if (!isDropdownVisible) {
            profileDropdown.style.display = 'flex';
        } else {
            profileDropdown.style.display = 'none';
        }

        isDropdownVisible = !isDropdownVisible;
    });
</script> --}}

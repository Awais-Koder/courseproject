<div class="container-fluid sb2" style="">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="assets/images/placeholder.jpg" alt="">
                    </li>
                    <li>
                        <h5>{{ Auth::user()->name }}</h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <a href="javascript:void(0)" class="collapsible-header">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>Students</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li>
                                    <a href="/approved/students">Approved students</a>
                                </li>
                                <li>
                                    <a href="/proficiency/test/students">Proficiency test students</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/issue/certificate">
                            <i class="fa fa-cogs" aria-hidden="true"></i> 
                            Issue Certificate
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="collapsible-header">
                            <i class="fa fa-book" aria-hidden="true"></i> All Courses</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="view/courses">All Course</a>
                                </li>
                                <li><a href="create/course">Add New Course</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header">
                            <i class="fa fa-bookmark-o" aria-hidden="true"></i>Events</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="/event/show">Add Event</a>
                                </li>
                                <li><a href="/all/events">All Events</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file"
                                aria-hidden="true"></i> File Manager</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="get/all/files">All Files</a>
                                </li>
                                <li><a href="create/new/file">Create New File</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bars"
                                aria-hidden="true"></i> Gallery</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="all/images">View Images</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image"
                                aria-hidden="true"></i> Slider</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="view/slider">View slider</a></li>
                                <li><a href="create/slider">create slider</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-home"
                                aria-hidden="true"></i> Address</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="/show/address">view address</a>
                                </li>
                                <li><a href="create/address">Create New Address</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

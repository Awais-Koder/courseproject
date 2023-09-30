<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="/admin/dashboard" class="logo"><img src="assets/images/icon.png" alt="" style="width:40px;margin-top:13px;border-radius:50%">
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">
            <form class="app-search" action="search/students" id="searchForm">
                <input type="text" placeholder="Search students by name, email, and phone number..." class="form-control" style="font-size: 15px" name="query">
                <a href="#!" onclick="document.getElementById('searchForm').submit(); return false;"><i class="fa fa-search"></i></a>
            </form>
        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">
            <div class="top-not-cen">
                <a class="waves-effect btn-noti" href="/messages" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i></a>
            </div>
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class="waves-effect dropdown-button top-user-pro" href="#!" data-activates="top-menu">
                <img src="assets/images/user/6.png" alt="">My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul id="top-menu" class="dropdown-content top-menu-sty" style="">
                <li><a href="/admin/account" class="waves-effect"><i class="fa fa-cogs"
                            aria-hidden="true"></i>Admin Setting</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     Logout
                 </a>
                 
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                 
                </li>
            </ul>

            <!-- Dropdown Structure -->

        </div>
    </div>
</div>
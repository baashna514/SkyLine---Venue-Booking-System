<div class="dashboard-nav dashboard--nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-wrapper">
                    <div class="logo mr-5">
                        <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('images/Home/sky-logo-header.png') }}" alt="logo" style="width: 150px;"></a>
                        <div class="menu-toggler">
                            <i class="la la-bars"></i>
                            <i class="la la-times"></i>
                        </div><!-- end menu-toggler -->
                        <div class="user-menu-open">
                            <i class="la la-user"></i>
                        </div><!-- end user-menu-open -->
                    </div>
                    <div class="dashboard-search-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="form-group mb-0">
                                    <input class="form-control" type="text" name="text" placeholder="Search">
                                    <button class="search-btn"><i class="la la-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="nav-btn ml-auto">
                        <div class="notification-wrap d-flex align-items-center">
                            <div class="notification-item">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="{{ asset('admin/images/team8.jpg') }}" alt="team-img"></div>
                                            <span class="font-size-14 font-weight-bold">Super Admin</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                        <div class="dropdown-item drop-reveal-header user-reveal-header">
                                            <h6 class="title text-uppercase">Welcome!</h6>
                                        </div>
                                        <div class="list-group drop-reveal-list user-drop-reveal-list">
{{--                                            <a href="admin-dashboard-settings.html" class="list-group-item list-group-item-action">--}}
{{--                                                <div class="msg-body">--}}
{{--                                                    <div class="msg-content">--}}
{{--                                                        <h3 class="title"><i class="la la-user mr-2"></i> Edit Profile</h3>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- end msg-body -->--}}
{{--                                            </a>--}}
                                            <div class="section-block"></div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                            </form>
                                        </div>
                                    </div><!-- end dropdown-menu -->
                                </div>
                            </div><!-- end notification-item -->
                        </div>
                    </div><!-- end nav-btn -->
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</div><!-- end dashboard-nav -->

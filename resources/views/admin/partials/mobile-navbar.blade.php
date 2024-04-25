<div class="user-canvas-nav">
    <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">
                    Account
                </a>
            </li>
        </ul>
    </div><!-- end section-tab -->
</div>
<div class="user-canvas-nav-content">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <div class="user-action-wrap user-sidebar-panel">
                <div class="notification-item">
                    <a href="user-dashboard-profile.html" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="{{ asset('admin/images/team8.jpg') }}" alt="team-img"></div>
                            <span class="font-size-14 font-weight-bold">Super Admin</span>
                        </div>
                    </a>
                    <div class="list-group drop-reveal-list user-drop-reveal-list">
                        <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                            <div class="msg-body">
                                <div class="msg-content">
                                    <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                </div>
                            </div><!-- end msg-body -->
                        </a>
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
                </div><!-- end notification-item -->
            </div>
        </div>
    </div>
</div>

<div class="topbar">
    <!-- Start row -->
    <div class="row align-items-center">
        <!-- Start col -->
        <div class="col-md-12 align-self-center">
            <div class="togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void();">
                                <img src="{{ asset('admin/assets/images/svg-icon/collapse.svg') }}"
                                    class="img-fluid menu-hamburger-collapse" alt="collapse">
                                <img src="{{ asset('admin/assets/images/svg-icon/close.svg') }}"
                                    class="img-fluid menu-hamburger-close" alt="close">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="searchbar">
                            <form>

                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="infobar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="settingbar">
                            <a href="{{ url('/') }}" class="infobar-icon">
                                <img src="{{ asset('admin/assets/images/svg-icon/settings.svg') }}"
                                    class="img-fluid" alt="settings">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="notifybar">
                            <div class="dropdown">
                                <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ asset('admin/assets/images/svg-icon/notifications.svg') }}"
                                        class="img-fluid" alt="notifications">
                                    <span class="live-icon"></span></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                    <div class="notification-dropdown-title">
                                        <h4>Notifications</h4>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-primary-inverse"><i
                                                    class="feather icon-dollar-sign"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">$135 received</h5>
                                                <p><span class="timing">Today, 10:45 AM</span></p>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-success-inverse"><i
                                                    class="feather icon-file"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">Project X prototype approved
                                                </h5>
                                                <p><span class="timing">Yesterday, 01:40 PM</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-danger-inverse"><i
                                                    class="feather icon-eye"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">John requested to view wireframe
                                                </h5>
                                                <p><span class="timing">3 Sep 2019, 05:22 PM</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-warning-inverse"><i
                                                    class="feather icon-package"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">Sports shoes are out of stock
                                                </h5>
                                                <p><span class="timing">15 Sep 2019, 02:55
                                                        PM</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="languagebar">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="languagelink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="flag flag-icon-id flag-icon-squared"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="profilebar">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ asset('admin/assets/images/users/profile.svg') }}"
                                        class="img-fluid" alt="profile"><span
                                        class="feather icon-chevron-down live-icon"></span></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">

                                    <div class="userbox">
                                        <ul class="list-unstyled mb-0">


                                            <li class="media dropdown-item">
                                                <a href="#" class="profile-icon"><img
                                                        src="{{ asset('admin/assets/images/svg-icon/user.svg') }}"
                                                        class="img-fluid" alt="user">{{ Auth::user()->name }}</a>
                                            </li>


                                            <li class="media dropdown-item">
                                                <a href="{{ route('logout') }}" class="profile-icon" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">

                                                    <img src="{{ asset('admin/assets/images/svg-icon/logout.svg') }}"
                                                        class="img-fluid" alt="logout">
                                                    Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
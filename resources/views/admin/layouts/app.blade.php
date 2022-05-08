<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords"
        content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{ asset('admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!-- Apex css -->
    <link href="{{ asset('admin/assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{ asset('admin/assets/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
    @stack('css-external')
</head>

<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->

    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="{{ url('/dashboard') }}" class="logo logo-large"><img
                            src="{{ asset('admin/assets/images/logo.svg') }}" class="img-fluid" alt="logo"></a>
                    <a href="{{ url('/dashboard') }}" class="logo logo-small"><img
                            src="{{ asset('admin/assets/images/small_logo.svg') }}" class="img-fluid"
                            alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                @include('admin.layouts.sidebar')
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="{{ url('/dashboard') }}" class="mobile-logo"><img
                                    src="{{ asset('admin/assets/images/logo.svg') }}" class="img-fluid"
                                    alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{ asset('admin/assets/images/svg-icon/horizontal.svg') }}"
                                                class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{ asset('admin/assets/images/svg-icon/verticle.svg') }}"
                                                class="img-fluid menu-hamburger-vertical" alt="verticle">
                                        </a>
                                    </div>
                                </li>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            @include('admin.layouts.header')
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->


            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Page | @yield('title')</h4>

                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                @yield('breadcrubms')
                            </ol>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->
            <div class="contentbar">
                <!-- Start row -->
                @yield('content')
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Orbiter - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/detect.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('admin/assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Apex js -->
    <script src="{{ asset('admin/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('admin/assets/plugins/slick/slick.min.js') }}"></script>
    <!-- Custom Dashboard js -->
    <script src="{{ asset('admin/assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/custom-dashboard.js') }}"></script>
    <!-- Core js -->
    <script src="{{ asset('admin/assets/js/core.js') }}"></script>
    <!-- End js -->

    @stack('js-external')
    @stack('js-internal')
</body>

</html>

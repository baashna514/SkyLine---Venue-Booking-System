<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline - Cities</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <style>
        .filter-option-inner{
            margin-left: 20px !important;
        }
    </style>
</head>
<body class="section-bg">
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->
<!-- ================================
       START USER CANVAS MENU
================================= -->
<div class="user-canvas-container">
    <div class="side-menu-close">
        <i class="la la-times"></i>
    </div><!-- end menu-toggler -->
    @include('admin.partials.mobile-navbar')
</div><!-- end user-canvas-container -->
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START DASHBOARD NAV
================================= -->
<div class="sidebar-nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            @include('admin.partials.sidebar-top')
        </div>
        <div class="sidebar-menu-wrap">
            @include('admin.partials.sidebar')
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->
<!-- ================================
       END DASHBOARD NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('admin.partials.navbar')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Cities</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                                <li>Cities</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                    @include('admin.partials.messages')
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">City Information</h3>
                            </div>
                            <div class="form-content">
                                <div class="contact-form-action">
                                    @if($edit)
                                        <form action="{{ route('admin.cities.update', ['id' => $city->id]) }}" method="post">
                                    @else
                                        <form action="{{ route('admin.cities') }}" method="post">
                                    @endif
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">City Title</label>
                                                    <div class="form-group">
                                                        <span class="la la-city form-icon"></span>
                                                        <input class="form-control" type="text" name="title" value="{{ old('title', $edit?$city->title:'') }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button class="theme-btn" type="submit">Save Changes</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-8">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <div>
                                    <h3 class="title">Cities Lists</h3>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="table-form table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">SR#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cities as $key=>$city)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">{{ $city->title }}</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="{{ route('admin.cities.edit', ['id' => $city->id]) }}" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="View"><i class="la la-edit"></i></a>
                                                        <a href="{{ route('admin.cities.delete', ['id' => $city->id]) }}" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="View"><i class="la la-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-8 -->
                </div><!-- end row -->
                <div class="border-top mt-4"></div>
                <div class="row align-items-center">
                    @include('admin.partials.footer')
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Template JS Files -->
<script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery-ui.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/js/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('admin/js/animated-headline.js') }}"></script>
<script src="{{ asset('admin/js/jquery.multi-file.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline - New Venue</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/images/favicon.png') }}">

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
                                <h2 class="sec__title font-size-30 text-white">{{ $edit?"Edit":"New" }} Venue</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                                <li>{{ $edit?"Edit":"New" }} Venue</li>
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
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Venue Information</h3>
                            </div>
                            <div class="form-content">
                                <div class="contact-form-action">
                                    @if($edit)
                                        <form action="{{ route('admin.venues.update', ['id' => $venue->id]) }}" method="post" enctype="multipart/form-data">
                                    @else
                                        <form action="{{ route('admin.venues.store') }}" method="post" enctype="multipart/form-data">
                                    @endif
                                        @csrf
                                        <div class="user-profile-action d-flex align-items-center pb-4">
                                            <div class="upload-btn-box">
                                                <p class="pb-2 font-size-15 line-height-24">Max file size is 5MB, Required dimension: 500x350 And Suitable files are .jpg &amp; .png</p>
                                                <div class="file-upload-wrap file-upload-wrap-2">
                                                    @if($edit && $venue && $venue->thumbnail)
                                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($venue->thumbnail) }}" alt="venue-thumbnail"><br>
                                                        <a href="{{ route('admin.venues.remove-thumbnail', ['id' => $venue->id]) }}" class="theme-btn theme-btn-small mt-2">Remove Image</a>
                                                    @else
                                                        <input type="file" name="thumbnail" class="multi file-upload-input with-preview" maxlength="1">
                                                        <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload Thumbnail</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Venue Type</label>
                                                    <div class="form-group">
                                                        <span class="la la-sort form-icon"></span>
                                                        <div class="select-contain" style="width: 100%;">
                                                            <select class="select-contain-select" name="type">
                                                                <option value="banquet" {{ $edit&&$venue->type == 'banquet'?'selected':'' }}>Banquet Hall</option>
                                                                <option value="farmhouse" {{ $edit&&$venue->type == 'farmhouse'?'selected':'' }}>Farm House</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Venue Title</label>
                                                    <div class="form-group">
                                                        <span class="la la-campground form-icon"></span>
                                                        <input class="form-control" type="text" name="title" required value="{{ old('title', isset($venue)&&$venue->title) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-3 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">City</label>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <span class="la la-city form-icon"></span>
                                                            <div class="select-contain" style="width: 100%;">
                                                                <select class="select-contain-select" name="city" required>
                                                                    <option value="">Choose city</option>
                                                                    @foreach($cities as $city)
                                                                        <option value="{{ $city->id }}" {{ $edit&&$venue->city_id == $city->id?'selected':'' }}>{{ $city->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                             <div class="col-lg-12 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Address</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="address" required value="{{ old('address', isset($venue)&&$venue->address) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Size</label>
                                                    <div class="form-group">
                                                        <span class="la la-object-group form-icon"></span>
                                                        <input class="form-control" type="text" name="size" value="{{ old('size', isset($venue)&&$venue->size) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Min Persons</label>
                                                    <div class="form-group">
                                                        <span class="la la-users form-icon"></span>
                                                        <input class="form-control" type="text" name="min_persons" value="{{ old('min_persons', isset($venue)&&$venue->min_persons) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Max Persons</label>
                                                    <div class="form-group">
                                                        <span class="la la-users form-icon"></span>
                                                        <input class="form-control" type="text" name="max_persons" value="{{ old('max_persons', isset($venue)&&$venue->max_persons) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Parking</label>
                                                    <div class="form-group">
                                                        <span class="la la-car form-icon"></span>
                                                        <input class="form-control" type="text" name="parking" value="{{ old('parking', isset($venue)&&$venue->parking) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Baths</label>
                                                    <div class="form-group">
                                                        <span class="la la-bath form-icon"></span>
                                                        <input class="form-control" type="text" name="baths" value="{{ old('baths', isset($venue)&&$venue->baths) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Starting Price</label>
                                                    <div class="form-group">
                                                        <span class="la la-dollar form-icon"></span>
                                                        <input class="form-control" type="text" name="starting_price" value="{{ old('starting_price', isset($venue)&&$venue->starting_price) }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-12 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Gallery</label>
                                                    <div class="form-group">
                                                        <span class="la la-images form-icon"></span>
                                                        <input class="form-control" type="file" name="gallery[]" multiple>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            @if(isset($venue)&& count($venue->gelleries))
                                                <div class="p-2">
                                                    @foreach($venue->gelleries as $gallery)
                                                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->image_url) }}" alt="venue-thumbnail" style="width: 70px; margin-right: 5px;">
                                                            <a href="{{ route('admin.venues.remove-gallery', ['id' => $gallery->id]) }}" class="btn btn-danger btn-sm"><i class="la la-trash"></i></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
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
                    </div><!-- end col-lg-12 -->
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

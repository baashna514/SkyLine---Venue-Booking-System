<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline - Comments</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
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
<div class="sidebar-nav sidebar--nav">
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
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Comments</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
                                <li>Comments</li>
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
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="title">Comment Lists</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="comments-list">
                                    @foreach($comments as $comment)
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="{{ \Illuminate\Support\Facades\Storage::url($comment->venue->thumbnail) }}">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">{{ $comment->venue->title }}</h3> <a href="{{ route('admin.comments.delete', ['id' => $comment->id]) }}" class="text-danger"><i class="la la-trash"></i></a>
                                                    <div class="meta-data-inner d-flex">
                                                        <p class="comment__meta mr-1">By <a href="#" class="text-primary">{{ $comment->user->name }}</a></p>
                                                        <p class="comment__date">{{ $comment->created_at->toDateString() }}</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">{{ $comment->body }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div><!-- end comments-list -->
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            @include('admin.partials.pagination', ['elements' => $comments])
                        </nav>
                    </div>
                </div>
                <div class="border-top mt-5"></div>
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

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="modalPopup" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLongTitle">Replay to review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <div class="form-group mb-0">
                                    <i class="la la-pencil form-icon"></i>
                                    <textarea class="message-control form-control" name="message" placeholder="Write message here..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
                <div class="modal-footer border-top-0 pt-0">
                    <button type="button" class="btn font-weight-bold font-size-15 color-text-2 mr-2" data-dismiss="modal">Cancel</button>
                    <button type="button" class="theme-btn theme-btn-small">Replay</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

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
<script src="{{ asset('admin/js/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>

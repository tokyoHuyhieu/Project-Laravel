<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="admin template, Voxo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link
        rel="shortcut icon"
        href="https://vn.msi.com/favicon-16x16.png"
        type="image/x-icon"
    />
    <title>MSI Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{@asset('/assets/admin/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/ratio.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/vector-map.css')}}">

    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/slick-theme.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/style.css')}}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{@asset('/assets/admin/css/responsive.css')}}">
</head>

<body>
<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo" src="https://storage-asset.msi.com/frontend/imgs/logo.png"
                             alt="logo">
                        <img class="img-fluid white-logo"
                             src="https://storage-asset.msi.com/frontend/imgs/logo.png"
                             alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                </div>
            </div>

            <form class="form-inline search-full col" action="javascript:void(0)" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Search Msi .." name="q" title="" autofocus>
                            <i class="close-search" data-feather="x"></i>
                            <div class="spinner-border Typeahead-spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="nav-right col-4 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                            <span class="header-search">
                                <span class="lnr lnr-magnifier"></span>
                            </span>
                    </li>
                    <li>
                        <div class="mode">
                            <span class="lnr lnr-moon"></span>
                        </div>
                    </li>
                    <li class="maximize">
                        <a class="text-dark" href="javascript:void(0)" onclick="javascript:toggleFullScreen()">
                            <span class="lnr lnr-frame-expand"></span>
                        </a>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle"
                                 src="{{@asset('/assets/admin/images/users/4.jpg')}}"
                                 alt="">
                            <div class="user-name-hide media-body">
                                <span>{{  Auth::user()->name }}</span>
                                <p class="mb-0 font-roboto">{{Auth::user()->role}}<i
                                        class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="all-users.html">
                                    <i data-feather="users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="order-list.html">
                                    <i data-feather="archive"></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href="support-ticket.html">
                                    <i data-feather="phone"></i>
                                    <span>Spports Tickets</span>
                                </a>
                            </li>
                            <li>
                                <a href="profile-setting.html">
                                    <i data-feather="settings"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                   href="javascript:void(0)">
                                    <i data-feather="log-out"></i>
                                    <span>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="{{route('admin.index')}}" data-bs-original-title="" title="">
                        <img class="img-fluid for-dark"
                             src="https://us-store.msi.com/image/catalog/msi_logo-156x60-4.png" alt="">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="{{route('admin.index')}}">
                        <img class="img-fluid main-logo" src="{{@asset('/assets/admin/images/logo/logo.png')}}"
                             alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>

                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>
                            <li class="sidebar-main-title sidebar-main-title-3">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                    <p class="lan-2">Dashboards &amp; Users.</p>
                                </div>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.index')}}">
                                    <i data-feather="home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="users"></i>
                                    <span>Users</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('admin.users.index')}}">All users</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.users.create')}}">Add new user</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-main-title sidebar-main-title-2">
                                <div>
                                    <h6 class="lan-1">Application</h6>
                                    <p class="lan-2">Ready To Use Apps</p>
                                </div>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="archive"></i>
                                    <span>Orders</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('admin.orders.index')}}">Order List</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="users"></i>
                                    <span>Venders</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="vendor-list.html">Vendor List</a>
                                    </li>

                                    <li>
                                        <a href="create-vendor.html">Create Vendor</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="align-left"></i>
                                    <span>Category</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('admin.categories.index')}}">Categories</a>
                                    </li>

                                    <li>
                                        <a href="{{route('admin.categories.create')}}">Add New Category</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="box"></i>
                                    <span>Product</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('admin.products.index')}}">Prodcts</a>
                                    </li>

                                    <li>
                                        <a href="{{route('admin.products.create')}}">Add New Products</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="align-left"></i>
                                    <span>Menus</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="menu-lists.html">Menu Lists</a>
                                    </li>

                                    <li>
                                        <a href="create-menu.html">Create Menu</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="tag"></i>
                                    <span>Coupons</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="coupon-list.html">Coupon List</a>
                                    </li>

                                    <li>
                                        <a href="create-coupon.html">Create Coupon</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="settings"></i>
                                    <span>Settings</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="profile-setting.html">Profile Setting</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                                    <i data-feather="file-text"></i>
                                    <span>Reports</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- index body start -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    {{$slot}}
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- footer start-->
            <div class="container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- footer End-->
        </div>
        <!-- index body end -->
    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--no " data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn--yes btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="{{@asset('/assets/admin/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="{{@asset('/assets/admin/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js -->
<script src="{{@asset('/assets/admin/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{@asset('/assets/admin/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- scrollbar simplebar js -->
<script src="{{@asset('/assets/admin/js/scrollbar/simplebar.js')}}"></script>
<script src="{{@asset('/assets/admin/js/scrollbar/custom.js')}}"></script>

<!-- Sidebar jquery -->
<script src="{{@asset('/assets/admin/js/config.js')}}"></script>

<!-- tooltip init js -->
<script src="{{@asset('/assets/admin/js/tooltip-init.js')}}"></script>

<!-- Plugins JS -->
<script src="{{@asset('/assets/admin/js/sidebar-menu.js')}}"></script>
<script src="{{@asset('/assets/admin/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{@asset('/assets/admin/js/notify/index.js')}}"></script>

<!-- Apexchar js -->
<script src="{{@asset('/assets/admin/js/chart/apex-chart/apex-chart1.js')}}"></script>
<script src="{{@asset('/assets/admin/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{@asset('/assets/admin/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{@asset('/assets/admin/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{@asset('/assets/admin/js/chart/apex-chart/chart-custom1.js')}}"></script>

<!-- customizer js -->
<script src="{{@asset('/assets/admin/js/customizer.js')}}"></script>

<!-- ratio js -->
<script src="{{@asset('/assets/admin/js/ratio.js')}}"></script>

<!-- Theme js -->
<script src="{{@asset('/assets/admin/js/script.js')}}"></script>
</body>

</html>

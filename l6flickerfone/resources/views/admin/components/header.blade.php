<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="{{asset('Green/assets/images/favicon.ico')}}"> -->
        <link rel="shortcut icon" href="storage/images/logo-cropped-removebg-preview.png">
        <link rel="shortcut icon" href="{{ asset('storage/images/logo-cropped-removebg-preview.png') }}">
        <!-- datepicker -->
        <link href="{{asset('Green/assets/libs/air-datepicker/css/datepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{asset('Green/assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{asset('Green/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('Green/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('Green/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- alertifyjs Css -->
        <link href="{{asset('Green/assets/libs/alertifyjs/build/css/alertify.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="{{asset('Green/assets/libs/alertifyjs/build/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/Admin" class="logo logo-dark" style="background: #2fa97c;">
                                <span class="logo-sm">
                                    <img src="{{asset('storage/images/logo-cropped-removebg-preview.png')}}" alt=""  height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('storage/images/logo-cropped-removebg-preview.png')}}" alt=""  height="33">
                                </span>
                            </a>

                           <!--  <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('Green/assets/images/logo-sm-light.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('Green/assets/images/logo-light.png')}}" alt="" height="20">
                                </span>
                            </a> -->
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('storage/admin/admin.jpg')}}" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/Admin/Logout"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>

            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="/Admin" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="fas fa-tachometer-alt"></i></div>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-title">Pages</li>
                           
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>User</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('User.create') }}">Add User</a></li>
                                    <li><a href="{{ route('User.index') }}">View Users</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span> Brand</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('Brand.create') }}">Add Brand</a></li>
                                    <li><a href="{{ route('Brand.index') }}">View Brand</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('Category.create') }}">Add Category</a></li>
                                    <li><a href="{{ route('Category.index') }}">View Category</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('Product.create') }}">Add Product</a></li>
                                    <li><a href="{{ route('Product.index') }}">View Products</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>MetaTag</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('Meta.create') }}">Add Meta</a></li>
                                    <li><a href="{{ route('Meta.index') }}">View Metas</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>Page</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('Page.create') }}">Add Page</a></li>
                                    <li><a href="{{ route('Page.index') }}">View Pages</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>BuyNewSell Section</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                
                                    <li><a href="{{ route('IndexBuyNewSellSection.index') }}">View</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                                    <span>Blog Slider</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    
                                    <li><a href="{{ route('BlogSlider.index') }}">View</a></li>
                                    <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                                </ul>
                            </li>


                            
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

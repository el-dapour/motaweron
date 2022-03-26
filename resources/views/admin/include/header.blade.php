<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>admins</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin') }}" class="nav-link">الرئيسية</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.message') }}" class="nav-link">الرسائل</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            @if(Route::currentRouteName() == 'admin')
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">{{ $messageC }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    @foreach($messages as $message )
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        {{ $message->name }}
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">{{ $message->message }}</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ $message->created_at }}</p>
                                </div>
                            </div>
                        <!-- Message End -->
                    @endforeach
                    </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.message') }}" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
        @else
                @endif
        </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('front.homepage') }}" target="_blank" class="brand-link">
            <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Motaweron</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="https://www.facebook.com/ELDAPOUR" class="d-block">Abdullah Mahmoud</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2" style="height: 665px">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu">
                        <a href="{{ route('admin') }}" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                 المطـورون
                                <i class="right fa-angle-left fas"></i>
                            </p>
                        </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('admin.cat.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            <Category>Category</Category>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('admin.serves.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            <Category>Services</Category>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('admin.about.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            <Category>من نحن</Category>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('admin.portfolio.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            <Category>اعمالنا</Category>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.message') }}" class="nav-link alert-info mt-4">
                            <i class="nav-icon fas fa-mail-bulk "></i>
                            <p>
                                الرسائل
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.home.logout') }}" class="nav-link alert-danger mt-4">
                            <i class="nav-icon fas fa-lock "></i>
                            <p>
                                تسجيل الخروج
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


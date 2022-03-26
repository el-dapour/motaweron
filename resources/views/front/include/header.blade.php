<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @if(Route::currentRouteName() == 'front.homepage')
               المطورون
        @else
            دوائر التقنية
        @endif
    </title>
    <!-- icon -->
    <link rel="icon" href="{{asset('img/logo2.png')}}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- owl slider -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- More -->
    <link rel="stylesheet" href="{{asset('css/hover.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-jvectormap-2.0.2.css')}}">
    <!-- Custom style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
</head>

<body>

<!-- ================ Navbar ================= -->
<section id="Header" class="@if(Route::currentRouteName() == 'front.homepage') main-header @else Unanimated-nav @endif">
    <header class="main-header">
        <!--======================= navbar ==============================-->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">

                <a class="navbar-brand" href="{{ route('front.homepage') }}"><img src="{{asset('img/logo2.png')}}"></a>

                <div class="d-lg-none"><i id="rightSlide" data-activates="slide-out"
                                          class="fas fa-bars text-dark button-collapse"></i></div>

                <div class="collapse navbar-collapse">

                    <ul class="navbar-nav index-navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('front.homepage') }}">الرئيسيه </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.about') }}">من نحن</a>
                        </li>

                        <!-- News -->
                        <li class="nav-item dropdown mega-dropdown ">
                            <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink5" data-toggle="dropdown"
                               aria-haspopup="true" href="{{ route('front.cat') }}" aria-expanded="false">خدماتنا
                            </a>
                            <div class="dropdown-menu mega-menu v-3 z-depth-1 pt-1 pb-4 px-3" aria-labelledby="navbarDropdownMenuLink5">
                                <div class="row">
                                    @foreach($cats as $cat)
                                        <div class="col">
                                            <div class="menu-title p-1">
                                                <p  class=" d-lg-block ">{{ $cat->name??'' }}<i class="fas fa-caret-down float-left"></i></p>
                                            </div>
                                            @foreach($cat->serves as $serve)
                                                <a class=" d-lg-block " href="{{ '/serves/'. $serve->id}}"> <i
                                                        class="fas fa-mobile-alt float-right ml-2 mt-1"></i>{{ $serve->name }}</a>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.portfolio') }}">اعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.process') }}">العمليات </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.show')}}">تواصل معنا</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
        <!--======================= end nav ==========================================-->
        <!--=======================  Sidebar navigation ==============================-->
        <div id="slide-out" class="side-nav fixed d-lg-none">

            <div class="logo-wrapper waves-light m-auto">
                <a href="index.html"><img src="img/logo2.png" class=" h-100 flex-center"></a>
            </div>

            <ul class="custom-scrollbar text-white ">
                <li class="nav-item">
                    <a class=" active" href="{{ route('front.homepage') }}">الرئيسيه <i class="fas fa-home float-right  ml-2"></i></a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{ route('front.about') }}">من نحن <i class="fas fa-info-circle float-right  ml-2"></i></a>
                </li>

                <li class="nav-item">
                    <a class="" href="{{ route('front.portfolio') }}">اعمالنا <i class="fas fa-clipboard-check float-right  ml-2"></i></a>
                </li>
                <li class=" accordionEx1-no">
                    <div class="" id="accordionEx1" role="tablist" aria-multiselectable="true">
                        <div class="card shadow-none">
                            <div role="tab" id="headingTwo1">
                                <a class="" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                                   aria-expanded="false" aria-controls="collapseTwo1">
                                    <p class="mb-0"><i class="fas fa-hand-point-left float-right  ml-2"></i> الخدمات <i
                                            class="fas fa-angle-down rotate-icon float-left"></i>
                                    </p>
                                </a>
                            </div>

                            <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                                 data-parent="#accordionEx1">
                                <ul>
                                    @foreach($cats as $cat)
                                        <li class="nav-item">
                                            <a href="{{'cat/'. $cat->id .'/serves'}}">{{ $cat->name }}<i class="fas fa-mobile-alt float-right  ml-2"></i> </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="" href="{{ route('front.process') }}">العمليات <i class="fas fa-tasks float-right  ml-2"></i></a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{ route('contact.show') }}">تواصل معنا <i class="fas fa-comments float-right  ml-2"></i></a>
                </li>


            </ul>
        </div>
        <!--=======================  Sidebar navigation ==============================-->
    </header>
</section>

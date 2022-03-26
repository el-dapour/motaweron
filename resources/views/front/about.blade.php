@extends('front.layout.app')

@section('content')

    <!-- ================================== -->
    <section class="about-us-page" id="about-us-page">
        <div class="overlay2"></div>
        <div class="container about-us-page-top-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <h1 class=" wow fadeInDown">من نحن</h1>
                    <div id="box">
                        <span class="hex-icon-sun">
                            <svg>
                                <path
                                    d="M19,1 Q21,0,23,1 L39,10 Q41.5,11,42,14 L42,36 Q41.5,39,39,40 L23,49 Q21,50,19,49 L3,40 Q0.5,39,0,36 L0,14 Q0.5,11,3,10 L19,1" />
                                <circle cx="21" cy="25" r="8" />
                                <circle cx="21" cy="25" r="12">
                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                        from="0 21 25" to="360 21 25" dur="3.5s" repeatCount="indefinite" />
                                </circle>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--============================-->
    <section class="Vision" id="Vision">
        <div class="container Vision-container ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 ">

                    
                    @foreach ($abouts as $about )
                    <div id="wrapper">
                        <div id="left-side">
                            <ul>
                                <li>
                                    {{ $about->name }}
                                </li>
                            </ul>
                        </div>
                        
                        <div id="border">
                            <div id="line" class="one"></div>
                        </div>
                        
                        <div id="right-side">
                            <div id="first" class="active">
                                
                                <h1>{{ $about->title}}</h1>
                                
                                <p>
                                    {{ $about->desc}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!--==========================-->

    <section class="Experts " id="Experts ">
        <div class="container Experts-container">
            <h3>نحن خبراء في </h3>
            <div class="line"></div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 fadeInDown wow">
                    <div class="Experts-col">
                        <a href="#" class="hvr-icon-drop">
                            <i class="fas fa-lightbulb fa-2x hvr-icon "></i>
                        </a>
                        <h5>الفكره </h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 fadeInRight wow">
                    <div class="Experts-col">
                        <a href="#" class="hvr-icon-spin">
                            <i class="fas fa-paint-brush fa-2x hvr-icon "></i>
                        </a>
                        <h5>التصميم </h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 fadeInDown wow">
                    <div class="Experts-col">
                        <a href="#" class="hvr-icon-down">
                            <i class="fas fa-laptop-code fa-2x hvr-icon "></i>
                        </a>
                        <h5>التطوير </h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 fadeInRight wow">
                    <div class="Experts-col">
                        <a href="#" class="hvr-icon-drop">
                            <i class="fas fa-tv fa-2x hvr-icon "></i>
                        </a>
                        <h5>التقديم </h5>
                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection

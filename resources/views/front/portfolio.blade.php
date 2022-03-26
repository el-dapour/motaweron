@extends('front.layout.app')

@section('content')

    <!-- ================================== -->
    <section class="portfolio-top" id="portfolio-top">
        <div class="overlay2"></div>
        <div class="container portfolio-top-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 ">
                    <h1>اعمالنا </h1>
                </div>

            </div>
        </div>
    </section>
    <section class="portfolio-made" id="portfolio-made">
        <div class="container-fliud portfolio-made-container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-0 "></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
                    <div class="count">5</div>
                    <h5>دول نخدمها</h5>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
                    <div class="count">39</div>
                    <h5>موقع الكتروني</h5>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
                    <div class="count">27</div>
                    <h5>تطبيق اندرويد</h5>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
                    <div class="count">27</div>
                    <h5>تطبيق ايفون</h5>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
                    <div class="count">45</div>
                    <h5>عملاء سعداء</h5>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-0 "></div>
            </div>
        </div>
    </section>

    <!--======our-PORTFOLIO-->
    <section class="our-portfolio" id="our-portfolio">

        <div class="container-fliud portfolio-container">
            <div class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-122 fadeInRight wow">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{ asset('img/portfolio/'. $portfolio->img) }}" alt="">
                            <div class="overlay">
                                <h2>{{ $portfolio->name }}</h2>
                                <a class="info" target="_blank">مشاهده
                                    المزيد</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- ============================= -->



            </div>
        </div>
    </section>


@endsection

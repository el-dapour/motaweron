@extends('front.layout.app')

@section('content')

    <section style="background-image: url('{{asset('img/' . $serves->bg_img)}}');" class="mobile-page" id="mobile-page">
        <div class="overlay2">
        </div>
        <div class="container mobile-page-top-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 ">
                    <h1 class=" wow fadeInDown">{{ $serves->cats->name }}</h1>
                </div>
            </div>
        </div>
    </section>


    <!--============================-->
    <section class="mobile">
        <div class="container mobile-container ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="ios-tab" data-toggle="tab" href="" role="tab" aria-controls="ios" aria-selected="true">{{ $serves->title }}</a>
                </li>
            </ul>
        </div>
    </section>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ios" role="tabpanel" aria-labelledby="ios-tab">

                <section class="mobile-service" id="mobile-service">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-12 mobile-service-col">
                                <div class="row">
                                    <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
                                        <div class="mobile-service-txt  wow fadeInDown">
                                            <h2>{{ $serves->name }}</h2>
                                            <p>{{ $serves->desc }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
                                    <div class="mobile-service-img  wow fadeInDown ">
                                        <img class="img-thumbnail" src="{{ asset('img/' . $serves->img) }}">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection

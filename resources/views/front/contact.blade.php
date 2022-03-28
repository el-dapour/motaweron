@extends('front.layout.app')

@section('content')
<!-- ================================== -->
<section class="contact-us-page" id="contact-us-page">
    <div class="overlay3"></div>
    <div class="container contact-us-page-top-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-12 ">
                <h1>تواصل معنا</h1>
            </div>
        </div>
    </div>
</section>




<section class="location-section" id="location-section">
    <div class="container location-container">
        <h1>العنوان والفروع</h1>
        <div class="line"></div>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="location-col">
                    <img src="{{ asset('img/saudi-flag.png') }}">
                    <h3>فرع السعوديه</h3>

                    <ul>
                        <li>العنوان :- الرياض / حي الصحافه / ش انس بن مالك</li>
                        <li>رقم الهاتف :- 966539044145</li>
                        <li>البريد الالكتروني :-<a href="mailto:heshamtatawy@gmail.com">heshamtatawy@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="location-col">

                    <img src="{{asset('img/egypt-flag.png')}}">
                    <h3>فرع مصر</h3>

                    <ul>
                        <li>العنوان :- المنوفيه /شبين الكوم / ش الاستاد</li>
                        <li>رقم الهاتف :- 01011827324</li>
                        <li>البريد الالكتروني :- <a href="mailto:heshamtatawy@gmail.com">heshamtatawy@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="col-lg-12 col-md-6 col-sm-12 col-12 pt-5">

                <!--Facebook-->
                <a href="https://www.facebook.com/tatawey" target="_blank" class="fb-ic mr-3 btn btn-outline-blue rounded-circle py-4 " style="padding: 30px;" role="button"><i class="fab fa-2x fa-lg fa-facebook-f"></i></a>
                <!--Twitter-->
                <a href="https://twitter.com/tatawy_hesham?fbclid=IwAR28uygl1r7lIIRYTBG5HKnMztUChWNJkrbDi7J2fhQxsuUVutRx7iCK44c"
                   target="_blank" class="tw-ic mr-3 btn btn-outline-info rounded-circle p-4" role="button"><i class="fab fa-2x fa-lg fa-twitter"></i></a>
                <!--Google +-->
                <a href="mailto:heshamtatawy@gmail.com" class="gplus-ic mr-3 btn btn-outline-red rounded-circle " style=" padding: 25px 22px;" role="button"><i class="fab fa-2x fa-lg fa-google-plus-g"></i></a>
                <!--WhatsApp-->
                <a href="https://api.whatsapp.com/send?phone=00201011   827324" target="_blank" class="whatsapp-ic mr-3 btn btn-outline-green rounded-circle p-4" role="button"><i class="fab fa-2x fa-lg fa-whatsapp"></i></a>
            </div>
        </div>

    </div>
</section>



<!--============================-->
<section class="map-section" id="map-section">
    <div class="overlay2"></div>

    <div class="container map-section-container">
        <h1>كيف تصل الينا</h1>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                <!-- Form with header -->
                <form>
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <!-- Header -->
                            <div class="form-header orange">
                                <h4 class="mt-2"> أكتب رسالتك <i class="fas fa-envelope mr-3"></i></h4>

                            </div>
                            <!-- Body -->
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="name" class="form-control" name="name">
                                <label for="form-name">الاسم</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="email" class="form-control" name="email">
                                <label for="form-email">البريد الالكتروني</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-phone prefix grey-text"></i>
                                <input id="phone" type="tel" class="form-control" name="phone">
                                <label for="form-phone">رقم الهاتف</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                <textarea id="message" class="form-control md-textarea" rows="3" name="message"></textarea>
                                <label for="form-text">الرساله</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-pink" id="send" name="submit" type="submit">إرسال</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                <div class="gmap">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.755306294045!2d31.008850984917927!3d30.566830281695253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d7340a99875d%3A0x40f09d48c0ee471c!2sendpoint%20developers!5e1!3m2!1sar!2seg!4v1574345210390!5m2!1sar!2seg"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Copyright -->
<div class="footer-copyright text-center badge-dark py-3">© 2020 Copyright:
    <a href="#"> Arab Developers </a>
</div>
<!-- Copyright -->









<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////JavaScript/////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/Custom.js') }}"></script>


<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<script>

    $(document).on('click',`#send`,function (e) {

        e.preventDefault();

        $.ajax({
            "type": 'post',
            "url":"{{route('message')}}",
            "data": {
                '_token' : "{{csrf_token()}}",
                'name':$(`#name`).val(),
                'email':$(`#email`).val(),
                'phone':$(`#phone`).val(),
                'message':$(`#message`).val(),
            },
            success(data) {
            },
            error(reject) {
            },
        });
    });
</script>

</body>

</html>

@endsection

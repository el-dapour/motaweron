@if(Route::currentRouteName()== 'contact.show')

    @else
<!-- =============== footer ================== -->
<section class=" contact-us">
    <div class="overlay2"></div>
    <div class="container contact-container">
        <h1>تواصل معنا</h1>
        <div class="line"></div>
        <section class="dark-grey-text pb-2">
            <div class="row">


                <!-- Grid column -->
                <div class="col-lg-7">

                    <!--Google map-->
                    <div id="map-container-section " class=" map-container-section mb-4 " style="height: 400px">
                        <!--<iframe-->
                        <!--  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12299.516793747222!2d46.632747311575656!3d24.807963391761714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee59690a1085f%3A0xed1a4689dee24630!2z2K3ZiiDYp9mE2LXYrdin2YHYqQ!5e0!3m2!1sar!2seg!4v1574087429348!5m2!1sar!2seg"-->
                        <!--  frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13742.434481087821!2d30.999854755819445!3d30.560359959302495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDMzJzM5LjkiTiAzMcKwMDAnMzAuNiJF!5e0!3m2!1sen!2seg!4v1605517225614!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13742.434481087821!2d30.999854755819445!3d30.560359959302495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDMzJzM5LjkiTiAzMcKwMDAnMzAuNiJF!5e0!3m2!1sen!2seg!4v1605517225614!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <!-- <div class="gmap mb-3">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12299.516793747222!2d46.632747311575656!3d24.807963391761714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee59690a1085f%3A0xed1a4689dee24630!2z2K3ZiiDYp9mE2LXYrdin2YHYqQ!5e0!3m2!1sar!2seg!4v1574087429348!5m2!1sar!2seg"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> -->
                    <!-- Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a class="btn-floating orange ">
                                <i class="fas fa-map-marker-alt"></i>
                            </a>
                            <p class=" text-white"> مصر / المنوفية / شبين الكوم</p>
                        </div>
                        <div class="col-md-4">
                            <a class="btn-floating orange ">
                                <i class="fas fa-phone"></i>
                            </a>
                            <p class=" text-white"><a href="https://api.whatsapp.com/send?phone=201011827324">00201011827324</a></p>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:heshamtatawy@gmail.com" class="btn-floating orange ">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="mailto:heshamtatawy@gmail.com" class=" text-white">heshamtatawy@gmail.com</a>
                        </div>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">
                    <!-- Form with header -->
                    <form action="{{ route('message') }}" method="post">
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
                                    <input type="number" id="phone" class="form-control" name="phone">
                                    <label for="form-phone">رقم الهاتف</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                                    <textarea id="message" class="form-control md-textarea" rows="3" name="message"></textarea>
                                    <label for="form-text">الرساله</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-pink" name="submit" type="submit">إرسال</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>
<script src="{{asset('js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/swiper.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('js/jvectormap.custom.js')}}"></script>
<script src="{{asset('js/Custom.js')}}"></script>


<script>
    $(".choose").click(function () {
        $(".choose").addClass("active");
        $(".choose > .icon").addClass("active");
        $(".pay").removeClass("active");
        $(".wrap").removeClass("active");
        $(".ship").removeClass("active");
        $(".pay > .icon").removeClass("active");
        $(".wrap > .icon").removeClass("active");
        $(".ship > .icon").removeClass("active");
        $("#line").addClass("one");
        $("#line").removeClass("two");
        $("#line").removeClass("three");
        $("#line").removeClass("four");
    })

    $(".pay").click(function () {
        $(".pay").addClass("active");
        $(".pay > .icon").addClass("active");
        $(".choose").removeClass("active");
        $(".wrap").removeClass("active");
        $(".ship").removeClass("active");
        $(".choose > .icon").removeClass("active");
        $(".wrap > .icon").removeClass("active");
        $(".ship > .icon").removeClass("active");
        $("#line").addClass("two");
        $("#line").removeClass("one");
        $("#line").removeClass("three");
        $("#line").removeClass("four");
    })

    $(".wrap").click(function () {
        $(".wrap").addClass("active");
        $(".wrap > .icon").addClass("active");
        $(".pay").removeClass("active");
        $(".choose").removeClass("active");
        $(".ship").removeClass("active");
        $(".pay > .icon").removeClass("active");
        $(".choose > .icon").removeClass("active");
        $(".ship > .icon").removeClass("active");
        $("#line").addClass("three");
        $("#line").removeClass("two");
        $("#line").removeClass("one");
        $("#line").removeClass("four");
    })

    $(".ship").click(function () {
        $(".ship").addClass("active");
        $(".ship > .icon").addClass("active");
        $(".pay").removeClass("active");
        $(".wrap").removeClass("active");
        $(".choose").removeClass("active");
        $(".pay > .icon").removeClass("active");
        $(".wrap > .icon").removeClass("active");
        $(".choose > .icon").removeClass("active");
        $("#line").addClass("four");
        $("#line").removeClass("two");
        $("#line").removeClass("three");
        $("#line").removeClass("one");
    })

    $(".choose").click(function () {
        $("#first").addClass("active");
        $("#second").removeClass("active");
        $("#third").removeClass("active");
        $("#fourth").removeClass("active");
    })

    $(".pay").click(function () {
        $("#first").removeClass("active");
        $("#second").addClass("active");
        $("#third").removeClass("active");
        $("#fourth").removeClass("active");
    })

    $(".wrap").click(function () {
        $("#first").removeClass("active");
        $("#second").removeClass("active");
        $("#third").addClass("active");
        $("#fourth").removeClass("active");
    })

    $(".ship").click(function () {
        $("#first").removeClass("active");
        $("#second").removeClass("active");
        $("#third").removeClass("active");
        $("#fourth").addClass("active");
    });
</script>

</body>

</html>
@endif

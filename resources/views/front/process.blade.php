@extends('front.layout.app')

@section('content')

    <!-- ================================== -->
    <section class="process" id="process">
        <div class="overlay2"></div>
        <div class="container process-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 ">
                    <h1>عملياتنا التنفيذية</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="steps" id="steps">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 first-step ">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
                            <div class="first-step-txt wow fadeInDown">
                                <h3>1. تحديد الاستراتجيه</h3>
                                <p>
                                    نحن فعلا ندرس المحتوي بشكل جيد قبل ان نبدا . نحن نسأل عن المزيد من الأسئلة حول ما
                                    الذي كانوا عليه فعلاً . ومع تحولنا إلى قصة ، فقد بدأنا في تشغيلها على الموقع ، حيث
                                    سيتحقق المستخدمون من موقعهم على الويب.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
                            <div class="first-step-img wow fadeInUp">
                                <img class="img-thumbnail" src="{{ asset('img/business-background.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12 col-md-12 col-sm-6 col-12 second-step">
                    <img src="{{ asset('img/dotted-line-png-2.png') }}" class="fadeInUp wow">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
                            <div class="second-step-txt fadeInDown wow">
                                <h3>2. التصميم</h3>
                                <p>
                                    نضع للشركه تصميمًا ونحاول إيجاد حلول ناجحة لعملائنا سريعًا ، يعني البحث عن طرق جديدة
                                    ليبدو المنتج في افضل حاله . يُعد تصميم الويب اول خطوه في عمليه اعداد الموقع ودعمنا
                                    وسيلةً للاستمرار في متابعة العمل ويتم التواصل مع العملاء عبر جميع مراحل التطوير ،
                                    وكذلك بعد انتهاء العمل. </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
                            <div class="second-step-img wow fadeInUp">
                                <img class="img-thumbnail" src="{{ asset('img/design.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 third-step">
                    <img src="{{ asset('img/dotted-line-png-airplane.png') }}" class="fadeInUp wow">

                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
                            <div class="third-step-txt fadeInDown wow">
                                <h3>3. التطوير</h3>
                                <p>بعد عمليه التصميم تبدا عمليه تطوير الموقع وذلك باحدي لغات البرمجه PHP ونتابع العمل
                                    لجع الموقع تفاعلي بالنسبه للمستخدم وكذلك يمكنك اداره موقعك بكل سهوله وامان ونجعلك
                                    يمكنك اداره موقعك باكثر من لغه سواء كانت عربيه او انجليزيه او اي لغه اخري </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
                            <div class="third-step-img wow fadeInUp">
                                <img class="img-thumbnail" src="{{ asset('img/develop.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 col-12 fourth-step">
                    <img src="{{ asset('img/dotted-line-png-3.png') }}" class="fadeInUp wow">

                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">

                            <div class="fourth-step-txt fadeInDown wow">
                                <h3>4. تقديم المنتج</h3>
                                <p>تقديم المنتج بافضل طريقه تناسب المالك و المستخدم وتجعل تصفح موقعك اكثر متعه وتفاعل مع
                                    الاخرين وكذلك امكانيه التفاعل مع المستخدم للموقع </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
                            <div class="fourth-step-img wow fadeInUp">
                                <img class="img-thumbnail" src="{{ asset('img/launch.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

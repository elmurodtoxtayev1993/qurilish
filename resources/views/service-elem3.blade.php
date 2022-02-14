@extends('lyouts.lyout')

@section('content')


    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Elements</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Service Layout 03</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Service Style3 Area-->
    <section class="service-style3-area pd120-0">
        <div class="container">
            <div class="sec-title">
                <p>Provided Services</p>
                <div class="big-title black-clr"><h1>Our Latest Services</h1></div>
            </div>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rinbuild-carousel service-carousel owl-carousel owl-theme owl-nav-style-one" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout":6000, "smartSpeed":500, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "1000":{"items": "3" }}}'>
                        <!--Start Single Service Style3-->
                        <div class="single-service-style3">
                            <div class="img-holder">
                                <img class="lazy-image" src="assets/images/services/service-v2-1.jpg" alt="Awesome Image">
                                <div class="overlay-content">
                                    <div class="icon-holder"><span class="flaticon-house"></span></div>
                                    <div class="title-holder">
                                        <p>Building Wood Arcitect</p>
                                        <h3><a href="#">Just because you work hard<br> and successful.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style3-->
                        <!--Start Single Service Style3-->
                        <div class="single-service-style3">
                            <div class="img-holder">
                                <img class="lazy-image" src="assets/images/services/service-v2-2.jpg" alt="Awesome Image">
                                <div class="overlay-content">
                                    <div class="icon-holder"><span class="flaticon-house"></span></div>
                                    <div class="title-holder">
                                        <p>Building Wood Arcitect</p>
                                        <h3><a href="#">Just because you work hard<br> and successful.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style3-->
                        <!--Start Single Service Style3-->
                        <div class="single-service-style3">
                            <div class="img-holder">
                                <img class="lazy-image" src="assets/images/services/service-v2-3.jpg" alt="Awesome Image">
                                <div class="overlay-content">
                                    <div class="icon-holder"><span class="flaticon-house"></span></div>
                                    <div class="title-holder">
                                        <p>Building Wood Arcitect</p>
                                        <h3><a href="#">Just because you work hard<br> and successful.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style3-->

                        <!--Start Single Service Style3-->
                        <div class="single-service-style3">
                            <div class="img-holder">
                                <img class="lazy-image" src="assets/images/services/service-v2-2.jpg" alt="Awesome Image">
                                <div class="overlay-content">
                                    <div class="icon-holder"><span class="flaticon-house"></span></div>
                                    <div class="title-holder">
                                        <p>Building Wood Arcitect</p>
                                        <h3><a href="#">Just because you work hard<br> and successful.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Style3-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Service Style3 Area-->


    <!--Start Slogan Area-->
    <section class="slogan-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-content wow slideInUp" data-wow-delay="100ms">
                        <div class="title">
                            <h1>Contact Us Now in Our Rinbuild</h1>
                        </div>
                        <div class="quote-button">
                            <a href="#">Get a Quote<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Area-->

@endsection

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
                                <li class="active">About Layout 02</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start About Style1 Area-->
    <section class="about-style1-area style3">
        <div class="about-style3-image-box" data-aos="fade-right" data-aos-duration="0" data-aos-delay="0">
            <img src="assets/images/about/about-5.jpg" alt="Awesome Image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">

                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="about-style1-text-box style3">
                        <div class="title">
                            <p>WELCOME</p>
                            <h1>Our <b>10</b> <span>RinBuild</span><br> <b>years</b> working<br> experience.</h1>
                        </div>
                        <div class="inner-contant">
                            <p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor,</p>
                            <p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris.</p>
                            <div class="signature-box">
                                <img src="assets/images/resources/signature.png" alt="Signature">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style1 Area-->


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

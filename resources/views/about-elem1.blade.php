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
                                <li class="active">About Layout 01</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start About Style1 Area-->
    <section class="about-style1-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-style1-image-box clearfix">
                        <div class="shape zoom-fade"></div>
                        <div class="image-box1">
                            <img src="assets/images/about/about-1.jpg" alt="Awesome Image">
                        </div>
                        <div class="image-box2">
                            <img src="assets/images/about/about-2.jpg" alt="Awesome Image">
                        </div>
                        <div class="video-holder-box" style="background-image:url(assets/images/about/video-gallery.jpg);">
                            <div class="icon">
                                <div class="inner">
                                    <a class="video-popup wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="RinBuild Video Gallery" href="../watch.html?v=p25gICT63ek">
                                        <span class="flaticon-play-button"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="about-style1-text-box">
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

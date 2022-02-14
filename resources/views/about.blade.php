@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: {{url('assets/images/breadcrumb/breadcrumb-1.jpg')}};">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>About Us</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="{{url('/')}}">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">About Us</li>
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
                        <div class="video-holder-box" style="background-image:{{url(assets/images/about/video-gallery.jpg)}};">
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

    <!--Start Fact Counter Area-->
    <section class="fact-counter-area pdbottom120">
        <div class="container">
            <div class="row">
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter text-left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="title">
                            <h3>Year of<br> Experience</h3>
                        </div>
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="30" data-speed="5000" data-refresh-interval="50">30</span>
                            </h1>
                            <div class="icon"><span class="flaticon-plus"></span></div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter text-left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="title">
                            <h3>Winning<br> Our Awards</h3>
                        </div>
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="25" data-speed="5000" data-refresh-interval="50">25</span>
                            </h1>
                            <div class="icon"><span class="flaticon-plus"></span></div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter text-left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="title">
                            <h3>Complet<br> Total Project</h3>
                        </div>
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="99" data-speed="5000" data-refresh-interval="50">99</span>
                            </h1>
                            <div class="icon"><span class="flaticon-plus"></span></div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter text-left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="title">
                            <h3>Happy<br> Our Clients</h3>
                        </div>
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="74" data-speed="5000" data-refresh-interval="50">74</span>
                            </h1>
                            <div class="icon"><span class="flaticon-plus"></span></div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
            </div>
        </div>
    </section>
    <!--End Fact Counter Area-->

    <!--Start Testimonial style1 Area-->
    <section class="testimonial-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonial-style1-title-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
                        <div class="sec-title">
                            <p>Our Global Work Industries!</p>
                            <div class="big-title"><h1>What Our Client Says Feedback?</h1></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="single-vertical-carousel">
                        <div class="slide">
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>Etiam fermentum non turpis in vivera. Nulla facilisis molestie mattis. Nulla fringilla mollis neque in pretium Nunc posuere ipsum.turpis in vivera. Nulla facilisis molestie mattis.</p>
                                </div>
                                <div class="client-info">
                                    <div class="icon-box">
                                        <span class="flaticon-engineer-1"></span>
                                    </div>
                                    <div class="title-box">
                                        <h3>Anil Barua</h3>
                                        <p>construction worker</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                        </div>
                        <div class="slide">
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>Etiam fermentum non turpis in vivera. Nulla facilisis molestie mattis. Nulla fringilla mollis neque in pretium Nunc posuere ipsum.turpis in vivera. Nulla facilisis molestie mattis.</p>
                                </div>
                                <div class="client-info">
                                    <div class="icon-box">
                                        <span class="flaticon-engineer-1"></span>
                                    </div>
                                    <div class="title-box">
                                        <h3>Anil Barua</h3>
                                        <p>construction worker</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                        </div>
                        <div class="slide">
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>Etiam fermentum non turpis in vivera. Nulla facilisis molestie mattis. Nulla fringilla mollis neque in pretium Nunc posuere ipsum.turpis in vivera. Nulla facilisis molestie mattis.</p>
                                </div>
                                <div class="client-info">
                                    <div class="icon-box">
                                        <span class="flaticon-engineer-1"></span>
                                    </div>
                                    <div class="title-box">
                                        <h3>Anil Barua</h3>
                                        <p>construction worker</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Testimonial Style1 Area-->

    <!--Start Team Area-->
    <section class="team-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>Meet Our Team</p>
                <div class="big-title black-clr"><h1>Our Experts Team</h1></div>
            </div>
            <div class="row">
                <!--Start Single Team Member-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="assets/images/team/team-v1-1.jpg" alt="Awesome Image">
                        </div>
                        <div class="title-holder">
                            <div class="inner">
                                <div class="left">
                                    <h3>Emily Ckumanni</h3>
                                    <div class="social-links">
                                        <ul class="social-links-style1">
                                            <li>
                                                <a href="#"><span class="flaticon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-instagram"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Team Member-->
                <!--Start Single Team Member-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1400ms">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="assets/images/team/team-v1-2.jpg" alt="Awesome Image">
                        </div>
                        <div class="title-holder">
                            <div class="inner">
                                <div class="left">
                                    <h3>Mendas Adla</h3>
                                    <div class="social-links">
                                        <ul class="social-links-style1">
                                            <li>
                                                <a href="#"><span class="flaticon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-instagram"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Team Member-->
                <!--Start Single Team Member-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1500ms">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="assets/images/team/team-v1-3.jpg" alt="Awesome Image">
                        </div>
                        <div class="title-holder">
                            <div class="inner">
                                <div class="left">
                                    <h3>Clinexmex Pant</h3>
                                    <div class="social-links">
                                        <ul class="social-links-style1">
                                            <li>
                                                <a href="#"><span class="flaticon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-instagram"></span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="flaticon-linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Team Member-->

            </div>
        </div>
    </section>
    <!--End Team Area-->

    <!--Start Partner Area-->
    <section class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="partner-box">
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-1.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-1.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-2.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-2.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box marleft-minus">
                            <a href="#"><img src="assets/images/brand/brand-3.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-3.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-4.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-4.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-5.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-5.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->

                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-6.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-6.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-7.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-7.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-8.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-8.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box marleft-minus">
                            <a href="#"><img src="assets/images/brand/brand-9.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-9.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-10.png" alt="Awesome Image"></a>
                            <div class="overlay-box">
                                <a href="#"><img src="assets/images/brand/overlay-brand-10.png" alt="Awesome Image"></a>
                            </div>
                        </div>
                        <!--End Single Partner Logo Box-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Partner Area-->






@endsection

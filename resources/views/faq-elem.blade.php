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
                                <li class="active">FAQ Layout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Faq Content Area-->
    <section class="faq-content-area faq-page elemp1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-content-box">
                        <div class="sec-title">
                            <p>frequency</p>
                            <div class="big-title black-clr"><h1>Frequency Rinbuild</h1></div>
                        </div>
                        <div class="accordion-box">
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn active"><h4>What industries do you serve?</h4></div>
                                <div class="accord-content collapsed">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has when an unknown printer took a galley of type and scrambled it to make.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn"><h4>What are your help desk hours?</h4></div>
                                <div class="accord-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has when an unknown printer took a galley of type and scrambled it to make.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block">
                                <div class="accord-btn"><h4>What types of systems do you support?</h4></div>
                                <div class="accord-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has when an unknown printer took a galley of type and scrambled it to make.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block marginbottom0">
                                <div class="accord-btn"><h4>What does having managed it services cost?</h4></div>
                                <div class="accord-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has when an unknown printer took a galley of type and scrambled it to make.</p>
                                </div>
                            </div>
                            <!--End single accordion box-->
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq-image-box" data-aos="fade-left" data-aos-duration="0" data-aos-delay="0">
                        <img src="assets/images/resources/faq-image.jpg" alt="Awesome Image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Faq Content Area-->


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

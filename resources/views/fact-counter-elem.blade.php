@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: {{url('assets/images/breadcrumb/breadcrumb-1.jpg')}};">
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
                                <li class="active">Fact Counter Layout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Fact Counter Area-->
    <section class="fact-counter-area elemp1">
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

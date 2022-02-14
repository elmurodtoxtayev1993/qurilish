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
                                <li class="active">Blog Layout 02</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start latest blog area -->
    <section class="latest-blog-area elemp1">
        <div class="container">
            <div class="sec-title text-center">
                <p>Our Blog</p>
                <div class="big-title black-clr"><h1>Our Letest Posts</h1></div>
            </div>
            <div class="row">
                <!--Start single blog post-->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-blog-post style2 wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1300ms">
                        <div class="img-holder">
                            <img src="assets/images/blog/blog-v5-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one bg1"></div>
                            <div class="post-date">
                                <p><span class="flaticon-clock"></span>20/10/19</p>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Sed volutpat velit purus, eget ultricies pretium orci pretium id. Quisque purus, eget ultricies pretium.</a></h3>
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
                <!--Start single blog post-->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-blog-post style2 wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1300ms">
                        <div class="img-holder">
                            <img src="assets/images/blog/blog-v5-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one bg1"></div>
                            <div class="post-date">
                                <p><span class="flaticon-clock"></span>20/10/19</p>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Sed volutpat velit purus, eget ultricies pretium orci pretium id. Quisque purus, eget ultricies pretium.</a></h3>
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
            </div>
        </div>
    </section>
    <!--End latest blog area-->


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

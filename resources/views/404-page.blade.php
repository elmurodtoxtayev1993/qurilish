@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: {{url('assets/images/breadcrumb/breadcrumb-1.jpg)}};">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Error Page</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="{{url('/')}}">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">404</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Error Page Area-->
    <section class="error-page-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-content text-center">
                        <h4>Page Not Found</h4>
                        <div class="title">404</div>
                        <p>We’re unable to find a page you are looking for, Try later or click the button.</p>
                        <div class="button">
                            <a class="btn-one" href="{{url('/')}}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page  wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" Area-->

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

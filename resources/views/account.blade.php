@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Account Page</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area -->

    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="form">
                        <div class="shop-page-title">
                            <h4>Login Now</h4>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-xl-12">
                                    <div class="input-field">
                                        <input type="text" name="name" placeholder="Your Name *">
                                        <div class="icon-holder">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-field">
                                        <input type="text" name="email" placeholder="Enter Mail id *">
                                        <div class="icon-holder">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-field">
                                        <input type="text" name="password" placeholder="Enter Password">
                                        <div class="icon-holder">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-sm-12">
                                            <button class="btn-one" type="submit">Login Now</button>
                                            <div class="remember-text">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="remember" type="checkbox">
                                                        <span>Remember Me</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-sm-12">
                                            <ul class="social-icon">
                                                <li class="login-with">Or login with</li>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="form register">
                        <div class="shop-page-title">
                            <h4>Register Here</h4>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="text" name="name" placeholder="Your Name *">
                                        <div class="icon-holder">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="text" name="email" placeholder="Enter Mail id *">
                                        <div class="icon-holder">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="text" name="password" placeholder="Enter Password">
                                        <div class="icon-holder">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row right-button">
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <button class="btn-one" type="submit">Register</button>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="right">
                                                <h6><span>*</span>You must be a free registered user</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End login register area-->

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

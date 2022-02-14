@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Contact Info Area-->
    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="single-contact-info-box text-center">
                        <div class="icon"><span class="flaticon-headphones"></span></div>
                        <div class="title">
                            <h3>Our Phone</h3>
                            <ul>
                                <li><a href="tel:+55566677799900">(+555) 666 777 999 00</a></li>
                                <li><a href="tel:+8866655522200">(+88) 666 555 222 00</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single-contact-info-box text-center">
                        <div class="icon"><span class="flaticon-mail-1"></span></div>
                        <div class="title">
                            <h3>Our Mail Box</h3>
                            <ul>
                                <li><a href="mailto:info@templatepath.com">phantom.info@gmail.com</a></li>
                                <li><a href="mailto:info@templatepath.com">etchenetomi.info@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single-contact-info-box text-center">
                        <div class="icon"><span class="flaticon-pin-1"></span></div>
                        <div class="title">
                            <h3>Our Location</h3>
                            <p>121 King Street, Melbourne Victoria<br> 3000, Australia</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Contact Info Area-->

    <!--Start Contact Form Section-->
    <section class="contact-form-area">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="contact-form">
                        <div class="title">
                            <h3>Leave Reply</h3>
                        </div>
                        <div class="inner-box">
                            <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <p>Name:</p>
                                            <input type="text" name="form_name" value="" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <p>Email Address:</p>
                                            <input type="email" name="form_email" value="" placeholder="" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <p>Subject:</p>
                                            <input type="text" name="form_subject" value="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <p>Phone:</p>
                                            <input type="text" name="form_phone" value="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <p>Message:</p>
                                            <textarea name="form_message" placeholder="" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="contact-information-box">
                        <div class="title">
                            <h3>Contact Info</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                        </div>
                        <ul class="contact-us">
                            <li>
                                <div class="icon">
                                    <span class="flaticon-pin-1"></span>
                                </div>
                                <div class="text">
                                    <p>27 Division St, New York,<br> NY 10002, USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-open-envelope-with-letter"></span>
                                </div>
                                <div class="text">
                                    <a href="mailto:info@templatepath.com">bioxin.zin@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-smartphone"></span>
                                </div>
                                <div class="text">
                                    <a href="tel:+11987654321">(+11) 987654321</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Contact Form Section-->



    <section class="google-map-area">
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="assets/images/resources/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>


@endsection

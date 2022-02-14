@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Product Details</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start shop area-->
    <section id="shop-area" class="single-shop-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="shop-content">
                        <!--Start single shop content-->
                        <div class="single-shop-content">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="single-product-image-holder">

                                        <ul class="slider-content clearfix bxslider2">
                                            <li>
                                                <div class="single-product-slide clearfix">
                                                    <div class="big-image-box">
                                                        <img src="assets/images/shop/shop-single-1.jpg" alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-product-slide clearfix">
                                                    <div class="big-image-box">
                                                        <img src="assets/images/shop/shop-single-2.jpg" alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-product-slide clearfix">
                                                    <div class="big-image-box">
                                                        <img src="assets/images/shop/shop-single-3.jpg" alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-product-slide clearfix">
                                                    <div class="big-image-box">
                                                        <img src="assets/images/shop/shop-single-4.jpg" alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="slider-pager clearfix">
                                            <ul class="thumb-box">
                                                <li>
                                                    <a class="active" data-slide-index="0" href="#">
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/shop-single-thumb-1.jpg" alt="Awesome Image">
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="1" href="#">
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/shop-single-thumb-2.jpg" alt="Awesome Image">
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="2" href="#">
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/shop-single-thumb-3.jpg" alt="Awesome Image">
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="3" href="#">
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/shop-single-thumb-4.jpg" alt="Awesome Image">
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="slider-pager clearfix arrow-button">
                                            <div class="center">
                                                <ul class="nav-link list-inline">
                                                    <li id="slider-prev"></li>
                                                    <li id="slider-next"></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-5">
                                    <div class="content-box">
                                        <div class="top">
                                            <div class="title-box">
                                                <h3>POM GEAR Pro2Go P-ONE Bluetooth<br> Noise-Cancelling Earbuds</h3>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                        <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                        <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                        <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                        <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    </ul>
                                                    <h5>Interested : 05 <span class="review-text">564 Reviews(S)</span></h5>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <div class="left">
                                                    <h3>$990 <del>$999</del></h3>
                                                </div>
                                                <div class="right">
                                                    <p>Availability : <span>IN STOCK</span></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-info-box">
                                            <div class="product-size">
                                                <ul>
                                                    <li><a href="#">XS</a></li>
                                                    <li class="active"><a href="#">S</a></li>
                                                    <li><a href="#">M</a></li>
                                                    <li><a href="#">L</a></li>
                                                    <li><a href="#">XL</a></li>
                                                </ul>
                                            </div>
                                            <div class="product-quantity-box">
                                                <div class="left">
                                                    <h6>Qty</h6>
                                                </div>
                                                <div class="input-box">
                                                    <input class="quantity-spinner" type="text" value="2" name="quantity">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text">
                                            <p>Nulla in lacus at nibh suscipit placerat. Pellentesque efficitur molestie velit ac pharetra. Sed accumsan augue nunc, ac hendrerit tortor egestas nec. Etiam tincidunt arcu non felis finibus accumsan hendrerit laoreet.</p>
                                        </div>

                                        <div class="share-products-socials">
                                            <h5>Share</h5>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook fb" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter tw" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest pin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin lin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="addto-cart-box">
                                            <div class="cart-box">
                                                <button class="addtocart" type="submit">Add To Cart<span class="flaticon-supermarket"></span></button>
                                            </div>
                                            <div class="menu-box">
                                                <ul class="clearfix">
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--End single shop content-->
                        <!--Start product tab box-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-tab-box tabs-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#desc" class="tab-btn active-btn"><span>description</span></li>
                                        <li data-tab="#comme" class="tab-btn"><span>COMMENTS</span></li>
                                        <li data-tab="#review" class="tab-btn"><span>review</span></li>
                                    </ul>
                                    <div class="tabs-content">
                                        <div class="tab active-tab" id="desc">
                                            <div class="product-details-content">
                                                <div class="desc-content-box">
                                                    <p>MOVIE STAR – Online Movie,Video & TV Show PSD Template is a the best design for 2017. any kinds of online video Template Based on Bootstrap, 12 column Responsive grid Template. “MOVIE STAR” is a smooth and colorful online video PSD Template, perfect suitable for , Businesses or Personal One page Template. It includes everything you need for the website development such as online Movie,Video & TV Show Template .PSD files are well organized also you can customize very easy . we have include 21 psd file for you. Please, don’t forget to leave a stars rating for this Template!</p>
                                                    <p>MOVIE STAR – Online Movie,Video & TV Show PSD Template is a the best design for 2017. any kinds of online video Template Based on Bootstrap, 12 column Responsive grid Template. “MOVIE STAR” is a smooth and colorful online video PSD Template, perfect suitable for , Businesses or Personal One page Template. It includes everything you need for the website development such as online Movie,Video & TV Show Template.</p>
                                                    <div class="bottom">
                                                        <h5>Item Features :</h5>
                                                        <ul>
                                                            <li>Perfect unique design</li>
                                                            <li>Fully responsive</li>
                                                            <li>Amazing parallax effects</li>
                                                            <li>SEO friendly</li>
                                                            <li>Well organized and valid code</li>
                                                            <li>Google fonts</li>
                                                            <li>WPML ready</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab" id="comme">
                                            <div class="review-form">
                                                <div class="shop-page-title">
                                                    <div class="title">Add Your Comments</div>
                                                    <p>Your email address will not be published. Required fields are marked <b>*</b></p>
                                                </div>
                                                <form id="review-form" action="#">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <p>Name<span>*</span></p>
                                                                <input type="text" name="fname" placeholder="" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <p>Email<span>*</span></p>
                                                                <input type="email" name="email" placeholder="" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="add-rating-box">
                                                                <div class="add-rating-title">
                                                                    <p>Your Rating</p>
                                                                </div>
                                                                <div class="review-box">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-box">
                                                                <p>Your Review<span>*</span></p>
                                                                <textarea name="review" placeholder="" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn-one" type="submit">Submit<span class="flaticon-next"></span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab" id="review">
                                            <div class="review-box-holder">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <!--Start single review outer box-->
                                                        <div class="single-review-outer-box">
                                                            <div class="single-review-box">
                                                                <div class="image-holder">
                                                                    <img src="assets/images/shop/review-1.png" alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <div class="top">
                                                                        <div class="name">
                                                                            <h3>Steven Rich <span> – April 10, 2019:</span></h3>
                                                                        </div>
                                                                        <div class="review-box">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Value for money , I use it from long time and it is very useful and good product.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End single review outer box-->
                                                        <!--Start single review outer box-->
                                                        <div class="single-review-outer-box">
                                                            <div class="single-review-box">
                                                                <div class="image-holder">
                                                                    <img src="assets/images/shop/review-2.png" alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <div class="top">
                                                                        <div class="name">
                                                                            <h3>William Cobus <span>– April 09, 2019:</span></h3>
                                                                        </div>
                                                                        <div class="review-box">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>We denounce with righteous indignation and dislike men who are so beguiled & demoralized.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End single review outer box-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product tab box-->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End shop area-->


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

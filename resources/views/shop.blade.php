@extends('lyouts.lyout')

@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Product Grid</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Shop area-->
    <section id="shop-area" class="main-shop-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 float-right">
                    <div class="shop-content">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="showing-result-shorting-box pdbottom70 clearfix">
                                    <div class="view-as-box">
                                        <div class="title">
                                            <h5>View as :</h5>
                                        </div>
                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shorting-box">
                                        <div class="title">
                                            <h5>Sort by :</h5>
                                        </div>
                                        <div class="selects-box">
                                            <select class="selectpicker" data-width="100%">
                                                <option selected="selected">Most Recent</option>
                                                <option>Last week </option>
                                                <option>This week</option>
                                                <option>Last Month</option>
                                                <option>Lasy year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="showing-box">
                                        <div class="title">
                                            <h5>Show :</h5>
                                        </div>
                                        <div class="selects-box">
                                            <select class="selectpicker" data-width="100%">
                                                <option selected="selected">11</option>
                                                <option>13</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop-pagination-box">
                                        <ul class="styled-pagination2">
                                            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-1.jpg" alt="Awesome Product Image">
                                        <div class="product-info">
                                            <p>10%</p>
                                        </div>
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-2.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-3.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-4.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->

                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-5.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-6.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-7.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-8.jpg" alt="Awesome Product Image">
                                        <div class="product-info black">
                                            <p>10%</p>
                                        </div>
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->

                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-9.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-10.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-5.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item">
                                    <div class="img-holder">
                                        <img src="assets/images/shop/shop-8.jpg" alt="Awesome Product Image">
                                        <div class="overlay-content">
                                            <a href="#">Add To Cart<span class="flaticon-supermarket"></span></a>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h4><a href="shop-single.html">Women Latest Trend</a></h4>
                                        <div class="bottom">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                    <li><a href="#"><span class="flaticon-star-of-favorites-outline"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span>$590.00</span><del>$569.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="showing-result-shorting-box pdtop30 clearfix">
                                    <div class="view-as-box">
                                        <div class="title">
                                            <h5>View as :</h5>
                                        </div>
                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shorting-box">
                                        <div class="title">
                                            <h5>Sort by :</h5>
                                        </div>
                                        <div class="selects-box">
                                            <select class="selectpicker" data-width="100%">
                                                <option selected="selected">Most Recent</option>
                                                <option>Last week </option>
                                                <option>This week</option>
                                                <option>Last Month</option>
                                                <option>Lasy year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="showing-box">
                                        <div class="title">
                                            <h5>Show :</h5>
                                        </div>
                                        <div class="selects-box">
                                            <select class="selectpicker" data-width="100%">
                                                <option selected="selected">11</option>
                                                <option>13</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop-pagination-box">
                                        <ul class="styled-pagination2">
                                            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Shop area-->


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

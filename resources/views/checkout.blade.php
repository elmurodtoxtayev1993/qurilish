@extends('lyouts.lyout')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Checkout Page</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area -->

    <!--Start Checkout  area  -->
    <section class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="checkout-form">
                        <form id="checkout-form" name="checkout_form" class="default-form2" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="buyer-info">
                                        <div class="top">
                                            <div class="left">
                                                <h5>Buyer Info</h5>
                                            </div>
                                            <div class="right">
                                                <h5>Login Here</h5>
                                            </div>
                                        </div>
                                        <div class="form-box">
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>First Name :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_fname" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>Last Name :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_lname" value="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>Address 1 :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_addr1" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>Address 2 :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_addr2" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>City :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_city" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>Postal Code :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_pcode" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>Country :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_country" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="left">
                                                    <p>State :</p>
                                                </div>
                                                <div class="right">
                                                    <input type="text" name="form_state" value="" placeholder="" required="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="billing-info">
                                        <div class="top">
                                            <h5>Billing Details</h5>
                                        </div>
                                        <div class="inner-box">
                                            <h5>Product <span class="pull-right">Total</span></h5>
                                            <ul>
                                                <li>There are many variations <span class="pull-right">$999.00</span></li>
                                                <li>Size <span>XL</span></li>
                                                <li>Color <span>RED</span></li>
                                                <li>Delivary Cost <span class="pull-right">$9.00</span></li>
                                            </ul>
                                            <h4>Order total <span class="pull-right">$1008.00</span></h4>
                                        </div>
                                    </div>

                                    <div class="payment-info">
                                        <div class="top">
                                            <h5>Payment Methods</h5>
                                        </div>
                                        <div class="inner-box">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem.</p>
                                            <div class="payment-tab tabs-box">
                                                <ul class="tab-btns tab-buttons clearfix">
                                                    <li data-tab="#paypal" class="tab-btn active-btn"><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>
                                                    <li data-tab="#stripe" class="tab-btn"><i class="fa fa-cc-stripe" aria-hidden="true"></i></li>
                                                    <li data-tab="#visa" class="tab-btn"><i class="fa fa-cc-visa" aria-hidden="true"></i></li>
                                                    <li data-tab="#mastercard" class="tab-btn"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                                    <li data-tab="#amex" class="tab-btn"><i class="fa fa-cc-amex" aria-hidden="true"></i></li>
                                                </ul>
                                                <div class="tabs-content">
                                                    <div class="tab active-tab" id="paypal">
                                                        <div class="payment-input-box">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Card Number :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cnum" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>CVV :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cvv" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Month :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_month" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Year :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_year" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab" id="stripe">

                                                        <div class="payment-input-box">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Card Number :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cnum" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>CVV :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cvv" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Month :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_month" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Year :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_year" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab" id="visa">

                                                        <div class="payment-input-box">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Card Number :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cnum" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>CVV :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cvv" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Month :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_month" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Year :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_year" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab" id="mastercard">

                                                        <div class="payment-input-box">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Card Number :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cnum" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>CVV :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cvv" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Month :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_month" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Year :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_year" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab" id="amex">
                                                        <div class="payment-input-box">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Card Number :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cnum" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>CVV :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_cvv" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Month :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_month" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="input-box">
                                                                        <div class="left">
                                                                            <p>Year :</p>
                                                                        </div>
                                                                        <div class="right">
                                                                            <input type="text" name="form_year" value="" placeholder="" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="place-order-button-box text-center">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">Place Order</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Checkout area-->

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

@extends('lyouts.lyout')

@section('content')


    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Cart Page</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index.html">Home Back</a></li>
                                <li><span class="flaticon-next-1"></span></li>
                                <li class="active">Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start cart area   <th class="hide-me">&nbsp;</th>-->
    <section class="cart-area">
        <div class="auto-container-box">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                            <tr>
                                <th class="prod-column">Product</th>
                                <th>Description</th>
                                <th>Model</th>
                                <th>Edit</th>
                                <th>Quantite</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="#"><img src="assets/images/shop/cart-product-thumb-1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="description">
                                    <div class="product-description">
                                        <h4>There are many variations</h4>
                                        <p>Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div>
                                </td>
                                <td class="model">
                                    <p>Product-23</p>
                                </td>
                                <td class="edit">
                                    <div class="product-edit-delet-button">
                                        <div class="button">
                                            <a href="#"><span class="flaticon-edit"></span></a>
                                        </div>
                                        <div class="button">
                                            <a href="#"><span class="flaticon-trash"></span></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="qty">
                                    <div class="product-quantity-box">
                                        <div class="input-box">
                                            <input class="quantity-spinner" type="text" value="2" name="quantity">
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$999.00</td>
                                <td class="sub-total">$999.00</td>
                            </tr>

                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="#"><img src="assets/images/shop/cart-product-thumb-1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="description">
                                    <div class="product-description">
                                        <h4>There are many variations</h4>
                                        <p>Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div>
                                </td>
                                <td class="model">
                                    <p>Product-24</p>
                                </td>
                                <td class="edit">
                                    <div class="product-edit-delet-button">
                                        <div class="button">
                                            <a href="#"><span class="flaticon-edit"></span></a>
                                        </div>
                                        <div class="button">
                                            <a href="#"><span class="flaticon-trash"></span></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="qty">
                                    <div class="product-quantity-box">
                                        <div class="input-box">
                                            <input class="quantity-spinner" type="text" value="2" name="quantity">
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$999.00</td>
                                <td class="sub-total">$999.00</td>
                            </tr>

                            </tbody>
                        </table>

                        <div class="cart-button clearfix">
                            <div class="button-left pull-left">
                                <button class="btn-one" type="submit" data-loading-text="Please wait...">CONTINUE SHOPPING</button>
                            </div>
                            <div class="button-right pull-right">
                                <button class="btn-one" type="submit" data-loading-text="Please wait...">UPDATE SHOPPING CART</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row cart-bottom-box">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="estimate-form-box">
                        <div class="title">
                            <h4>Estimate Shopping And Tax</h4>
                        </div>
                        <form id="estimate-form" name="estimate_form" class="default-form2" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <p>Country:</p>
                                        <input type="text" name="form_country" value="" placeholder="United States" required="">
                                    </div>
                                    <div class="input-box">
                                        <p>State/Province:</p>
                                        <input type="text" name="form_state" value="" placeholder="Please select region, state or province" required="">
                                    </div>
                                    <div class="input-box">
                                        <p>Zip/Postal Code:</p>
                                        <input type="text" name="form_zip" value="" placeholder="">
                                    </div>
                                    <div class="button-box">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">GET QUOTE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="discount-form-box">
                        <div class="title">
                            <h4>Discount Code</h4>
                        </div>
                        <form id="discount-form" name="discount_form" class="default-form2" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input type="text" name="form_coupon" value="" placeholder="" required="">
                                    </div>
                                    <div class="button-box">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">APPLY</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="checkout-form-box">
                        <form id="checkout-form" name="checkout_form" class="default-form2" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-12">
                                    <ul>
                                        <li>Subtotal <span>$999.00</span></li>
                                        <li>Grand Total <span>$999.00</span></li>
                                    </ul>
                                    <div class="button-box">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">PROCED TO CHECKOUT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End cart area-->


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

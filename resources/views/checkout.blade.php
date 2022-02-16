<x-navigation-layout>
    <body>
            <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                    <!-- checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner">
                            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title">Billing Details</h3>
                                    <div class="ec-bl-block-content">
                                        <div class="ec-check-bill-form">
                                            <form action="#" method="post">
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>First Name*</label>
                                                    <input type="text" name="firstname"
                                                        placeholder="Enter your first name" required />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Last Name*</label>
                                                    <input type="text" name="lastname"
                                                        placeholder="Enter your last name" required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Address</label>
                                                    <input type="text" name="address" placeholder="Address Line 1" />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>City *</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_city" id="ec-select-city"
                                                            class="ec-bill-select">
                                                            <option selected disabled>City</option>
                                                            <option value="1">City 1</option>
                                                            <option value="2">City 2</option>
                                                            <option value="3">City 3</option>
                                                            <option value="4">City 4</option>
                                                            <option value="5">City 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Post Code</label>
                                                    <input type="text" name="postalcode" placeholder="Post Code" />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Country *</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_country" id="ec-select-country"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Country</option>
                                                            <option value="1">Country 1</option>
                                                            <option value="2">Country 2</option>
                                                            <option value="3">Country 3</option>
                                                            <option value="4">Country 4</option>
                                                            <option value="5">Country 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Region State</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_state" id="ec-select-state"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Region/State</option>
                                                            <option value="1">Region/State 1</option>
                                                            <option value="2">Region/State 2</option>
                                                            <option value="3">Region/State 3</option>
                                                            <option value="4">Region/State 4</option>
                                                            <option value="5">Region/State 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <span class="ec-check-order-btn">
                                <a class="btn btn-primary" href="#">Place Order</a>
                            </span>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-checkout-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-summary">
                                    <div>
                                        <span class="text-left">Sub-Total</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Delivery Charges</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Coupan Discount</span>
                                        <span class="text-right"><a class="ec-checkout-coupan">Apply Coupan</a></span>
                                    </div>
                                    <div class="ec-checkout-coupan-content">
                                        <form class="ec-checkout-coupan-form" name="ec-checkout-coupan-form"
                                            method="post" action="#">
                                            <input class="ec-coupan" type="text" required=""
                                                placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                            <button class="ec-coupan-btn button btn-primary" type="submit"
                                                name="subscribe" value="">Apply</button>
                                        </form>
                                    </div>
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Total Amount</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                </div>
                                <div class="ec-checkout-pro">
                                    <div class="col-sm-12 mb-6">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('tlandingPage/assets/images/product-image/1_1.jpg')}}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('tlandingPage/assets/images/product-image/1_2.jpg')}}"
                                                            alt="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddy bear</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$95.00</span>
                                                    <span class="new-price">$79.00</span>
                                                </span>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-color">
                                                        <span class="ec-pro-opt-label">Color</span>
                                                        <ul class="ec-opt-swatch ec-change-img">
                                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/1_1.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_1.jpg')}}"
                                                                    data-tooltip="Gray"><span
                                                                        style="background-color:#6d4c36;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/1_2.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_2.jpg')}}"
                                                                    data-tooltip="Orange"><span
                                                                        style="background-color:#ffb0e1;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/1_3.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_3.jpg')}}"
                                                                    data-tooltip="Green"><span
                                                                        style="background-color:#8beeff;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/1_4.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_4.jpg')}}"
                                                                    data-tooltip="Sky Blue"><span
                                                                        style="background-color:#74f8d1;"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ec-pro-size">
                                                        <span class="ec-pro-opt-label">Size</span>
                                                        <ul class="ec-opt-size">
                                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                    data-old="$95.00" data-new="$79.00"
                                                                    data-tooltip="Small">S</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$90.00"
                                                                    data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$80.00"
                                                                    data-new="$60.00" data-tooltip="Large">X</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                    data-new="$50.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-0">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('tlandingPage/assets/images/product-image/8_1.jpg')}}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('tlandingPage/assets/images/product-image/8_2.jpg')}}"
                                                            alt="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart I watch 2GB</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$58.00</span>
                                                    <span class="new-price">$45.00</span>
                                                </span>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-color">
                                                        <span class="ec-pro-opt-label">Color</span>
                                                        <ul class="ec-opt-swatch ec-change-img">
                                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/8_2.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/8_2.jpg')}}"
                                                                    data-tooltip="Gray"><span
                                                                        style="background-color:#f3f3f3;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/8_3.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/8_3.jpg')}}"
                                                                    data-tooltip="Orange"><span
                                                                        style="background-color:#fac7f3;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{asset('tlandingPage/assets/images/product-image/8_4.jpg')}}"
                                                                    data-src-hover="{{asset('tlandingPage/assets/images/product-image/8_4.jpg')}}"
                                                                    data-tooltip="Green"><span
                                                                        style="background-color:#c5f1ff;"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ec-pro-size">
                                                        <span class="ec-pro-opt-label">Size</span>
                                                        <ul class="ec-opt-size">
                                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                    data-old="$48.00" data-new="$45.00"
                                                                    data-tooltip="Small">S</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$90.00"
                                                                    data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$80.00"
                                                                    data-new="$60.00" data-tooltip="Large">X</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                    data-new="$50.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                    <div class="ec-sidebar-wrap ec-check-pay-img-wrap">
                        <!-- Sidebar Payment Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Payment Method</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-check-pay-img-inner">
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment1.png')}}" alt="">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment2.png')}}" alt="">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment3.png')}}" alt="">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment4.png')}}" alt="">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment5.png')}}" alt="">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment6.png')}}" alt="">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/icons/payment7.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Payment Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/6_1.jpg')}}" alt="Product" />
                                    <img class="hover-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/6_2.jpg')}}" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="{{asset('tlandingPage/assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="{{asset('tlandingPage/assets/images/icons/compare.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="{{asset('tlandingPage/assets/images/icons/cart.svg')}}" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="{{asset('tlandingPage/assets/images/icons/wishlist.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$27.00</span>
                                <span class="new-price">$22.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/6_1.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/6_1.jpg')}}"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#e8c2ff;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/6_2.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/6_2.jpg')}}"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#9cfdd5;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                data-old="$25.00" data-new="$20.00"
                                                data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/7_1.jpg')}}" alt="Product" />
                                    <img class="hover-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/7_2.jpg')}}" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="{{asset('tlandingPage/assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="{{asset('tlandingPage/assets/images/icons/compare.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="{{asset('tlandingPage/assets/images/icons/cart.svg')}}" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="{{asset('tlandingPage/assets/images/icons/wishlist.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$12.00</span>
                                <span class="new-price">$10.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/7_1.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/7_1.jpg')}}"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#01f1f1;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/7_2.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/7_2.jpg')}}"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#b89df8;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                data-old="$12.00" data-new="$10.00"
                                                data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                data-new="$12.00" data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/1_1.jpg')}}" alt="Product" />
                                    <img class="hover-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/1_2.jpg')}}" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="{{asset('tlandingPage/assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="{{asset('tlandingPage/assets/images/icons/compare.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="{{asset('tlandingPage/assets/images/icons/cart.svg')}}" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="{{asset('tlandingPage/assets/images/icons/wishlist.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$40.00</span>
                                <span class="new-price">$30.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/1_1.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_1.jpg')}}"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#90cdf7;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/1_2.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_2.jpg')}}"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#ff3b66;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/1_3.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_3.jpg')}}"
                                                data-tooltip="Green"><span
                                                    style="background-color:#ffc476;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/1_4.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/1_4.jpg')}}"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#1af0ba;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                data-old="$40.00" data-new="$30.00"
                                                data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                data-new="$40.00" data-tooltip="Medium">M</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/2_1.jpg')}}" alt="Product" />
                                    <img class="hover-image"
                                        src="{{asset('tlandingPage/assets/images/product-image/2_2.jpg')}}" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview"
                                    title="Quick view" data-bs-toggle="modal"
                                    data-bs-target="#ec_quickview_modal"><img
                                        src="{{asset('tlandingPage/assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                        alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare"
                                        title="Compare"><img src="{{asset('tlandingPage/assets/images/icons/compare.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="{{asset('tlandingPage/assets/images/icons/cart.svg')}}" class="svg_img pro_svg"
                                            alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="{{asset('tlandingPage/assets/images/icons/wishlist.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$50.00</span>
                                <span class="new-price">$40.00</span>
                            </span>                                                
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="{{asset('tlandingPage/assets/images/product-image/2_1.jpg')}}"
                                                data-src-hover="{{asset('tlandingPage/assets/images/product-image/2_2.jpg')}}"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#fdbf04;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 shop-all-btn"><a href="#">Shop All Collection</a></div>
            </div>
        </div>
    </section>
    <!-- New Product end -->
    </body>
</x-navigation-layout>
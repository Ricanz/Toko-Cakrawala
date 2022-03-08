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
                                <li class="ec-breadcrumb-item"><a href="/">Home</a></li>
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
                                    <h3 class="ec-checkout-title">Detail Pembelian</h3>
                                    <div class="ec-bl-block-content">
                                        <div class="ec-check-bill-form">
                                            <form action="#" method="post">
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Nama Lengkap*</label>
                                                    <input type="text" name="firstname"
                                                        placeholder="Enter your first name" required />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>email*</label>
                                                    <input type="email" name="lastname"
                                                        placeholder="Enter your last name" required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Nomor Handphone (Whatsapp)</label>
                                                    <input type="text" name="address" placeholder="Address Line 1" />
                                                </span>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <span class="ec-check-order-btn">
                                <a class="btn btn-primary" href="#">Buat Pesanan</a>
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
                                        <span class="text-left">Total Pesanan</span>
                                        <span class="text-right">3</span>
                                    </div>
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Total Harga</span>
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
                                                    </a>
                                                </div>
                                            </div>
                                            @foreach ($cart_data as $item)
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $item->nama_produk }}</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span>Kuantitas: {{ $item->jumlah_produk }}</span> <br>
                                                    <span>Harga: Rp. {{ $item->harga_produk }}</span>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="new-price">Total: Rp. 200000</span>
                                                </span>
                                            </div>
                                            @endforeach
                                            
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
                                <h3 class="ec-sidebar-title">Metode Pembayaran</h3>
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
    </body>
</x-navigation-layout>
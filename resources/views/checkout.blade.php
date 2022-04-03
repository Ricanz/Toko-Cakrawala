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
                                            <form action="{{url('print-invoice')}}" method="POST">
                                                @csrf
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Nama Lengkap*</label>
                                                    <input type="text" name="nama"
                                                        placeholder="Masukkan nama Anda" required />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Email*</label>
                                                    <input type="email" name="email"
                                                        placeholder="Masukkan email Anda" required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Alamat</label>
                                                    <input type="text" name="alamat" placeholder="Masukan alamat Anda" />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Nomor Handphone (Whatsapp)</label>
                                                    <input type="number" name="no_hp" placeholder="Masukkan nomor Handphone/Whatsapp Anda" />
                                                </span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <span class="ec-check-order-btn">
                                <button class="btn btn-primary" type="submit">Buat Pesanan</button>
                            </span>
                        </div>

                    </form>
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
                                    @foreach (Helper::getCart() as $item)
                                    <div class="col-sm-12 mb-6">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset($item['foto_produk'])}}"
                                                            alt="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $item['nama_produk'] }}</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span>Kuantitas: {{ $item['jumlah_produk'] }}</span> <br>
                                                    <span>Harga: {{ $item['harga_produk'] }}</span>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="new-price">Total: Rp. {{$item['harga_produk']*$item['jumlah_produk']}}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
                                        <img src="{{asset('tlandingPage/assets/images/payment/bca.png')}}" alt="Bank BCA" width="50%">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/payment/bni.png')}}" alt="Bank BNI" width="50%">
                                    </div>
                                    <div class="ec-check-pay-img">
                                        <img src="{{asset('tlandingPage/assets/images/payment/mandiri.png')}}" alt="Bank Mandiri" width="50%">
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

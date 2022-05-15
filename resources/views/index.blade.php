<x-guest-layout>

    <!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
                <!-- Main slider -->
                <div class="swiper-wrapper">

                    @foreach ($banner as $item)
                    <div class="ec-slide-item swiper-slide d-flex slide-{{ $item->urutan }}"  style="background-image: url('{{ asset($item->banner)}}');">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-sm-12 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        <h2 class="ec-slide-stitle">{{ $item->sub_judul }}</h2>
                                        <h1 class="ec-slide-title">{{ $item->judul }}</h1>
                                        <div class="ec-slide-desc">
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                        @if (!$item->tombol == '' or null)
                                            <a href="{{ $item->link }}" class="btn btn-primary">{{ $item->tombol }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination swiper-pagination-white"></div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <!--  For developer (More icons find in https://www.svgrepo.com/) -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row d-none">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Top Category</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                    @foreach ($supplier as $item)
                        <div class="ec_cat_content ec_cat_content_1">
                            <div class="ec_cat_inner ec_cat_inner-1">
                                <img src="{{ asset($item->gambar) }}"
                                        class="svg_img" alt="Supplier" height="100px"/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">

                <!-- Sidebar area start -->
                <div class="ec-side-cat-overlay"></div>
                <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                    <div class="cat-sidebar">
                        <div class="cat-sidebar-box">
                            <div class="ec-sidebar-wrap">
                                <!-- Sidebar Category Block -->
                                <div class="ec-sidebar-block">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Kategori<button class="ec-close">×</button>
                                        </h3>
                                    </div>
                                    @foreach ($kategori as $k)
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img
                                                            src="{{ asset('tlandingPage/assets/images/icons/dress-8.svg') }}"
                                                            class="svg_img" alt="drink" />{{ $k->nama }}
                                                    </div>
                                                    <ul style="display: block;">
                                                        @foreach ($k->subkategori as $i)
                                                            <li>
                                                                <div class="ec-sidebar-sub-item"><a
                                                                        href="#">{{ $i->nama }}<span
                                                                            title="Available Stock"></span></a>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                    {{-- <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('tlandingPage/assets/images/icons/shoes-8.svg')}}" class="svg_img" alt="drink" />Footwear</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sports <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Formal <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Casual <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">safety shoes <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('tlandingPage/assets/images/icons/perfume-8.svg')}}" class="svg_img" alt="drink" />perfume</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Clothes perfume<span title="Available Stock">- 4 pcs</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">deodorant <span title="Available Stock">- 52 pcs</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Flower fragrance <span title="Available Stock">- 10 pack</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Air Freshener<span title="Available Stock">- 35 pack</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div> --}}
                                </div>
                                <!-- Sidebar Category Block -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product area start -->
                <div class="col-lg-9 col-md-12">

                    <div class="row space-t-50">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">Produk</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st Product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    <div class="row product_data">
                                        @foreach ($produk as $i)
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="product-left-sidebar.html" class="image">
                                                                <img class="main-image"
                                                                    src="{{ asset('storage/Produk/' . $i->gambar) }}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{ asset('storage/Produk/' . $i->gambar) }}"
                                                                    alt="Product" />
                                                            </a>
                                                            {{-- <span class="percentage">20%</span> --}}
                                                            <div class="ec-pro-actions">
                                                                <a href="{{ url("/produk-detail/$i->slug") }}" class="ec-btn-group quickview"><img
                                                                        src="{{ asset('tlandingPage/assets/images/icons/quickview.svg') }}"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                                <form method="POST"
                                                                    action="{{ route('addToCart') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="produk_id"
                                                                        class="produk_id"
                                                                        value="{{ $i->id }}">
                                                                    <input type="hidden" name="jumlah_produk"
                                                                        class="qty-input" value="1">
                                                                    <button title="Add To Cart" type="submit"><img
                                                                            src="{{ asset('tlandingPage/assets/images/icons/pro_cart.svg') }}"
                                                                            class="svg_img pro_svg" alt="" /></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <a href="{{ url("/produk-detail/$i->slug") }}">
                                                            <h6 class="ec-pro-stitle">{{ $i->kategori->nama }}</h6>
                                                        </a>
                                                        <h5 class="ec-pro-title"><a
                                                                href="product-left-sidebar.html">{{ $i->nama }}</a>
                                                        </h5>
                                                        <div class="ec-pro-rat-price">
                                                            <span class="ec-pro-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                            </span>
                                                            <span class="ec-price">
                                                                <span
                                                                    class="new-price">Rp.{{ $i->harga }},00</span>
                                                            </span>
                                                            <form method="post"
                                                            action="{{ route('addToCart') }}">
                                                            @csrf
                                                            <input type="hidden" name="produk_id"
                                                                class="produk_id"
                                                                value="{{ $i->id }}">
                                                            <input type="hidden" name="jumlah_produk"
                                                                class="qty-input" value="1">
                                                                <div class="ec-check-order-btn col-3">
                                                                    <button title="Add To Cart" type="submit" class="btn btn-primary">tambah_keranjang</button>
                                                                </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- ec 1st Product tab end -->
                                <!-- ec 2nd Product tab start -->
                                @foreach ($kategori as $p)
                                    <div class="tab-pane fade" id="{{ $p->nama }}">
                                        <div class="row product_data">
                                            @foreach ($p->produk as $i)
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                    <div class="ec-product-inner">
                                                        <div class="ec-pro-image-outer">
                                                            <div class="ec-pro-image">
                                                                <a href="product-left-sidebar.html"
                                                                    class="image">
                                                                    <img class="main-image"
                                                                        src="{{ asset('storage/Produk/' . $i->gambar) }}"
                                                                        alt="Product" />
                                                                    <img class="hover-image"
                                                                        src="{{ asset('storage/Produk/' . $i->gambar) }}"
                                                                        alt="Product" />
                                                                </a>
                                                                <div class="ec-pro-actions">
                                                                    <a class="ec-btn-group wishlist"
                                                                        title="Wishlist"><img
                                                                            src="{{ asset('tlandingPage/assets/images/icons/pro_wishlist.svg') }}"
                                                                            class="svg_img pro_svg" alt="" /></a>
                                                                    <a href="#" class="ec-btn-group quickview"
                                                                        data-link-action="quickview" title="Quick view"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#ec_quickview_modal"><img
                                                                            src="{{ asset('tlandingPage/assets/images/icons/quickview.svg') }}"
                                                                            class="svg_img pro_svg" alt="" /></a>
                                                                    <a href="compare.html" class="ec-btn-group compare"
                                                                        title="Compare"><img
                                                                            src="{{ asset('tlandingPage/assets/images/icons/compare.svg') }}"
                                                                            class="svg_img pro_svg" alt="" /></a>
                                                                    <input type="hidden" class="produk_id"
                                                                        value="{{ $i->id }}">
                                                                    <!-- Your Product ID -->
                                                                    <input type="text" class="qty-input"
                                                                        value="{{ $i->stok }}">
                                                                    <!-- Your Number of Quantity -->
                                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                                        class="ec-btn-group add-to-cart-btn btn"><img
                                                                            src="{{ asset('tlandingPage/assets/images/icons/pro_cart.svg') }}"
                                                                            class="svg_img pro_svg" alt="" /></a>
                                                                    {{-- <button  title="Add To Cart" class="addToCart-btn btn"><img src="{{asset('tlandingPage/assets/images/icons/pro_cart.svg')}}"
                                                                        class="svg_img pro_svg" alt="" /></button> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ec-pro-content">
                                                            <a href="">
                                                                <h6 class="ec-pro-stitle">{{ $i->kategori->nama }}
                                                                </h6>
                                                            </a>
                                                            <h5 class="ec-pro-title"><a
                                                                    href="product-left-sidebar.html">{{ $i->nama }}</a>
                                                            </h5>
                                                            <div class="ec-pro-rat-price">
                                                                <span class="ec-pro-rating">
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                </span>
                                                                <span class="ec-price">
                                                                    <span
                                                                        class="new-price">Rp.{{ $i->harga }},00</span>
                                                                    {{-- <span class="old-price">$87.00</span> --}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                <!-- ec 2nd Product tab end -->
                            </div>
                        </div>
                    </div>

                    <!-- Deal of the day Start -->
                    <div class="row space-t-50" data-animation="fadeIn">
                        <!--  Special Section Start -->
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Kelebihan Toko Cakrawala</h2>
                                    <p>Produk yang kami sediakan mengacu pada prinsip: <strong>Good, Better & Best </strong></p>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive"
                                                    src="{{ asset('tlandingPage/assets/images/product-image/111_1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Kualitas Harga</a></h5>
                                        {{-- <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Kualitas
                                            Aluminium Terjamin</a></h5> --}}
                                            <div class="ec-spe-pro-desc">
                                                    Untuk proses pelayanan terbaiknya kepada pelanggan, Toko Cakrawala juga dilengkapi dengan sistem komputerisasi dan Quality Control yang ketat sehingga setiap produk yang disajikan adalah dalam status good, better, best.
                                                Produk bahan bangunan yang disediakan juga langsung dari produsen (manufacturer) sehingga harga yang disajikan kepada konsumen adalah harga rata-rata eceran yang ada di pasar.
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Lihat Semua Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive"
                                                    src="{{ asset('tlandingPage/assets/images/product-image/111_1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Produk</a></h5>
                                            <div class="ec-spe-pro-desc">
                                                Produk bahan bangunan atap yang disediakan juga langsung dari produsen (manufacturer) sehingga harga yang disajikan kepada konsumen adalah harga rata-rata eceran yang ada di pasar.
                                                Untuk melayani kebutuhan pelanggannya, Toko Cakrawala juga menyediakan Attendant terlatih yang siap memberikan pelayanan dan pengarahan teknis atas produk-produk yang tersedia.
                                                Toko Cakrawala berusaha memenuhi segala kebutuhan masyarakat dari berbagai lapisan dan profesi mulai dari Tukang Bangunan, Kontraktor, Arsitek, Desainer, Real Estate, Developer, dan pemilik rumah.

                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Lihat Semua Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Special Section End -->
                    </div>
                    <!-- Deal of the day end -->

                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  Testimonial, Banner & Service Section Start -->
    <section class="section ec-ser-spe-section section-space-p">
        <div class="container" data-animation="fadeIn">
            <div class="row">
                <!-- ec Testimonial Start -->
                <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb"
                    data-animation="slideInRight">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Testimonial</h2>
                        </div>
                    </div>
                    <div class="ec-test-outer">
                        <ul id="ec-testimonial-slider">
                            @foreach ($testimonial as $t)
                                <li class="ec-test-item">
                                    <div class="ec-test-inner">
                                        <div class="ec-test-img">
                                            <img alt="testimonial" title="testimonial"
                                                src="{{ asset('storage/Testimonial/' . $t->gambar) }}" />
                                        </div>
                                        <div class="ec-test-content">
                                            <div class="ec-test-name">{{ $t->nama }}</div>
                                            <div class="ec-test-designation">- {{ $t->perusahaan }}</div>
                                            <div class="ec-test-divider">
                                                <img src="{{ asset('tlandingPage/assets/images/testimonial/quotes.svg') }}"
                                                    class="svg_img test_svg" alt="" />
                                            </div>
                                            <div class="ec-test-desc">{{ $t->deskripsi }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ec Testimonial end -->
                <!-- ec Banner Start -->
                <div class="col-md-6 col-sm-12" data-animation="fadeIn"  id="pemesanan">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-1">
                            <div class="banner-block">
                                {{-- <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-disc">25% discount</span>
                                        <span class="ec-banner-title">Vegetables & Fruits</span>
                                        <span class="ec-banner-stitle">Starting @ $10</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop Now <i
                                                class="ecicon eci-angle-double-right"
                                                aria-hidden="true"></i></a></span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Banner End -->
                <!--  Service Section Start -->
                <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Layanan Kami</h2>
                        </div>
                    </div>
                    <div class="ec_ser_block">
                        <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{ asset('tlandingPage/assets/images/icons/service_4_5.svg') }}"
                                        class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Material</h2>
                                    <p>Menjual material konstruksi atap dan langit-langit</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{ asset('tlandingPage/assets/images/icons/service_4_1.svg') }}"
                                        class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Pengiriman</h2>
                                    <p>Layanan antar JABODETABEK</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{ asset('tlandingPage/assets/images/icons/service_4_2.svg') }}"
                                        class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Konsultasi</h2>
                                    <p>Menjual material konstruksi atap dan langit-langit</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{ asset('tlandingPage/assets/images/icons/service_4_3.svg') }}"
                                        class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Online Support</h2>
                                    <p>Belanja via telp/WA</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{ asset('tlandingPage/assets/images/icons/service_4_4.svg') }}"
                                        class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Konsultasi</h2>
                                    <p>Konsultasi jenis dan kebutuhan material</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Service End -->
            </div>
        </div>
    </section>
    <!--  End Testimonial, Banner & Service Section Start -->

    <!--  Blog Section Start -->
    <section class="section ec-blog-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blog-slider owl-carousel" data-animation="fadeIn">

                    @foreach ($artikel as $item)
                    <div class="ec-blog-block">
                            <div class="ec-blog-inner">
                                <div class="ec-blog-image">
                                    <a href="">
                                        <img class="blog-image"
                                            src="{{ asset($item->gambar) }}"
                                            alt="Blog" />
                                    </a>
                                </div>
                                <div class="ec-blog-content">
                                    <div class="ec-blog-cat"><a href="{{ url("artikel-detail/$item->slug") }}">Artikel</a></div>
                                    <h5 class="ec-blog-title"><a href="{{ url("artikel-detail/$item->slug") }}">{{ $item->judul }}</a></h5>

                                    <div class="ec-blog-date">Oleh<span>Admin</span> / {{ date('d-m-Y', strtotime($item->created_at)) }}</div>
                                </div>
                            </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--  Blog Section End -->
</x-guest-layout>

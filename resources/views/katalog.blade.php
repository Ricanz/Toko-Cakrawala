<x-guest-layout>
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
                                <h2 class="ec-title">Katalog</h2>
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
                                                            <a href="{{ url("/produk-detail/$i->slug") }}" class="image">
                                                                <img class="main-image"
                                                                    src="{{ asset('storage/Produk/' . $i->gambar) }}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{ asset('storage/Produk/' . $i->gambar) }}"
                                                                    alt="Product" />
                                                            </a>
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
                                                                    class="new-price">Rp. @money($i->harga) </span>
                                                                {{-- <span class="old-price">$65.00</span> --}}
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
                                                                    <button title="Add To Cart" type="submit" class="btn btn-primary">Beli</button>
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
                                                            <a href="#">
                                                                <h6 class="ec-pro-stitle">{{ $i->kategori->nama }}
                                                                </h6>
                                                            </a>
                                                            <h5 class="ec-pro-title"><a
                                                                    href="#">{{ $i->nama }}</a>
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
                                                                        class="new-price">Rp. @money($i->harga) </span>
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
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

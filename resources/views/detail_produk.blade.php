<x-guest-layout>
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
                                                                    href="shop-left-sidebar-col-3.html">{{ $i->nama }}<span
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

                <!-- Deal of the day Start -->
                <div class="row space-t-50" data-animation="fadeIn">
                    <!--  Special Section Start -->
                    <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">{{ $produk->nama }}</h2>
                            </div>
                        </div>

                        <div class="ec-spe-products">
                            <div class="ec-spe-product">
                                <div class="ec-spe-pro-inner">
                                    <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                        <div class="ec-spe-pro-image">
                                            <img class="img-responsive"
                                                src="{{ asset('storage/Produk/'.$produk->gambar ) }}"
                                                alt="Foto produk {{ $produk->nama }}">
                                        </div>
                                    </div>
                                    <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                        <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">{{ $produk->nama }}</a></h5>
                                        <div class="ec-spe-pro-desc">{{ $produk->detail }}</div>
                                        <div class="ec-spe-price">
                                            <span class="new-price">Rp. {{ $produk->harga }}</span>
                                        </div>
                                        <form method="post"
                                            action="{{ route('addToCart') }}">
                                            @csrf
                                            <input type="hidden" name="produk_id"
                                                class="produk_id"
                                                value="{{ $produk->id }}">
                                            <input type="hidden" name="jumlah_produk"
                                                class="qty-input" value="1">
                                            <div class="ec-spe-pro-btn">
                                                <button type="submit" class="btn btn-lg btn-primary">Tambah ke Keranjang</button>
                                            </div>
                                        </form>
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
</x-guest-layout>
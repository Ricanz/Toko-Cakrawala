<x-guest-layout>
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <!-- Product area start -->
                <div class="col-lg-12 col-md-12">

                    <!-- Deal of the day Start -->
                    <div class="row space-t-50" data-animation="fadeIn">
                        <!--  Special Section Start -->
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Artikel Toko Cakrawala</h2>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-4 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive" src="{{ asset($artikel->gambar) }}"
                                                    alt="Foto artikel {{ $artikel->judul }}">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <h5 class="ec-spe-pro-title"><a
                                                    href="product-left-sidebar.html">{{ $artikel->judul }}</a></h5>
                                            <div class="ec-spe-pro-desc ">
                                                <p class="text-justify"> {{ $artikel->isi }}
                                                </p>
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
</x-guest-layout>

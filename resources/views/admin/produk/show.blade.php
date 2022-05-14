<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Product Detail</h1>
            <p class="breadcrumbs"><span><a href="/">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Produk
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Product Detail</h2>
                </div>

                <div class="card-body product-detail">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <img src="{{ asset('storage/Produk/'.$produk->gambar) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="row product-overview">
                                <div class="col-12">
                                    <h5 class="product-title mb-3">{{$produk->nama}}</h5>
                                    <p class="product-desc">
                                        {{$produk->detail}}
                                    </p>
                                    <p class="product-price">Harga: Rp. {{$produk->harga}}</p>
                                    <p class="product-sku">Stok: {{$produk->stok}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row review-rating mt-4">
                        <div class="col-12">
                            <ul class="nav nav-tabs" id="myRatingTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="product-detail-tab" data-bs-toggle="tab"
                                        data-bs-target="#productdetail" href="#productdetail" role="tab"
                                        aria-selected="true">
                                        <i class="mdi mdi-library-books mr-1"></i> Detail</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="product-information-tab" data-bs-toggle="tab"
                                        data-bs-target="#productinformation" href="#productinformation" role="tab"
                                        aria-selected="false">
                                        <i class="mdi mdi-information mr-1"></i>Info</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
                                    <p>
                                        {{$produk->detail}}
                                    </p>
                                </div>

                                <div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
                                    <ul>
                                        <li><span>Harga</span> Rp. {{$produk->harga}} </li>
                                        <li><span>Stok</span> {{$produk->stok}}</li>
                                    </ul>
                                </div>

                                <div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="tadmin/assets/img/review-image/1.jpg" alt="">
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <p class="ec-t-review-name">Jeny Doe</p>
                                                    <div class="ec-t-rate">
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                        and
                                                        typesetting industry.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="tadmin/assets/img/review-image/2.jpg" alt="">
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <p class="ec-t-review-name">Linda Morgus</p>
                                                    <div class="ec-t-rate">
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star is-rated"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                        and
                                                        typesetting industry.
                                                    </p>
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
</x-app-layout>

<script>
    function toRupiah(value) {
        let val = (value/1).toFixed(0).replace('.', ',')
        return 'Rp '+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    }
</script>

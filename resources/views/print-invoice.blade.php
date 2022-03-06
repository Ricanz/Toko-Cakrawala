<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.1
    Copyright 2021-2022
 Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Toko Cakrawala - Invoice</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="nikibweb">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('tlandingPage/assets/images/favicon/favicon.png') }}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('tlandingPage/assets/images/favicon/favicon.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('tlandingPage/assets/images/favicon/favicon.png') }}" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/vendor/ecicons.min.css') }}" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/countdownTimer.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/plugins/bootstrap.css') }}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('tlandingPage/assets/css/responsive.css') }}" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('tlandingPage/assets/css/backgrounds/bg-4.css') }}">

</head>

<body class="shop_page">

    <!-- User invoice section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <div class="ec-vendor-dashboard-card">
                        <div class="ec-vendor-card-header">
                            <h5>Invoice</h5>
                        </div>
                        <div class="ec-vendor-card-body padding-b-0">
                            <div class="page-content">
                                <div class="page-header text-blue-d2">
                                    <img src="{{ asset('tlandingPage/assets/images/logo/cakrawala.png') }}"
                                        alt="Site Logo">
                                </div>

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="my-2">
                                                        <span class="text-sm text-grey-m2 align-middle">Nama Pemesan :
                                                        </span>
                                                        <span
                                                            class="text-600 text-110 text-blue align-middle">Yusuf</span>
                                                    </div>
                                                    <div class="text-grey-m2">
                                                        <div class="my-2"><b class="text-600">Alamat :
                                                            </b>Jl. H Zainudin Gandaria UtaraJl. H Zainudin Gandaria
                                                            Utara
                                                        </div>
                                                        <div class="my-2"><b class="text-600">Nomor HP :
                                                            </b>082167257017
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->

                                                <div
                                                    class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                    <hr class="d-sm-none" />
                                                    <div class="text-grey-m2">

                                                        <div class="my-2"><span class="text-600 text-90">ID :
                                                            </span>
                                                            #111-222</div>
                                                        <div class="my-2"><span
                                                                class="text-600 text-90">Tanggal Pemesanan :
                                                            </span> 3 Mar 2022</div>

                                                        <div class="my-2"><span class="text-600 text-90">Nomor
                                                                Invoice :
                                                            </span>6548</div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>

                                            <div class="mt-4">

                                                <div class="text-95 text-secondary-d3">
                                                    <div class="ec-vendor-card-table">
                                                        <table class="table ec-table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Nama Produk</th>
                                                                    <th class="text-center" scope="col">Jumlah</th>
                                                                    <th class="text-center" scope="col">Harga</th>
                                                                    <th class="text-center" scope="col">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($cart_data as $item)
                                                                    <tr>
                                                                        <th><span>{{$item['item_id']}}</span></th>
                                                                        <td><span>{{$item['nama_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['jumlah_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['harga_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['harga_produk']*$item['jumlah_produk']}}</span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="border-none m-m15" colspan="3"><span
                                                                            class="note-text-color">Pemesanan dan
                                                                            Informasi pembelian akan langsung dikirimkan
                                                                            melalui Whatsapp</span>
                                                                    </td>
                                                                    <td class="border-color m-m15 text-center text-600 text-90"
                                                                        colspan="1">
                                                                        <h5><strong>Total</strong></h5>
                                                                    </td>
                                                                    <td
                                                                        class="border-color m-m15 text-center text-600 text-90">
                                                                        <h5>400000</h5>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
    </section>

    {{-- <script>
        window.print()
    </script> --}}
    <!-- End User invoice section -->

    <!-- Vendor JS -->
    <script src="{{ asset('tlandingPage/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/vendor/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>

    <!--Plugins JS-->
    <script src="{{ asset('tlandingPage/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/nouislider.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/countdownTimer.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/infiniteslidev2.js') }}"></script>
    <script src="{{ asset('tlandingPage/assets/js/plugins/jquery.sticky-sidebar.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('tlandingPage/assets/js/main.js') }}"></script>

</body>

</html>

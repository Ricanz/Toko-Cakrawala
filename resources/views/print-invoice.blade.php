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

</head>

<body class="shop_page">
    <style type="text/css">
    thead::before, thead::after{
        display: none;
    }
    tbody::before, tbody::after{
        display: none;
    }
    </style>

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
                                    <img src="{{ public_path('tlandingPage/assets/images/logo/cakrawala.png') }}"
                                        alt="Site Logo">
                                </div>

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    {{-- <div class="my-2">
                                                        <span class="text-sm text-grey-m2 align-middle">Nama Pemesan :
                                                        </span>
                                                        <span
                                                            class="text-600 text-110 text-blue align-middle">{{$data['nama']}}</span>
                                                    </div> --}}
                                                    <div class="text-grey-m2">
                                                        <div class="my-2"><b class="text-600">Nama :
                                                        </b>{{$data['nama']}}
                                                    </div>
                                                    <div class="my-2"><b class="text-600">E-mail :
                                                            </b>{{$data['email']}}
                                                        </div>
                                                        <div class="my-2"><b class="text-600">Alamat :
                                                            </b>{{$data['alamat']}}
                                                        </div>
                                                        <div class="my-2"><b class="text-600">Nomor HP :
                                                            </b>{{$data['no_hp']}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->

                                                <div
                                                    class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                    <hr class="d-sm-none" />
                                                    <div class="text-grey-m2">

                                                        <div class="my-2"><span class="text-600 text-90">Nomor
                                                            Invoice :
                                                        </span>{{$invoice}}</div>
                                                        <div class="my-2"><span
                                                                class="text-600 text-90">Tanggal Pemesanan :
                                                            </span> {{$tanggal}}</div>
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
                                                                    <td scope="col">ID</td>
                                                                    <td scope="col">Nama Produk</td>
                                                                    <td class="text-center" scope="col">Jumlah</td>
                                                                    <td class="text-center" scope="col">Harga</td>
                                                                    <td class="text-center" scope="col">Total</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ((array)$cart_data as $item)
                                                                    <tr>
                                                                        <td><span>{{$item['item_id']}}</span></td>
                                                                        <td><span>{{$item['nama_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['jumlah_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['harga_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['harga_produk']*$item['jumlah_produk']}}</span>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                            {{-- <thead>
                                                                <tr>
                                                                    <td class="border-none m-m15" colspan="3"><span
                                                                            class="note-text-color">Pemesanan dan
                                                                            Informasi pembelian akan langsung dikirimkan
                                                                            melalui Whatsapp dan Email</span>
                                                                    </td>
                                                                    <td class="border-color m-m15 text-center text-600 text-90"
                                                                        colspan="1">
                                                                        <h5><strong>Total</strong></h5>
                                                                    </td>
                                                                    <td
                                                                        class="border-color m-m15 text-center text-600 text-90">
                                                                        <h5>{{$item['harga_produk']*$item['jumlah_produk']}}</h5>
                                                                    </td>
                                                                    @endforeach
                                                                </tr>
                                                            </thead> --}}
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


</body>

</html>

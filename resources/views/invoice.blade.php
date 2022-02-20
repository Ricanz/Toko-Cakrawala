<x-navigation-layout>
    <!-- User invoice section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <div class="ec-vendor-dashboard-card">
                        <div class="ec-vendor-card-header">
                            <h5>Invoice</h5>
                            <div class="ec-header-btn">
                                <a class="btn btn-lg btn-secondary" href="{{ url('print-invoice') }}">Proses Pesanan</a>
                                <a class="btn btn-lg btn-primary" href="#">Cek Kembali</a>
                            </div>
                        </div>
                        <div class="ec-vendor-card-body padding-b-0">
                            <div class="page-content">
                                <div class="page-header text-blue-d2">
                                    <img src="{{asset('tlandingPage/assets/images/logo/cakrawala.png')}}" alt="Site Logo">
                                </div>

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="my-2">
                                                        <span class="text-sm text-grey-m2 align-middle">Nama Pemesan : </span>
                                                        <span class="text-600 text-110 text-blue align-middle">Yusuf</span>
                                                    </div>
                                                    <div class="text-grey-m2">
                                                        <div class="my-2"><b class="text-600">Alamat : </b>Jl. H Zainudin Gandaria UtaraJl. H Zainudin Gandaria Utara
                                                        </div>
                                                        <div class="my-2"><b class="text-600">Nomor HP : </b>082167257017
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->

                                                <div
                                                    class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                    <hr class="d-sm-none" />
                                                    <div class="text-grey-m2">

                                                        <div class="my-2"><span class="text-600 text-90">ID : </span>
                                                            #111-222</div>
                                                        <div class="my-2"><span class="text-600 text-90">Tanggal Pemesanan :
                                                            </span> Oct 12, 2021-2022</div>

                                                        <div class="my-2"><span class="text-600 text-90">Nomor Invoice :
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
                                                                    <th scope="col">Jumlah</th>
                                                                    <th scope="col">Harga</th>
                                                                    <th scope="col">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><span>225</span></th>
                                                                    <td><span>Women sliveless top</span></td>
                                                                    <td><span>2</span></td>
                                                                    <td><span>$65</span></td>
                                                                    <td><span>$130</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>548</span></th>
                                                                    <td><span>Mens cotton fabric shirt</span></td>
                                                                    <td><span>3</span></td>
                                                                    <td><span>$10</span></td>
                                                                    <td><span>$30</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>684</span></th>
                                                                    <td><span>Baby clothes pair</span></td>
                                                                    <td><span>1</span></td>
                                                                    <td><span>$360</span></td>
                                                                    <td><span>$360</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><span>987</span></th>
                                                                    <td><span>Hand bags for women</span></td>
                                                                    <td><span>5</span></td>
                                                                    <td><span>$50</span></td>
                                                                    <td><span>$250</span></td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="border-none m-m15"
                                                                        colspan="3"><span class="note-text-color">Pemesanan dan Informasi pembelian akan langsung dikirimkan melalui Whatsapp</span>
                                                                    </td>
                                                                    <td class="border-color m-m15"
                                                                        colspan="1"><span><strong>Total</strong></span>
                                                                    </td>
                                                                    <td class="border-color m-m15">
                                                                        <span>$3872</span></td>
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
</x-navigation-layout>
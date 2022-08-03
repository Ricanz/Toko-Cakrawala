<x-app-layout>
    <!-- User invoice section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <div class="ec-vendor-dashboard-card">
                        <div class="ec-vendor-card-header">
                            <h5>Detail Pesanan</h5>
                        </div>
                        <div class="ec-vendor-card-body padding-b-0">
                            <div class="page-content">

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />
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
                                                                @foreach ($cart_data as $key => $i)
                                                                    <tr>
                                                                        <th><span>{{$i['item_id']}}</span></th>
                                                                        <td><span>{{$i['nama_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$i['jumlah_produk']}}</span></td>
                                                                        <td class="text-center"><span>Rp. @money($i['harga_produk'])</span></td>
                                                                        <td class="text-center"><span>Rp. @money($i['harga_produk']*$i['jumlah_produk'])</span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
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

</x-app-layout>

<x-navigation-layout>

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="/">Beranda</a></li>
                                <li class="ec-breadcrumb-item active">Cart</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->
    <!-- Ec cart page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <form action="#">
                                    <div class="table-content cart-table-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Produk</th>
                                                    <th>Harga</th>
                                                    <th style="text-align: center;">Jumlah</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if (Helper::getCart() != null)
                                                    @foreach (Helper::getCart() as $key => $item)
                                                        <tr id="data_{{ $item['item_id'] }}">
                                                            <td data-label="Product" class="ec-cart-pro-name"><a
                                                                    href="product-left-sidebar.html"><img
                                                                        class="ec-cart-pro-img mr-4"
                                                                        src="{{ asset('storage/Produk/' . $item['foto_produk']) }}"
                                                                        alt="" />{{ $item['nama_produk'] }}</a></td>
                                                            <td data-label="Price" class="ec-cart-pro-price"><span
                                                                    class="amount"
                                                                    id="harga-produk-{{ $item['item_id'] }}">{{ Helper::mata_uang($item['harga_produk']) }}</span>
                                                            </td>
                                                            <td data-label="Quantity" class="ec-cart-pro-qty"
                                                                style="text-align: center;">
                                                                {{-- <div class="cart-qty-plus-minus">
                                                                    <input disabled class="cart-plus-minus" type="text"
                                                                        name="cartqtybutton"
                                                                        value="{{ $item['jumlah_produk'] }}" />
                                                                </div> --}}
                                                                {{ $item['jumlah_produk'] }}
                                                            </td>
                                                            <td data-label="Total" class="ec-cart-pro-subtotal">
                                                                {{ Helper::mata_uang($item['jumlah_produk'] * $item['harga_produk']) }}
                                                            </td>
                                                            <td data-label="Remove" class="ec-cart-pro-remove">
                                                                <a data-id="{{ $item['item_id'] }}"
                                                                    onclick="deleteCart(event.target)"><i
                                                                        class="ecicon eci-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="/katalog">Lanjutkan Belanja</a>
                                                <span class="ec-contact-wrap ec-contact-btn">
                                                    <a href="{{ route('checkout') }}" class="btn btn-primary"
                                                        type="submit">Checkout</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Ringkasan</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Estimasi Total Harga</h4>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total Harga</span>
                                            <span class="text-right">{{ Helper::mata_uang(Helper::totalHarga()) }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-navigation-layout>

@push('scripts')
    <script src="{{ asset('js/cart.js') }}" type="application/javascript"></script>
@endpush

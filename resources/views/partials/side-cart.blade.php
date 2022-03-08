@push('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">Keranjang</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                @if (Helper::getCart() != null)
                    @foreach (Helper::getCart() as $key => $item)
                        <li id="data_{{ $item['item_id'] }}">
                            <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                    src="{{ asset('storage/Produk/' . $item['foto_produk']) }}" alt="product"></a>
                            <div class="ec-pro-content">
                                <a href="product-left-sidebar.html"
                                    class="cart_pro_title">{{ $item['nama_produk'] }}</a>
                                <span class="cart-price">

                                    {{-- Harga Produk --}}
                                    <span class="harga-produk" id="harga-produk-{{ $item['item_id'] }}">{{ $item['harga_produk'] }}
                                    </span>x {{ $item['jumlah_produk'] }}</span>

                                <div id="qty-plus-minus" onclick="tambahKurang({{ $item['item_id'] }})"
                                    data-id="{{ $item['item_id'] }}" class="qty-plus-minus">

                                    {{-- Jumlah --}}
                                    <input class="qty-input-js" id="qty-input-{{ $item['item_id'] }}"
                                        data-id="{{ $item['item_id'] }}" onclick="jumlahCart(event.target)"
                                        type="text" name="ec_qtybtn" value="1" />

                                </div>
                                <a href="javascript:void(0)" data-id="{{ $item['item_id'] }}"
                                    onclick="deleteCart(event.target)" class="remove">×</a>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        {{-- <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">Rp. 100.000</td>
                        </tr> --}}
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">Rp. <span id="total-harga"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn  ">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="{{route('checkout')}}" class="btn btn-secondary ">Checkout</a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/cart.js') }}" type="application/javascript"></script>
@endpush

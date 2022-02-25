
<div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            @if(isset($cart_data))
            @elseif(Cookie::get('ec-side-cart'))
                @php $total="0" @endphp
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">Keranjang</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    @foreach($cart_data as $data)
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset($data['item_image'])}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">{{$data['item_name']}}</a>
                            <span class="cart-price"><span>{{number_format($data['item_price'],2)}}</span> x {{$data['item_quantity']}}</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="{{$data['item_quantity']}}" min="1"/>
                            </div>
                            @php $total = $total + ($data['item_quantity'] * $data['item_price']) @endphp
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    @endforeach
                    {{-- <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('tlandingPage/assets/images/product-image/96_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Running & Trekking Shoes - White</a>
                            <span class="cart-price"><span>$150.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('tlandingPage/assets/images/product-image/111_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                            <span class="cart-price"><span>$950.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
            @endif
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            {{-- <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">Rp.{{ number_format($total, 2) }}</td>
                            </tr> --}}
                            <tr>
                                <td class="text-left">Total :</td>
                                {{-- <td class="text-right primary-color">Rp.{{number_format($total,2)}} </td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>

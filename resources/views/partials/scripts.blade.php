
    <!-- Vendor JS -->
    <script src="{{asset('tlandingPage/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    
    <script src="{{asset('tlandingPage/assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/nouislider.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/click-to-call.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/plugins/swiper-bundle.min.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('tlandingPage/assets/js/vendor/index.js')}}"></script>
    <script src="{{asset('tlandingPage/assets/js/demo-8.js')}}"></script>
    <!--cart-->
    <script>          
        $(document).ready(function () {
            $('.add-to-cart-btn').click(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var produk_id = $(this).closest('.product_data').find('.produk_id').val();
                var quantity = $(this).closest('.product_data').find('.qty-input').val();

                $.ajax({
                    url: 'addToCart',
                    method: "POST",
                    data: {
                        'quantity': quantity,
                        'produk_id': produk_id,
                    },
                    success: function (response) {
                        alertify.set('notifier','position','top-right');
                        alertify.success(response.status);
                    },
                });
            });
        });

        function Cart()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: 'Cart',
            method: "GET",
            success: function (response) {
                $('.ec-cart-count').html('');
                var parsed = jQuery.parseJSON(response)
                var value = parsed; //Single Data Viewing
                $('.ec-cart-count').append($('<span class="badge badge-pill red">'+ value['totalcart'] +'</span>'));
            }
        });
    }

    
    $(document).ready(function () {

    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    });


    // Update Cart Data
    $(document).ready(function () {

    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var quantity = $(this).closest(".cartpage").find('.qty-input').val();
        var produk_id = $(this).closest(".cartpage").find('.produk_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            'quantity':quantity,
            'produk_id':produk_id,
        };

        $.ajax({
            url: 'updateToCart',
            type: 'POST',
            data: data,
            success: function (response) {
                window.location.reload();
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });
    });

    });
    // Delete Cart Data
    $(document).ready(function () {

    $('.delete_cart_data').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest(".cartpage").find('.produk_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            "produk_id": produk_id,
        };

        // $(this).closest(".cartpage").remove();

        $.ajax({
            url: 'deleteCart',
            type: 'DELETE',
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    });

    });
    // Clear Cart Data
    $(document).ready(function () {

    $('.clear_cart').click(function (e) {
        e.preventDefault();

        $.ajax({
            url: 'clearCart',
            type: 'GET',
            success: function (response) {
                window.location.reload();
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });

    });

    });
    </script>
@stack('scripts')
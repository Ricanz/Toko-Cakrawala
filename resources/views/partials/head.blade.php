<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Toko Cakrawala - Landing Page</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Toko barang terbaik di Indonesia">
    <meta name="author" content="nikibweb">
    
   <!-- site Favicon -->
   <link rel="icon" href="{{asset('tlandingPage/assets/images/favicon/favicon-8.png')}}" sizes="32x32" />
   <link rel="apple-touch-icon" href="{{asset('tlandingPage/assets/images/favicon/favicon-8.png')}}" />
   <meta name="msapplication-TileImage" content="{{asset('tlandingPage/assets/images/favicon/favicon-8.png')}}" />

   <!-- css Icon Font -->
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/vendor/ecicons.min.css')}}" />

   <!-- css All Plugins Files -->
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/animate.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/swiper-bundle.min.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/jquery-ui.min.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/countdownTimer.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/nouislider.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/slick.min.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/owl.carousel.min.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/owl.theme.default.min.css')}}" />
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/plugins/bootstrap.css')}}" />

   <!-- Main Style -->
   <link rel="stylesheet" href="{{asset('tlandingPage/assets/css/demo8.css')}}" />
   @stack('css')
</head>
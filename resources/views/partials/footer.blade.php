<footer class="ec-footer">
    <div class="footer-container">
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 ec-footer-cat">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Kategori Produk</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    @foreach ($Kategori as $item)
                                    <li class="ec-footer-link"><a href="{{ url("kategori/$item->slug") }}">{{ $item->nama }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-info">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Menu</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="/tentang">Tentang Kami</a></li>
                                    <li class="ec-footer-link"><a href="/contact">Kontak Kami</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Layanan Kami</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">Menjual material konstruksi atap dan langit-langit</li>
                                    <li class="ec-footer-link">Belanja via telepon/WhatsApp</li>
                                    <li class="ec-footer-link">Konsultasi jenis dan kebutuhan material</li>
                                    <li class="ec-footer-link">Layanan antar JABODETABEK</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-cont-social">
                        <div class="ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img src="{{asset('tlandingPage/assets/images/logo/cakrawala-dark.png')}}"
                                            alt="Logo Cakrawala" width="75%"><img class="dark-footer-logo" src="{{asset('tlandingPage/assets/images/logo/cakrawala-dark.png')}}"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Kontak Kami</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Jl. K.H. Sholeh Iskandar No. 10, Kedung Badak, Tanah Sareal, Bogor 1614 (Bekas Kantor BPJS Kesehatan/Bekas Dealer FORD)</li>
                                        <li class="ec-footer-link"><span>Telepon:</span><a href="tel:02518665795">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp0251-8665795</a></li>
                                        <li class="ec-footer-link"><span>WhatsApp:</span><a href="http://wa.me/+62816225999">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp0816-225999</a></li>
                                        <li class="ec-footer-link"><span>Email:</span>&nbsp&nbsp&nbsp&nbspcakrawala.info@gmail.com</li>
                                        <li class="ec-footer-link">* Pembayaran: Customer(Cash On Delivery dan rekening BCA 87202.22931)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ec-footer-social">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading marg-b-0 s-head">Follow Us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="https://www.instagram.com/tokocakrawala9"><i class="ecicon eci-instagram"
                                                    aria-hidden="true"></i></a></li>
                                        {{-- <li class="ec-footer-link"><a href="#"><i class="ecicon eci-twitter-square"
                                                    aria-hidden="true"></i></a></li> --}}
                                        <li class="ec-footer-link"><a href="https://www.facebook.com/PTBIRAWA-METAL-KONSTRUKSI-180582271996781/"><i class="ecicon eci-facebook-square"
                                                    aria-hidden="true"></i></a></li>
                                        {{-- <li class="ec-footer-link"><a href="#"><i class="ecicon eci-linkedin-square"
                                                        aria-hidden="true"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <!-- Footer payment -->
                    <div class="footer-bottom-right">
                        <div class="footer-bottom-payment d-flex justify-content-center">
                            <div class="payment-link">
                                <img src="assets/images/icons/payment.png" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- Footer payment -->
                    <!-- Footer Copyright Start -->
                    <div class="footer-copy">
                        <div class="footer-bottom-copy ">
                            <div class="ec-copy">Copyright © <a class="site-name" href="/">Toko Cakrawala</a> all
                                rights reserved.</div>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
        </div>
    </div>
</footer>

<x-navigation-layout>
    <body class="contact_us_page">
        {{-- <div id="ec-overlay"><span class="loader_img"></span></div> --}}
        <!-- Ec breadcrumb start -->
        <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row ec_breadcrumb_inner">
                            <div class="col-md-6 col-sm-12">
                                <h2 class="ec-breadcrumb-title">Kontak Kami</h2>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- ec-breadcrumb-list start -->
                                <ul class="ec-breadcrumb-list">
                                    <li class="ec-breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="ec-breadcrumb-item active">Kontak Kami</li>
                                </ul>
                                <!-- ec-breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec breadcrumb end -->

        <!-- Ec Contact Us page -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-common-wrapper">
                        <div class="ec-contact-leftside">
                            <div class="ec-contact-container">
                                <div class="ec-contact-form">
                                    <form action="#" method="post">
                                        <span class="ec-contact-wrap">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="lastname" placeholder="Masukkan nama lengkap Anda"
                                                required />
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Email*</label>
                                            <input type="email" name="email" placeholder="Masukkan email Anda"
                                                required />
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Nomor Telepon / Whatsapp*</label>
                                            <input type="text" name="phonenumber" placeholder="Masukkan nomor telepon/whatsapp Anda"
                                                required />
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Saran/Kritik/Pertanyaan*</label>
                                            <textarea name="address"
                                                placeholder="Tulisi sesuatu"></textarea>
                                        </span>
                                        <span class="ec-contact-wrap ec-recaptcha">
                                            <span class="g-recaptcha"
                                                data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                                data-callback="verifyRecaptchaCallback"
                                                data-expired-callback="expiredRecaptchaCallback"></span>
                                            <input class="form-control d-none" data-recaptcha="true" required
                                                data-error="Please complete the Captcha">
                                            <span class="help-block with-errors"></span>
                                        </span>
                                        <span class="ec-contact-wrap ec-contact-btn">
                                            <button class="btn btn-primary" type="submit">Kirim</button>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ec-contact-rightside">
                            <div class="ec_contact_map">
                                <div class="ec_map_canvas">
                                    <iframe id="ec_map_canvas"
                                        src="https://www.google.com/maps/place/Jl.+Sholeh+Iskandar+No.10,+RT.03%2FRW.05,+Cibadak,+Kec.+Tanah+Sereal,+Kota+Bogor,+Jawa+Barat+16166/@-6.5528256,106.774619,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c47bf6992205:0x148af05ce333d295!8m2!3d-6.5528309!4d106.7768077"></iframe>
                                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                                </div>
                            </div>
                            <div class="ec_contact_info">
                                <h1 class="ec_contact_info_head">Kontak kami</h1>
                                <ul class="align-items-center">
                                    <li class="ec-contact-item"><i class="ecicon eci-map-marker"
                                            aria-hidden="true"></i><span>Alamat :</span>Jl. K.H. Sholeh Iskandar No. 10, Kedung Badak, Tanah Sareal, Bogor 1614 (Bekas Kantor BPJS Kesehatan/Bekas Dealer FORD)</li>
                                    <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone"
                                            aria-hidden="true"></i><span>Whatsapp :</span><a href="http://wa.me/+62816225999">+62816-225999</a></li>
                                    <li class="ec-contact-item align-items-center"><i class="ecicon eci-envelope"
                                            aria-hidden="true"></i><span>Email :</span><a
                                            href="mailto:cakrawala.info@gmail.com">cakrawala.info@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</x-navigation-layout>

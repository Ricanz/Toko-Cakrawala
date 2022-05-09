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
                                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4713.723280536681!2d106.77465015472197!3d-6.552835217614672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c47bf6992205%3A0x148af05ce333d295!2sJl.%20Sholeh%20Iskandar%20No.10%2C%20RT.03%2FRW.05%2C%20Cibadak%2C%20Kec.%20Tanah%20Sereal%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016166!5e0!3m2!1sid!2sid!4v1652076051043!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

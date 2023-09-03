<!-- call the template folder -->
<?php $this->extend('template_v')  ?>

<!-- start template session -->
<?php $this->section('content')  ?>



<!-- Home -->
<section id="home" class="vh-100">
    <div class="row w-100" style="padding-top: 70px;">
        <div class="col-lg-6 col-md-12 col-sm-12 order-md-1 d-grid align-content-center ps-5 mb-5 mt-5">
            <h1 class="p-color fs-heading fw-medium" data-aos="fade-down" data-aos-duration="2000">Toilet Pilihan Kita!</h1>
            <p class="p-color w-75 mb-3" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">
                Kami selalu ingin memberikan pengalaman terbaik
                untuk anda. Detail produk sangat kami perhatikan
                untuk memberikan kualitas terbaik.
            </p>
            <a href="#about" class="btn btn-secondary w-50 py-2 rounded-pill" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Selengkapnya</a>
            <div class="bg-ornament w-75 img-wrapper mt-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <img src="<?= base_url('assets/image/cover/ornament.png'); ?>" class="img-fluid" alt="Ornament" height="240" width="570">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 order-md-2 px-0" data-aos="zoom-in" data-aos-duration="1000">
            <div class=" img-wrapper text-end">
                <img src="<?= base_url('assets/image/cover/home-cover.png'); ?>" alt="Cover Image" class="img-fluid ms-2 img-cover">
            </div>
        </div>
    </div>
</section>
<!-- End Home -->

<!-- About -->
<section id="about" class="h-100 mb-5">
    <div class="container pt-10">
        <h2 class="text-center py-5 p-color" data-aos="fade-down" data-aos-duration="1500">Tentang Kami</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 img-wrapper" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/cover/about-cover.png'); ?>" class="img-fluid rounded" alt="Cover Image" style="box-shadow: -2px 4px 5px 1px rgba(0, 0, 0, 0.3);">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4 pe-0" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color">
                    About Orta.
                </h3>
                <p>
                    Orta merupakan Mother Brand produk Sanitary kami yang mengusung konsep kualitas yang baik, kenyamanan dan ketahanan, selain itu Orta sebagai merek Sanitary yang memberikan garansi produk selama 10 tahun, sehingga Orta menjadi sanitary pilihan anda.
                </p>
                <p>
                    Orta telah melakukan penjualan hampir diseluruh kota besar yang ada di Indonesia baik di Pulau Jawa, Sumatera, Kalimantan, Sulawesi, Bali dan juga di Papua. Orta tetap menjangkau seluruh plosok Indonesia untuk memenuhi kebutuhan Sanitary yang baik dan layak bagi masyarakat Indonesia.
                </p>
                <div class="row img-logo-wrapper pt-2">
                    <img src="<?= base_url('assets/image/logo/sgs-cer.jpg'); ?>" class="img-fluid col-lg-4 col-md-3 col-3 p-0" alt="Certificate Image">
                    <img src="<?= base_url('assets/image/logo/iso-cer.png'); ?>" class="img-fluid col-lg-4 col-md-3 col-3 p-0" alt="Certificate Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Product -->
<section class="pt-5" id="product">
    <div class="container">
        <h2 class="text-center p-color py-5">
            Produk Kami
        </h2>

        <!-- Primo -->
        <div class="row pc" id="primo">
            <div class="col-lg-6 col-md-6 col-sm-12 order-1 order-lg-0 order-sm-0 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h1 class="p-color fs-heading text-lg-end text-md-end text-center fw-semibold">
                    //PRIMO
                </h1>
                <div class="row pt-3">
                    <div class="col-6">
                        <img src="<?= base_url('assets/image/product/primo.png'); ?>" class="img-fluid" alt="Detail Product">
                    </div>
                    <div class="col-6">
                        <h4 class="fw-bold text-end">
                            Toilet Jongkok
                        </h4>
                        <p class="fs-5 fw-light text-end">
                            Toilet jongkok dengan desain
                            minimalis dan saluran air
                            berbentuk
                            corong. Tersedia dengan variasi
                            warna yang lebih lengkap
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-0 order-lg-1 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/primo-toilet.png'); ?>" class="img-fluid rounded w-70" alt="Product Image">
            </div>
            <div class="row w-50 mx-auto order-2 order-sm-2 pt-5 text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="p-color">Tersedia dalam 6 Warna</h3>
                <img src="<?= base_url('assets/image/product/color-6.png'); ?>" class="img-fluid mx-auto img-color" alt="color">
            </div>
        </div>

        <!-- Savio -->
        <div class="row pc" id="savio">
            <div class="col-lg-6 col-md-6 col-sm-12 order-lg-0 order-md-0 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/savio-toilet.png'); ?>" class="img-fluid w-70 rounded" alt="Product Image">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-0 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h1 class="p-color fs-heading text-lg-start text-md-start text-center fw-semibold">
                    //SAVIO
                </h1>
                <div class="row pt-3">
                    <div class="col-6">
                        <h4 class="fw-bold ">
                            Toilet Jongkok
                        </h4>
                        <p class="fs-5 fw-light ">
                            Toilet jongkok dengan
                            desain minimalis, tersedia
                            dalam variasi warna yang
                            lebih lengkap..
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="<?= base_url('assets/image/product/savio.png'); ?>" class="img-fluid" alt="Detail Product">
                    </div>
                </div>
            </div>
            <div class="row w-50 mx-auto order-2 order-sm-2 pt-5 text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="p-color">Tersedia dalam 6 Warna</h3>
                <img src="<?= base_url('assets/image/product/color-6.png'); ?>" class="img-fluid mx-auto img-color" alt="">
            </div>
        </div>

        <!-- Serio -->
        <div class="row pc" id="serio">
            <div class="col-lg-6 col-md-6 col-sm-12 order-1 order-lg-0 order-sm-0 d-grid align-content-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h1 class="p-color fs-heading mt-3 text-lg-end text-md-end text-center fw-semibold">
                    //SERIO
                </h1>
                <div class="row pt-3">
                    <div class="col-6">
                        <img src="<?= base_url('assets/image/product/serio.png'); ?>" class="img-fluid" alt="Detail Product">
                    </div>
                    <div class="col-6">
                        <h4 class="fw-bold text-end">
                            Toilet Jongkok
                        </h4>
                        <p class="fs-5 fw-light text-end">
                            Toilet jongkok dengan desain
                            minimalis dan saluran air
                            berbentuk
                            corong. Tersedia dengan variasi
                            warna yang lebih lengkap.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-0 order-lg-1 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/serio-toilet.png'); ?>" class="img-fluid w-70 rounded" alt="Product Image">
            </div>
            <div class="row w-50 mx-auto order-2 order-sm-2 pt-5 text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="p-color">Tersedia dalam 6 Warna</h3>
                <img src="<?= base_url('assets/image/product/color-6.png'); ?>" class="img-fluid mx-auto img-color" alt="">
            </div>
        </div>

        <!-- Senza -->
        <div class="row pc" id="senza">
            <div class="col-lg-6 col-md-6 col-sm-12 order-lg-0 order-md-0 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/senza-toilet.png'); ?>" class="img-fluid w-70 rounded" alt="Product Image">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-0 my-auto mt-3" data-aos="zoom-in" data-aos-duration="1500">
                <h1 class="p-color fs-heading text-lg-start text-md-start text-center fw-semibold">
                    //SENZA
                </h1>
                <div class="row pt-3">
                    <div class="col-6">
                        <h4 class="fw-bold ">
                            Duduk Siram
                        </h4>
                        <p class="fs-5 fw-light ">
                            Senza merupakan
                            toilet
                            duduk klasik
                            dengan sistem
                            penyiraman manual.
                        </p>
                    </div>
                    <div class="col-6 mt-0">
                        <img src="<?= base_url('assets/image/product/senza.png'); ?>" class="img-fluid" alt="Detail Product">
                    </div>
                </div>
            </div>
            <div class="row w-50 mx-auto order-2 order-sm-2 pt-5 text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="p-color">Tersedia dalam 2 Warna</h3>
                <img src="<?= base_url('assets/image/product/color-2.png'); ?>" class="img-fluid mx-auto img-color  " alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Product -->

<!-- Waranty -->
<section class="pt-5 vh-100" id="waranty">
    <div class="container">
        <div class="mt-5 row gap-1 w-75 mx-auto">
            <div class="col-12">
                <h1 class="fs-heading text-center p-color" data-aos="zoom-in" data-aos-duration="1500">
                    Garansi Daya Tahan <span class="fw-bold">10 Tahun</span>
                </h1>
            </div>
            <div class="col-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="row d-flex justify-content-end align-items-center pt-3">
                    <div class="col-lg-3 col-md-12 text-center img-wrapper">
                        <img src="<?= base_url('assets/image/product/waranty.png'); ?>" alt="Product Waranty" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 text-lg-start text-center">
                        <p class="fs-4">
                            Kepuasan anda adalah prioritas kami.
                            Komitmen tersebut diwujudkan dalam
                            bentuk nyata berupa <span class="fw-bold"> garansi 10 tahun
                                dari retak dan pecah</span>, hanya untuk anda!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-wrapper mx-auto w-50 d-flex justify-content-center pt-5" data-aos="fade-up" data-aos-duration="1500">
            <img src="<?= base_url('assets/image/logo/sgs-cer.jpg'); ?>" class="img-fluid col-6 col-lg-3 col-md-6 p-0" alt="Certificate Image">
            <img src="<?= base_url('assets/image/logo/iso-cer.png'); ?>" class="img-fluid col-6 col-lg-3 col-md-6 p-0" alt="Certificate Image">
        </div>
    </div>
</section>
<!-- End Waranty -->

<!-- end template session -->
<?php $this->endSection()  ?>
<!-- call the template folder -->
<?php $this->extend('template_v')  ?>

<!-- start template session -->
<?php $this->section('content')  ?>

<!-- About -->
<section id="about" class="h-100 mb-5">
    <div class="container pt-10">
        <!-- <h2 class="text-center py-5 p-color" data-aos="fade-down" data-aos-duration="1500">Tentang Kami</h2> -->
        <div class="row">
            <div class="col text-center py-4 mt-4 " data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/logo.png'); ?>" style="width: 20%;" class="img-fluid" alt="Logo">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 img-wrapper" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/cover/about-cover.png'); ?>" class="img-fluid rounded" alt="Cover Image" style="box-shadow: rgba(0, 0, 0, 0.5) 0px 4px 12px;">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pe-0 pt-5 pt-lg-0 " data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color">
                    About Orta.
                </h3>
                <p class="align-justify">
                    Orta merupakan Mother Brand produk Sanitary kami yang mengusung konsep kualitas yang baik, kenyamanan dan ketahanan, selain itu Orta sebagai merek Sanitary yang memberikan garansi produk selama 10 tahun, sehingga Orta menjadi sanitary pilihan anda.
                </p>
                <p class="align-justify">
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
<section class="py-5" id="product">
    <div class="container">
        <h2 class="text-center p-color pt-5">
            Produk Orta
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
                            Toilet Jongkok hadir dengan ukuran
                            yang lebih besar untuk melengkapi kebutuhan
                            sanitasi anda. Kini hadir dengan
                            variasi warna yang lebih lengkap.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 order-0 order-lg-1 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product-color/putih.jpg'); ?>" class="img-product img-fluid rounded w-70" id="img-primo" alt="Product Image">
            </div>
            <div class="row w-50 mx-auto order-2 order-sm-2 pt-5 text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="p-color">Tersedia dalam 4 Warna</h3>
                <div class="row w-70 mx-auto thumb" id="thumb-primo">
                    <button class="btn-color col-3 pe-0" data-src="<?= base_url('assets/image/product-color/putih.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/putih.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/biru.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/biru.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/pink.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/pink.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/merah.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/merah.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                </div>
            </div>
        </div>

        <!-- Savio -->
        <div class="row pc" id="savio">
            <div class="col-lg-6 col-md-6 col-sm-12 order-lg-0 order-md-0 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product-color/biru.jpg'); ?>" class="img-fluid w-70 rounded" id="img-savio" alt="Product Image">
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
                <h3 class="p-color">Tersedia dalam 4 Warna</h3>
                <div class="row w-70 mx-auto thumb" id="thumb-savio">
                    <button class="btn-color col-3 pe-0" data-src="<?= base_url('assets/image/product-color/putih.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/putih.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/biru.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/biru.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/pink.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/pink.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/merah.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/merah.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                </div>
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
                <img src="<?= base_url('assets/image/product-color/pink.jpg'); ?>" class="img-fluid w-70 rounded" id="img-serio" alt="Product Image">
            </div>
            <div class="row w-50 mx-auto order-2 order-sm-2 pt-5 text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="p-color">Tersedia dalam 4 Warna</h3>
                <div class="row w-70 mx-auto thumb" id="thumb-serio">
                    <button class="btn-color col-3 pe-0" data-src="<?= base_url('assets/image/product-color/putih.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/putih.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/biru.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/biru.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/pink.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/pink.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-3 ps-0" data-src="<?= base_url('assets/image/product-color/merah.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/merah.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                </div>
            </div>
        </div>

        <!-- Senza -->
        <div class="row pc" id="senza">
            <div  class="col-lg-6 col-md-6 col-sm-12 order-lg-0 order-md-0 order-sm-1 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product-color/duduk-putih.jpg'); ?>" class="img-fluid w-70 rounded" id="img-senza" alt="Detail Product">
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
                <div class="row w-40 mx-auto thumb" id="thumb-senza">
                    <button class="btn-color col-6 pe-0" data-src="<?= base_url('assets/image/product-color/duduk-putih.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/putih.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                    <button class="btn-color col-6 ps-0" data-src="<?= base_url('assets/image/product-color/duduk-biru.jpg'); ?>">
                        <img src="<?= base_url('assets/image/color/biru.png'); ?>" class="img-fluid img-color " alt="color">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product -->

<!-- Waranty -->
<!-- <section class="pt-5 vh-100" id="waranty">
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
</section> -->
<!-- End Waranty -->

<!-- end template session -->
<?php $this->endSection()  ?>
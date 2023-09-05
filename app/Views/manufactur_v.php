<!-- call the template folder -->
<?php $this->extend('template_v')  ?>

<!-- start template session -->
<?php $this->section('content')  ?>





<!-- About -->
<section id="about" class="h-100 mb-5">
    <div class="container pt-10">
        <h2 class="text-center py-5 p-color" data-aos="fade-down" data-aos-duration="1500">About Manufacturing</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-md-12 col-sm-12 mt-4 pe-0 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <p>
                    Setiap produk yang dikeluarkan sudah melalui proses produksi dan pengawasan yang baik oleh Tim kami sehingga produk yang sampai di konsumen dapat memuaskan konsumen yang menjadi salah satu prioritas kami. Dengan kemampuan mesin dan tenaga SDM yang dimiliki, Orta yakin dapat memberikan produk dengan kwalitas yang baik.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- manufactur -->
<section class="pt-5" id="product">
    <div class="container">
        <h2 class="text-center p-color py-5">
            Proses Produksi
        </h2>

        <!-- Casting -->
        <div class="row py-3">
            <div class=" col-6 d-grid align-content-center  mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color text-lg-end text-md-end text-center fw-semibold">
                    Casting
                </h3>
            </div>
            <div class=" col-6  " data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/logo/defauld.jpg'); ?>" class="img-fluid rounded w-50" alt="manufactur Image">
            </div>
        </div>

        <!-- Draying -->
        <div class="row">
            <div class="col-6  text-end" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/draying.png'); ?>" class="img-fluid w-50 rounded" alt="manufactur Image">
            </div>
            <div class="col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-start text-md-start text-center fw-semibold">
                    Draying
                </h3>
            </div>
        </div>

        <!--Inspection -->
        <div class="row py-3">
            <div class=" col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-end text-md-end text-center fw-semibold">
                    Inspection
                </h3>
            </div>
            <div class=" col-6" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/inspection.png'); ?>" class="img-fluid rounded w-50" alt="manufactur Image">
            </div>
        </div>

        <!--Glazing -->
        <div class="row">
            <div class="col-6 text-end" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/glazing.png'); ?>" class="img-fluid w-50 rounded" alt="manufactur Image">
            </div>
            <div class="col-6 order-lg-1 order-md-1 order-sm-0 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-start text-md-start text-center fw-semibold">
                    Glazing
                </h3>
            </div>
        </div>

        <!-- Loading -->
        <div class="row py-3">
            <div class=" col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-end text-md-end text-center fw-semibold">
                    Loading
                </h3>
            </div>
            <div class=" col-6" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/loading.png'); ?>" class="img-fluid rounded w-50" alt="manufactur Image">
            </div>
        </div>

        <!-- Firing -->
        <div class="row">
            <div class="col-6 text-end" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/product/firing.png'); ?>" class="img-fluid w-50 rounded" alt="manufactur Image">
            </div>
            <div class="col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-start text-md-start text-center fw-semibold">
                    Firing
                </h3>
            </div>
        </div>

        <!-- Body Inspection -->
        <div class="row py-3">
            <div class=" col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-end text-md-end text-center fw-semibold">
                    Body Inspection
                </h3>
            </div>
            <div class=" col-6" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/logo/defauld.jpg'); ?>" class="img-fluid rounded w-50" alt="manufactur Image">
            </div>
        </div>

        <!--Packing -->
        <div class="row">
            <div class="col-6 text-end" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/logo/defauld.jpg'); ?>" class="img-fluid w-50 rounded" alt="manufactur Image">
            </div>
            <div class="col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-start text-md-start text-center fw-semibold">
                    Packing
                </h3>
            </div>
        </div>

        <!-- Delivering -->
        <div class="row py-3">
            <div class=" col-6 d-grid align-content-center mt-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <h3 class="p-color  text-lg-end text-md-end text-center fw-semibold">
                    Delivering
                </h3>
            </div>
            <div class=" col-6" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?= base_url('assets/image/logo/defauld.jpg'); ?>" class="img-fluid rounded w-50" alt="manufactur Image">
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
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
            <a href="/about" class="btn btn-secondary w-50 py-2 rounded-pill" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Selengkapnya</a>
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

<!-- end template session -->
<?php $this->endSection()  ?>
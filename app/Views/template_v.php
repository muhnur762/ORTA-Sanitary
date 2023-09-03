<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO -->
    <meta name="description" content="Website Resmi Orta Sanitary">
    <meta name="keywords" content="Orta,Sanitary,kloset,Orta Sanitary">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORTA Sanitary</title>

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Data Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- my icont -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg fixed-top shadow py-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/image/logo.png'); ?>" alt="Bootstrap" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                    <div class="offcanvas-header">
                        <img src="<?= base_url('assets/image/logo.png'); ?>" alt="Bootstrap" height="24" class="offcanvas-title" id="offcanvasNavbarLabel">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 align-items-center gap-3 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#product" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tentang Kami
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/#about" class="dropdown-item">Orta</a></li>
                                    <li><a href="/manufactur" class="dropdown-item">Manufacturing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#product" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Produk
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/#primo" class="dropdown-item">Primo</a></li>
                                    <li><a href="/#savio" class="dropdown-item">Savio</a></li>
                                    <li><a href="/#serio" class="dropdown-item">Serio</a></li>
                                    <li><a href="/#senza" class="dropdown-item">Senza</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#waranty">Garansi</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('assets/docs/katalog.pdf'); ?>" target="_blank" class="btn btn-primary btn-catalogue px-4 m-1 rounded-pill">Katalog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- end navbar -->

    <!-- session -->
    <?php $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="pt-5" id="footer">
        <div class="container">
            <div class="row gap-5 text-white">
                <div class="col-6 col-md-2 col-lg-2 order-first">
                    <a href="#home">
                        <img src="<?= base_url('assets/image/logo/logo-white.png'); ?>" alt="Logo" class="img-fluid w-50">
                    </a>
                    <p class="fw-regular pt-3">Toilet Pilihan Kita!</p>
                </div>
                <div class="col-9 col-md-9 col-lg-9 order-second">
                    <div class="row">
                        <div class="col-0 col-md-2 col-lg-2">
                        </div>
                        <div class="col-12 col-md-3 col-lg-3 order-2 py-3">
                            <h5 class="fw-normal">Menu</h5>
                            <ul class="list-unstyled">
                                <li class="my-3"><a href="#home" class="text-white fw-light text-decoration-none">Beranda</a></li>
                                <li class="my-3"><a href="#about" class="text-white fw-light text-decoration-none">Tentang Kami</a></li>
                                <li class="my-3"><a href="#waranty" class="text-white fw-light text-decoration-none">Garansi</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3 order-3 py-3">
                            <h5 class="fw-normal">Produk</h5>
                            <ul class="list-unstyled">
                                <li class="my-3"><a href="#primo" class="text-white fw-light text-decoration-none">Primo</a></li>
                                <li class="my-3"><a href="#savio" class="text-white fw-light text-decoration-none">Savio</a></li>
                                <li class="my-3"><a href="#serio" class="text-white fw-light text-decoration-none">Serio</a></li>
                                <li class="my-3"><a href="#senza" class="text-white fw-light text-decoration-none">Senza</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 order-4 py-3">
                            <h5 class="fw-normal">Kontak Kami</h5>
                            <ul class="list-unstyled">
                                <li class="my-3">
                                    <p class="text-white fw-light"><i class="bi bi-globe2"></i> www.orta.co.id</p>
                                </li>
                                <li class="my-3">
                                    <a href="https://wa.me/+622130424888" target="_blank " class="text-white fw-light text-decoration-none"><i class="bi bi-whatsapp"></i> +62 21 3042 4888</a>
                                </li>
                                <li class="my-3">
                                    <a href="https://instagram.com/orta.sanitary" target="_blank " class="text-white fw-light text-decoration-none"><i class="bi bi-instagram"></i> @orta.sanitary</a>
                                </li>
                                <li class="my-0">
                                    <p class="text-white fw-light "><span class="fw-bold">PT KARYA BUMIMAS PERSADA</span> <br> Kp. Cibugis RT 05/06 <br> Klapanunggal, Kab. Bogor <br>Jawa Barat</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-3">
                <p class="text-white m-0 fw-regular">
                    &copy; ORTA Sanitary. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Data Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Aos Initialize -->
    <script>
        AOS.init({
            once: true
        });
        AOS.refresh();
    </script>
</body>

</html>
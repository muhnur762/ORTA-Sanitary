<!-- call the template folder -->
<?php $this->extend('template_v')  ?>

<!-- start template session -->
<?php $this->section('content')  ?>

<!-- content -->
<section>
    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/image/logo.png'); ?>" alt="Bootstrap" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Garansi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- end Content -->

<!-- end template session -->
<?php $this->endSection()  ?>
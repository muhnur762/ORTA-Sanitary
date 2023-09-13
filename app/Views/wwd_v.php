<!-- call the template folder -->
<?php $this->extend('template_v')  ?>

<!-- start template session -->
<?php $this->section('content')  ?>

<section class="vh-100">
    <div class="row d-flex vh-100 align-items-center">
        <div class="col text-center">
            <img src="<?= base_url('assets/image/404.svg'); ?>" alt="Not found" class="img-fluid w-50">
        </div>
    </div>
</section>

<!-- end template session -->
<?php $this->endSection()  ?>
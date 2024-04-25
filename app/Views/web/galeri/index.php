<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Galeri Foto</h2>
        <div class="row no-gutters">
            <div class="col-4 px-1">
                <a href="<?= base_url('img/1.jpg') ?>" data-fancybox data-caption="Image caption">
                    <img class="rounded w-100" src="<?= base_url('img/1.jpg') ?>" alt="" style="max-width: 300px; max-height: 200px;">
                </a>
            </div>
            <div class="col-4 px-1">
                <a href="<?= base_url('img/2.jpg') ?>" data-fancybox data-caption="Image caption">
                    <img class="rounded w-100" src="<?= base_url('img/2.jpg') ?>" alt="" style="max-width: 300px; max-height: 200px;">
                </a>
            </div>
            <div class="col-4 px-1">
                <a href="<?= base_url('img/3.jpg') ?>" data-fancybox data-caption="Image caption">
                    <img class="rounded w-100" src="<?= base_url('img/3.jpg') ?>" alt="" style="max-width: 300px; max-height: 200px;">
                </a>
            </div>
            <div class="col-4 px-1">
                <a href="<?= base_url('img/4.jpg') ?>" data-fancybox data-caption="Image caption">
                    <img class="rounded w-100" src="<?= base_url('img/11.jpg') ?>" alt="" style="max-width: 300px; max-height: 200px;">
                </a>
            </div>
            <div class="col-4 px-1">
                <a href="<?= base_url('img/5.jpg') ?>" data-fancybox data-caption="Image caption">
                    <img class="rounded w-100" src="<?= base_url('img/5.jpg') ?>" alt="" style="max-width: 300px; max-height: 200px;">
                </a>
            </div>
            <div class="col-4 px-1">
                <a href="<?= base_url('img/39.jpg') ?>" data-fancybox data-caption="Image caption">
                    <img class="rounded w-100" src="<?= base_url('img/39.jpg') ?>" alt="" style="max-width: 300px; max-height: 200px;">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?= base_url('img/brain') ?>" class="img-fluid" alt="Gambar">
            </div>
        </div>
    </div>
</div>

<?php $this->endsection() ?>
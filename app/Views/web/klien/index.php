<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Daftar Klien</h2>
        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="d-flex">
                        <div class="card-header">
                            <img src="<?= base_url('img/enterprise.png') ?>" alt="..." style="width: 50px;">
                        </div>
                        <div class="card-header flex-grow-1">
                            Perusahaan A
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bidang Otomotif</li>
                        <li class="list-group-item">Bergabung Sejak : 2019</li>
                    </ul>
                </div>

            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="d-flex">
                        <div class="card-header">
                            <img src="<?= base_url('img/location-pin.png') ?>" alt="..." style="width: 50px;">
                        </div>
                        <div class="card-header flex-grow-1">
                            Perusahaan B
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bidang Asuransi</li>
                        <li class="list-group-item">Bergabung Sejak : 2010</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="d-flex">
                        <div class="card-header">
                            <img src="<?= base_url('img/kiw.png') ?>" alt="..." style="width: 50px;">
                        </div>
                        <div class="card-header flex-grow-1">
                            Perusahaan C
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bidang Teknologi</li>
                        <li class="list-group-item">Bergabung Sejak : 2019</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="d-flex">
                        <div class="card-header">
                            <img src="<?= base_url('img/office-building.png') ?>" alt="..." style="width: 50px;">
                        </div>
                        <div class="card-header flex-grow-1">
                            Perusahaan ABC
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bidang Peralatan Berkendara</li>
                        <li class="list-group-item">Bergabung Sejak : 2019</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<?php $this->endsection() ?>
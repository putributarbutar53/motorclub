<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Produk Kami</h2>
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/motor1.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Motor X</h5>
                        <p class="card-text">Dibuat dengan teknologi canggih dan desain yang menawan, Motor X menjanjikan pengalaman berkendara yang luar biasa bagi para pengguna.</p>
                        <a href="#" class="btn btn-danger">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/motory.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Motor Y</h5>
                        <p class="card-text">Dibuat dengan teknologi canggih dan desain yang menawan, Motor Y menjanjikan pengalaman berkendara yang luar biasa bagi para pengguna.</p>
                        <a href="#" class="btn btn-danger">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/motor.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Motor Z</h5>
                        <p class="card-text">Dibuat dengan teknologi canggih dan desain yang menawan, Motor Y menjanjikan pengalaman berkendara yang luar biasa bagi para pengguna.</p>
                        <a href="#" class="btn btn-danger">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endsection() ?>
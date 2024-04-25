<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">VISI</h5>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('img/target.png') ?>" class="card-img-top img-thumbnail" alt="..." style="max-width: 250px;">
                    </div>
                    <br>
                    <p class="card-text">Visi kami di PBB's Motor Club adalah menjadi pusat komunitas yang bersemangat dan inklusif bagi para pecinta motor di seluruh wilayah. Kami bertekad untuk menciptakan lingkungan yang menyambut semua orang, dari pengendara berpengalaman hingga pemula, dan menjadikan klub ini sebagai tempat untuk berkumpul, belajar, dan saling mendukung dalam kegiatan berkendara.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">VISI</h5>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('img/leadership.png') ?>" class="card-img-top img-thumbnail" alt="..." style="max-width: 250px;">
                    </div>
                    <br>
                    <p class="card-text">
                    <ul>
                        <li>Memberikan pengalaman berkendara yang aman dan menyenangkan bagi semua anggota.</li>
                        <li>Mendorong pertumbuhan dan pengembangan individu melalui aktivitas klub dan program pelatihan.</li>
                        <li>Menyediakan aksesibilitas dan dukungan untuk pengendara pemula untuk meningkatkan keahlian mereka.</li>
                    </ul>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>
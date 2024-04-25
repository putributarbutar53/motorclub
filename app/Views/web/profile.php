<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Profile Perusahaan</h2>
        <p>Perusahaan PBB's Motor Club tidak hanya menawarkan layanan, tetapi juga memberikan pengalaman yang luar biasa kepada pelanggan kami. Kami percaya bahwa produk berkualitas, layanan yang unggul, dan tim yang berpengalaman adalah kunci kesuksesan kami. Kami berkomitmen untuk memberikan yang terbaik kepada pelanggan kami dan terus berinovasi untuk menjadi yang terdepan dalam industri.</p>
    </div>
</div>
<div class="feature-section">
    <div class="container">
        <h2>Informasi Perusahaan</h2>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nama Perusahaan:</strong> Perusahaan PBB'S Motor Club</p>
                <p><strong>Berdiri Sejak:</strong> 2000</p>
                <!-- tambahkan informasi lain di sini sesuai kebutuhan -->
            </div>
            <div class="col-md-6">
                <img src="<?= base_url('img/yacht.png') ?>" alt="Logo Perusahaan" class="img-fluid" style="max-width: 100px;">
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>
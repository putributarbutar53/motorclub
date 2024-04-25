<?php $this->extend('web/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Artikel</h2>
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                    <br>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('img/article.png') ?>" class="card-img-top" alt="..." style="max-width: 200px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tips Berkendara yang Aman dan Nyaman</h5>
                        <p class="card-text">Berkendara motor adalah salah satu kegiatan yang menyenangkan, namun juga memerlukan kehati-hatian. Dalam artikel ini, kami akan memberikan tips-tips untuk berkendara dengan aman dan nyaman.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Perawatan Rutin Motor</li>
                        <li class="list-group-item">Memakai Perlengkapan Keselamatan</li>
                        <li class="list-group-item">Memperhatikan Cuaca dan Kondisi Jalan</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <br>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('img/user-interface.png') ?>" class="card-img-top" alt="..." style="max-width: 200px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tips Memilih Motor yang Tepat</h5>
                        <p class="card-text">Memilih motor yang sesuai dengan kebutuhan dan preferensi Anda adalah langkah penting sebelum membeli. Dalam artikel ini, kami akan memberikan tips-tips untuk membantu Anda memilih motor yang tepat.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Perhatikan Kebutuhan Berkendara</li>
                        <li class="list-group-item">Cari Tahu Fitur-Fitur Penting</li>
                        <li class="list-group-item">Sesuaikan dengan Budget Anda</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" onclick="showArticleModal('Tips Memilih Motor yang Tepat', 'Memilih motor yang sesuai dengan kebutuhan dan preferensi Anda adalah langkah penting sebelum membeli. Dalam artikel ini, kami akan memberikan tips-tips untuk membantu Anda memilih motor yang tepat.');">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <br>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('img/blog.png') ?>" class="card-img-top" alt="..." style="max-width: 200px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cara Merawat Motor Agar Awet</h5>
                        <p class="card-text">Merawat motor dengan baik adalah kunci untuk memperpanjang umur pakai dan menjaga performa mesin tetap optimal. Dalam artikel ini, kami akan membagikan tips-tips perawatan motor yang dapat Anda terapkan.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pengecekan Rutin Suku Cadang</li>
                        <li class="list-group-item">Pemeliharaan Sistem Pendingin</li>
                        <li class="list-group-item">Membersihkan dan Melumasi dengan Tepat</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" onclick="showArticleModal('Cara Merawat Motor Agar Awet', 'Merawat motor dengan baik adalah kunci untuk memperpanjang umur pakai dan menjaga performa mesin tetap optimal. Dalam artikel ini, kami akan membagikan tips-tips perawatan motor yang dapat Anda terapkan.');">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php $this->endsection() ?>
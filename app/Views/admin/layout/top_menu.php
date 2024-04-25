<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('img/motorcycle.png') ?>" alt="Logo" width="30" height="30" class="d-inline-block align-top mr-2" />
            Admin PBB's Motor Club
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?> ">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('admin/artikel') ?>">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="case.php">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('produk') ?>">Gallery Photo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('kontak') ?>">Klien Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('about') ?>">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
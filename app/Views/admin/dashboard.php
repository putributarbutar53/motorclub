<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS (anda mungkin perlu menyesuaikan jalur CSS sesuai dengan instalasi Anda) -->
    <link href="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <!-- CSS Kustom Anda -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
    <style>
        /* Gaya khusus untuk halaman Home */
        .hero-section {
            background-image: url('background.jpg');
            /* Ganti dengan URL gambar latar belakang yang sesuai */
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .feature-section {
            padding: 50px 0;
            background-color: #f8f9fa;
        }

        .feature-section h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #007bff;
        }

        .feature-description {
            font-size: 1.1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <main class="main-content  ">
        <?= $this->include('web/layout/top_menu') ?>
        <div class="row">
            <div class="col-2 bg-secondary">
                <nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-vibrant">
                    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
                            <br>
                            <br>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item<?php if (current_url() === site_url('admin/dashboard')) { ?> active<?php } ?>">
                                    <a class="nav-link" href="<?php echo site_url('admin/artikel') ?>" style="color: white; font-weight: bold;">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">Artikel</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-2" style="border-top: 2px solid #fff;">
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item<?php if (current_url() === site_url('admin/dashboard')) { ?> active<?php } ?>">
                                    <a class="nav-link" href="<?= site_url('event') ?>" style="color: white; font-weight: bold;">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">Event </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-2" style="border-top: 2px solid #fff;">
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item<?php if (current_url() === site_url('admin/dashboard')) { ?> active<?php } ?>">
                                    <a class="nav-link" href="<?= site_url('galeri') ?>" style="color: white; font-weight: bold;">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">Galeri Foto</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-2" style="border-top: 2px solid #fff;">
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item<?php if (current_url() === site_url('admin/dashboard')) { ?> active<?php } ?>">
                                    <a class="nav-link" href="<?= site_url('klien') ?>" style="color: white; font-weight: bold;">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">Klien Kami</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-2" style="border-top: 2px solid #fff;">
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url('logout') ?>" style="color: white; font-weight: bold;">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">Log Out</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-2" style="border-top: 2px solid #fff;">
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-10">
                <div class="feature-section">
                    <br>
                    <div class="container">
                        <h2>Halo Admin</h2>
                        <p>Anda sekarang sedang berada di halaman di Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('web/layout/footer') ?>
    </main>

    <!-- Bootstrap JS (anda mungkin perlu menyesuaikan jalur JS sesuai dengan instalasi Anda) -->

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <!-- JS Kustom Anda -->
    <script src="<?= base_url('js/custom.js') ?>"></script>
    <script src="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.js"></script>
</body>

</html>
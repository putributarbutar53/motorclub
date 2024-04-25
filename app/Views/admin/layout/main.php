<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS (anda mungkin perlu menyesuaikan jalur CSS sesuai dengan instalasi Anda) -->
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
        <?= $this->include('admin/layout/top_menu') ?>
        <?= $this->renderSection('content') ?>

        <?= $this->include('admin/layout/footer') ?>
    </main>

    <!-- Bootstrap JS (anda mungkin perlu menyesuaikan jalur JS sesuai dengan instalasi Anda) -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <!-- JS Kustom Anda -->
    <script src="<?= base_url('js/custom.js') ?>"></script>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/@fortawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/is_js/is.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/lodash/lodash.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="<?= base_url() ?>assets/lib/prismjs/prism.js"></script>
    <script src="<?= base_url() ?>assets/lib/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="<?= base_url() ?>assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="<?= base_url() ?>assets/lib/flatpickr/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
    <script>
        function showToast(type, message, title = null) {
            var defaultOptions = {
                closeButton: true,
                newestOnTop: false,
                positionClass: 'toast-bottom-right'
            };
            var vTitle = (title != null) ? title : type;
            toastr.options = defaultOptions;

            switch (type) {
                case 'success':
                    toastr.success(message, vTitle);
                    break;

                case 'warning':
                    toastr.warning(message, vTitle);
                    break;

                case 'error':
                    toastr.error(message, vTitle);
                    break;

                default:
                    toastr.info(message, vTitle);
                    break;
            }
        }

        function showToastError(error, eJson = null) {
            var defaultOptions = {
                closeButton: true,
                newestOnTop: false,
                positionClass: 'toast-bottom-right'
            };
            toastr.options = defaultOptions;

            if (eJson && eJson.errors) {
                // Menggunakan for...in loop
                for (var key in eJson.errors) {
                    toastr.error(eJson.errors[key], key);
                }
            } else {
                toastr.error(error, "Error");
            }
        }
    </script>   

    <?= $this->renderSection('script') ?>
</body>

</html>
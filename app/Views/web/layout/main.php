<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBB'S Motor Club</title>
    <link href="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
    <style>
        .hero-section {
            background-image: url('background.jpg');
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
                <?= $this->include('web/layout/left_menu') ?>
            </div>
            <div class="col-10"><?= $this->renderSection('content') ?></div>
        </div>

        <?= $this->include('web/layout/footer') ?>
    </main>


    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

    <script src="<?= base_url('js/custom.js') ?>"></script>
    <script src="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.js"></script>
</body>

</html>
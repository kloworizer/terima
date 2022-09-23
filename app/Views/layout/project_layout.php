<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $headerTitle ?></title>
    <?= $this->renderSection('headerAssets') ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar fixed-bottom navbar-light bg-dark">
        <a class="navbar-brand" href="<?= site_url() ?>">Terima</a>

        <div class="collapse navbar-collapse" id="navbars">

            <?= $this->renderSection('navbar') ?>

        </div>
    </nav>
    <!-- Main-->
    <?= $this->renderSection('main') ?>
    <!-- Footer-->
    <?= $this->renderSection('footerAssets') ?>
</body>

<body>
</body>

</html>
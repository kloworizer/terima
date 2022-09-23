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
    <div class="container-lg">
        <div class="row align-items-center justify content-center">
            <div class="col">
                <h1 class="text-center font-weight-bold text-info">Terima</h1>
            </div>
        </div>
        <div class="row align-items-center justify content-center">
            <div class="col">
                <!-- Main-->
                <?= $this->renderSection('main') ?>
            </div>
        </div>
    </div>
    <!-- Navigation-->
    <div>
        <nav class="navbar navbar-expand navbar-dark bg-info fixed-bottom">
            <div class="nav navbar-nav nav-justified w-100">
                <a class="nav-item nav-link" href="/"><i class="fa-solid fa-house"></i></a>
                <a class="nav-item nav-link" href="/add"><i class="fa-solid fa-circle-plus"></i></a>
                <a class="nav-item nav-link" href="/profil"><i class="fa-solid fa-user"></i></a>
            </div>
        </nav>
    </div>
</body>

<body>
</body>

</html>
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
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
            <div class="nav navbar-nav nav-justified w-100">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Cari.." aria-label="Search" aria-describedby="search-addon" />
                </div>
            </div>
        </nav>
    </div>
    <div class="container-lg">
        <div class="row align-items-center justify content-center mx-1 mt-4">
            <div class="col">
                <!-- Main-->
                <?= $this->renderSection('main') ?>
            </div>
        </div>
    </div>
    <!-- Navigation-->
    <?= $this->include('layout/navbar') ?>
</body>

<body>
</body>

</html>
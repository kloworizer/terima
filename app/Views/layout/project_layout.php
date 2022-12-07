<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $headerTitle ?></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?= $this->renderSection('headerAssets') ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
            <div class="nav navbar-nav nav-justified w-100 mx-5">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Cari.." aria-label="Search" aria-describedby="search-addon" />
                    <!-- Collapse button -->
                    <button class="navbar-toggler toggler-example ml-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid px-0 mb-5">
        <div class="row align-items-center justify content-center mx-1 mt-4">
            <div class="col">
                <div class="container-xl">
                    <aside>
                        {alerts}
                    </aside>
                </div>
                <!-- Main-->
                <?= $this->renderSection('main') ?>
            </div>
        </div>
    </div>
    <!-- Navigation-->
    <?= $this->include('layout/navbar') ?>
</body>
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    });
</script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

</html>
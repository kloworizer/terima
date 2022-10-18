<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>
<div class="card my-4">
    <div class="card-header text-center">
        <h2>Tanda <span class="text-info">Terima</span></h2>
    </div>
    <div class="card-body p-3">
        <div class="row">
            <div class="col">
                <h4>Nomor Tanda Terima</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Pengirim</h5>
            </div>
            <div class="col">
                <h5>Penerima</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Nama Pengirim</p>
                <p>Email Pengirim</p>
                <p>HP Pengirim</p>
            </div>
            <div class="col">
                <p>Nama Penerima</p>
                <p>Email Penerima</p>
                <p>HP Penerima</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
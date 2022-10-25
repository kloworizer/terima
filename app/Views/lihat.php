<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>
<div class="card mt-4 mb-5 mx-0">
    <div class="card-header text-center">
        <h2>Tanda <span class="text-info">Terima</span></h2>
        <h4><?= $dataTandaTerima['no_terima'] ?></h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <p>Telah diserah terimakan dokumen / barang oleh :</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Pengirim</h5>
                <p><?= $dataTandaTerima['nama_pengirim'] ?></br>
                    <?= $dataTandaTerima['email_pengirim'] ?></br>
                    <?= $dataTandaTerima['hp_pengirim'] ?></p>
            </div>
            <div class="col-sm-6">
                <h5>Penerima</h5>
                <p><?= $nama_penerima ?></br>
                    <?= $email_penerima ?></br>
                    <?= $dataTandaTerima['hp_pengirim'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Uraian</h5>
                <p><?= $dataTandaTerima['keterangan'] ?></p>
            </div>
        </div>
        <?php if ($dataDetilTerima) { ?>
            <div class="row">
                <div class="col">
                    <h5>Rincian barang</h5>
                    <div class="row">
                        <div class="col-2">No</div>
                        <div class="col">Rincian Barang</div>
                        <div class="col">Jumlah</div>
                    </div>
                    <?php for ($i = 0; $i < count($dataDetilTerima); $i++) { ?>
                        <div class="row">
                            <div class="col-2"><?= $i + 1 ?></div>
                            <div class="col"><?= $dataDetilTerima[$i]['uraian'] ?></div>
                            <div class="col"><?= $dataDetilTerima[$i]['jumlah'] . ' ' . $dataDetilTerima[$i]['satuan'] ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($dataFotoTerima) { ?>
            <div class="row mt-5">
                <div class="card-deck">
                    <?php for ($i = 0; $i < count($dataFotoTerima); $i++) { ?>
                        <div class="col-sm-6">
                            <div class="card">
                                <img src="<?= '/uploads/' . $dataFotoTerima[$i]['file_foto'] ?>" class="card-img-top" alt="">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </div>
<?php } ?>

</div>
</div>
<?= $this->endSection() ?>
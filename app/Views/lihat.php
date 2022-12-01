<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>
<div class="container-xl">
    <div class="card mt-4 mb-5 mx-0">
        <div class="card-header text-center">
            <h2>Tanda <span class="text-info">Terima</span></h2>
            <h4><?= $dataTandaTerima['no_terima'] ?></h4>
            <a href="/pdf/<?= $dataTandaTerima['id'] ?>"><button class="btn btn-secondary" id="pdf"><i class="fa-solid fa-file-pdf"></i> PDF</button></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-center">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Telah diserahterimakan dokumen / barang oleh :</p>
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
                    <p><?= $dataTandaTerima['nama_penerima'] ?></br>
                        <?= $dataTandaTerima['email_penerima'] ?></br>
                        <?= $dataTandaTerima['hp_penerima'] ?></p>
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
                            <div class="col-2"><b>No</b></div>
                            <div class="col"><b>Rincian Barang</b></div>
                            <div class="col"><b>Jumlah</b></div>
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
            <?php } ?>
        </div>
        <div class="card-footer">
            <i>Tanda terima ini adalah tanda penerimaan yang sah dan telah disetujui oleh pengirim dan penerima.</i>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
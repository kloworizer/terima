<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $headerTitle ?></title>
</head>

<body>
    <table cellpadding=2 cellspacing=0>
        <thead>
            <tr>
                <td colspan="4">
                    <h1>Tanda <span class="text-info">Terima</span></h1>
                    <h4><?= $dataTandaTerima['no_terima'] ?></h4>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="4">
                    <p>Telah diserahterimakan dokumen / barang oleh :</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Pengirim</h5>
                    <?= $dataTandaTerima['nama_pengirim'] ?><br>
                    <?= $dataTandaTerima['email_pengirim'] ?><br>
                    <?= $dataTandaTerima['hp_pengirim'] ?>
                </td>
                <td>
                    <h5>Penerima</h5>
                    <?= $dataTandaTerima['nama_penerima'] ?><br>
                    <?= $dataTandaTerima['email_penerima'] ?><br>
                    <?= $dataTandaTerima['hp_penerima'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h5>Uraian</h5>
                    <p><?= $dataTandaTerima['keterangan'] ?></p>
                </td>
            </tr>
            <?php if ($dataDetilTerima) { ?>
                <tr>
                    <td colspan="4">
                        <h5>Rincian barang</h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table cellpadding=2 cellspacing=0 style="border:1px solid black; border-collapse: collapse;">
                            <thead>
                                <tr style="border:1px solid black; border-collapse: collapse;">
                                    <td style="border:1px solid black; border-collapse: collapse;">No</td>
                                    <td colspan="2" style="border:1px solid black; border-collapse: collapse; width:450px;">Rincian Barang</td>
                                    <td style="border:1px solid black; border-collapse: collapse;">Jumlah</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($dataDetilTerima); $i++) { ?>
                                    <tr style="border:1px solid black; border-collapse: collapse;">
                                        <td style="border:1px solid black; border-collapse: collapse;"><?= $i + 1 ?></td>
                                        <td colspan="2" style="border:1px solid black; border-collapse: collapse;"><?= $dataDetilTerima[$i]['uraian'] ?></td>
                                        <td style="border:1px solid black; border-collapse: collapse;"><?= $dataDetilTerima[$i]['jumlah'] . ' ' . $dataDetilTerima[$i]['satuan'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="4">
                    <p>
                        <small><i>Tanda terima ini adalah tanda penerimaan yang sah dan telah disetujui oleh pengirim dan penerima.</i></small>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="<?= $qr_code ?>" alt="qr code" width="200"><br>
                    <small>Pindai QR Code untuk mengecek<br>validitas tanda Terima</small>
                </td>
            </tr>
        </tbody>

    </table>
</body>

</html>
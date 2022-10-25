<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>
<div class="card my-4">
    <div class="card-header text-center">
        <h2>Buat tanda <span class="text-info">Terima</span></h2>
    </div>
    <div class="card-body p-3">
        <div class="row">
            <div class="col">
                <form action="/add" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_pengirim" class="required">Telah diterima dari</label>
                        <input type="text" class="form-control" name="nama_pengirim" value="<?= old('nama_pengirim'); ?>" id="nama_pengirim" aria-describedby="helpId" placeholder="Nama pengirim" required>
                        <label for="email_pengirim" class="required">Email</label>
                        <input type="text" class="form-control" name="email_pengirim" value="<?= old('email_pengirim'); ?>" id="email_pengirim" aria-describedby="helpId" placeholder="Email pengirim" type="email" required>
                        <label for="hp_pengirim" class="required">HP</label>
                        <input type="text" class="form-control" name="hp_pengirim" value="<?= old('hp_pengirim'); ?>" id="hp_pengirim" aria-describedby="helpId" placeholder="HP Pengirim" required>
                        <label for="keterangan">Berupa</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Uraian singkat / keterangan barang yang diterima"></textarea>
                    </div>
                    <div class="form-group terima-items">
                        <label>Rincian barang yang diterima :</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nama_barang[]" id="nama_barang" aria-describedby="helpId" placeholder="Nama barang">
                            <input type="text" class="form-control" name="jumlah_barang[]" id="jumlah_barang" aria-describedby="helpId" placeholder="Jumlah barang">
                            <input type="text" class="form-control" name="satuan_barang[]" id="satuan_barang" aria-describedby="helpId" placeholder="Satuan">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa-solid fa-circle-plus"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="images">Unggah foto barang :</label>
                        <input type="file" class="form-control-file" name="images[]" id="images" multiple="" placeholder="" aria-describedby="fileHelpId" accept="image/*">
                        <small id="fileHelpId" class="form-text text-muted">ekstensi file .jpg, .png</small>
                    </div>
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var maxField = 20;
        var addButton = $('.add_button');
        var wrapper = $('.terima-items');
        var fieldHTML = `<div class="input-group">
                            <input type="text" class="form-control" name="nama_barang[]" id="nama_barang" aria-describedby="helpId" placeholder="Nama barang">
                            <input type="text" class="form-control" name="jumlah_barang[]" id="jumlah_barang" aria-describedby="helpId" placeholder="Jumlah barang">
                            <input type="text" class="form-control" name="satuan_barang[]" id="satuan_barang" aria-describedby="helpId" placeholder="Satuan">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <a href="javascript:void(0);" class="remove_button" title="Add field"><i class="fa-solid fa-circle-minus"></i></a>
                                </span>
                            </div>
                        </div>`;
        var x = 1;

        $(addButton).click(function() {
            if (x < maxField) {
                x++;
                $(wrapper).append(fieldHTML);
            }
        });

        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent().parent().parent('div').remove();
            x--;
        });
    });
</script>
<?= $this->endSection() ?>
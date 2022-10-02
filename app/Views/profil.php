<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>

<div class="card my-5">
    <div class="card-body p-3">
        <div class="row">
            <div class="col-12 col-sm-auto mb-3" style="margin-top: -50px;">
                <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded-circle" style="height: 140px; background-color: rgb(233, 236, 239);"> <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span></div>
                </div>
            </div>
            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?= auth()->user()->username ?></h4>
                    <p class="mb-0"><?= auth()->user()->email ?></p>
                </div>
                <div>
                <a name="" id="" class="btn btn-info" href="/logout" role="button">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

</div>
<div class="card my-4">
    <div class="card-header">
        Ubah password
    </div>
    <div class="card-body p-3">
        <div class="row">
            <div class="col">
                <form action="/ubahPassword" method="post">
                    <div class="form-group">
                        <label for="">Password lama</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Password baru</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Ulangi password baru</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
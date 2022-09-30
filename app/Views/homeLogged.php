<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>

<div class="card my-4">
  <div class="card-body p-5">
    <?= auth()->user()->username ?>
	<a name="" id="" class="btn btn-primary" href="/logout" role="button">Logout</a>
  </div>
</div>

<?= $this->endSection() ?>
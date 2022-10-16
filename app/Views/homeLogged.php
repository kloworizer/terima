<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>

<div class="card my-4">
	<div class="card-body p-3">
		<div class="row">
			<div class="col-12 col-sm-auto mb-3">
				<div class="mx-auto" style="width: 140px;">
					<div class="d-flex justify-content-center align-items-center rounded-circle" style="height: 140px; background-color: rgb(233, 236, 239);"> <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span></div>
				</div>
			</div>
			<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
				<div class="text-center text-sm-left mb-2 mb-sm-0">
					<h2 class="pt-sm-2 pb-1 mb-0 text-nowrap">Hello, <?= auth()->user()->username ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card my-4">
	<div class="card-header text-center">
		<h2>Riwayat tanda <span class="text-info">Terima</span></h2>
	</div>
	<div class="card-body p-3">
		
</div>

<?= $this->endSection() ?>
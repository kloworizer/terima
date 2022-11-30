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
		<table id="riwayat" class="table table-striped table-bordered display nowrap">
			<thead>
				<tr>
					<th>No Terima</th>
					<th>Tanggal</th>
					<th>Nama Pengirim</th>
					<th>Nama Penerima</th>
					<th>Keterangan</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="card-body p-3">

	</div>
</div>

<script>
	$(document).ready(function() {
		var userID = <?= auth()->id() ?>;
		var riwayat = $('#riwayat').DataTable({
			processing: true,
			serverSide: true,
			ajax: 'riwayat/' + userID,
			columns: [{
					data: 'no_terima',
					name: 'no_terima'
				},
				{
					data: 'tanggal',
					name: 'tanggal'
				},
				{
					data: 'nama_pengirim',
					name: 'nama_pengirim'
				},
				{
					data: 'nama_penerima',
					name: 'nama_penerima'
				},
				{
					data: 'keterangan',
					name: 'keterangan'
				},
				{
					data: 'status',
					name: 'status'
				},
				{
					data: null,
					render: (data, type, row) => {
						return `<a href="lihat/${row.id}"><button class="btn btn-secondary" id="lihat"><i class="fa-solid fa-magnifying-glass"></i> Lihat</button></a>&nbsp;
								<a href="pdf/${row.id}"><button class="btn btn-secondary" id="pdf"><i class="fa-solid fa-file-pdf"></i> PDF</button></a>`;
					}
				},
			],
			'bLengthChange': false,
			responsive: true,
		});
	});
</script>

<?= $this->endSection() ?>
</a>
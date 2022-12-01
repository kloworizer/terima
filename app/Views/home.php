<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>
<div class="container-xl">
	<div class="jumbotron">
		<div class="container">
			<h1>Buat tanda terima</h1>
			<p>Buat tanda terima barang dan dokumen dengan cepat dan mudah</p>
			<a name="hero1" id="hero1" class="btn btn-info" href="/register" role="button">Coba sekarang</a>
		</div>
	</div>

	<div class="card my-4">
		<div class="card-body p-sm-5">
			<h2>Proses buat tanda terima di <span class="text-info">Terima</span></h2>
			<ol>
				<li>Penerima memeriksa dokumen / barang yang diserahterimakan.</li>
				<li>Pengirim / Penerima membuat tanda terima di <span class="text-info font-weight-bold">Terima</span> dengan merekam uraian barang dan foto barang.</li>
				<li>Pengirim mendapatkan tanda terima penyerahan barang dari <span class="text-info font-weight-bold">Terima</span></li>
			</ol>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
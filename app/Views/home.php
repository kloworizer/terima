<?= $this->extend(config('Layouts')->default) ?>

<?= $this->section('main') ?>

<div id="carouselhero" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?= base_url() ?>/img/hero1.jpg" alt="First slide">
			<div class="carousel-caption text-left">
				<h1>Buat tanda terima barang dan dokumen dengan cepat dan mudah</h1>
				<a name="" id="" class="btn btn-info" href="/register" role="button">Coba sekarang</a>
			</div>
		</div>
	</div>
</div>

<div class="card my-4">
  <div class="card-body p-5">
    <h2>Proses buat tanda terima di <span class="text-info">Terima</span></h2>
	<ol>
		<li>Penerima memeriksa dokumen / barang yang diserahterimakan.</li>
		<li>Pengirim / Penerima membuat tanda terima di <span class="text-info font-weight-bold">Terima</span> dengan merekam uraian barang dan foto barang.</li>
		<li>Pengirim mendapatkan tanda terima penyerahan barang dari <span class="text-info font-weight-bold">Terima</span></li>
	</ol>
  </div>
</div>

<?= $this->endSection() ?>
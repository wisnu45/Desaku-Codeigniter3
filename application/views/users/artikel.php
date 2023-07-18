<?php foreach ($artikel as $a): ?>
<div class="card mb-3">
  <img class="card-img-top" <img src="<?php echo base_url('upload/artikel/' . $a["gambar_judul"]) ?>" alt="Card image cap">
  <div class="card-body">
	<h5 class="card-title"><?php echo $a["judul"] ?></h5>
	<p><a href="">Selengkapnya Klik disini</a></p>
    <p class="card-text"><small class="text-muted">Author: <?php echo $a["username"] ?> Tanggal Upload : <?php echo $a["tgl_upload"] ?></small></p>
  </div>
</div>
<?php endforeach; ?>

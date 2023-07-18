<div class="col-sm-4 mt-3">
	<h3><span class="badge badge-primary">Wilayah Desa</span></h5>
		<div class="card bg-dark p-1 mt-4">
			<a href="https://www.google.com/maps/place/Trate,+Sugihwaras,+Bojonegoro+Regency,+East+Java/@-7.3011649,111.9598312,15z/data=!3m1!4b1!4m5!3m4!1s0x2e78294e97c50a7b:0x603113d4a3811225!8m2!3d-7.2994534!4d111.9671537" target="blank" class="responsive"><img src="<?php echo base_url('assets/trate.png'); ?>" alt=""></a>
		</div>

		<div class="card text-black bg-light mb-3 mt-3 p-3">
			<div class="card-header">
				<h5>login untuk penduduk</h5>
			</div>
			<form action="<?php echo base_url('Login/proses_login_penduduk') ?>" method="post" class="needs-validation" novalidate>
				<div class="form-group">
					<label for="username">
						<h6>NIK:</h6>
					</label>
					<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="password">
						<h6>Password:</h6>
					</label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
				<a href="<?php echo base_url('Login/register_penduduk') ?>" class="btn btn-warning text-white">Register</a>
			</form>

		</div>
		<div id="map" class="m-3"></div>
			<div class="card m-3" style="width: 18rem;">
				<div class="card-header bg-dark text-white">
					Agenda
				</div>
				<?php foreach ($agenda as $value) : ?>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<b><?= $value->agenda; ?></b>
							<p>Tempat : <?= $value->tempat; ?><br>
								Waktu : <?= $value->tanggal; ?> <?= $value->jam; ?><br>
								Koordinator : <?= $value->koordinator; ?></p>
						</li>
					</ul>
				<?php endforeach; ?>
			</div>
			<style>
				* element that contains the map. */ #map {
					height: 25%;
				}
			</style>
			<script>
				function initMap() {

					// membuat objek untuk titik koordinat
					var lombok = {
						lat: -7.3000441,
						lng: 111.9675025
					};

					// membuat objek peta
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 15,
						center: lombok
					});

					// mebuat konten untuk info window
					var contentString = '<h2>Balai Desa Trate</h2><br><p>Pencol, Trate, Sugihwaras, Kabupaten Bojonegoro, Jawa Timur 62183</p>';

					// membuat objek info window
					var infowindow = new google.maps.InfoWindow({
						content: contentString,
						position: lombok
					});

					// tampilkan info window pada peta
					infowindow.open(map);


				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKBUlk9wTx1rxaCWSHGjKR-yepY6m6i4A&callback=initMap" type="text/javascript"></script>
		</div>
</div>
</div>

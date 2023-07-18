<?=
	form_open('login/proses_login');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.card-header {
			background-image: url('<?php echo base_url('assets/login.jpg'); ?>');
			padding: 15px 15px 44px;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}
	</style>
</head>

<body>
	<div class="d-flex justify-content-center">
		<div class="container m-4 pb-5">
			<div class="d-flex mt-5 justify-content-center">
				<div class="col-sm-9">
					<div class="card">
						<div class="card-header text-center text-white">
							<h1>Sign In</h1>
						</div>
						<div class="card-body">
							<form method="post" class="needs-validation" novalidate>
								<div class="form-group">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
									<label for="password">Password:</label>
									<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
								<a href="<?php echo base_url('Login/register_user') ?>" class="btn btn-warning" style="color: white">Registrasi</a>
								<a href="<?php echo base_url('/') ?>" class="btn btn-danger">Cancel</a>
							</form>
						</div>
					</div>
					<div class="alert alert-secondary mt-3">
						<h5 class="text-center align-middle">
							<?php
							// Cek apakah terdapat session nama message
							if ($this->session->flashdata('message')) { // Jika ada
								echo $this->session->flashdata('message'); // Tampilkan pesannya
							} else {
								echo "Masukkan Username dan Password";
							}
							?>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
<script>
	// Disable form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Get the forms we want to add validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>

</html>
<?=
	form_close();
?>
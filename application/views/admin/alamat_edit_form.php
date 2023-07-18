<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top" style="margin: 50px 0px 0px 230px;">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/Alamat/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/Alamat/edit") ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_alamat" value="<?php echo $alamat->id_alamat ?>" />
							<div class="form-group">
								<label for="jalan">Nama Jalan</label>
								<input class="form-control <?php echo form_error('jalan') ? 'is-invalid' : '' ?>" value="<?php echo $alamat->jalan ?>" type="text" name="jalan" placeholder="Nama Jalan" />
								<div class="invalid-feedback">
									<?php echo form_error('jalan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="rt">Rukun Tetangga</label>
								<input class="form-control <?php echo form_error('rt') ? 'is-invalid' : '' ?>" value="<?php echo $alamat->rt ?>" type="number" name="rt" min="0" placeholder="rt" />
								<div class="invalid-feedback">
									<?php echo form_error('rw') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="rw">Rukun Warga</label>
								<input class="form-control <?php echo form_error('rw') ? 'is-invalid' : '' ?>" value="<?php echo $alamat->rw ?>" type="number" name="rw" min="0" placeholder="rw" />
								<div class="invalid-feedback">
									<?php echo form_error('rw') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nomor">Nomor Rumah</label>
								<input class="form-control <?php echo form_error('nomor') ? 'is-invalid' : '' ?>" value="<?php echo $alamat->nomor ?>" type="number" name="nomor" min="0" placeholder="nomor" />
								<div class="invalid-feedback">
									<?php echo form_error('nomor') ?>
								</div>
							</div>



							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
		</div>
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

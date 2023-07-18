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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/artikel/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/artikel/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id_user" value="<?php echo $idUser ?>" />
							<input type="hidden" name="id_artikel" value="<?php echo $artikel["id_artikel"]?>" />

							<div class="form-group">
								<label for="judul">judul*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="name" value="<?php echo $artikel["judul"] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="gambar_judul">Photo</label>
								<input class="form-control-file <?php echo form_error('gambar_judul') ? 'is-invalid':'' ?>"
								 type="file" name="gambar_judul" />
								<input type="hidden" name="old_image" value="<?php echo $artikel["gambar_judul"] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar_judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Product description..."><?php echo $artikel["description"] ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

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
						<a href="<?php echo site_url('admin/visi/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/visi/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Visi*</label>
								<textarea class="form-control <?php echo form_error('visi') ? 'is-invalid' : '' ?>" name="visi" placeholder="Visi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('visi') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Misi1*</label>
								<textarea class="form-control <?php echo form_error('misi1') ? 'is-invalid' : '' ?>" name="misi1" placeholder="Misi1..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('misi1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Misi2*</label>
								<textarea class="form-control <?php echo form_error('misi2') ? 'is-invalid' : '' ?>" name="misi2" placeholder="Misi2..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('misi2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Misi3*</label>
								<textarea class="form-control <?php echo form_error('misi3') ? 'is-invalid' : '' ?>" name="misi3" placeholder="Misi3..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('misi3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Misi4</label>
								<textarea class="form-control <?php echo form_error('misi4') ? 'is-invalid' : '' ?>" name="misi4" placeholder="Misi4..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('misi4') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Misi5</label>
								<textarea class="form-control <?php echo form_error('misi5') ? 'is-invalid' : '' ?>" name="misi5" placeholder="Misi5..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('misi5') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Program Kerja1*</label>
								<textarea class="form-control <?php echo form_error('proker1') ? 'is-invalid' : '' ?>" name="proker1" placeholder="Proker Kerja1"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('proker1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Program Kerja2*</label>
								<textarea class="form-control <?php echo form_error('proker2') ? 'is-invalid' : '' ?>" name="proker2" placeholder="Proker Kerja2"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('proker2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Program Kerja3*</label>
								<textarea class="form-control <?php echo form_error('proker3') ? 'is-invalid' : '' ?>" name="proker3" placeholder="Proker Kerja"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('proker3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Program Kerja4</label>
								<textarea class="form-control <?php echo form_error('proker4') ? 'is-invalid' : '' ?>" name="proker4" placeholder="Proker Kerja4"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('proker4') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Program Kerja5</label>
								<textarea class="form-control <?php echo form_error('proker5') ? 'is-invalid' : '' ?>" name="proker5" placeholder="Proker Kerja5"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('proker5') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Program Kerja6</label>
								<textarea class="form-control <?php echo form_error('proker6') ? 'is-invalid' : '' ?>" name="proker6" placeholder="Proker Kerja6"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('proker6') ?>
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

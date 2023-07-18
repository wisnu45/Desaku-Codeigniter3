<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
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
						<a href="<?php echo site_url('admin/agenda/') ?> "><i class="fas fa-arrow-left" style="color: red"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/agenda/edit_agenda') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" name="id_agenda" id="id_agenda" value="<?php echo $agenda['id_agenda'] ?>">
								<input type="hidden" name="id_user" id="id_user" value="<?php echo $idUser ?>">
								<label for="agenda">Nama Agenda*</label>
								<input class="form-control <?php echo form_error('agenda') ? 'is-invalid' : '' ?>" type="text" name="agenda" placeholder="nama agenda" value="<?php echo $agenda['agenda'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('agenda') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tempat">Tempat*</label>
								<input class="form-control <?php echo form_error('tempat') ? 'is-invalid' : '' ?>" type="text" name="tempat" id="tempat" placeholder="Tempat" value="<?php echo $agenda['tempat'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="date" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $agenda['tanggal'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								<input class="form-control <?php echo form_error('jam') ? 'is-invalid' : '' ?>" type="time" name="jam" id="jam" placeholder="Jam" value="<?php echo $agenda['jam'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="koordinator">Koordinator*</label>
								<input class="form-control <?php echo form_error('koordinator') ? 'is-invalid' : '' ?>" type="text" name="koordinator" id="koordinator" placeholder="Koordinator" value="<?php echo $agenda['koordinator'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('koordinator') ?>
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
		<?php $this->load->view("admin/_partials/modal.php") ?>
		<?php $this->load->view("admin/_partials/js.php") ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.data').DataTable();
			});
		</script>
</body>

</html>

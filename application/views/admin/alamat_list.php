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
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Alamat/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Jalan</th>
										<th>RT</th>
										<th>RW</th>
										<th>Nomor</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($alamat as $a) : ?>
										<tr>
											<td width="150">
												<?php echo $a->jalan ?>
											</td>
											<td>
												<?php echo $a->rt ?>
											</td>
											<td>
												<?php echo $a->rw ?>
											</td>
											<td>
												<?php echo $a->nomor ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/Alamat/edit/' . $a->id_alamat) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a class="dropdown-item" href="<?= base_url(); ?>admin/Alamat/delete/<?= $a->id_alamat ?>" onclick="return confirm('Yakin Data Ini Akan Dihapus');" style="color: red">Hapus</a>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
	</div>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>

</html>

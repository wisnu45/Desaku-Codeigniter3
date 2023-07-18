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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/artikel/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>id_User</th>
										<th>judul</th>
										<th>Foto</th>
										<th>Detail</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($artikel as $p) : ?>
										<tr>
											<td width="150">
												<?php echo $p["username"] ?>
											</td>
											<td>
												<?php echo $p["judul"] ?>
											</td>
											<td>
												<img src="<?php echo base_url('upload/artikel/' . $p["gambar_judul"]) ?>" width="64" />
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/Artikel/artikel_detail/' . $p["id_artikel"]) ?>" class="btn btn-small"><i class="far fa-eye"></i></i> Detail</a>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/artikel/edit/' . $p["id_artikel"]) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a class="btn btn-small dropdown-item" href="<?= base_url(); ?>admin/artikel/delete/<?= $p["id_artikel"] ?>" onclick="return confirm('Yakin Data Ini Akan Dihapus');" style="color: red"><i class="fas fa-trash"></i>Hapus</a>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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

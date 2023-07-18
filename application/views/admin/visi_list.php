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
						<a href="<?php echo site_url('admin/visi/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Visi</th>
										<th>Misi1</th>
										<th>Misi2</th>
										<th>Misi3</th>
										<th>Misi4</th>
										<th>Misi5</th>
										<th>proker1</th>
										<th>proker2</th>
										<th>proker3</th>
										<th>proker4</th>
										<th>proker5</th>
										<th>proker6</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($visi as $v) : ?>
										<tr>
											<td>
												<?php echo $v->visi ?>
											</td>
											<td>
												<?php echo $v->misi1 ?>
											</td>
											<td>
												<?php echo $v->misi2 ?>
											</td>
											<td>
												<?php echo $v->misi3 ?>
											</td>
											<td>
												<?php echo $v->misi4 ?>
											</td>
											<td>
												<?php echo $v->misi5 ?>
											</td>
											<td>
												<?php echo $v->proker1 ?>
											</td>
											<td>
												<?php echo $v->proker2 ?>
											</td>
											<td>
												<?php echo $v->proker3 ?>
											</td>
											<td>
												<?php echo $v->proker4 ?>
											</td>
											<td>
												<?php echo $v->proker5 ?>
											</td>
											<td>
												<?php echo $v->proker6 ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/visi/edit/' . $v->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a class="dropdown-item" href="<?= base_url(); ?>admin/Visi/delete/<?= $v->id ?>" onclick="return confirm('Yakin Data Ini Akan Dihapus');" style="color: red">Hapus</a>
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

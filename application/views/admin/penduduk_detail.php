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
						<a href="<?php echo site_url('admin/Pendataan') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
					<img src="<?php echo base_url('upload/foto-penduduk/'.$penduduk->foto) ?>" width="120" /><br><br>
							<?php echo $penduduk->nik ?><br>							
							<?php echo $penduduk->id_alamat ?><br>
							<?php echo $penduduk->nama ?><br>
							<?php echo $penduduk->status ?><br>
							<?php echo $penduduk->nomor_kk ?><br>
							<?php echo $penduduk->jenis_kelamin ?><br>
							<?php echo $penduduk->agama ?><br>
							<?php echo $penduduk->status_penduduk ?><br>
							<?php echo $penduduk->tempat_lahir ?><br>
							<?php echo $penduduk->tgl_lahir ?><br>
							<?php echo $penduduk->pendidikan ?><br>
							<?php echo $penduduk->pekerjaan ?><br>
							<?php echo $penduduk->status_kawin ?><br>

										
										
                                        
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
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>

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

				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">

						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
								</div>
								<div class="mr-5"><?= $surat["COUNT('id_surat')"] ?> Surat</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/SuratOnlineAdmin') ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5"><?= $pengaduan["COUNT('id')"] ?> Pengaduan</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/pengaduan') ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-shopping-cart"></i>
								</div>
								<div class="mr-5"> <?= $agenda["COUNT('id_agenda')"] ?> Agenda</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/agenda') ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-danger o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-life-ring"></i>
								</div>
								<div class="mr-5"><?= $penduduk["COUNT('nik')"] ?> Data Penduduk</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?= base_url('admin/Pendataan') ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<br>
				<div>
					<?php
					$this->load->view('admin/_partials/chart_pendidikan', $data);
					echo "<br><hr>";
					$this->load->view('admin/_partials/chart_pekerjaan', $data);
					echo "<br><hr>";
					$this->load->view('admin/_partials/chart_agama', $data);
					// var_dump($chart_data4)
					// $this->load->view('admin/_partials/chart_jeniskelamin', $data);
					?>
				</div>

				<?php $this->load->view("admin/_partials/footer.php") ?>
			</div>

		</div>
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
		<?php $this->load->view("admin/_partials/modal.php") ?>
		<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>

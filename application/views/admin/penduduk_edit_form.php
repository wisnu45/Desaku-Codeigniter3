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

						<a href="<?php echo site_url('admin/Pendataan') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/Pendataan/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="nik" value="<?php echo $penduduk->nik?>" />

							<div class="form-group">
								<label for="name">Nama Lengkap</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $penduduk->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
                            </div>
                            
                            <div class="form-group">
								<label for="id_alamat">Alamat</label>
                                <input class="form-control  <?php echo form_error('id_alamat') ? 'is-invalid':'' ?>"
                                value="<?php echo $penduduk->id_alamat ?>"
								 type="text" name="id_alamat" placeholder="Alamat" />
								<div class="invalid-feedback">
									<?php echo form_error('id_alamat') ?>
								</div>
                            </div>
                            
                            <div class=" form-group">
                            <label for="status">Status Hidup</label>
                            <select id="status" class="form-control" name="status">
                            <option value="<?= $penduduk->status ?>"><?= $penduduk->status ?></option>
                            <option value="Hidup">Hidup</option>
                            <option value="Mati">Mati</option>
                            </select>
                        </div>


                        <div class="form-group">
								<label for="nomor_kk">Nomor Kartu Keluarga</label>
								<input class="form-control <?php echo form_error('nomor_kk') ? 'is-invalid':'' ?>"
								 value="<?php echo $penduduk->nomor_kk ?>" type="number" name="nomor_kk" min="0" placeholder="Nomor KK" />
								<div class="invalid-feedback">
									<?php echo form_error('nomor_kk') ?>
								</div>
							</div>



                        <div class=" form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                            <option value="<?= $penduduk->jenis_kelamin ?>"><?= $penduduk->jenis_kelamin ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class=" form-group">
                            <label for="agama">Agama</label>
                            <select id="agama" class="form-control" name="agama">
                            <option value="<?= $penduduk->agama ?>"><?= $penduduk->agama ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <div class=" form-group">
                            <label for="status_penduduk">Status Penduduk</label>
                            <select id="status_penduduk" class="form-control" name="status_penduduk">
                            <option value="<?= $penduduk->status_penduduk ?>"><?= $penduduk->status_penduduk ?></option>
                            <option value="Tetap">Tetap</option>
                            <option value="Tidak Tetap">Tidak Tetap</option>
                            <option value="Pendatang">Pendatang</option>
                            </select>
                        </div>

                        <div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								value="<?php echo $penduduk->tempat_lahir ?>" type="text" name="tempat_lahir" min="0" placeholder="Tempat Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir') ?>
								</div>
                            </div>
                            
                            <div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								value="<?php echo  $penduduk->tgl_lahir ?>" type="date" name="tgl_lahir" min="0" placeholder="Tanggal Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
                        
                        <div class=" form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select id="pendidikan" class="form-control" name="pendidikan">
                            <option value="<?= $penduduk->pendidikan ?>"><?= $penduduk->pendidikan ?></option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S2</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								value="<?php echo $penduduk->pekerjaan ?>" type="text" name="pekerjaan" min="0" placeholder="Pekerjaan" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
                            </div>

                        <div class=" form-group">
                            <label for="status_kawin">Status Kawin</label>
                            <select id="status_kawin" class="form-control" name="status_kawin">
                            <option value="<?= $penduduk->status_kawin ?>"><?= $penduduk->status_kawin ?></option>                            
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                        </div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $penduduk->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
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

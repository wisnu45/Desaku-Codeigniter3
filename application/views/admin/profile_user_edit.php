<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
<?php $this->load->view("admin/_partials/navbar.php") ?>
<div id="wrapper">
<?php $this->load->view("admin/_partials/sidebar.php") ?>

<div id="content-wrapper">

    <div class="container-fluid">

            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
            <?php endif; ?>
                
                <a href="<?= base_url(); ?>Login/view_profile_user/<?php echo $idUser ?> "><i class="fas fa-arrow-left" style="color: red"></i> Back</a>


        <form accept="<?php echo base_url('Login/edit_user') ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $profile->id?>" />
        <input type="hidden" name="jenis_user" value="<?php echo $profile->jenis_user?>" />
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username: </label>
                                        <input type="text" class="form-control" value="<?= $profile->username ?>" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address:</label>
                                        <input type="email" class="form-control" value="<?= $profile->email ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Telp</label>
                                        <input type="text" class="form-control" value="<?= $profile->no_telp ?>" id="no_telp" aria-describedby="no-telp" name="no_telp" placeholder="No Telp">
                                        <small id="no-telp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" class="form-control" value="<?= $profile->alamat ?>" id="alamat" aria-describedby="no-telp" name="alamat" placeholder="Alamat anda">
                                        <small id="alamat" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>

                                    <div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $profile->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password: </label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password:</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?php echo base_url('Login/')?>" class="btn btn-danger" >Cancel</a>
                                </form>
        </div>
    <?php $this->load->view("admin/_partials/footer.php") ?>
    </div>
</div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
    <script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</body>
</html>
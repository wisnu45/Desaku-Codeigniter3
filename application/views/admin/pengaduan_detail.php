<?php var_dump($pengaduanDetail); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top"  style="margin: 50px 0px 0px 230px;">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">
			<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Detail Pengaduan</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $pengaduanDetail['nama']; ?></h5>
                                    <p class="card-text">
                                        <label for="">Perihal</label>
                                        <br><?php echo $pengaduanDetail['perihal']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for="">Tanggal</label>
                                        <br><?php echo $pengaduanDetail['tanggal']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for="">Isi Pengaduan</label>
                                        <br><?php echo $pengaduanDetail['isi']; ?>
                                    </p>
                                    <a href="<?php echo site_url('admin/pengaduan') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                                        Back</a>

                                </div>
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
</body>

</html>

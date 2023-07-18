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

                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Detail Surat</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $suratDetail['nama']; ?></h5>
                                    <p class="card-text">
                                        <label for=""><b>Category</b></label>
                                        <br><?php echo $suratDetail['nama_surat']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b>Tanggal</b></label>
                                        <br><?php echo $suratDetail['tgl_permohonan']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b>Isi Pengaduan</b></label>
                                        <br><?php echo $suratDetail['isi']; ?>
                                    </p>

                                    <form action="<?php base_url('admin/suratAdminOnline/update') ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $suratDetail['id_surat'] ?>" />
                                        <div class=" form-group">
                                            <label for="status"><b>Status</b></label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="<?= $suratDetail['status_surat']; ?>"><?= $suratDetail['status_surat']; ?></option>
                                                <option value="proses">proses</option>
                                                <option value="Dapat diambil">Dapat diambil</option>
                                                <option value="Gagal">Gagal</option>
                                            </select>
                                        </div>
                                        <a href="<?php echo site_url('admin/SuratOnlineAdmin/') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                                            Back</a>
                                        <input class="btn btn-success" type="submit" name="btn" value="Update Status" />
                                    </form>
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

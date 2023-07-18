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
                <h1>Daftar Pengaduan Penduduk</h1>

                <div style="overflow-y: scroll;overflow-x: scroll; width: 100%;border: 1px black dotted;">

                    <table class="table data">
                        <thead>
                            <tr>
                                <th>Nama Pengadu</th>
                                <th>Perihal</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengaduan as $pd) : ?>
                                <tr>
                                    <td><?= $pd["nama"] ?></td>
                                    <td><?= $pd["perihal"] ?></td>
                                    <td><?= $pd["tanggal"] ?></td>
                                    <td> <a class="btn btn-primary" href="<?php echo base_url('admin/Pengaduan/pengaduan_detail/' . $pd['id']) ?>">detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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

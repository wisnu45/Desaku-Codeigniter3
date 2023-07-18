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
                <a href="<?php echo site_url('admin/agenda/add_agenda') ?>" class="btn btn-success"><i class="fas fa-plus"></i>Tambah Agenda</a><br>
                <br>
                <div style="overflow-y: scroll;overflow-x: scroll; width: 100%;border: 1px black dotted;">
                    <table class="table data">
                        <thead>
                            <tr>
                                <th>Pembuat</th>
                                <th>Agenda</th>
                                <th>tempat</th>
                                <th>waktu</th>
                                <th>koordiantor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($agenda as $pd) : ?>
                                <tr>
                                    <td><?= $pd["username"] ?></td>
                                    <td><?= $pd["agenda"] ?></td>
                                    <td><?= $pd["tempat"] ?></td>
                                    <td><?= $pd["tanggal"] ?><?= $pd["jam"] ?></td>
                                    <td><?= $pd['koordinator'] ?></td>
                                    <td>

                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo site_url('admin/Agenda/edit_agenda/' . $pd['id_agenda']) ?>" style="color: blue">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url(); ?>admin/Agenda/delete/<?= $pd['id_agenda']; ?>" onclick="return confirm('Yakin Data Ini Akan Dihapus');" style="color: red">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
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

</html>

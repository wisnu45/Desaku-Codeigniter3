<?php $this->load->view("usersLogin/template/header.php") ?>
<div class="container pt-3">
        <div class="card">
            <div class="card-header">Data Permintaan Surat Online</div>
            <div class="card-body">
                <a href="<?php echo base_url('UserLogin/surat_online_add_data') ?>" class="btn btn-success">Data Baru</a>
                <h1>Daftar Permintaan Surat Anda</h1>
                
                <div style="overflow-y: scroll;overflow-x: scroll; width: 100%;border: 1px black dotted;">        

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>category</th>
                            <th>tanggal permohonan</th>
                            <th>status</th>
                        </tr>
                    </thead>
                <tbody>
                <?php foreach ($surat as $st) : ?>
                    <tr>
                    <td><?= $st["nama"] ?></td>
                    <td><?= $st["nama_surat"] ?></td>
                    <td><?= $st["tgl_permohonan"] ?></td>
                    <td><?= $st["status_surat"] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
                 </div>
            </div>
        </div>
</div>
<?php $this->load->view("usersLogin/template/footer.php") ?>
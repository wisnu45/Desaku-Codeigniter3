<?php $this->load->view("usersLogin/template/header.php") ?>
<div class="container pt-3">
    <div class="card">
        <div class="card-header">Pengaduan Online</div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>
            <h6 class="title">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</h5>
                <form action="" method="post">
                    <input type="hidden" name="nik" value="<?= $coba ?>">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="perihal">Perihal:</label>
                                <input type="text" class="form-control" id="perihal" name="perihal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi"></label>
                        <textarea class="form-control" rows="4" placeholder="isi pengaduan anda*" required="required" data-eror="silahkan isi pengaduan anda" name="isi"></textarea>
                    </div>
                    <div class="footer">
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="btn btn-success btn-send" value="Kirim Permohonan">
                            </div>
                </form>
                <div class="col-6">
                    <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()">
                </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
<?php $this->load->view("usersLogin/template/footer.php") ?>
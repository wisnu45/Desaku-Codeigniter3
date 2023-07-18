<?php $this->load->view("usersLogin/template/header.php") ?>
<div class="container pt-3">
        <div class="card">
            <div class="card-header">Surat Online</div>
            <div class="card-body">
                <h6 class="title">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</h5>
                <form action="" method="post">
                    <input type="hidden" name="nik" value="<?php echo $coba ?>">
                    <div class="col-6">
                        <div class=" form-group">
                            <label for="category">Pilih surat</label>
                            <select id="category" class="form-control" name="category" >
                            <option value="1">Surat Keterangan Usaha</option>
                            <option value="2">Surat Keterangan Tidak Mampu</option>
                            <option value="3">Surat Keterangan Miskin</option>
                            <option value="4">Surat Keterangan Belum Pernah Menikah</option>
                            <option value="5">Surat Keterangan Kelahiran</option>
                            <option value="6">Surat Keterangan Kematian</option>
                            <option value="7">Surat Keterangan Beda Nama</option>
                            <option value="8">Surat Keterangan Penghasilan</option>
                            <option value="9">Surat Keterangan Harga Tanah</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="form-group">
                     <textarea class="form-control" rows="4" id="isi" name="isi" placeholder="isi keterangan*"  required="required" data-eror="silahkan isi keterangan aanda"></textarea>
                 </div>
                 <div class="footer">
                     <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-success btn-send" value="Kirim Permohonan">
                        </div>
                 </form>
                        <div class="col-6">
                            <input href="<?php echo base_url('UserLogin/surat_online') ?>" type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()">
                        </div>
                     </div>
                 </div>
            </div>
            <?php $this->load->view("usersLogin/template/footer.php") ?>
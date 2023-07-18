<?php $this->load->view("usersLogin/template/header.php") ?>
<style>
  ul.social-icons {
    padding: 0;
  }

  .social-icons li {
    list-style: none;
    display: inline-block;
    border-radius: 2em;
    overflow: hidden;
  }

  .social-icons li a {
    display: block;
    padding: 0.3em;
    max-width: 2em;
    min-width: 2em;
    height: 2em;
    line-height: 1.5em;
    font-family: arial;
    color: #fff;
  }

  .social-icons li:hover a {
    transform: scale(1.15);
  }

  .social-icons .linkedin {
    background: #4875B4;
  }

  .social-icons .twitter {
    background: #33CCFF;
  }

  .social-icons .medium {
    background: #2f2f2f;
  }

  .social-icons .github {
    background: #6e5494;
  }

  .social-icons .mail {
    background: #B20000;
  }

  hr.divider {
    border-top: 1px solid #DCDCDC;
    margin-top: 25px;
    margin-bottom: 25px;
  }

  .personal-statement {
    text-align: justify;
  }

  .description-text {
    text-align: justify;
  }

  .profile-image {
    height: 200px;
    width: 200px;
    align-content: center
  }

  .top-col {
    /* padding: 50px;
        padding-bottom: 0px; */
    margin-top: 15px;
    padding: 0px 50px 0px 50px;
  }
</style>

<main role="main" class="container">
  <div class="mt-5"></div>
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url('upload/foto-penduduk/' . $profile->foto) ?>" alt="..." class="rounded-circle profile-image" />
        </div>
        <div class="col-md-8 top-col">
          <h1 class=""><?php echo $profile->nama ?></h1>
          <p class="lead">NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $profile->nik ?></p>
          <p class="lead">No. KK&nbsp;: <?php echo $profile->nomor_kk ?></p>
        </div>
      </div>
    </div>
  </div>
  <hr class="divider" />
  <h5>Personal Statement</h5>
  <p class="personal-statement">
    <p>Tempat Tanggal Lahir : <?php echo $profile->tempat_lahir ?>,<?php echo date('d-m-Y', strtotime($profile->tgl_lahir)); ?></p>
    <p>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->status ?></p>
    <p>Jenis Kelamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->jenis_kelamin ?></p>
    <p>Agama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->agama ?></p>
    <p>Status Penduduk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->status_penduduk ?></p>
    <p>status Kawin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->status_kawin ?></p>
    <p>Pendidikan Terakhir&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->pendidikan ?></p>
    <p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->pekerjaan ?></p>
  </p>
  <hr class="divider" />
  <h5>Alamat</h5>
  <p>Nama Jalan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->jalan ?></p>
  <p>RT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->rt ?></p>
  <p>RW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->rw ?></p>
  <p>Nomor Rumah : <?php echo $profile->nomor ?></p>
</main>
<?php $this->load->view("usersLogin/template/footer.php") ?>
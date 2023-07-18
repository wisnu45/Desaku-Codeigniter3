<!DOCTYPE html>
<html lang="en">

<head>
  <title> <?php echo $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
    }

    .responsive img {
      max-width: 100%;
      height: auto;
    }

    .angka {
      text-align: right !important;
      margin-right: .5em;
      text-align: center;
    }

    .tabel-style {
      overflow-y: scroll;
      overflow-x: scroll;
      width: 100%;
    }
  </style>
</head>

<body>


  <div class="container" style="margin-top:30px">
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>DESA TRATE</h1>
      <p>KECAMATAN SUGIHWARAS KABUPATEN BOJONEGORO <br>
        JL. RAYA KEDUNGADEM - KODEPOS 6281</p>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="bird.jpg" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo  base_url('/') ?>">Beranda<span class=""></span></a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Profil Desa
            </a>
            <div class="dropdown-menu">/
              <a class="dropdown-item" href="<?php echo  base_url('User') ?>">Sejarah Desa</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/wilayah') ?>">Profil Wilayah Desa</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Pemerintah Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('User/visi') ?>">Visi Dan Misi</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/struktur') ?>">Struktur Organisasi</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Data Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('User/data_wilayah') ?>">Data Wilayah Administratif </a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_pendidikan') ?>">Data Pendidikan</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_pekerjaan') ?>">Data Pekerjaan</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_agama') ?>">Data Agama</a>
              <a class="dropdown-item active" href="<?php echo  base_url('User/data_sex') ?>">Data Jenis Kelamin</a>
            </div>
          </li>
        </ul>
        <a class="form-inline my-2 my-lg-0" href="<?php echo base_url('Login/'); ?>">
          <button type="button" class="btn btn-primary">Login</button>
        </a>
      </div>
    </nav>
    </nav>
    <div class="row">
      <div class="col-sm-8">
        <br><br>
        <h2>Data Demografi Berdasar Jenis Kelamin</h2>
        <br>
        <div class="tabel-style">

          <table class="table">
            <thead>
              <tr>
                <th rowspan="2" style="text-align:left;">Kelompok</th>
                <th colspan="2">Jumlah</th>
              </tr>
              <tr>
                <th style="text-align: right">n</th>
                <th style="text-align: right">%</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>LAKI-LAKI</td>
                <td class="angka">26</td>
                <td class="angka">23,85%</td>
              </tr>
              <tr>
                <td>PEREMPUAN</td>
                <td class="angka">26</td>
                <td class="angka">23,85%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <?php $this->load->view("usersLogin/template/sidebar.php") ?>
    </div>
  </div>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
  </div>

</body>

</html>
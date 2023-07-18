<!DOCTYPE html>
<html lang="en">

<head>
  <title>Desaku | Visi dan Misi</title>
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
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('user') ?>">Sejarah Desa</a>
              <a class="dropdown-item" href="<?php echo  base_url('user/wilayah') ?>">Profil Wilayah Desa</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Pemerintah Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item active" href="<?php echo  base_url('user/visi') ?>">Visi Dan Misi</a>
              <a class="dropdown-item" href="<?php echo  base_url('user/struktur') ?>">Struktur Organisasi</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Data Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('user/data_wilayah') ?>">Data Wilayah Administratif </a>
              <a class="dropdown-item" href="<?php echo  base_url('user/data_pendidikan') ?>">Data Pendidikan</a>
              <a class="dropdown-item" href="<?php echo  base_url('user/data_pekerjaan') ?>">Data Pekerjaan</a>
              <a class="dropdown-item" href="<?php echo  base_url('user/data_agama') ?>">Data Agama</a>
              <a class="dropdown-item" href="<?php echo  base_url('user/data_sex') ?>">Data Jenis Kelamin</a>
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
			<div class="card m-2">
					<div class="card-header">
          <h2>Visi dan Misi Dan Program Kerja</h2>
					</div>
					<?php foreach ($visi as $v) : ?>
					<div class="card-body">
					<p>Sebagaimana desa-desa yang lain, Desa Trate Kecamatan Sugihwaras juga memiliki Visi dan Misi bagi desanya serta program kerja desa. Berikut uraian visi dan misi serta program kerja Desa Trate Kecamatan Sugihwaras Kabupaten Bojonegoro.</p>
          <br>
          <h3>
            <center>Visi</center><hr>
          </h3>
          <p>"<b><?= $v->visi; ?></b>".</p>
          <br>
          <h3>
            <center>Misi</center><hr>
          </h3>
          <p>1. <?= $v->misi1; ?></p>
          <p>2. <?= $v->misi2; ?></p>
          <p>3. <?= $v->misi3; ?></p>
          <p>4. <?= $v->misi4; ?></p>
          <p>5.<?= $v->misi5; ?></p>
          <br>
          <h3>
            <center>Program Kerja</center><hr>
          </h3>
          <p>1. <?= $v->proker1; ?></p>
          <p>2. <?= $v->proker2; ?></p>
          <p>3. <?= $v->proker3; ?></p>
          <p>4. <?= $v->proker4; ?></p>
          <p>5. <?= $v->proker5; ?></p>
          <p>6. <?= $v->proker6; ?></p>
          <br>
        <?php endforeach; ?>
					</div>
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

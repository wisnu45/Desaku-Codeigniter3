<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Desaku | Beranda</title>
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


  <div class="container">
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>DESA TRATE</h1>
      <p>KECAMATAN SUGIHWARAS KABUPATEN BOJONEGORO</p>
       <p> JL. RAYA KEDUNGADEM - KODEPOS 6281</p>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo  base_url('/') ?>">Beranda<span class=""></span></a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Profil Desa
            </a>
            <div class="dropdown-menu">
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Data Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('User/data_wilayah') ?>">Data Wilayah Administratif
              </a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_pendidikan') ?>">Data Pendidikan</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_pekerjaan') ?>">Data Pekerjaan</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_agama') ?>">Data Agama</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_sex') ?>">Data Jenis Kelamin</a>
            </div>
          </li>
        </ul>
        <a class="form-inline my-2 my-lg-0" href="<?php echo base_url('Login/'); ?>">
          <button type="button" class="btn btn-primary">Login Admin</button>
        </a>
      </div>
    </nav>
    </nav>
    <div class="row">
      <div class="col-sm-8">
        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
				<h2 class="mt-3" style="color: red">
				<span class="badge badge-danger">Info Corona</span>
				</h2> 
				last update <?php echo date("Y-m-d"); ?>

        <div class="card-group mt-2">
          <?php
          $url = 'https://api.kawalcorona.com/indonesia/provinsi/';

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          $json = curl_exec($ch);
          curl_close($ch);

          $data = json_decode($json, true);

          $list = $data[1]['attributes'];
          ?>
          <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header"><?php echo $list['Provinsi']; ?></div>
            <div class="card-body">
              <p class="card-text">Kasus Positif : <?php echo  $list['Kasus_Posi']; ?></p>
              <p class="card-text">Kasus Sembuh : <?php echo  $list['Kasus_Semb']; ?></p>
              <p class="card-text">Kasus Meninggal <?php echo  $list['Kasus_Meni']; ?></p>
            </div>
          </div>

          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Bojonegoro</div>
            <div class="card-body">
              <a href="http://covid19.boxer.or.id/" target="_blank" rel="noopener noreferrer" class="btn btn-danger" style="color:white">Detail</a>
            </div>
          </div>
				</div>
	

      </div>
    </div>
    <?php $this->load->view("usersLogin/template/sidebar.php") ?>
  </div>
  </div>
		<?php $this->load->view("users/footer.php") ?>

</body>

</html>

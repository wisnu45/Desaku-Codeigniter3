<!DOCTYPE html>
<html lang="en">

<head>
  <title> <?php echo $title ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('UserLogin') ?>">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('UserLogin/surat_online_view') ?>">Surat Online <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('UserLogin/pengaduan') ?>">Pengaduan</a>
          </li>
          <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('UserLogin/feddback') ?>"></a>
      </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>UserLogin/view_profil/<?php echo $idUser ?>">Profil</a>
          </li>
        </ul>
        <a class="form-inline my-2 my-lg-0" href="<?php echo base_url('Login/logoutPenduduk'); ?>">
          <button type="button" class="btn btn-danger">Logout</button>
        </a>
      </div>
    </nav>
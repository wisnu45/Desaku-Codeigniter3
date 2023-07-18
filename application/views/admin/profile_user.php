<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <?php $this->load->view("admin/_partials/head.php") ?>
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
</head>

<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">
        <h1>Profile Admin</h1>
        <main role="main" class="container">
          <div class="mt-5"></div>
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-md-4">
                  <img src="<?php echo base_url('upload/foto-user/' . $profile->foto) ?>" alt="..." class="rounded-circle profile-image" />
                </div>
                <div class="col-md-8 top-col">
                  <h1 class=""><?php echo $profile->username ?></h1>
                  <p class="lead">Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $profile->jenis_user ?></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="divider" />
          <h5>Personal Statement</h5>
          <p class="personal-statement">
            <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->email ?></p>
            <p>No.Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->no_telp ?></p>
            <p>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $profile->alamat ?></p>
        </main>
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
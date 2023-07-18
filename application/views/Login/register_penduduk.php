<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DESAKU | Create Account</title>
    <!--    bootcatch solitude css-->
    <link rel="stylesheet" href="https://unpkg.com/bootcatch-themes@2.2.0/dist/solitude/bootstrap.min.css">
    <!--    style.css-->
    <style>
        body {
            background: #F8F9FA;
        }

        .google-img {
            width: 5%;
        }

        .text-light-gray {
            color: #6c757d;
            font-size: 1.25rem;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-5 text-center">
                <form action="<?php echo base_url('Login/buatAkunPenduduk') ?>" method="POST">
                    <h1 class="h2">Membuat akun penduduk</h1>
                    <p class="lead text-light-gray">satu NIK satu akun okay</p>
                    <hr>
                    <div class="form-group">
                        <input type="text" size="16" maxlength="16" name="username" id="username" class="form-control" placeholder="Nomer NIK anda..">
                    </div>
                    <div class="form-group">
                        <input type="text" size="13" maxlength="12" name="no_telp" id="no_telp" class="form-control" placeholder="No Telp Anda..">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" size="20" maxlength="20" name="password" id="password" placeholder="Password..">
                        <p class="text-muted text-left"><small>minimal 10 characters</small></p>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg">Create Account</button>
                    <a href="<?php echo base_url('/') ?>" class="btn btn-danger btn-block btn-lg">Cancel</a>
                    <p class=" text-muted"><small>By clicking 'Create Account' you agree to our <a href="#">Terms of Use</a></small></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
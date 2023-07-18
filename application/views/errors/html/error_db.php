<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Database Error</title>
     <link rel="stylesheet" href="https://unpkg.com/bootcatch-themes@2.2.0/dist/hero/bootstrap.min.css" >
     <style>
         body{
    background-color:rgb(211, 208, 208);
    height: 100vh;
        }
        .text-light-gray{
    color:#6c757d;
    font-size: 1.25rem;
    font-weight: 400;
        }
        h1{
    font-weight: 500 !important;
    color:#7e95e7;
        }
     </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-8 text-center">
                <h1 class="display-3" ><?php echo $heading; ?></h1>
                <p class="lead text-light-gray"><?php echo $message; ?></p>
			</div>
        </div>
    </div>
</body>
</html>
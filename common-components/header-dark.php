<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>EDNA | Your DNA is your property</title>
    <style>
        <?php
            $css = file_get_contents('style.css');
            echo $css;
        ?>
    </style>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php require_once "svg-icons.php"; ?>

<header class="header-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="#"><img src="assets/images/logo-head.png"></a>
            </div>
            <div class="col-md-6">
                <ul class="list-inline text-uppercase">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Community</a></li>
                    <li class="list-inline-item"><a href="#">Project</a></li>
                    <li class="list-inline-item"><a href="#">News</a></li>
                </ul>
            </div>
        </div>
    </div>
</header> 

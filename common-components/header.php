<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>IndieStorm | Digital Distribution Platform</title>
    <style>
        <?php
            $css = file_get_contents('style.css');
            echo $css;
        ?>
    </style>
</head>
<body>
<?php require_once "svg-icons.php"; ?>

<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="row navbar navbar-expand-lg navbar-light bg-light">
                    <div class="col-md-5">
                        <a class="navbar-brand" href="#"><img src="assets/images/logo-head.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse col-md-7" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">How It Works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Stats</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Roadmap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">EN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Penerimaan Mahasiswa Baru - STMIK Eresha</title>

    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/fontawesome/css/all.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">STMIK Eresha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('mahasiswa/daftar'); ?>">Formulir Pendaftaran</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo base_url('public/img/university.png'); ?>" class="img-thumbnail">
                </div>
                <div class="col-md-9">
                    <h3>Halo Admin !</h3>
                    <h5>Selamat Datang di Sistem Penerimaan Mahasiswa Baru STMIK Eresha</h5>
                </div>
            </div>
        </div>
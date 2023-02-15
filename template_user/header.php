<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyek SPK</title>
    <script src="./assets/js/jquery.min.js"></script>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
    <script src="./assets/js/bootstrap.min.js"></script>
    <link href="./assets/css/fontawesome-free-5.11.2-web/css/all.min.css" rel="stylesheet">
    <script src="./assets/css/fontawesome-free-5.11.2-web/js/all.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #040492;">
        <div class="container">
            <a class="navbar-brand" href="halaman_awal.php">SPK AHP-SAW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="<?php if ($page=='halaman_awal'){echo 'nav-item active';} ?>" id="beranda">
                        <a class="nav-link" href="halaman_awal.php"><span class="fas fa-home"></span> Halaman Awal<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="<?php if ($page=='kriteria'){echo 'nav-item active';} ?>">
                        <a class="nav-link" href="kriteria_user.php">
                            <span class="fas fa-bars"></span> Kriteria
                        </a>
                    
                    </li>
                    <li class="<?php if ($page=='alternatif_user'){echo 'nav-item active';} ?>">
                        <a class="nav-link" href="alternatif_user.php">
                            <span class="fas fa-bars"></span> Alternatif
                        </a>

                        <li class="<?php if ($page=='cekhasil'){echo 'nav-item active';} ?>">
                        <a class="nav-link" href="cek_hasil_user.php">
                            <span class="fas fa-bars"></span> Cek Hasil
                        </a>
                
                    </li>
                    <li class="<?php if ($page=='login'){echo 'nav-item active';} else {echo 'nav-item';} ?>" >
                        <a class="nav-link" href="login_admin.php"><span class="fas fa-users-cog"></span> Login Admin<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

             
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top:80px;margin-bottom:80px;">
        <!-- MULAI BODY -->
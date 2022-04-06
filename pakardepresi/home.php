<?php
    session_start();
    include "koneksi.php";

    if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Sistem Pakar</title>
  </head>
  <body>
    <?php if ($_SESSION['level'] == 'Admin') { ?>
    <!---- Halaman Admin ----->
            <!----- Navbar ----->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Selamat datang, admin! </a>
                <div class="icon">
                    <a href="logout.php"><button type="button" class="btn btn-primary" id="myBtn" style="margin-left: 1000px;"><i class="fas fa-sign-out-alt"></i> Logout</button>    
                </div>
            </div>
            </nav>

            <!---- Sidebar ----->
            <div class="row no-gutters mt-5">
                <div class="col-md-2 mt-2 pt-4 bg-dark">
                    <ul class="nav flex-column ms-4 position-fixed">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a><hr class="bg-light">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="jenisdepresi.php"><i class="fas fa-disease me-2"></i>Jenis Depresi</a><hr class="bg-light">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="daftargejala.php"><i class="fas fa-thermometer-three-quarters me-2"></i>Daftar Gejala</a><hr class="bg-light">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="basispengetahuan.php"><i class="fas fa-flask me-2"></i>Basis Pengetahuan</a><hr class="bg-light">
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 p-5 pt-5">
                    <p class="lead"> Halo, admin <b><?= $_SESSION['nama'] ?></b> </p>
                    <h4><i class="fas fa-home"></i> DASHBOARD</h4><hr>

                    <div class="row text-white">
                        <div class="card bg-info" style="width: 18rem; margin-left: 20px">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-disease mr-2"></i>
                                </div>
                                <h5 class="card-title">PENYAKIT</h5>
                                <div class="display-2">4</div>
                            </div>
                        </div>

                        <div class="card bg-success" style="width: 18rem; margin-left: 40px">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-thermometer-three-quarters mr-2"></i>
                                </div>
                                <h5 class="card-title">GEJALA</h5>
                                <div class="display-2">29</div>
                            </div>
                        </div> 

                        <div class="card bg-danger" style="width: 18rem; margin-left: 40px">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-flask mr-2"></i>
                                </div>
                                <h5 class="card-title">BASIS PENGETAHUAN</h5>
                                <div class="display-2">41</div>
                            </div>
                        </div>

                        <div class="card bg-warning" style="width: 18rem; margin-left: 20px; margin-top: 40px ">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-user-cog mr-2"></i>
                                </div>
                                <h5 class="card-title">ADMIN</h5>
                                <div class="display-2">3</div>
                            </div>
                        </div> 
            
                    </div>
                </div>
            </div>
            <?php } else { ?>

            <!------- Halaman User ----->
                <!----- Navbar ----->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Sistem Pakar</a>
                    <div class="icon">
                        <a href="logout.php"><button type="button" class="btn btn-primary" id="myBtn" style="margin-left: 1100px;"><i class="fas fa-sign-out-alt"></i> Logout</button>    
                    </div>
                </div>
                </nav>

                <!---- Sidebar ----->
                <div class="row no-gutters mt-5">
                    <div class="col-md-2 mt-2 pt-4 ps-3 bg-dark">
                        <ul class="nav flex-column ms-4 px-3 position-fixed">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="depresi.php"><i class="fas fa-home me-2"></i>Beranda</a><hr class="bg-light">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="diagnosa.php"><i class="fas fa-diagnoses me-2"></i>Diagnosa</a><hr class="bg-light">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="riwayat.php"><i class="fas fa-history me-2"></i>Riwayat</a><hr class="bg-light">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="profil.php"><i class="fas fa-user-circle me-2"></i>Profil</a><hr class="bg-light">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="tentang.php"><i class="fas fa-exclamation-circle me-2"></i>Tentang</a><hr class="bg-light">
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-10 p-5 pt-5">
                        <h4>Halo, <b><?= $_SESSION['nama'] ?></b> </h4><hr>
                        <br>
                        <div class="row">
                            <div class="card mb-3" style="max-width: 480px; margin-left: 12px; margin-right: 80px;">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="img/card1.jpg" class="rounded-start" style="max-width: 240px; height: auto; margin-left: -12px;">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Gangguan Mood</h5>
                                            <p class="card-text">Perasaan mood yang gampang berubah sehingga kegiatan hanya bergantung pada mood.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 480px;">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="img/card2.jpg" class="img-fluid rounded-start" style="max-width: 240px; height: auto; margin-left: -12px;">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Depresi Ringan</h5>
                                            <p class="card-text">Depresi ini tidak terlalu mengganggu namun berdampak pada aktivitas sehari-hari.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 480px; margin-left: 12px; margin-right: 80px; margin-top: 28px;">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="img/card3.jpg" class="img-fluid rounded-start" style="max-width: 240px; height: auto; margin-left: -12px;">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Depresi Sedang</h5>
                                            <p class="card-text">Depresi ini menyebabkan seseorang mengalami kesulitan dalam hal sosial, pekerjaan dan kegiatan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 480px; margin-top: 28px;">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="img/card4.jpg" class="img-fluid rounded-start" style="max-width: 240px; height: auto; margin-left: -12px;">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Depresi Berat</h5>
                                            <p class="card-text">Depresi ini menyebabkan seseorang tidak dapat mengelola emosinya sehingga merasa putus asa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
  </body>
</html>
<?php } else {
    header("Location: login.php");
} ?>
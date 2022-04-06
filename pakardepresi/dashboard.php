<?php
    session_start();
    include("koneksi.php");
?>

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

    <title>Sistem Pakar</title>
  </head>
  <body>


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
            <li class="nav-item">
                <a class="nav-link text-white" href="laporankonsultasi.php"><i class="fa-solid fa-clipboard me-2"></i>Laporan Konsultasi</a><hr class="bg-light">
            </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-5">
          <p class="lead"> Halo, admin <b><?= $_SESSION['nama'] ?></b> </p>
          <h4><i class="fas fa-home"></i> DASHBOARD</h4><hr>

          <?php
          $data_penyakit=mysqli_query($konek_db, "SELECT COUNT(*) AS total FROM tb_penyakit");
          $total_penyakit=mysqli_fetch_assoc($data_penyakit); ?>
          <div class="row text-white">
            <div class="card bg-info" style="width: 18rem; margin-left: 20px">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-disease mr-2"></i>
                    </div>
                    <h5 class="card-title">PENYAKIT</h5>
                    <div class="display-2"> <?php echo $total_penyakit["total"]; ?></div>
                </div>
            </div>

            <?php
            $data_gejala=mysqli_query($konek_db, "SELECT COUNT(*) AS total FROM tb_gejala");
            $total_gejala=mysqli_fetch_assoc($data_gejala); ?>
            <div class="card bg-success" style="width: 18rem; margin-left: 40px">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-thermometer-three-quarters mr-2"></i>
                    </div>
                    <h5 class="card-title">GEJALA</h5>
                    <div class="display-2"><?php echo $total_gejala["total"]; ?></div>
                </div>
            </div> 

            <?php
            $data_basis=mysqli_query($konek_db, "SELECT COUNT(*) AS total FROM tb_rules");
            $total_basis=mysqli_fetch_assoc($data_basis); ?>
            <div class="card bg-danger" style="width: 18rem; margin-left: 40px">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-flask mr-2"></i>
                    </div>
                    <h5 class="card-title">BASIS PENGETAHUAN</h5>
                    <div class="display-2"><?php echo $total_basis["total"]; ?></div>
                </div>
            </div>

            <?php
            //$data_laporan=mysqli_query($konek_db, "SELECT COUNT(*) AS total FROM tb_hasil");
            //$total_laporan=mysqli_fetch_assoc($data_laporan); ?>
            <div class="card bg-warning" style="width: 18rem; margin-left: 20px; margin-top: 40px ">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-user-cog mr-2"></i>
                    </div>
                    <h5 class="card-title">LAPORAN</h5>
                    <!--<div class="display-2"><?php echo $total_basis["total"]; ?></div>-->
                </div>
            </div> 
            
          </div>
      </div>
   </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
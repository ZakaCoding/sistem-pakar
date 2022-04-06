<?php
    include('koneksi.php');

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
    <a class="navbar-brand" href="#">Selamat Datang, Admin</a>
    <div class="icon">
        <a href="logout.php"><button type="button" class="btn btn-primary" id="myBtn" style="margin-left: 1000px;"><i class="fas fa-sign-out-alt"></i> Logout</button>    
    </div>
  </div>
  </nav>


  <!---- Sidebar ----->
  <div class="row no-gutters mt-5 ">
      <div class="col-md-2 mt-2 pt-4 bg-dark">
        <ul class="nav flex-column ms-4 position-fixed">
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a><hr class="bg-light">
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
                <a class="nav-link text-white" aria-current="page" href="laporankonsultasi.php"><i class="fa-solid fa-clipboard me-2"></i>Laporan Konsultasi</a><hr class="bg-light">
            </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-5">
          <h4><i class="fa-solid fa-clipboard me-2"></i> LAPORAN KONSULTASI</h4><hr>

          
          <table class="table table-striped table-bordered">
              
          </table> 
      </div>
   </div>

   <script language="JavaScript" type="text/javascript">
       function checkDelete(){
            return confirm('Yakin menghapus data ini?');
        }
  </script>

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
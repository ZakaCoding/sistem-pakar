<?php
include('koneksi.php');

if(isset($_SESSION['login_user'])){
    header("location: about.php");
}
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
        <h5><i class="fas fa-sign-out-alt text-white" data-toggle="tooltip" title="log-out"></i></h5>
    </div>
  </div>
  </nav>


  <!---- Sidebar ----->
  <div class="row no-gutters mt-5">
      <div class="col-md-2 mt-2 pt-4 bg-dark">
        <ul class="nav flex-column ms-4 position-fixed">
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="jenisdepresi.php"><i class="fas fa-disease me-2"></i>Jenis Depresi</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="daftargejala.php"><i class="fas fa-thermometer-three-quarters me-2"></i>Daftar Gejala</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="basispengetahuan.php"><i class="fas fa-flask me-2"></i>Basis Pengetahuan</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="laporankonsultasi.php"><i class="fa-solid fa-clipboard me-2"></i>Laporan Konsultasi</a><hr class="bg-light">
            </li>
        </ul>
      </div>

      <!---- Input Gejala ---->
      <div class="col-md-10 p-5 pt-5">
          <h4><i class="fas fa-plus-square"></i> TAMBAH DAFTAR GEJALA</h4><hr>
          <form method="post" data-toggle="validator" action="tambahgejala.php">
            <br>
            <div class="mb-3">
                <label for="inputkodegejala" class="form-label fw-normal">Kode</label>
                <input type="text" class="form-control" name="kode_gejala">
            </div>
            <br>
            <div class="mb-3">
                <label for="inputtnamagejala" class="form-label fw-normal">Nama Gejala</label>
                <input type="text" class="form-control" name="gejala">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <?php		
                if(isset($_POST['submit'])){
                    
                $kode_gejala     = $_POST['kode_gejala'];
                $gejala          = $_POST['gejala'];
                $query="INSERT INTO tb_gejala SET kode_gejala='$kode_gejala', gejala='$gejala'";
                $result=mysqli_query($konek_db, $query);
                    if($result){
                        echo "<script>alert('Gejala berhasil ditambah');document.location='daftargejala.php'</script>";
                    }
                }
            ?>
          </form>
          
          

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
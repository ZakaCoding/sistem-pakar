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
                <a class="nav-link text-white" aria-current="page" href="basispengetahuan.php"><i class="fas fa-flask me-2"></i>Basis Pengetahuan</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="laporankonsultasi.php"><i class="fa-solid fa-clipboard me-2"></i>Laporan Konsultasi</a><hr class="bg-light">
            </li>
        </ul>
      </div>

      <!---- Input Basis Pengetahuan ---->
      <div class="col-md-10 p-5 pt-5">
          <h4><i class="fas fa-plus-square"></i> TAMBAH BASIS PENGETAHUAN</h4><hr>
          <form method="post" data-toggle="validator" action="tambahbasispengetahuan.php">

            <div class="mb-3">
                <label for="inputnamagejala" class="form-label fw-normal">Kode Penyakit</label>
                <input type="text" class="form-control" name="kode_penyakit">
            </div>
            
            <div class="mb-3">
                <label for="inputnamagejala" class="form-label fw-normal">Kode Gejala</label>
                <input type="text" class="form-control" name="kode_gejala">
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputmb" class="form-label fw-normal">Nilai MB</label>
                        <input type="text" class="form-control" name="mb">
                    </div>
                    <div class="col-md-6">
                        <label for="inputmd" class="form-label fw-normal">Nilai MD</label>
                        <input type="text" class="form-control" name="md">
                    </div>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <?php		
                if(isset($_POST['submit'])){
                    
                $kode_penyakit  = $_POST['kode_penyakit'];
                $kode_gejala    = $_POST['kode_gejala'];
                $mb             = $_POST['mb'];
                $md             = $_POST['md'];
                $query="INSERT INTO tb_rules SET kode_penyakit='$kode_penyakit', kode_gejala='$kode_gejala', mb='$mb', md='$md'";
                $result=mysqli_query($konek_db, $query);
                    if($result){
                        echo "<script>alert('Basis Pengetahuan berhasil ditambah');document.location='daftargejala.php'</script>";
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
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
                <a class="nav-link text-white" aria-current="page" href="jenisdepresi.php"><i class="fas fa-disease me-2"></i>Jenis Depresi</a><hr class="bg-light">
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

      <!---- Input Penyakit ---->
      <div class="col-md-10 p-5 pt-5">
          <h4><i class="fas fa-plus-square"></i> TAMBAH JENIS DEPRESI</h4><hr>
          <form method="post" data-toggle="validator" action="tambahpenyakit.php">
            <div class="mb-3">
                <label for="inputkodedepresi" class="form-label fw-normal">Kode</label>
                <input type="text" class="form-control" name="kode_penyakit">
            </div>
            <div class="mb-3">
                <label for="inputtingkatdepresi" class="form-label fw-normal">Tingkat Depresi</label>
                <input type="text" class="form-control" name="nama_penyakit">
            </div>
            <div class="mb-3">
                <label for="inputsaransolusi" class="form-label fw-normal">Saran Solusi</label>
                <textarea class="form-control" name="solusi" rows="4"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <?php		
                if(isset($_POST['submit'])){
                    
                $kode_penyakit     = $_POST['kode_penyakit'];
                $nama_penyakit     = $_POST['nama_penyakit'];
                $solusi            = $_POST['solusi'];
                $query="INSERT INTO tb_penyakit SET kode_penyakit='$kode_penyakit', nama_penyakit='$nama_penyakit', solusi='$solusi'";
                $result=mysqli_query($konek_db, $query);
                    if($result){
                        echo "<script>alert('Jenis depresi berhasil ditambah');document.location='jenisdepresi.php'</script>";
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
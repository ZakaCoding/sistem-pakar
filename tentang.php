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
                <a class="nav-link text-white" href="depresi.php"><i class="fas fa-home me-2"></i>Beranda</a><hr class="bg-light">
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
                <a class="nav-link text-white" aria-current="page" href="tentang.php"><i class="fas fa-exclamation-circle me-2"></i>Tentang</a><hr class="bg-light">
            </li>
        </ul>
      </div>

      <div class="col-md-10 p-5 pt-5">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#scrollspyHeading1">Certainty Factor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#scrollspyHeading2">Dempster Shafer</a>
                    </li>
                </ul>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example lh-lg" tabindex="0">
                <br>
                <h4 id="scrollspyHeading1">Metode Certainty Factor</h4>
                    <p>Certainty Factor merupakan salah satu teknik yang digunakan untuk mengatasi ketidakpastian dalam pengambilan keputusan. Certainty Theory menggunakan suatu nilai untuk mengasumsikan derajat keyakinan seorang pakar terhadap suatu data dalam mengekspresikan derajat keyakinan. 
                        Pada sistem pakar ini, metode Certainty Factor digunakan untuk mendapatkan nilai densitas dari tiap gejala yang dialami user. Konsep ini dituliskan dalam persamaan berikut:</p>
                    <p class="fs-5 fst-italic">CF(H,E) = MB(H,E) - MD(H,E)</p>
                    <p>dimana,</p>
                    <p class="lh-base">CF(H,E): Certainty Factor dari hipotesis H yang dipengaruhi oleh gejala E</p>
                    <p class="lh-base">MB(H,E): Nilai kenaikan kepercayaan terhadap hipotesis H yang dipengaruhi gejala E</p>
                    <p class="lh-base">MD(H,E): Nilai kenaikan ketidakpercayaan terhadap hipotesis H yang dipengaruhi gejala E</p>
                    
                <br><br>

                <h4 id="scrollspyHeading2">Metode Dempster Shafer</h4>
                    <p>Teori Dempster Shafer merupakan suatu teori matematika sebagai pembuktian berdasarkan fungsi kepercayaan dan pemikiran yang masuk akal, digunakan untuk mengkombinasikan potongan informasi atau fakta guna menghitung suatu kemungkinan peristiwa. 
                        Pada sistem pakar ini, metode Dempster Shafer digunakan untuk perhitungan antar gejala dengan menggunakan nilai densitas yang telah didapatkan sebelumnya untuk penarikan kesimpulan.
                        Secara umum formula kombinasi aturan Dempster Shafer adalah: <p>
                    <p><img src="img/dempster1.jpg"></p>
                    <p> dengan, </p>
                    <p><img src="img/dempster2.jpg"></p>
                    <p> dimana, </p>
                    <p class="lh-base">m1(X): nilai densitas dari gejala X</p>
                    <p class="lh-base">m2(Y): nilai densitas dari gejala Y</p>
                    <p class="lh-base">m3(Z): nilai densitas dari gejala X dan Y</p>
                    <p class="lh-base">Z: hasil irisan X dan Y</p>
                    <p class="lh-base">∅: hasil irisan kosong X dan Y</p>
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
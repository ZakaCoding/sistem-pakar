<?php
    session_start();
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
                <a class="nav-link text-white" aria-current="page" href="profil.php"><i class="fas fa-user-circle me-2"></i>Profil</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="tentang.php"><i class="fas fa-exclamation-circle me-2"></i>Tentang</a><hr class="bg-light">
            </li>
        </ul>
      </div>

      <div class="col-md-10 p-5 pt-5">
        <h4><i class="fas fa-user-circle"></i> PROFIL USER</h4><hr>
        <br>

        <div class="row">
            <div class="col-md-4">
                <img src="img/userprofile.png" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <form method="post">
                    <div class="form-group">
                        <h6><label for="nama" class="form-label">Nama</label></h6>
                        <input type="text" name="nama" class="form-control" value=" <?= $_SESSION['nama']?> ">
                    </div>
                    <br>
                    <div class="form-group">
                        <h6><label for="usia" class="form-label">Usia</label></h6>
                        <input type="text" name="usia" class="form-control" value="<?= $_SESSION['usia']?> ">
                    </div>
                    <br>
                    <div class="form-group">
                        <h6><label for="email" class="form-label">Email</label></h6>
                        <input type="email" name="email" class="form-control" value="<?= $_SESSION['email']?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <h6><label for="username" class="form-label">Username</label></h6>
                        <input type="text" name="username" class="form-control" value="<?= $_SESSION['username']?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <h6><label for="password" class="form-label">Password</label></h6>
                        <input type="password" name="password" class="form-control" 
                        value="<?= $_SESSION['password']?>">
                    </div>
                    <br>
                    <button type="submit" name="update" class="btn btn-primary">Update Profil</button>
                    <?php
                        if(isset($_POST['update'])){
                
                        }
                    ?>
                </form>
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
<?php
  session_start();
  if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) { ?>
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
    <a class="navbar-brand" href="index.php">Sistem Pakar</a>
  </div>
  </nav>


  <!---- Form Register ----->
  <br>
  <div class="row no-gutters mt-5">
      <h4><center> LOGIN</center></h4>
      <br><br>
    
      <div class="card w-25" style="margin-left: 530px;">
        <div class="card-body">
            <form class="row g-3" method="post" action="ceklogin.php">
              <!--- alert error --->
              <?php
                if (isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                  Username atau password salah
                </div>
                <?php } ?>
                
            <div class="col-md-12">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="col-md-12">
                <label for="level" class="form-label">Level</label>
                <select name="level" class="form-select">
                  <option value="User">User</option>
                  <option value="Admin">Admin</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <br><br>
                <a href="lupapassword.php">Lupa password?</a>
            </div>
            </form>
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
<?php } else {
  header("Location: home.php");
} ?>

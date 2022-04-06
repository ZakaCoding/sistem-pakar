<?php
include('koneksi.php');

if (isset($_POST['submit'])){
    $nama = mysqli_real_escape_string($konek_db, $_POST['nama']);
    $usia = mysqli_real_escape_string($konek_db, $_POST['usia']);
    $level = $_POST['level'];
    $email = mysqli_real_escape_string($konek_db, $_POST['email']);
    $username = mysqli_real_escape_string($konek_db, $_POST['username']);
    $password =$_POST['password'];

    $select = "SELECT * from akun WHERE username= '$username' && password= '$password'";

    $result = mysqli_query($konek_db, $select);

    if(mysqli_num_rows($result) > 0){
      $error[] = 'user telah digunakan';
    } else {
      $insert = "INSERT INTO akun(nama, usia, level, email, username, password) VALUES ('$nama', '$usia', '$level', '$email', '$username', '$password')";
      mysqli_query($konek_db, $insert);
      echo "<script>alert('Akun berhasil dibuat, silahkan login');document.location='login.php'</script>";
    }

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
    <a class="navbar-brand" href="index.php">Sistem Pakar</a>
  </div>
  </nav>


  <!---- Form Register ----->
  <br>
  <div class="row no-gutters mt-5">
      <h4><center> REGISTER</center></h4>
      <br><br>

      <?php
      if (isset($error)){
        foreach($error as $error){
          echo '<span class="error-msg">'.$error.'</span>';
        }
      }
      ?>

      <div class="card w-50" style="margin-left: 347px;">
        <div class="card-body">
            <form class="row g-3" method="post" data-toggle="validator" action="register.php">
            <div class="col-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="col-md-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="text" class="form-control" id="usia" name="usia">
            </div>
            <div class="col-md-3">
                <label for="level" class="form-label">Level</label>
                <select name="level" class="form-select">
                  <option value="User">User</option>
                  <option value="Admin">Admin</option>
                </select>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
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
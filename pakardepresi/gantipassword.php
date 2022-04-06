<?php include("koneksi.php"); ?>
<?php include("fungsi.php"); ?>

<?php

$err    = "";
$sukses = "";


if(isset($_POST['submit'])){

    $email  = $_GET['email'];
    $password   = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    // cek apakah password dan konfirmasi password sudah diisi
    if($password == '' or $konfirmasi_password == ''){
        // apabila belum diisi
        $err .= "Silahkan masukkan password serta konfirmasi password";
    }elseif($konfirmasi_password != $password){
        // apabila konfirmasi password tidak sesuai dengan password
        $err  .= "Konfirmasi password tidak sesuai dengan password";
    }

    if(empty($err)){
        $sql1 = "UPDATE akun SET token_ganti_password = '', password='".$_POST['password']."' where email='$email'";
        mysqli_query($konek_db, $sql1);
        $sukses = "Password berhasil diganti, Silahkan <a href='".url_dasar()."/login.php'>Login</a>";
    }
}
?>


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

<!----- Lupa Password ---->  
<br>
<div class="row no-gutters mt-5">
<h4><center>Ganti Password</center></h4>
<div class="card w-25" style="margin-left: 530px;">
    <div class="card-body">
    <form action="" method="post">

    <?php if($err){ echo "<div class='alert alert-danger' role='alert'>$err</div>";} ?>
    <?php if($sukses){ echo "<div class='alert alert-success'>$sukses</div>";} ?>

        <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div><br>
        <div class="col-md-12">
            <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password">
        </div><br>
        <div class="col-12">
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Ganti Password</button>
        </div>
    </form>
</div>
</div>

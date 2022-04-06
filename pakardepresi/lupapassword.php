<?php include("koneksi.php"); ?>
<?php include("fungsi.php"); ?>

<?php

$err    = "";
$sukses = "";
$email  = "";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if($email == ''){
        $err = "Silahkan masukkan email";
    }else{
        //cek apakah email terdaftar di database
        $sql1 = "SELECT * FROM akun where email = '$email'";
        $q1   = mysqli_query($konek_db, $sql1);
        $n1   = mysqli_num_rows($q1);

        //jika email tidak ada di database
        if($n1 < 1){
            //alert error
            $err ="Email: <b>$email</b> tidak ditemukan";
        }
    }

    if(empty($err)){
        $token_ganti_password  = md5(rand(0,1000));
        $judul_email           = "Ganti Password";
        $isi_email             = "Seseorang meminta untuk melakukan perubahan password. Silahkan klik link di bawah ini: <br/>";
        $isi_email            .= url_dasar()."/gantipassword.php?email=$email&token=$token_ganti_password";
        kirim_email($email,$email,$judul_email,$isi_email);

        $sql1    = "UPDATE akun SET token_ganti_password = '$token_ganti_password' where email = '$email'";
        mysqli_query($konek_db, $sql1);
        //alert sukses
        $sukses  = "Link ganti password sudah dikirimkan ke email anda.";
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
<h4><center>Lupa Password</center></h4>
<div class="card w-25" style="margin-left: 530px;">
    <div class="card-body">
    <form action="" method="post">

    <?php if($err){ echo "<div class='alert alert-danger' role='alert'>$err</div>";} ?>
    <?php if($sukses){ echo "<div class='alert alert-success'>$sukses</div>";} ?>

        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="col-12">
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Lupa Password</button>
        </div>
    </form>
</div>
</div>

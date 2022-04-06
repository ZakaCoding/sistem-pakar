<?php
include('koneksi.php');
$query="DELETE from tb_gejala where kode_gejala='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:daftargejala.php");
?>
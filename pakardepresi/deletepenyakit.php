<?php
include('koneksi.php');
$query="DELETE from tb_penyakit where kode_penyakit='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:jenisdepresi.php");
?>
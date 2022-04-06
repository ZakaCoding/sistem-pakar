<?php
include('koneksi.php');
$query="DELETE from tb_rules where id='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:basispengetahuan.php");
?>
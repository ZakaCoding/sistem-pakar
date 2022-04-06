<?php  
//membuat koneksi ke database  
  $host = 'localhost';  
  $user = 'root';        
  $password = '';        
  $database = 'pakardepresi';    
      
  $konek_db = mysqli_connect($host, $user, $password, $database);      

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if (!$konek_db){
    echo "Connection failed!";
    exit();
  }
?>
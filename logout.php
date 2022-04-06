<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['level']);

    session_destroy();
    echo "<script>alert('Anda telah keluar dari halaman sistem pakar');document.location='index.php'</script>";
?>
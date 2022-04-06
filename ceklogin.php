<?php  
session_start();
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['level'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$level = test_input($_POST['level']);

	if (empty($username)) {
		header("Location: login.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: login.php?error=Password is Required");
	}else {

		//cek username terdaftar atau tidak
        $sql = "SELECT * FROM tb_akun WHERE username='$username' AND level='$level'";
        $result = mysqli_query($konek_db, $sql);
		
		if (mysqli_num_rows($result) === 1){
    		// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] == $password) {
        		$_SESSION['nama'] = $row['nama'];
        		$_SESSION['id'] = $row['id'];
				$_SESSION['usia'] = $row['usia'];
                $_SESSION['level'] = $row['level'];
        		$_SESSION['email'] = $row['email'];
        		$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];

				//uji level user
				if ($level == "User"){
					header("Location: depresi.php");
				} elseif ($level == "Admin"){
					header("Location: dashboard.php");
				}
        	} else {
        		header("Location:login.php?error=Incorect User name or password");
        	}
        } else {
        	header("Location:login.php?error=Incorrect User name or password");
        }
	}
	
} else {
	header("Location:login.php");
}
<?php
session_start();

include('../../koneksi/koneksi.php');
if(isset($_POST['login']))
{
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars(base64_encode($_POST['password']));
  
  $sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' ");
  $row = mysqli_fetch_array($sql);
  if (count($row) > 0) {
  		$_SESSION['username'] = $row['username'];
      echo "<script>alert('Selamat datang $row[username]'); location='../index.php'</script>";
  } else {
      echo "<script>alert('username atau password salah'); location='../login.php'</script>";
  } 
}

if(isset($_GET['logout']))
{
	session_destroy();
    echo "<script>alert('Selamat tinggal'); location='../login.php'</script>";
}
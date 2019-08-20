<?php

if(isset($_POST['tambah']))
{
	$user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars/*(sha1*/(base64_encode($_POST['password']))/*)*/;


	$sql = "INSERT INTO tb_user (username, password)
	VALUES ('$user', '$pass')";


	if (mysqli_query($conn, $sql)) {
		    echo "<script>alert('Data berhasil ditambah'); location='index.php?page=user'</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
}
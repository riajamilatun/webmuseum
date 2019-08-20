<?php
if(isset($_POST['edituser']))
{
  $password = htmlspecialchars(base64_encode($_POST['password']));



  
  $sql = "UPDATE tb_user SET password = '$password' WHERE username = '$id'";

  if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Data berhasil diubah'); location='index.php?page=user'</script>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } 
}
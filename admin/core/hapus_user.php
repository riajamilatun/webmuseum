<?php
if(isset($_GET['hapus_user']))
{
  $id = $_GET['hapus_user'];

  $query=mysqli_query($conn, "DELETE FROM tb_user WHERE username = '$id' ");

	if ($query) {
	    echo "<script>alert('Data berhasil dihapus'); location='index.php?page=user'</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}	
}
?>
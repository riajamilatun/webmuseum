<?php
if(isset($_GET['hapus_museum']))
{
  $id = $_GET['hapus_museum'];

  $query=mysqli_query($conn, "DELETE FROM tb_museum WHERE id_museum = $id");

	if ($query) {
	    echo "<script>alert('Data berhasil dihapus'); location='index.php?page=museum'</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}	
}
?>
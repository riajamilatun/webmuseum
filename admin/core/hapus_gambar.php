<?php
if(isset($_GET['hapus_gambar']))
{
	$id = $_GET['hapus_gambar'];
  $query=$conn->query("SELECT * FROM tb_foto WHERE id_foto = $id");
  while ($gambar = $query->fetch_array()) {
		@unlink('images/'.$gambar['nama']);
		$delitem=$conn->query("DELETE FROM tb_foto WHERE id_foto='$id'");
		if($delitem)
		{
			echo "<script>alert('Data berhasil dihapus'); location='index.php?edit_museum=$gambar[id_museum]';</script>";
		}
	}
}
?>
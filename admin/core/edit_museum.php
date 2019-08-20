<?php
if(isset($_POST['edit']))
{
	$nama = htmlspecialchars($_POST['nama']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$didirikan = htmlspecialchars($_POST['didirikan']);
	$harga = htmlspecialchars($_POST['harga']);
	$jadwal = htmlspecialchars($_POST['jadwal']);
	$deskripsi = $_POST['deskripsi'];
	$latitude = htmlspecialchars($_POST['latitude']);
	$longitude = htmlspecialchars($_POST['longitude']);
	

	$sql = "UPDATE tb_museum SET nama = '$nama', alamat = '$alamat', didirikan = '$didirikan', harga = '$harga', jadwal = '$jadwal', deskripsi = '$deskripsi', longitude = '$longitude', latitude = '$latitude' WHERE id_museum = $id";
    $insert = mysqli_query($conn, $sql);
	
	$item_name = $_FILES['gambar']['name'];
    $uploadOk = 1;
    $target_dir = "images/";
    $fileCount= count($item_name);
    $forbidden=array('php', 'bat', 'exe');

	    for ($i = 0; $i < $fileCount; $i++) {
	        $target_file = $target_dir . basename($_FILES["gambar"]["name"][$i]);
	    	$type = pathinfo($_FILES['gambar']['name'][$i], PATHINFO_EXTENSION);
		    // Check if file already exists
		    if (file_exists($target_file)) {
		    	$newname= rand(1,9999).'-'.basename($_FILES["gambar"]["name"][$i]);
		        	move_uploaded_file($_FILES["gambar"]["tmp_name"][$i], $target_dir.$newname); 
		            echo "The file ". basename( $newname ). " has been uploaded.<br>";
		           	 $item=$conn->query("INSERT INTO tb_foto VALUES(null, '$newname', '$id')");

					if($item){
						echo "<meta http-equiv='refresh' content='0;URL=index.php?page=museum'>";
					}	
					else{
						echo "<script>alert('Error, ".$item_name[$i]." not saved');</script>
								<meta http-equiv='refresh' content='0;URL=index.php?page=museum'>";
					}
		    }
		    // Check if $uploadOk is set to 0 by an error
		    else if ($uploadOk == 0) {
		       echo "<script>alert('Sorry, ".$item_name[$i]." your file was not uploaded.');document.location='index.php?page=museum';</script>";
		    }
		    else if(in_array($type, $forbidden)){
					echo "<script>alert('Sorry, ".$item_name[$i]." forbidden upload file with the extension');</script>";
			}
			else if($_FILES["gambar"]['size'][$i] > 20000000){
			    	echo "<script>alert('Sorry, file ".$item_name[$i]." too large, max upload is 20 MB".$_FILES["gambar"]['size'][$i]."');</script>";
			    }
		    else {
		    	var_dump($_FILES["gambar"]["tmp_name"][$i], $target_file);
		        if (move_uploaded_file($_FILES["gambar"]["tmp_name"][$i], $target_file)) {
		            echo "The file ". basename( $item_name[$i]). " has been uploaded.<br>";
		           	 $item=$conn->query("INSERT INTO tb_foto VALUES(null, '$item_name[$i]', '$id')");

					if($item){
						echo "<meta http-equiv='refresh' content='0;URL=index.php?page=museum'>";
					}	
					else{
						echo "<script>alert('Error, ".$item_name[$i]." not saved');</script>
								<meta http-equiv='refresh' content='0;URL=index.php?page=museum'>";
					}
		        }
		        else {
		            echo "<script>alert('Sorry, there was an error uploading your ".$item_name[$i]." file.');</script>";
		        }
		    }
		}
}
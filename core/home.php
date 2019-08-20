<?php

header('Content-Type: application/json');
include '../koneksi/koneksi.php';
	$position = explode(',', trim(urldecode($_GET['position'])));
	if(isset($_GET['keyword']))
	{
		$keyword = $_GET['keyword'];
		$where = "WHERE (tb_museum.nama LIKE '%".$keyword."%' OR tb_museum.alamat LIKE '%".$keyword."%') AND tb_museum.alamat LIKE '%jakarta%'" ;
	}
	else{
		$where = "";
	}
	$sql = "SELECT *,
			(6371 * acos(cos(radians(".$position[0].")) 
			* cos(radians(latitude)) * cos(radians(longitude) 
			- radians(".$position[1].")) + sin(radians(".$position[0].")) 
			* sin(radians(latitude)))) 
			AS jarak 
			FROM tb_museum JOIN `tb_foto` USING(id_museum) $where GROUP BY tb_museum.id_museum 
			ORDER BY jarak LIMIT 0,6";

$data   = $conn->query($sql);
$json   = array();
$output = array();
$i = 0;

if (!empty($data)) {
	$json = '{"data": {';
	$json .= '"museum":[ ';
	while($x = mysqli_fetch_array($data)){
	    $json .= '{';
	    $json .= '"id_museum":"'.$x['id_museum'].'",
	    		 "nama":"'.htmlspecialchars_decode($x['nama']).'",
	    		 "alamat":"'.htmlspecialchars_decode($x['alamat']).'",
			     "nama_foto":"'.$x['nama_foto'].'",
			     "latitude":"'.$x['latitude'].'",
			     "longitude":"'.$x['longitude'].'",
			     "jarak":"'.$x['jarak'].'",
			     "km":"'.round($x['jarak'], 1).'"
	             },';
	}
 
	$json = substr($json,0,strlen($json)-1);
	$json .= ']';
	$json .= '}}';
	 
	echo $json;
} 

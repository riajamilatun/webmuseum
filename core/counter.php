<?php
// Detect Browser
$browser = $_SERVER['HTTP_USER_AGENT'];
$chrome = '/Chrome/';
$firefox = '/Firefox/';
$ie = '/MSIE/';
if (preg_match($chrome, $browser))
    $data = "Chrome/Opera";
if (preg_match($firefox, $browser))
    $data = "Firefox";
if (preg_match($ie, $browser))
    $data = "IE";

// Ambil Informasi Yang diperlukan dari Pengunjung
$ipaddress = $_SERVER['REMOTE_ADDR']."";
$browser = $data;
$tanggal = date('Y-m-d');
$kunjungan = 1;
// Daftarkan Kedalam Session Lalu Simpan Ke Database
if (empty($_SESSION['visitor'])){
$_SESSION['visitor']=$ipaddress;
mysqli_query($conn, "INSERT INTO tb_visitor (tanggal,ip_address,counter,browser) VALUES ('".$tanggal."','".$ipaddress."','".$kunjungan."','".$browser."')");
} 
// Hitung Jumlah Visitor
$kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
$hari_ini  = mysqli_fetch_array(mysqli_query($conn, 'SELECT sum(counter) AS hari_ini FROM tb_visitor WHERE tanggal="'.date("Y-m-d").'"'));
$kemarin = mysqli_fetch_array(mysqli_query($conn, 'SELECT sum(counter) AS kemarin FROM tb_visitor WHERE tanggal="'.$kemarin.'"'));
$sql = mysqli_fetch_array(mysqli_query($conn, 'SELECT sum(counter) as total FROM tb_visitor'));
?>
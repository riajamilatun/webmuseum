<?php

if(isset($_GET['page'])){
	if($_GET['page'] == 'museum')
	{
		include('pages/museum.php');
	}
	else if($_GET['page'] == 'user')
	{
		include('pages/user.php');
	}
	else
	{
		include('pages/dashboard.php');
	}
}
else if(isset($_GET['tambah_museum'])){
	include('pages/tambah_museum.php');
	include('core/tambah_museum.php');
}
else if(isset($_GET['tambah_user'])){
	include('pages/tambah_user.php');
	include('core/tambah_user.php');
}
else if(isset($_GET['edit_museum'])){
	include('pages/edit_museum.php');
	include('core/edit_museum.php');
}
else if(isset($_GET['edit_user'])){
	include('pages/edit_user.php');
	include('core/edit_user.php');
}
else if(isset($_GET['hapus_museum'])){
	include('core/hapus_museum.php');
}
else if(isset($_GET['hapus_user'])){
	include('core/hapus_user.php');
}
else if(isset($_GET['hapus_gambar'])){
	include('core/hapus_gambar.php');
}
else
{
	include('pages/dashboard.php');
}
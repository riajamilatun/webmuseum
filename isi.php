<?php

if(isset($_GET['page'])){
	if($_GET['page'] == 'listings')
	{
		include('page/listings.php');
	}
	else if($_GET['page'] == 'about')
	{
		include('page/about.php');
	}
	else
	{
		include('page/home.php');
	}
}
else if(isset($_GET['detail_museum'])){
	include('core/detail_museum.php');
	include('page/detail_museum.php');
}
else
{
	include('page/home.php');
}
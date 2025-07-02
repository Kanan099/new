<?php


function connectDB(){
	$host = 'localhost';
	$user = 'Kenan';
	$pass = '099';
	$db = 'extra_db';

	$connect = mysqli_connect($host,$user,$pass,$db);

	if (!$connect) {
		die("Error: ".mysqli_connect_error());
	}
	else{
		return $connect;
	}
}
function base_url(){
	return "http://ders.loc/";
}


?>
<?php

$databaseHost = 'localhost';
$databaseName = 'iso';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($conn -> connect_errno){
	echo die ("Gagal Menghubbungkan ke Databases ".$conn->connect_error);
}

?>
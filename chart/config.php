<?php

$databaseHost = 'localhost';
$databaseName = 'iso';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($conn -> connect_errno){
	echo die ("Gagal Menghubungkan ".$conn->connect_error);
}

?>

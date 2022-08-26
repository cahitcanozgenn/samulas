<?php
$databaseHost = 'localhost';
$databaseName = 'samulassearch';
$databaseUsername = 'root';
$databasePassword = 'root';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$mysqli->set_charset("utf8");
?>

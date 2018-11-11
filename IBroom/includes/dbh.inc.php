<?php

$Servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystemib";

$conn = mysqli_connect($Servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
<?php
$db_location = 'localhost';
$db_name = 'project';
$db_user = 'root';
$db_password = 'root';
$db_port = 3307;

$db_connect = mysqli_connect($db_location, $db_user, $db_password, $db_name, $db_port);
if(!$db_connect){
	exit('Error connerct DB');
}
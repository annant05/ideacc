<?php
// File to Connect to MySql DB
//
	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$database = 'users';
	$connect=mysqli_connect("$host","$user","$password","$database");
 
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect';
 echo mysqli_connect_errno($connect);
}

?>
<?php
$conn_error = 'Could not connect.';
$mysql_host = 'localhost';
$mysql_user = 'username';//to change
$mysql_pass = 'password';//to change
$mysql_connect = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
$mysql_db = 'ctw';
if(!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysqli_select_db($mysql_connect, $mysql_db))
{
	die($conn_error);
}
?>
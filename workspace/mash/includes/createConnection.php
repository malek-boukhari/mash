<?php
$conn_error = 'Could not connect.';
$mysql_host = 'localhost';
$mysql_user = 'shady';
$mysql_pass = '0000';
$mysql_db = 'shady_dataBase';
$mysql_connect = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_db) or die($conn_error);

echo "Connection succeded, GoodGame Shady!";
?>
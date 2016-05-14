<?php 
session_start();
include("includes/createConnection.php");
include("includes/html_codes.php");
if( isset($_SESSION['user_id']) ){
	header('Location:account_itemsactive.php');
}
if(isset($_POST['submit'])){
	$error = array();
	//username
	if(empty($_POST['username'])){
		$error[] = 'Please enter a username. ';
	}else if( ctype_alnum($_POST['username']) ){
		$username = $_POST['username'];
	}else{
		$error[] = 'Username must consist of letters and numbers only. ';
	}
	//password
	if(empty($_POST['password'])){
		$error[] = 'Please enter a password. ';
	}else{
		$password = mysqli_real_escape_string($mysql_connect, $_POST['password']);
	}
	if(empty($error)){
		$result = mysqli_query($mysql_connect, "SELECT * FROM users WHERE username='$username' AND password='$password' ") or die(mysql_error());
		if(mysqli_num_rows($result)==1){
			while($row = mysqli_fetch_array($result)){
				$_SESSION['user_id'] = $row['user_id'];
				header('Location:account_itemsactive.php');
			}
		}else{
			$error_message = '<span class="error">Username or password is incorrect.</span><br/><br/>';
		}
	}else{
		$error_message = '<span class="error">';
		foreach ($error as $key => $values) {
			$error_message.= "$values";
		}
		$error_message.= "</span><br/><br/>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>site name</title>
	<link rel="stylesheet" href="css/maincss.css">
	
</head>
<body>
	<div>
		<?php headerCode();?>
		<?php footerCode();?>
	</div>
</body>
</html>

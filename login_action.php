<?php
session_start();
include('config/db.php');
$username = $_POST['user'];
$password = $_POST['password'];


$q = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$result = mysql_query($q);

$num = mysql_num_rows($result);

if($num==0)
	{
		header("Location: login.php?err=yes");
		exit;
	}
else
	{
		$row = mysql_fetch_array($result);
		//echo $row['email'];
		$_SESSION['username'] = $username;
		
		$_SESSION['user_id'] = $row['id'];
		
		$_SESSION['login'] = 'yes';
		header("Location: cmshome.php");
	}

?>
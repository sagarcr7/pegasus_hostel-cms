
<?php
	session_start();
	include('db.php');
	
	$id = $_GET['id'];
	echo $id;
	$q = "DELETE FROM `workers` WHERE `w_id` = '$id'";
	
//	$q = "DELETE  FROM workers WHERE w_id = '$id'";
	
	mysql_query($q);

	header("Location: emp_list.php");

?>
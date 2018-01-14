<?php
session_start();
include('config/db.php');
$id = $_GET['std_id'];

$q = "DELETE FROM std_registration WHERE std_id = '$id'";
mysql_query($q);
header("Location: student_list.php");
?>
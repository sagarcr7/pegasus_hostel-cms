<?php
session_start();
include('db.php');
$id = $_GET['id'];

$q = "DELETE FROM std_fee WHERE std_id = '$id'";
mysql_query($q);
header("Location: fee.php");
?>
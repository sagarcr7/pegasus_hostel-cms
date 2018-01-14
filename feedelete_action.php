<?php
session_start();
include('config/db.php');
$id = $_GET['std_id'];

$q = "DELETE FROM std_fee WHERE std_id = '$id'";
mysql_query($q);
header("Location: fee.php");
?>
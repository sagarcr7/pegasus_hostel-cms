<?php
session_start();
include('config/db.php');
$id = $_GET['w_id'];

$q = "DELETE FROM w_salary WHERE w_id = '$id'";
mysql_query($q);
header("Location: salary.php");
?>
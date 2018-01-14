<?php
session_start();
include('db.php');
$id = $_GET['id'];

$q = "DELETE FROM w_salary WHERE w_id = '$id'";
mysql_query($q);
header("Location: salary.php");
?>
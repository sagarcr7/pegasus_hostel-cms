<?php
session_start();
include('db.php');
$emp_id = $_POST['emp_id'];
$paidamount = $_POST['paidamount'];
$paymentdate = $_POST['paymentdate'];

$q="INSERT INTO `w_salary` (`w_id`, `w_paymentnum`, `w_payamount`, `w_paydate`) VALUES ('$emp_id', NULL, '$paidamount', '$paymentdate');";
mysql_query($q);

header("Location: salary.php");
?>
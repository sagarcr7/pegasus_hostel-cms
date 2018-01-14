<?php
session_start();
include('db.php');
$std_id = $_POST['std_id'];
$paidamount = $_POST['paidamount'];
$paymentdate = $_POST['paymentdate'];

$q="INSERT INTO `std_fee` (`std_id`, `std_paymentnum`, `std_paidamount`, `std_paymentdate`) VALUES ('$std_id', NULL, '$paidamount', '$paymentdate');";
mysql_query($q);

header("Location: fee.php");
?>
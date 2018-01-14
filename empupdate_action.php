<?php
session_start();
include('config/db.php');
$id =$_GET['emp_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$jtitle = $_POST['jtitle'];
$startdate = $_POST['startdate'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];

$q1="UPDATE `hostel`.`workers` SET `w_fname` = '$fname', `w_lname` = '$lname', `w_email` = '$email', `w_contact` = '$contact', `w_jobtitle` = '$jtitle', `w_startdate` = '$startdate', `w_dob` = '$dob', `w_sex` = '$sex' WHERE `workers`.`w_id` = '$id'";

mysql_query($q1);

header("Location: emp_list.php");
?>
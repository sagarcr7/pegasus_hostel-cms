<?php
session_start();
include('db.php');
$id =$_POST['id'];
$fname = $_POST['w_fname'];
$lname = $_POST['w_lname'];
$email = $_POST['w_email'];
$contact = $_POST['w_contact'];
$jtitle = $_POST['w_jtitle'];
$startdate = $_POST['w_startdate'];
$dob = $_POST['w_dob'];
$sex = $_POST['sex'];

$q1="UPDATE `hostel1`.`workers` SET `w_fname` = '$fname', `w_lname` = '$lname', `w_email` = '$email', `w_contact` = '$contact', `w_jobtitle` = '$jtitle', `w_startdate` = '$startdate', `w_DOB` = '$dob', `w_sex` = '$sex' WHERE `workers`.`w_id` = '$id'";

mysql_query($q1);




header("Location: emp_list.php");
?>
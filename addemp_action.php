<?php
session_start();
include('config/db.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$jtitle = $_POST['jtitle'];
$startdate = $_POST['startdate'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];

$q="INSERT INTO `workers` (`w_id`, `w_fname`, `w_lname`, `w_email`, `w_sex`, `w_dob`, `w_jobtitle`, `w_contact`, `w_startdate`) VALUES (NULL, '$fname', '$lname', '$email', '$sex', '$dob', '$jtitle', '$contact', '$startdate');";
mysql_query($q);

header("Location: emp_list.php");
?>
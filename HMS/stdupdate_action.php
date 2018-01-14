<?php
session_start();
include('db.php');
$id =$_GET['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$admitdate = $_POST['admitdate'];
$edulevel = $_POST['edulevel'];
$institute = $_POST['institute'];
$sex = $_POST['sex'];
$course = $_POST['course'];
$jinstitute = $_POST['jinstitute'];

$q1="UPDATE `hostel`.`std_registration` SET `std_fname` = '$fname', `std_lname` = '$lname', `std_email` = '$email', `std_contact` = '$contact', `std_admitdate` = '$admitdate', `std_edulevel` = '$edulevel', `std_institute` = '$institute', `std_sex` = '$sex', `std_course` = '$course, `std_jobinstitute` = '$jinstitute' WHERE `std_registration`.`std_id` = '$id'";

mysql_query($q1);

header("Location: student_list.php");
?>
<?php
session_start();
include('db.php');
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

$q="INSERT INTO `std_registration` (`std_id`, `std_fname`, `std_lname`, `std_email`, `std_contact`, `std_admitdate`, `std_edulevel`, `std_institute`, `std_sex`, `std_course`, `std_jobinstitute`) VALUES (NULL, '$fname', '$lname', '$email', '$contact', '$admitdate', '$edulevel', '$institute', '$sex', '$course', '$jinstitute');";
mysql_query($q);

header("Location: student_list.php");
?>
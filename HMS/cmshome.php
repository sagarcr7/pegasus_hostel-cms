<?php
session_start();
include('db.php');
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: index.php");
exit;
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
</head>

<link rel="stylesheet" href="style1.css"  type="text/css" />

<body>

<div class="mainwrapper">

<!--###### HEADERR OPEN ###########3 -->
	<div class="header">

	</div>
    
    	<div class="welcome">
			<?php
      include('header.php'); ?>
            <br clear="all" />
		</div>
        
	

<!--###### HEADERR CLOSED ###########3 -->



<!--###### CONTENT OPEN ###########3 -->
	<div class="content">
        <!--###### BOX1 OPEN ###########3 -->
        <div class="box1">
          <div class="logo">
           <?php include("logo.php") ?>
            </div>
               <?php include("sidebar.php") ?>
        </div>
        <!--###### BOX1 CLOSED ###########3 -->
        
        
        <!--###### BOX2 OPEN ###########3 -->
        <div class="box2">
           <h2>Pegasus Boys Hostel CMS</h2>
              </br> ADMIN PANEL 
            <ul>
                 <li> Manage Students information </li>
                 <li>Manage Emplyoees information </li>
                  <li>View and Update Salary status </li>
                  <li>Check and update Fee status </li>
            </ul>
        </div>
        <!--###### BOX2 CLOSED ###########3 -->

	</div>

<!--###### CONTENT CLOSED ###########3 -->
<div class="box3">
  </div>

<!--###### FOOTER OPEN ###########3 -->
	<div class="footer">
    <?php include("footer.php") ?>
	</div>

<!--###### FOOTER CLOSED ###########3 -->
</div>


</body>
</html>
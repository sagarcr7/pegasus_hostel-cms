<?php
session_start();
include('config/db.php');
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: login.php");
exit;
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<link rel="stylesheet" href="style1.css"  type="text/css" />

<body>

<div class="mainwrapper">

<!--###### HEADERR OPEN ###########3 -->
	<div class="header">

	</div>
    
    	<div class="welcome">
			<?php include("includes/header.php"); ?>
		</div>
        
	

<!--###### HEADERR CLOSED ###########3 -->



<!--###### CONTENT OPEN ###########3 -->
	<div class="content">
    
    	
        <!--###### BOX1 OPEN ###########3 -->
        <div class="box1">
        	
           <div class="logo">
           <?php include("includes/logo.php") ?>
            </div>
               <?php include("includes/sidebar.php") ?>
        
        </div>
        <!--###### BOX1 CLOSED ###########3 -->
        
        
        <!--###### BOX2 OPEN ###########3 -->
        <div class="box2">
          <fieldset style="width:auto;height:auto;">
               <legend style="color:#FFFFFF; letter-spacing:2px;padding-left:10px;"><h2>Add Students Here</h2>
               </legend>	
      			  <form method="post" action="addemp_action.php" name="add_emp" id="add_emp">
                 <table width="100%" border="0" cellspacing="1" cellpadding="0" class="addstdtable">
                   <tr>
                        <td width="20%">Fame</td>
                        <td width="40%"><input type="text" name="fname" id="fname"></td>
                    </tr>
                    <tr>
                         <td>Lname</td>
                          <td width="40%"><input type="text" name="lname" id="lname"></td>
                    </tr>
                    <tr>
                         <td>Email</td>
                          <td width="40%"><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                         <td>Contact No.</td>
                          <td width="40%"><input type="text" name="contact" id="contact" maxlength="10"></td>
                    </tr>
                    <tr>
                         <td>Job title</td>
                          <td width="40%"><input type="text" name="jtitle" id="jtitle"></td>
                    </tr>
                    <tr>
                         <td>Start date</td>
                          <td width="40%"><input type="text" name="startdate" id="startdate"></td>
                    </tr>
                    <tr>
                         <td>DOB</td>
                          <td width="40%"><input type="text" name="dob" id="dob"></td>
                    </tr>
                    <tr>
                         <td>Sex</td>
                          <td><input type="radio" name="sex" id="sex" value="M" <?php if(isset($_POST['sex']) && $_POST['sex']=="M") { ?>checked<?php  } ?>> M</td>
                          <td margin-left="-30px"><input type="radio" name="sex" id="sex"  value="F" <?php if(isset($_POST['sex']) && $_POST['sex']=="F") { ?>checked<?php  } ?>> F</td>
                          <td><input type="radio" name="sex" id="sex" value="O" <?php if(isset($_POST['sex']) && $_POST['sex']=="O") { ?>checked<?php  } ?>>O</td>

                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Enter"></td>
                    </tr>
      </table>
     </form>


        </div>
        <!--###### BOX2 CLOSED ###########3 -->
        
<div class ="box3">
  <div class="manage"><b>Manage </b></div>
          <?php include("includes/manageemp.php"); ?>
        
            </div>
</div>

	</div>

<!--###### CONTENT CLOSED ###########3 -->

<!--###### FOOTER OPEN ###########3 -->
	<div class="footer">
      <?php include("includes/footer.php"); ?>
	</div>

<!--###### FOOTER CLOSED ###########3 -->
</div>


</body>
</html>
<?php
session_start();
include('db.php');

$id=$_GET['id'];

$q= "SELECT * FROM workers WHERE w_id = '$id'";

$result= mysql_query($q);

$row= mysql_fetch_array($result);
           

if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: login.php");
exit;
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee_update</title>
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
        
      <fieldset style="width:auto;height:auto;">
               <legend style="color:#FFFFFF; letter-spacing:2px;padding-left:10px;"><h2>Update Employees Here</h2>
               </legend>  
              <form method="post" action="empupdate_action.php" name="update_emp" id="update_emp">
                <input type="hidden" name="id" value="<?php echo $id?>">
                 <table width="100%" border="0" cellspacing="1" cellpadding="0" class="addstdtable">
                   <tr>
                        <td width="20%">Fame</td>
                        <td width="40%"><input type="text" name="w_fname" id="w_fname" value="<?php echo $row['w_fname'];?>"/>
                        </td>
                    </tr>
                    <tr>
                         <td>Lname</td>
                          <td width="40%"><input type="text"  name="w_lname" id="w_lname" value="<?php echo $row['w_lname'];?>"/>
                          </td>
                    </tr>
                    <tr>
                         <td>Email</td>
                          <td width="40%"><input type="text"  name="w_email" id="w_email" value="<?php echo $row['w_email'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Contact No.</td>
                          <td width="40%"><input type="text"  name="w_contact" id="w_contact" maxlength="10"value="<?php echo $row['w_contact'];?>"/> </td>
                    </tr>
                    <tr>
                         <td>Job title</td>
                          <td width="40%"><input type="text" name="w_jtitle" id="w_jtitle" value="<?php echo $row['w_jobtitle'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Start date</td>
                          <td width="40%"><input type="text" name="w_startdate" id="w_startdate" value="<?php echo $row['w_startdate'];?>"/></td>
                    </tr>
                    <tr>
                         <td>DOB</td>
                          <td width="40%"><input type="text" name="w_dob" id="w_dob" value="<?php echo $row['w_DOB'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Sex</td>
                          <td>
                          <select name="sex">

                            <option selected="selected"><?php echo $row['w_sex'];  ?></option>
                            <option>M</option>
                            <option>F</option>
                            <option>O</option>


                          </select>
                        </td>
                          
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Enter"></td>
                    </tr>
      </table>
     </form>


</div>
        <!--###### BOX2 CLOSED ###########3 -->

<div class="box3">
        
            <div class="manage"><b>Manage </b></div>
          <?php include("manageemp.php"); ?>
        
            </div>
        <!--###### BOX3 CLOSED ###########3 --> 

  </div>

<!--###### CONTENT CLOSED ###########3 -->

<!--###### FOOTER OPEN ###########3 -->
	<div class="footer">
		<?php include("footer.php"); ?>

	</div>

<!--###### FOOTER CLOSED ###########3 -->
</div>


</body>
</html>
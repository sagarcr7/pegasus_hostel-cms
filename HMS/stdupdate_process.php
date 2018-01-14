<?php
session_start();
include('config/db.php');

$id=$_GET['id'];

$q= "SELECT * FROM std_registration WHERE std_id = '$id'";

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
<title>Student_update</title>
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
               <legend style="color:#FFFFFF; letter-spacing:2px;padding-left:10px;"><h2>Update Students Record Here</h2>
               </legend>  
              <form method="post" action="stdupdate_action.php" name="update_emp" id="update_emp">
                <input type="hidden" name="id" value="<?php echo $id?>">
                 <table width="100%" border="0" cellspacing="1" cellpadding="0" class="addstdtable">
                   <tr>
                        <td width="20%">Fame</td>
                        <td width="40%"><input type="text" name="std_fname" id="std_fname" value="<?php echo $row['std_fname'];?>"/>
                        </td>
                    </tr>
                    <tr>
                         <td>Lname</td>
                          <td width="40%"><input type="text"  name="std_lname" id="std_lname" value="<?php echo $row['std_lname'];?>"/>
                          </td>
                    </tr>
                    <tr>
                         <td>Email</td>
                          <td width="40%"><input type="text"  name="std_email" id="std_email" value="<?php echo $row['std_email'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Contact No.</td>
                          <td width="40%"><input type="text"  name="std_contact" id="std_contact" maxlength="10" value="<?php echo $row['std_contact'];?>"/> </td>
                    </tr>
                    <tr>
                         <td>Admit Date</td>
                          <td width="40%"><input type="text" name="std_admitdate" id="std_admitdate" value="<?php echo $row['std_admitdate'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Edu. Level</td>
                          <td width="40%"><input type="text" name="std_edulevel" id="std_edulevel" value="<?php echo $row['std_edulevel'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Institute</td>
                          <td width="40%"><input type="text" name="std_institute" id="std_institute" value="<?php echo $row['std_institute'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Sex</td>
                          <td>
                          <select name="sex">

                            <option selected="selected"><?php echo $row['std_sex'];  ?></option>
                            <option>M</option>
                            <option>F</option>
                            <option>O</option>


                          </select>
                        </td>
                          
                    </tr>
                    <tr>
                         <td>Course</td>
                          <td width="40%"><input type="text" name="std_course" id="std_course" value="<?php echo $row['std_course'];?>"/></td>
                    </tr>
                    <tr>
                         <td>Job Institute</td>
                          <td width="40%"><input type="text" name="std_jobinstitute" id="std_jobinstitute" value="<?php echo $row['std_jobinstitute'];?>"/></td>
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
          <?php include("managestd.php"); ?>
        
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
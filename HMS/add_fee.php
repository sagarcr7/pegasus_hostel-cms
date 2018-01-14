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
<title>Fee Record</title>
</head>

<link rel="stylesheet" href="style1.css"  type="text/css" />

<body>

<div class="mainwrapper">

<!--###### HEADERR OPEN ###########3 -->
	<div class="header">

	</div>
    
    	<div class="welcome">
			<?php include("header.php"); ?>
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
               <legend style="color:#FFFFFF; letter-spacing:2px;padding-left:10px;"><h2>Add Fee records Here</h2>
               </legend>	
      			  <form method="post" action="addfee_action.php" name="add_std" id="add_std">
                 <table width="100%" border="0" cellspacing="1" cellpadding="0" class="addstdtable">
                   <tr>
                        <td width="20%">Std_id</td>
                        <td width="40%"><input type="text" name="std_id" id="std_id"></td>
                    </tr>
                    <tr>
                         <td>Paid Amount</td>
                          <td width="40%"><input type="text" name="paidamount" id="paidamount"></td>
                    </tr>
                    <tr>
                         <td>Payment Date</td>
                          <td width="40%"><input type="text" name="paymentdate" id="paymentdate"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Add"></td>
                    </tr>
      </table>
     </form>


        </div>
        <!--###### BOX2 CLOSED ###########3 -->
        
<div class ="box3">
  <div class="manage"><b>Manage </b></div>
          <ul>
              <li><a href="add_fee.php">Add record</a></li>
              <li><a href="delete_fee.php">Delete record</a></li>
           </ul>
        
            </div>
</div>

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
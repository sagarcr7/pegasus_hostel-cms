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
<title>Fee Record</title>
</head>

<link rel="stylesheet" href="style1.css"  type="text/css" />

<body>

<div class="mainwrapper">

<!--###### HEADERR OPEN ###########3 -->
	<div class="header">

	</div>
    
    	<div class="welcome">
      <?php
      include('includes/header.php'); ?>
            <br clear="all" />
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
        
      <h3>Delete Fee Record</h3>
          
      <table width="100%" border="1" cellpadding="2" cellspacing="0" style="text-align:center;">
   <tr>
    <th>std_id</th>
    <th>Paymentnum</th>
    <th>Amount</th>
    <th>Date</th>
  </tr>
  
  <?php
  
  //Getting values from db
  
    $q1="SELECT * FROM std_fee"; //WHERE id = '$id'";
  
     $result=mysql_query($q1);
  
     $n=mysql_num_rows($result);
  
     for($i=1; $i<=$n; $i++)
      {
        $row=mysql_fetch_array($result);

      // values obtained in array row
         ?>
          <tr>
             <td width="1%"><?php echo $row['std_id'];?></td>

              <td><?php echo $row['std_paymentnum']?></td>
       
               <td><?php echo $row['std_paidamount']?></td>

               <td><?php echo $row['std_paymentdate']?></td>

              <td>
                
                 <a href="feedelete_action.php?id=<?php echo $row['id']?>" onClick="Javascript: a = confirm('are you sure?');
                 if(!a)return false;">Delete</a></td>
              </td>
          </tr>
     
        <?php
      }
  
         ?>  
  
  </table>
</div>
        <!--###### BOX2 CLOSED ###########3 -->

<div class="box3">
        
            <div class="manage"><b>Manage </b></div>
         <ul>
              <li><a href="add_fee.php">Add record</a></li>
              <li><a href="delete_fee.php">Delete record</a></li>
           </ul>
        
            </div>
        <!--###### BOX3 CLOSED ###########3 --> 

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
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
<title>Student_Fee</title>
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
        
		  <h3>Student Fee Status</h3>
        	
			<table width="100%" border="1" cellpadding="2" cellspacing="0" style="text-align:center;">
  <tr>
    <th>std_id</th>
    <th>Paymentnum</th>
    <th>Amount</th>
    <th>Date</th>
  </tr>
  
  <?php
  
  //Getting values from db
  
    $q="SELECT * FROM std_fee"; //WHERE id = '$id'";
  
     $result=mysql_query($q);
  
     $n=mysql_num_rows($result);
  
     for($i=1; $i<=$n; $i++)
      {
	      $row=mysql_fetch_array($result);

      // values obtained in array row
         ?>
   	      <tr>
    	       <td><?php echo $row['std_id'];?></td>

              <td><?php echo $row['std_paymentnum']?></td>
	     
               <td><?php echo $row['std_paidamount']?></td>

               <td><?php echo $row['std_paymentdate']?></td>

         </tr>
     
        <?php
      }
	
	       ?>  
  
  </table>
</div>
        <!--###### BOX2 CLOSED ###########3 -->
        
	</div>

<!--###### CONTENT CLOSED ###########3 -->
<div class="box3">
        
            <div class="manage"><b>Manage </b></div>
          <ul>
              <li><a href="add_fee.php">Add record</a></li>
              <li><a href="delete_fee.php">Delete record</a></li>
           </ul>
        
            </div>
        <!--###### BOX3 CLOSED ###########3 --> 


<!--###### FOOTER OPEN ###########3 -->
	<div class="footer">
    <?php include("footer.php"); ?>
	</div>


<!--###### FOOTER CLOSED ###########3 -->
</div>


</body>
</html>
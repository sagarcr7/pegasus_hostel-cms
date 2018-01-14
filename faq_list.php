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
			<p>Welcome <?php echo $_SESSION['fullname']?>
    		<a href="logout.php" >Log Out</a>
            </p>
            <br clear="all" />
		</div>
        
	

<!--###### HEADERR CLOSED ###########3 -->



<!--###### CONTENT OPEN ###########3 -->
	<div class="content">
    
    	
        <!--###### BOX1 OPEN ###########3 -->
        <div class="box1">
        	<div class="category"><b>Categories</b></div>
        
      <ul type="disc">
      	<li><a href="cmshome.php">CMS Homepage</a></li>
      	<li><a href="service_list.php">Service</a></li>
        <li><a href="package_list.php">Package</a></li>
        <li><a href="#">Special Package</a></li>
        <li><a href="famous_pl_list.php">Famous Places</a></li>
        <li><a href="faq_list.php">FAQ's</a></li>
        <li><a href="#">Pages</a></li>
        
        </ul>
        
        </div>
        <!--###### BOX1 CLOSED ###########3 -->
        
        
        <!--###### BOX2 OPEN ###########3 -->
        <div class="box2">
        
		  <h3>Services</h3>
        	
			<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
  <tr>
    <th width="11%">S.N</th>
    <th width="27%">Questions</th>
    <th width="39%">Answers</th>
    <th width="23%">Action</th>
  </tr>
  
  <?php
  
  //$id=$_SESSION['id'];
  
  $q="SELECT * FROM tbl_faq"; //WHERE id = '$id'";
  
  $result=mysql_query($q);
  
  $num=mysql_num_rows($result);
  
  for($i=1; $i<=$num; $i++)
  {
	  $row=mysql_fetch_array($result);
	  ?>
   	 <tr>
    	<td><?php echo $i;?></td>
        
        
        
        
         <td>
         	<?php echo $row['ques']?>
         </td>
	  
	  <td>
	 <?php echo $row['ans']?>
     </td>
      
      	
  	
    
		<td>
        	<a href="faq_edit.php?id=<?php echo $row['id']?>">Edit </a>|
        	<a href="faq_delete.php?id=<?php echo $row['id']?>"
            
            
           onClick="Javascript: 
      a = confirm('are you sure?');
      if(!a)return false;">Delete</a></td>
        <td width="0%"></td>
	 </tr>
     
    <?php
  		
		}
	
	?>
   
  
  
  
</table>


        </div>
        <!--###### BOX2 CLOSED ###########3 -->
        
	
    
    	 
       
		  <!--###### BOX3 OPEN ###########3 -->
        <div class="box3">
        
        		<div class="category"><b>Action</b></div>
            
      <ul type="disc">
      	<li><a href="faq_add.php">Add New</a></li>
        
        
        </ul>
        
        </div>
        <!--###### BOX3 CLOSED ###########3 -->
        
    

	</div>

<!--###### CONTENT CLOSED ###########3 -->

<!--###### FOOTER OPEN ###########3 -->
	<div class="footer">
		<p align="center"> &copy;2015 Explore Nepal</p>	

	</div>

<!--###### FOOTER CLOSED ###########3 -->
</div>


</body>
</html>
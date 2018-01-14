<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pegasus CMS</title>
<link rel="stylesheet" href="style/style.css" /> 
<link rel="shortcut icon" href="nepflg98.gif" />
</h
<body>
	<?php
		if(isset($_GET['err'])&&$_GET['err']=='yes')
			{
	?>
	<div style="color:#F00; text-align:center;">Username/Password Incorrect</div>
	<?php
		}
	?>

	<?php
		if(isset($_GET['err'])&&$_GET['err']=='block')
		{
			$remaining = $_SESSION['block_expiry_time']-strtotime(date("Y-m-d H:i:s"));
			if($remaining>0)
			{
	?>
	<div style="color:#F00; text-align:center;">You are blocked. 	Please try agin after <?php echo $remaining;?> second</div>
	<?php
		}
	}
?>

<div class="wrapper">
		<div class="top">
			<h1 align="center" width:100%">Pegasus Hostel CMS</h1>
		</div>
			<div class="down">
				<div class="left_down">
				
						<img src="logo1.gif" align="center" /> 
				</div>
				<div class="right_down">
					<h1>Admin</h1>
					<fieldset style="width:400px;height:auto;">
					<legend style="color:#FFFFFF; letter-spacing:2px; padding-left:10px;">Admin Panel</legend>
					<form name="reg_form" method="post" action="login_action.php" >
					<table>
						<tr><td>UserName</td></tr>
						<tr><td><input type="text" name="user" maxlength="10"/></td></tr>
						<tr><td>Password</td></tr>
						<tr><td><input type="password" name="password"/></td></tr>
						<tr><td/><input type="submit" name="submit" value="Enter"/></td></tr>
					</table>
				</form>
				</fieldset>
		</div>
	</div>
			
</div>
</body>
</html
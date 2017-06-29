<?php

session_start();
session_destroy();

if(isset($_SESSION['status']))
	$status = $_SESSION['status'];
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../themes/background.tab.css">
	<link rel="stylesheet" type="text/css" href="reg_log.css">	

	<link rel="shortcut icon" href="../themes/wallpaper/Logo.ico">
	<title>Delight Bakery</title>

</head>

<body>
<table border="0" height="320" align="center">
	<tr>
		<td rowspan="3">
			<p>
			<img src="../themes/wallpaper/Logo-Bakery.png" align="left" width="320" height="320" title="Delight Bakery" >
			</p>
		</td>
		<td colspan="3" height="30" class="user-login">
			Welcome,
			<span class="username">
				<?php
					if(isset($_SESSION['username']))
						echo "".$_SESSION['username']."! [".$status."]<td width='150px' align='center'>
						<a href='User.php'><img src='../picture/CustomerSpace/user.png' class='logout_img' title='Profile'></a>
						<a href='Logout.php'><img src='../picture/CustomerSpace/logout.png' class='logout_img' title='Logout'></a></td>";
					else
						echo ("User! [UNREGISTERED]<td align='center'>
							<a href='Register.php'><img src='../picture/CustomerSpace/register.png' class='logout_img' title='Register' /></a>
							<a href='Log-In.php'><img src='../picture/CustomerSpace/login.png' class='logout_img' title='Log In'/></a>
							</td>");
				?>
			</span>
		</td>
		<td align="center">
			<?php
			// set the default time zone to use in Malaysia
			date_default_timezone_set('Asia/Kuala_Lumpur');
			?>
			<span style="color:#000000; font-weight:bold; font-family:arial"><?php echo date("D, d M Y, h:i A"); ?></span>
		</td>
	</tr>
	<tr>
		<td height="250" colspan="5">
			<center>
				<img src="../themes/wallpaper/login.png">
			</center></p>
		</td>
	</tr>
	<tr style="text-align: center;" height="52">
		<td class="menu">
			<a href="../index.php">
			<acronym title="Delight Bakery">
			HOME</acronym></a>
		</td>
		<td class="menu">
			<a href="../AboutUs.php">
			<acronym title="About Us"> 
			ABOUT US</acronym></a>
		</td>
		<td class="menu">
			<a href="../Menu.php">
			<acronym title="Menu">
			MENU</acronym></a>
		</td>
		<td class="menu">
			<a href="../Gallery.php">
			<acronym title="Gallery"> 
			GALLERY</acronym></a>
		</td>
		<td class="menu">
			<a href="../CustomerSpace.php">
			<acronym title="Customer Space">
			CUSTOMER SPACE</acronym></a>
		</td>
	</tr>
</table>
  
<br />
<br />
<br />
<center>
<table border="0" width="450px">
	<tr>
		<th>Log In Here</th>
	</tr>
	<tr>
		<td>
			<br />
			<fieldset>
			<legend>Log In Form</legend>
			<form name="login_form" method="post" action="Log-In_dbase.php">
			<table border="0" align="center">
				<tr>
					<td class="reg-details">
						<span class="list">Username :</span>
					</td>
					<td>
						<input type="text" id="textbox1" name="username" class="textbox">
						<script>document.getElementById('textbox1').focus()</script>	
						</td>
				</tr>
				<tr>
					<td class="reg-details">
						<span class="list">Password :</span>
					</td>
					<td>
						<input type="password" name="password" class="textbox">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="submit" value="Sign In" class="button" title="Sign In Now">
					</td>
				</tr>
			</table>
			</form>
			</fieldset>
			<br />
		</td>
	</tr>
</table>
</center>

<br><br><br>
	<center>&copy 2013 by <b>DELIGHT BAKERY</b>.</center>
</body>
</html>
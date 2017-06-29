<?php
session_start();

if(isset($_SESSION['status']))
	$status = $_SESSION['status'];
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="themes/background.tab.css">
	<meta http-equiv="content-
	type"content="text/html;charset=utf-8" />

	<link rel="shortcut icon" href="themes/wallpaper/Logo.ico">
	<title>Delight Bakery</title>
	<style>

a.tab, a.tab href:link, a.tab:focus, a.tab:active
		{
		border-bottom: 2px;
		color: #A52A2A;
		font-family: Cooper Black;
		font-size: 30px;
		text-decoration: none;
		}

a.tab:hover
		{
		border-bottom: 3px;
		color: #000000;
		font-size: 35px;
		font-style: normal;
		font weight: normal;
		text-decoration: none;
		}
	</style>
</head>

<body>
<table border="0" height="320" align="center">
	<tr>
		<td rowspan="3">
			<p>
			<img src="themes/wallpaper/Logo-Bakery.png" align="left" width="320" height="320" title="Delight Bakery" >
			</p>
		</td>
		<td colspan="3" height="30" class="user-login">
			Welcome,
			<span class="username">
				<?php
					if(isset($_SESSION['username']))
						echo "".$_SESSION['username']."! [".$status."]<td width='150px' align='center'>
						<a href='custspace/user/profile.php'><img src='picture/CustomerSpace/user.png' class='logout_img' title='Profile'></a>
						<a href='custspace/Logout.php'><img src='picture/CustomerSpace/logout.png' class='logout_img' title='Logout'></a></td>";
					else
						echo ("User! [UNREGISTERED]<td align='center'>
								<a href='custspace/Register.php'><img src='picture/CustomerSpace/register.png' class='logout_img'  class='logout_img' title='Register' /></a>
								<a href='custspace/Log-In.php'><img src='picture/CustomerSpace/login.png' class='logout_img' title='Log In'/></a>
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
				<img src="themes/wallpaper/about.png">
			</center></p>
		</td>
	</tr>
	<tr style="text-align: center;" height="52">
		<td class="menu">
			<a href="index.php">
			<acronym title="Delight Bakery">
			HOME</acronym></a>
		</td>
		<td class="menu">
			<a href="AboutUs.php">
			<acronym title="About Us"> 
			ABOUT US</acronym></a>
		</td>
		<td class="menu">
			<a href="Menu.php">
			<acronym title="Menu">
			MENU</acronym></a>
		</td>
		<td class="menu">
			<a href="Gallery.php">
			<acronym title="Gallery"> 
			GALLERY</acronym></a>
		</td>
		<td class="menu">
			<a href="CustomerSpace.php">
			<acronym title="Customer Space">
			CUSTOMER SPACE</acronym></a>
		</td>
	</tr>
</table>

<br />
<br />
<br />
<center>
<table border="0" width="960px">
	<tr>
		<td align="center" height="50">
			<a href="aboutus/Staff.php" class="tab" target="frame_a" title="Staff">STAFF</a> &nbsp &nbsp &nbsp &nbsp &nbsp
			<a href="aboutus/Outlet.php" class="tab" target="frame_a" title="Outlet">OUTLET</a>
		</td>
	</tr>
	<tr>
		<td>
			<iframe src="aboutus/Staff.php" name="frame_a" width="1000" height="2100" frameborder="0"></iframe>
		</td>
	</tr>
</table>
</center>
<br><br><br>
	<center>&copy 2013 by <b>DELIGHT BAKERY</b>.</center>
</body>
</html>
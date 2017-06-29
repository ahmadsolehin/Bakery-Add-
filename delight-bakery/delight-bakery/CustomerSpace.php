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
#title
		{
		font-family: Copperplate Gothic Bold;
		font-size: 40px;
		text-align:center;
		}
	
#memberlogin
		{
		border:1px solid #000000;
		border-right: 3px solid #000000;
		border-radius:10px;
		background-image:url('themes/wallpaper/tab.png');
		background-size:100% 100%;
		color: #000000;
		font-family: algerian;
		font-size: 35px;
		text-align: center;
		}
	
.menu_list
		{
		color: #000000;
		font-family: impact;
		font-size: 25px;
		}
	
.menu_list:hover
		{
		color: #000000;
		font-family: impact;
		font-size: 32px;
		}
	
.side-menu-bar
		{
		height: 40px;
		background-color:#ffffff;
		border:1px solid #000000;
		border-right: 3px solid #000000;
		border-radius:20px;
		text-align:center;
		opacity:0.8;
		filter:alpha(opacity=80); /* For IE8 and earlier */
		}
	
.side-menu-bar:hover
		{
		background-image:url('themes/wallpaper/tab.png');
		background-size:100% 100%;
		opacity:0.6;
		filter:alpha(opacity=60); /* For IE8 and earlier */
		text-align:center;
		}
		
		.logout
		{
		font-size: 12px;
		font-family: Arial;
		text-align: center;
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
				<img src="themes/wallpaper/customer.png">
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
		<th width="240" height="50" id="memberlogin">
			DELIVERY
		</th>
		<td rowspan="5" width="720">
			<center>
			<iframe src="custspace/How-to-Order.php" name="frame_cs" width="740" height="1000" frameborder="0"></iframe>
			</center>
		</td>
	</tr>
	<tr>
		<td class="side-menu-bar" height="35" width="240">
			<a href="custspace/How-to-Order.php" target="frame_cs" class="menu_list">ORDER</a>
		</td>
	</tr>
	<tr>
		<td class="side-menu-bar" height="35" width="240">
			<a href="custspace/How-to-Cancel.php" target="frame_cs" class="menu_list">CANCEL ORDER</a>
		</td>
	</tr>
	<tr>
		<td class="side-menu-bar" height="35" width="240">
			<a href="custspace/Feedback.php" target="frame_cs" class="menu_list">FEEDBACK</a>
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
</table>
</center>

<br><br><br>
	<center>&copy 2013 by <b>DELIGHT BAKERY</b>.</center>
</body>
</html>
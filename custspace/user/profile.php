<?php
session_start();

if(isset($_SESSION['username'])) 
	{
	$username = $_SESSION['username'];
	}
	else
		header('location:../Log-In.php');
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-
		type"content="text/html;charset=utf-8" />
	
	<link rel="shortcut icon" href="../../themes/wallpaper/Logo.ico">
	<title>Delight Bakery</title>
	<link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
	
	<style>
	body
	{
	background-image: url(../../themes/wallpaper/background.png);
	background-attachment: fixed;
	background-position: center;
	}
	
	#top-menu
	{
	border-top-right-radius: 45px;
	border-top-left-radius: 45px;
	background-color: #FFA500;
	color: #FFFFFF;
	font-family: Verdana;
	font-weight: bold;
	height: 40px;
	text-align: center;
	width: 900px;
	}
	
	.icon_img
	{
	width: 40px;
	height: 40px;
	}
	
	#user
	{
	background-color: #FFA500;
	border: 0px solid #000000;
	width: 900px;
	}
	
	#logo
	{
	width: 100%;
	height: 100%;
	}
	
	#user_pict
	{
	color: #FFFFFF;
	background-color: #FFA500;
	font-family: arial;
	font-size: 20px;
	text-align: center;
	width: 180px;
	height: 200px;
	}
	
	#status
	{
	color: #C58917;
	font-family: Colonna MT;
	font-size: 30px;
	font-weight: bold;
	text-align: center;
	}
	
	#tdstatus
	{
	background-color: #FFF380;
	}
	
	#user_name
	{
	background-color: #FFA500;
	color: #FFFFFF;
	font-family: Arial Black;
	font-size: 25px;
	padding: 10px;
	margin: 20px;
	}
	
	#tdusername
	{
	background-color: #FFF380;
	}
	
	.yellow
	{
	font-size: 20px;
	background: #D9CE1C;
	border: #D9CE1C 1px solid;
	color: #e30606;
	}

	.yellow:hover,.yellow:focus 
	{
	background-color: #eee117;
	color: #44e329;
	}
	
	#menu-details
	{
	width: 900px;
	background-color: #FFF8C6;
	height: 70px;
	text-align: center;
	font-weight: bold;
	font-family: impact;
	font-size: 25px;
	color: #FFFFFF;
	}
		
	#menu-details a
	{
	color: #C68E17;
	text-decoration:  none;
	}
	
	#menu-details a:hover
	{
	color: #EDDA74;
	}
	
	#text-right
	{
	font-family: Ar Blanca;
	font-size: 22px;
	}
	
	</style>
</head>
<body>

<center>
<table border="0" id="top-menu">
	<tr>
		<td class="button">
			<a href="../../index.php" class="yellow" title="HOME" ><img src="../../picture/CustomerSpace/home.png" class="icon_img" /> HOME</a>
		</td>
		<td class="button">
			<a href="changepassword.php" class="yellow" title="Change Password" target="frame_below"><img src="../../picture/CustomerSpace/setting.png" class="icon_img" /> SETTING</a>
		</td>
		<td class="button">
			<a href="../../custspace/logout.php" class="yellow"  title="Log Out" ><img src="../../picture/CustomerSpace/logout.png" class="icon_img" /> LOG OUT</a>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #000000;">
			<hr />
		</td>
	</tr>
</table>

<table id="user" border="0">
	<tr>
		<td id="user_pict" rowspan="2">
			<img src="../../themes/wallpaper/Logo-Bakery.png" id="logo"/>
		</td>
		<td id="tdstatus">
			<p id="status">[ 
			<?php
				if(isset($_SESSION['status']))
					echo $status = $_SESSION['status'];
			?>
			]</p>
		</td>
		<td id="user_pict" rowspan="2">
			<span id="text-right">
			Full of Delicious with Delight Bakery
			<br />
			We hope you will satisfied with our services
			</span>
		</td>
	</tr>
	<tr>
		<td id="tdusername">
			<p id="user_name">
			<?php
				if(isset($_SESSION['username']))
				echo $_SESSION['username'];
			?></p>
		</td>
	</tr>
</table>
<?php
if($_SESSION['status']=='Member') 
	{
?>
	<table border='0' id='menu-details'>
		<tr>
			<td>
				<a href="details.php" target="frame_below">My Profile</a>
			</td>
			<td>
				<a href="product-view.php" target="frame_below">Product List</a>
			</td>
			<td>
				<a href="shopping-cart.php" target="frame_below">Shopping Cart</a>
			</td>
			<td>
				<a href="my-order.php" target="frame_below">My Order</a>
			</td>
		</tr>
	</table>

	<?php
		}
		else{
	?>

	<table border='0' id='menu-details'>
		<tr>
			<td>
				<a href="details.php" target="frame_below">Admin Profile</a>
			</td>
			<td>
				<a href="menulist.php" target="frame_below">Menu List</a>
			</td>
			<td>
				<a href="view-saved_order.php" target="frame_below">Order Status</a>
			</td>
			<td>
				<a href="member-list.php" target="frame_below">Member List</a>
			</td>
			<td>
				<a href="feedback-view.php" target="frame_below">Feedback</a>
			</td>
		</tr>
	</table>
	<?php
	}
	?>

<iframe src="details.php" name="frame_below" width="1000px" height="1000" frameborder="0"></iframe>
</center>

<br />
<br />
<br />
<center>&copy 2013 by <b>DELIGHT BAKERY</b>.</center>
</body>
</html>
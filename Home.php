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
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />

	<link rel="shortcut icon" href="themes/wallpaper/Logo.ico">
	<title>Delight Bakery</title>

	<link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
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
								<a  href='custspace/Log-In.php'><img src='picture/CustomerSpace/login.png' class='logout_img' title='Log In'/></a>
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
				<img src="themes/wallpaper/home.png">
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
<p>
<div id="sliderFrame">
    <div id="slider">
            <img src="picture/Homepage/chocolate.cookies.jpg" alt="Chocolate Cookies" />
            <img src="picture/Homepage/cheese.bread.rolls.jpg" alt="Cheese Bread Rolls" />
            <img src="picture/Homepage/spaghetti_bolognese.jpg" alt="Spaghetti Bolognese"/>
            <img src="picture/Homepage/Pavlova.jpg" alt="Pavlova"/>
	</div>
<!--thumbnails-->
    <div id="thumbs">
		<div class="thumb">
			<div class="frame"><img src="picture/Homepage/chocolate.cookies.jpg" /></div>
            <div class="thumb-content"><p>Chocolate Cookies</p>Our Best Selling Cookies</div>
            <div style="clear:both;"></div>
		</div>
		<div class="thumb">
            <div class="frame"><img src="picture/Homepage/cheese.bread.rolls.jpg" /></div>
			<div class="thumb-content"><p>Cheese Bread Rolls</p>Full of Cream Cheese</div>
			<div style="clear:both;"></div>
		</div>
		<div class="thumb">
			<div class="frame"><img src="picture/Homepage/spaghetti_bolognese.jpg" /></div>
			<div class="thumb-content"><p>Spaghetti Bolognese</p>Delicious & Fulfill Your Satisfaction</div>
			<div style="clear:both;"></div>
		</div>
		<div class="thumb">
			<div class="frame"><img src="picture/Homepage/Pavlova.jpg" /></div>
			<div class="thumb-content"><p>Pavlova</p>Tasty and Beautiful Design</div>
			<div style="clear:both;"></div>
		</div>
	</div>

<!--clear above float:left elements-->
	<div style="clear:both;height:0;"></div>
</div>
<br>
<center>
<h1>
	<font face="Adobe Gothic Std B">WELCOME TO DELIGHT BAKERY</font>
</h1>
<table width="960" border="0">
	<tr>
		<td width="360">
			<center>
			<h2>
				<font color="#E8A317"><u>OPENING HOURS</u></font>
			</h2>
			<b>
				<p>Monday - Friday: 10.00am - 10.00pm</p>
				<p>Saturday: 10.00am - 11.00pm</p>
				<p>Sunday: Holiday</p>
			</b>
			</center>
		</td>
		<td>
			<p align="justify"><b>Assalamualaikum,</b>
			<br><br> 
			&nbsp &nbsp &nbsp Delight Bakery was established on 2nd of April In 2008. The location for the establishment of Delight Bakery was in Kuala Lumpur. The name that has been given to this bakery is "Delight Bakery". It is because our goal for the establishment of this bakery is we want to bring enjoyable moment to our customer by serving them with the delicious food in our bakery.<br><br>

			&nbsp &nbsp &nbsp After two years of operation, we have found that our selling was increased in demand, so we took this opportunity to expand our outlet at several locations. In year 2010 we have opened our new outlet in Selangor and Malacca. After that, in year 2012 we have opened 2 more outlet, which are in Penang and also Terengganu. In Delight Bakery, we will try our best to serve you tasty and enjoyable food.</p>

			<br>
			<p align="right"><font face="AR BLANCA" color="#C85A17">Full of Delicious,</font><br>
			<b>Admins Delight Bakery</b></align>
		</td>
	</tr>
</table>
</font>
</center>

<br />
<br />
<br />
<center>&copy 2013 by <b>DELIGHT BAKERY</b></center>
</body>
</html>
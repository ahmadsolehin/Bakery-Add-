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
		text-align:center;
		font-family: Copperplate Gothic Bold;
		font-size: 40px;
		}

.limit
		{
		border:2px solid #000000;
		border-radius:25px;
		text-align: center;
		font-family: algerian;
		font-size: 35px;
		background: #D4A017;
		background-size:100% 100%;
		background-image: url('themes/wallpaper/tab.png');
		color: #000000;
		}

.menu_picture
		{
		text-align:center;
		}

.menu_name
		{
		text-align: center;
		font-family: Cooper Black;
		font-size:18px;
		}

.menu_price
		{
		text-align: center;
		font-size: 25px;
		color:#800517;
		font-family:Copperplate Gothic Bold;
		}

.gambar
		{
		border:0px solid #000000;
		border-radius:3px;
		width:100%;
		height:210px;
		}
		
//img
		{
		opacity:0.9;
		filter:alpha(opacity=90); /* For IE8 and earlier */
		}
		
gambar:hover
		{
		opacity:1.0;
		filter:alpha(opacity=100); /* For IE8 and earlier */
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
				<img src="themes/wallpaper/menu.png">
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
		<td colspan="6" class="limit">OUR SPECIALITY</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/1.our.speciality/1.blueberry.cheese.tart.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/1.our.speciality/2.egg.tart.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/1.our.speciality/3.cheese,delight.bread.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Blueberry Cheese Tart</td>
		<td class="menu_price" width="100">RM2.80 (1pcs)</td>
		<td class="menu_name" width="220">Egg Tart</td>
		<td class="menu_price" width="100">RM1.50 (1pcs)</td>
		<td class="menu_name" width="220">Cheese Delight Bread</td>
		<td class="menu_price" width="100">RM3.00 (1pcs)</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/1.our.speciality/4.mini.pizza.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/1.our.speciality/5.chocolate.bread.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/1.our.speciality/6.mexican.bread.JPG" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Mini Pizza</td>
		<td class="menu_price" width="100">RM2.70 (1pcs)</td>
		<td class="menu_name" width="220">Chocolate Bread</td>
		<td class="menu_price" width="100">RM2.20</td>
		<td class="menu_name" width="220">Mexican Bread</td>
		<td class="menu_price" width="100">RM1.60 (1pcs)</td>
	</tr>
	<tr>
		<td colspan="6" class="limit">OUR SPECIALITY (CAKE)</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/2.our.speciality.(CAKE)/1.mango.delight.cake.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/2.our.speciality.(CAKE)/2.tiramisu.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/2.our.speciality.(CAKE)/3.new.york.cheese.cake.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Mango Delight Cake</td>
		<td class="menu_price" width="100">RM45.00</td>
		<td class="menu_name" width="220">Tiramisu</td>
		<td class="menu_price" width="100">RM60.00</td>
		<td class="menu_name" width="220">New York Cheese Cake</td>
		<td class="menu_price" width="100">RM55.00</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/2.our.speciality.(CAKE)/4.mocha.marble.cheesecake.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/2.our.speciality.(CAKE)/5.chocolate.banana.cake.JPG" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/2.our.speciality.(CAKE)/6.carrot.cake.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Mocha Marble Cheese Cake</td>
		<td class="menu_price" width="100">RM45.00</td>
		<td class="menu_name" width="220">Chocolate Banana Cake</td>
		<td class="menu_price" width="100">RM60.00</td>
		<td class="menu_name" width="220">Carrot Cake</td>
		<td class="menu_price" width="100">RM42.00</td>
	</tr>
	<tr>
		<td colspan="6" class="limit">MEAL OF THE DAY</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/3.meal.of.the.day/1.spaghetti.bolognese.with.chicken.meatball.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/3.meal.of.the.day/2.spaghetti.bolognese.with.meatballs.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/3.meal.of.the.day/3.spaghetti.bolognese.with.garlic.bread.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Spaghetti Bolognese (Chicken Meatball)</td>
		<td class="menu_price" width="100">RM7.80</td>
		<td class="menu_name" width="220">Spaghetti Bolognese (Meatball)</td>
		<td class="menu_price" width="100">RM7.50</td>
		<td class="menu_name" width="220">Spaghetti Bolognese (Garlic Bread)</td>
		<td class="menu_price" width="100">RM7.30</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/3.meal.of.the.day/4.spaghetti-carbonara2.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/3.meal.of.the.day/5.spaghetti.carbonara.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/3.meal.of.the.day/6.mushroom.soup.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Spaghetti Carbonara</td>
		<td class="menu_price" width="100">RM7.50</td>
		<td class="menu_name" width="220">Spaghetti Carbonara (Fetucini)</td>
		<td class="menu_price" width="100">RM7.70</td>
		<td class="menu_name" width="220">Mushroom Soup</td>
		<td class="menu_price" width="100">RM3.00</td>
	</tr>
	<tr>
		<td colspan="6" class="limit">OTHER MENUS</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/4.other.menu/1.chicken.pie.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/4.other.menu/2.chicken.puff.JPG" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/4.other.menu/3.cream.puff.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Chicken Pie</td>
		<td class="menu_price" width="100">RM2.80 (1pcs)</td>
		<td class="menu_name" width="220">Chicken Puff</td>
		<td class="menu_price" width="100">RM2.50 (1pcs)</td>
		<td class="menu_name" width="220">Cream Puff</td>
		<td class="menu_price" width="100">RM2.00 (1pcs)</td>
	</tr>
	<tr height="200">
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/4.other.menu/4.bread.and.butter.pudding.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/4.other.menu/5.butter.cookies.jpg" class="gambar">
		</td>
		<td colspan="2" class="menu_picture" width="320">
			<img src="picture/Menu/4.other.menu/6.chocolate.cookies.jpg" class="gambar">
		</td>
	</tr>
	<tr height="80px">
		<td class="menu_name" width="220">Bread & Butter Pudding</td>
		<td class="menu_price" width="100">RM5.00</td>
		<td class="menu_name" width="220">Butter Cookies</td>
		<td class="menu_price" width="100">RM8.00</td>
		<td class="menu_name" width="220">Chocolate Cookies</td>
		<td class="menu_price" width="100">RM9.00</td>
	</tr>
</table>
</center>
<center>

<br><br>
<table border="0" width="450">
	<tr>
		<td>
			<center>
			<p style="font-family:AR BLANCA; font-size: 25px; list-style-position:inside;"><b>At Delight Bakery:</b></p></center>
			<ul type="square" style= "font-family:Arial Rounded MT Bold; font-size:21px; text-align:left;">
				<li>We served many more delicious menus.</li>
				<br>
				<li>We provide delivery order.</li>
				<br>
				<li>We allow our customer to design their own decoration for cake (Birthday Cake, Wedding Cake and for other occation.</li>
			</ul>
		</td>
	</tr>
</table>
</center>

<br><br><br>
	<center>&copy 2013 by <b>DELIGHT BAKERY</b>.</center>
</body>
</html>
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
.jadual
		{
		width: 960px;
		}

#title
		{
		text-align: center;
		font-family: Copperplate Gothic Bold;
		font-size: 40px;
		}

.cupcake_name
		{
		font-family: MV Boli;
		font-size: 35px;
		text-align: center;
		text-shadow: 6px 5px 7px #D4A017;
		height: 95px;
		width: 460px;
		}

.cupcake_picture
		{
		text-align: center;
		width: 500px;
		height: 400px;
		}

.cake
		{
		text-align: center;
		height: 75px;
		width: 245px;
		}

.cake_beside
		{
		border-radius:10px;
		border: 1px solid;
		height: 56px;
		width: 88px;
		}

.cake_beside:hover
		{
		border: 3px dotted;
		height: 63px;
		width: 99px;
		}

.cake_picture
		{
		text-align: center;
		width: 440px;
		height: 300px;
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

.video
		{
		text-align: center;
		}

#animation
		{
		width:100%;
		height:100%;
		background:url("picture/Gallery/1.Auto.Slide/1.delight.cupcake.jpg");
		border:0px;
		border-top-right-radius:70px; 
		border-bottom-right-radius:30px; 
		border-top-left-radius:30px; 
		border-bottom-left-radius:70px; 
		position:relative;
		animation:slide 20s infinite;
		-webkit-animation:slide 20s infinite; /* Safari and Chrome */
		}
		
@keyframes slide
		{
		25% {background:url("picture/Gallery/1.Auto.Slide/2.kids.design.cupcake.jpg");}
		50% {background:url("picture/Gallery/1.Auto.Slide/3.tropicana.cupcake.jpg");}
		75% {background:url("picture/Gallery/1.Auto.Slide/4.strawberry.chocolate.cupcake.jpg");}
		100% {background:url("picture/Gallery/1.Auto.Slide/1.delight.cupcake.jpg");}
		}

@-webkit-keyframes slide /* Safari and Chrome */
		{
		25% {background:url("picture/Gallery/1.Auto.Slide/2.kids.design.cupcake.jpg");}
		50% {background:url("picture/Gallery/1.Auto.Slide/3.tropicana.cupcake.jpg");}
		75% {background:url("picture/Gallery/1.Auto.Slide/4.strawberry.chocolate.cupcake.jpg");}
		100% {background:url("picture/Gallery/1.Auto.Slide/1.delight.cupcake.jpg");}
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
				<img src="themes/wallpaper/gallery.png">
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
<table border="0" class="jadual">
	<tr>
		<td class="cupcake_name"><b>Delight Cupcake</b></td>
		<td rowspan="4" class="cupcake_picture"><div id="animation"></td>
	</tr>
	<tr >
		<td class="cupcake_name"><b>Kids Design Cupcake</b></td>
	</tr>
	<tr>
		<td class="cupcake_name"><b>Tropicana Cupcake</b></td>
	</tr>
	<tr>
		<td class="cupcake_name"><b>Strawberry Chocolate Cupcake</b></td>
	</tr>
	<tr>
		<td colspan="3" class="limit">CUPCAKE DECORATION</td>
	</tr>
</table>

<br />
<table class="jadual">
	<tr>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/1.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/1.jpg" class="cake_beside"/></a>
		</td>
		<td rowspan="4" class="cake_picture">
			<iframe src="picture/Gallery/2.Manual.Slide/1.jpg" name="frame_picture" frameborder="0" style="width:440px; height:100%; text-align:center; border-radius:15px;">
			</iframe>
		</td>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/5.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/5.jpg" class="cake_beside"/></a>
		</td>
	</tr>
	<tr>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/2.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/2.jpg" class="cake_beside"/></a>
		</td>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/6.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/6.jpg" class="cake_beside"/></a>
		</td>
	</tr>
	<tr>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/3.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/3.jpg" class="cake_beside"/></a>
		</td>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/7.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/7.jpg" class="cake_beside"/></a>
		</td>
	</tr>
	<tr>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/4.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/4.jpg" class="cake_beside"/></a>
		</td>
		<td class="cake">
			<a href="picture/Gallery/2.Manual.Slide/8.jpg" target="frame_picture"><img src="picture/Gallery/2.Manual.Slide/8.jpg" class="cake_beside"/></a>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="limit">CAKE DECORATION</td>
	</tr>
</table>

<br />
<table class="jadual">
	<tr>
		<td class="video">
			<video width="450" height="330" controls>
				<source src="video/1.webm" type="video/webm">
				<source src="video/1.mp4" type="video/mp4">
			</video>
		</td>
		<td class="video">
			<video width="450" height="330" controls>
				<source src="video/2.webm" type="video/webm">
				<source src="video/2.mp4" type="video/mp4">
			</video>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="limit">VIDEOS</td>
	</tr>
</table>
</center>

<br><br><br>
	<center>&copy 2013 by <b>DELIGHT BAKERY</b>.</center>
</body>
</html>
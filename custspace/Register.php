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
				<img src="../themes/wallpaper/register.png">
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
		<th>Let's join this site</th>
	</tr>
	<tr>
		<td>
			<br />
			
			<fieldset>
			<legend>Registration Form</legend>
			<form name="register_form" action="Register_dbase.php" method="POST">
			<table border="0" align="center">
				<tr>
					<td class="reg-details">
						<span class="list">Full Name :</span>
					</td>
					<td>
						<input type="text" id="textbox1" name="fullname" class="textbox">
						<script>document.getElementById('textbox1').focus()</script>	
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						<span class="list">Username :</span>
					</td>
					<td>
						<input type="text" name="username" class="textbox">
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						<span class="list">Email :</span>
					</td>
					<td>
						<input type="text" name="email" class="textbox">
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
					<td class="reg-details">
						<span class="list">Re-enter Password :</span>
					</td>
					<td>
						<input type="password" name="repeatpassword" class="textbox">
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						<span class="list">Phone Number :</span>
					</td>
					<td>
						<input type="text" name="telephone" class="textbox">
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						<span class="list">Gender :</span>
					</td>
					<td>
						<input type="radio" id="laki" name="gender" value="Male" checked>
						<label for="laki">Male</label>
						<input type="radio" id="puan" name="gender" value="Female">
						<label for="puan">Female</label>
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						<span class="list">Current State :</span>
					</td>
					<td>				
					<select name="currentstate" class="textbox">
						<option value="Johor">Johor</option>
						<option value="Kedah">Kedah</option>
						<option value="Kelantan">Kelantan</option>
						<option value="Kuala Lumpur">Kuala Lumpur</option>
						<option value="Malacca">Malacca</option>
						<option value="Negeri Sembilan">Negeri Sembilan</option>
						<option value="Pahang">Pahang</option>
						<option value="Penang">Penang</option>
						<option value="Perak">Perak</option>
						<option value="Perlis">Perlis</option>
						<option value="Sabah">Sabah</option>
						<option value="Sarawak">Sarawak</option>
						<option value="Selangor">Selangor</option>
						<option value="Terengganu">Terengganu</option>
					</select>

  					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Register" class="button" >
						<input type="reset" name="reset" value="Reset" class="button" title="Click to clear all field">
					</td>
				</tr>
			</table></form>
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
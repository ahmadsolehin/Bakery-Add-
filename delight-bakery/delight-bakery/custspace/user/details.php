<?php
session_start();
include ('../con_dbase.php');
if(isset($_SESSION['username'])) 
	{
		$username = $_SESSION['username'];
		$query = mysql_query("SELECT * FROM customer WHERE username ='$username'");
		$numrows = mysql_num_rows($query);
	
		if($numrows!=0)
		{
			//code to login
			while($row = mysql_fetch_assoc($query))
			{
				$id = $row['id'];
				$fullname = $row['fullname'];
				$email = $row['email'];
				$password = $row['password'];
				$telephone = $row['telephone'];
				$gender = $row['gender'];
				$currentstate = $row['currentstate'];
				$status = $row['status'];
				$reg_date = $row['reg_date'];
				$last_login = $row['last_login'];
			}
		}
	}
	else
		die("<center><h1>Failed!</h1><br />No data received.</center>");	
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="themes/background.tab.css">
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />

	<style>
	#biodata
	{
	width: 850px;
	text-align: center;
	}
	
	#title
	{
	font-family: Times New Roman;
	font-size: 45px;
	}
	
	.labels
	{
	font-family: Georgia;
	font-size: 25px;
	font-weight: bold;
	}
	
	.tdlabels
	{
	text-align: right;
	padding-right: 15px;
	}
	
	.tduser_details
	{
	text-align: left;
	padding-left: 10px;
	font-family: arial;
	font-size: 22px;
	}
	
	.button
{
	color: #000000;
	background-color: #FDD017;
	font-family: Times New Roman;
	font-size: 22px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 30px;
	border-top-left-radius: 30px;
	border-bottom-left-radius: 0px;
	font-weight: bold;
	width: 200px;
	height: 40px;
}
	</style>
	
</head>
<body>
<table border="0" id="biodata">
	<tr>
		<td colspan="2">
			<span id="title">My Profile</span>
			<hr>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Full Name :</span>
		</td>
		<td class="tduser_details">
			<?php echo $fullname; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Username :</span>
		</td>
		<td class="tduser_details">
			<?php echo $username; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Email :</span>
		</td>
		<td class="tduser_details">
			<?php echo $email; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Telephone :</span>
		</td>
		<td class="tduser_details">
			<?php echo $telephone; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Gender :</span>
		</td>
		<td class="tduser_details">
			<?php echo $gender; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Current State:</span>
		</td>
		<td class="tduser_details">
			<?php echo $currentstate; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Status :</span>
		</td>
		<td class="tduser_details">
			<?php echo $status; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Register Date :</span>
		</td>
		<td class="tduser_details">
			<?php echo $reg_date; ?><br>
		</td>
	</tr>
	<tr>
		<td class="tdlabels">
			<span class="labels">Last Login :</span>
		</td>
		<td class="tduser_details">
			<?php echo $last_login; ?><br>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<hr>
			<form method="POST" action="changepassword.php">
				<input type="submit" class="button" value="Change Password">
			</form>
		</td>
	<//tr>
</table>

</body>
</html>
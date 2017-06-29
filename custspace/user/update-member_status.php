<?php
	session_start();
	include("../con_dbase.php");
	$id=$_GET['id'];
	$_SESSION['upd_id']=$id;
	
	$query = mysql_query("SELECT * FROM customer WHERE id ='$id'");
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		//code to login
		while($row = mysql_fetch_assoc($query))
		{
			$fullname = $row['fullname'];
			$username = $row['username'];
			$status = $row['status'];
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	#upd_table
	{
		width: 400px;
	}
	
	#upd_icon
	{
	width: 40px;
	height: 40px;
	}
	
	.label
	{
	text-align: right;
	font-weight: bold;
	font-size: 25px;
	}
	
	table
	{
	text-align: center;
	}
	
	.textbox
	{
		border:1px solid #000000;
		border-right: 3px solid #000000;
		border-top-right-radius:80px;
		border-bottom-right-radius:80px;
		border-top-left-radius:30px;
		border-bottom-left-radius:30px;
		font-family:Calibri;
		font-size:18px;
		margin: 5px;
		padding: 2px;
	}
	
	.input
	{
	text-align: left;
	padding-left: 10px;
	font-size: 18px;
	}
</style>
</head>
<body>
<center>
<h1 align="center">Update User Status</h1>
<br />
<form method="POST" action="update-member_status_dbase.php">
<table id="upd_table">
	<tr>
		<td class="label">
			Username : 
		</td>
		<td class="input">
			<?php echo $username; ?>
		</td>
	</tr>
	<tr>
		<td class="label">
			Full Name : 
		</td>
		<td class="input">
			<?php echo $fullname; ?>
		</td>
	</tr>
	<tr>
		<td class="label">
			Current Status : 
		</td>
		<td class="input">
			<?php echo $status; ?>
		</td>
	</tr>
	<tr>
		<td class="label">
			New Status : 
		</td>
		<td class="input">
			<select class="textbox" id="new_status" name="new_status">
				<option></option>
				<option>Member</option>
				<option>Admin</option>
				<option>Blocked</option>
			</select>
		</td>
	</tr>
	</table>
	<br />
	<table>
	<tr>
		<td colspan="2">
			<input type="image" src="../../picture/CustomerSpace/update.png" id="upd_icon" title="Update Now">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>
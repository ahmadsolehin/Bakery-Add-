<?php
	session_start();
	include("../con_dbase.php");
	$id=$_GET['id'];
	$_SESSION['edit_id']=$id;
	
	$query = mysql_query("SELECT * FROM productlist WHERE product_id='$id'");
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		//code to login
		while($row = mysql_fetch_assoc($query))
		{
			$pname = $row['product_name'];
			$pprice = $row['product_price'];
			$ppicture = $row['product_picture'];
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	#edit_table
	{
	}
	
	#edit_icon
	{
	width: 50px;
	height: 50px;
	}
	
	.label
	{
	text-align: right;
	font-size: 23px;
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
		font-size: 20px;
		margin: 5px;
		padding: 2px;
	}
	
	.input
	{
	text-align: left;
	padding-left: 10px;
	font-size: 18px;
	}
	
	#image
	{
	border: 1px solid #000000;
	border-radius: 10px;
	padding: 5px;
	width: 160px;
	height: 100px;
	}
	
	#images
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
	width: 300px;
	}
	
	#input-price
	{
	width: 80px;
	}
	
</style>
</head>
<body>
<center>
<h1 align="center">Edit Menu Details</h1>
<br />
<form method="POST" action="edit-menulist_dbase.php">
<table id="edit_table">
	<tr>
		<td class="input" colspan="2" id="images">
			<img src="<?php echo $ppicture ?>" id="image">
		</td>
	</tr>
	<tr>
		<td class="label">
			Product Name : 
		</td>
		<td class="input">
			<input type="text" class="textbox" name="name" value="<?php echo $pname; ?>">
		</td>
	</tr>
	<tr>
		<td class="label">
			Product Price : 
		</td>
		<td class="input">
			RM <input type="text" id="input-price" class="textbox" name="price" value="<?php echo $pprice; ?>">
		</td>
	</tr>
	</table>
	<br />
	<table>
	<tr>
		<td colspan="2">
			<input type="image" src="../../picture/CustomerSpace/save.png" id="edit_icon" title="Update Now">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>
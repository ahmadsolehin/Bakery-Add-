<?php

session_start();
include('../con_dbase.php');

?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	
	<style>
	#add-table
	{
	font-family: Arial;
	font-size: 20px;
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
	}
	
	#pr_name, #pr_photo
	{
	width:90%;
	}
	
	#pr_price
	{
	width: 60px;
	}
	
	.reg-details
	{
		text-align:right;
		font-weight:bold;
		font-family: Georgia;
		font-size: 25px;
	}
	
	.button
	{
		color:#000000;
		background-color:#FDD017;
		font-family:Times New Roman;
		font-size:25px;
		border-top-right-radius:0px;
		border-bottom-right-radius:18px;
		border-top-left-radius:18px;
		border-bottom-left-radius:0px;
		font-weight:bold;
	}
	
	.button:hover
	{
		background-color: #FDD017;
		font-size: 27px;
		font-weight: bold;
	}

	</style>
</head>

<body>  
<center>
<h1>Update Menu</h1>
<br />
<form enctype="multipart/form-data" action="update-menulist_dbase.php" method="POST"> 
<table id="add-table">
	<tr>
		<td>
			Product Name:
		</td>
		<td class="input">
			<input type="text" name="name" class="textbox1"  id="pr_name"><br> 
			<script>document.getElementById('textbox1').focus()</script>	
		</td>
	</tr>
	<tr>
		<td>
			Product Price:
		</td>
		<td class="input">
			RM <input type="text" name = "price" class="textbox" id="pr_price"><br> 
		</td>
	</tr>
	<tr>
		<td>
			Picture:
		</td>
		<td  class="input">
			<input type="file" name="photo" class="textbox" id="pr_photo"><br> 
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" value="Add to Menu List" class="button"> 
		</td>
	</tr>
</table>
 </form>

			
</center>
</body>
</html>
<?php
	session_start();
	include("../con_dbase.php");
	include("function.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#menu-form
{
text-align: center;
width: 850px;
}

#list_name
{
font-family: Verdana;
font-size: 15px;
}

#list_price
{
font-family: Arial;
font-size: 15px;
color: red;
}

#title
{
color: #FFFFFF;
font-family: Arial Black;
font-weight: bold;
background-color: #0000A0;
border: 2px solid #000000;
border-top-right-radius: 35px;
border-top-left-radius: 35px;
}

.input-section, .label
{
background-color: #FFFFFF;
font-weight: bold;
}

.label
{
font-weight: bold;
width: 60px;
}

#button
{
	color:#000000;
	background-color: #FDD017;
	font-family: Times New Roman;
	font-size: 25px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 30px;
	border-top-left-radius: 30px;
	border-bottom-left-radius: 0px;
	font-weight: bold;
}

#button:hover
{
	background-color: #FDD017;
	font-size: 27px;
	font-weight: bold;
}

#del_link
{
	color:#000000;
	background-color: #FDD017;
	font-family: Times New Roman;
	font-size: 24px;
	font-weight: bold;
	padding-left: 5px;
	padding-right: 5px;
	margin: 10px;
	text-decoration: none;
}

#del_link:hover
{
	border: 1px dashed red;
	color: red;
	background-color: transparent;
	font-family: Times New Roman;
	font-size: 24px;
	font-weight: bold;
	padding-left: 5px;
	padding-right: 5px;
	margin: 10px;
	text-decoration: none;
}

#del_icon
{
border: 1px solid #000000;
border-radius: 10px;
padding: 5px;
width: 80px;
height: 50px;
}

#del_space
{
width: 550px;
text-align: left;
}

#right_icon
{
width: 30px;
height: 30px;
}

#edit a
{
font-weight: bold;
text-decoration: none;
}

</style>
</head>


<body>
<div align="center">
	<h1 align="center">Menu List</h1>
		<input type="button" value="Add New Menu" onclick="window.location='update-menulist.php'" id="button"/>
<br />
<br />
		<?php
			$result=mysql_query("SELECT * FROM productlist") or die("SELECT * FROM productlist"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>

	<table cellpadding="2px" id="menu-form">
		<tr>
			<td colspan="3"  id="title">
				PRODUCT DETAILS
			</td>
			<td rowspan="3" id="del_space">
				<a href="delete-menulist.php?id=<?php echo $row['product_id'] ; ?>" id="del_link"/>Delete <img src="<?php echo $row['product_picture'] ?>" id="del_icon"> <?php  echo $row['product_name'] ?> </a> 
			</td>
		</tr>
		<tr>
			<td class="label">
				Name: 
			</td>
			<td class="input-section">
				<span id="list_name"> <?php echo $row['product_name']?></span>
			</td>
			<td rowspan="2" id="edit">
					<a href="edit-menulist.php?id=<?php echo $row['product_id'] ; ?>" id="right_link"/>
						<img src="../../picture/CustomerSpace/edit.png"  id="right_icon" title="Edit">
						<br /> EDIT
					</a> 
			</td>
		</tr>
		<tr>
			<td class="label">
				Price: 
			</td>
			<td class="input-section">
				<span id="list_price">RM <?php echo $row['product_price']?></span>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<hr size="1" />
			</td>
		</tr>
    </table>
	       <?php } ?>
	</div>
</body>
</html>

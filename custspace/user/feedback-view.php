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
border: 1px solid #000000;
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
width: 80px;
}

#footer
{
color: #FFFFFF;
font-family: Arial Black;
font-weight: bold;
background-color: #0000A0;
border: 1px solid #000000;
border-bottom-right-radius: 35px;
border-bottom-left-radius: 35px;
}

td
{
border: 1px solid #ADD8E6;
}

</style>
</head>


<body>
<div align="center">
	<h1 align="center">Feedback</h1>
<br />
<br />
		<?php
			$result=mysql_query("SELECT * FROM feedback") or die("SELECT * FROM feedback"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>

	<table border="0" cellpadding="2px" id="menu-form">
		<tr>
			<td colspan="2"  id="title">
				<?php echo $row['feed_fullname']; ?>
			</td>
		</tr>
		<tr>
			<td class="label">
				Email
			</td>
			<td class="input-section">
				<span id="list_name"><?php echo $row['feed_email']?></span>
			</td>
		</tr>
		<tr>
			<td class="label">
				Telephone
			</td>
			<td class="input-section">
				<span id="list_price"><?php echo $row['feed_telephone']?></span>
			</td>
		</tr>
		<tr>
			<td class="label">
				Address
			</td>
			<td class="input-section">
				<span id="list_price"><?php echo $row['feed_address']?></span>
			</td>
		</tr>
		<tr>
			<td class="label">
				Comment
			</td>
			<td class="input-section">
				<span id="list_price"><?php echo $row['feed_comment']?></span>
			</td>
		</tr>
		<tr>
			<td colspan="3" id="footer">
				~THE END~
			</td>
		</tr>
    </table>
	<br />
	       <?php } ?>
	</div>
</body>
</html>

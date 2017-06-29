<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<style>
th
		{
		text-align: center;
		font-family: Copperplate Gothic Bold;
		font-size: 30px;
		}
	
td
		{
		font-family:times new roman;
		font-size:20px;
		}
		
.reg-details
		{
		text-align:right;
		font-weight:bold;
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
		
fieldset
		{
		font-family:arial;
		font-size:15px;
		border-radius:15px;
		}
		
.button
		{
		color:#000000;
		background-color:#FDD017;
		font-family:Times New Roman;
		font-size:20px;
		border-top-right-radius:0px;
		border-bottom-right-radius:18px;
		border-top-left-radius:18px;
		border-bottom-left-radius:0px;
		font-weight:bold;
		}
		
textarea
		{
		resize: none;
		}
	</style>
</head>
<body>

<center>
<table border="0" width="690">
	<tr>
		<th>What you think about this WEBSITE</th>
	</tr>
	<tr>
		<td>
			<br />
			<fieldset>
			<legend>Feedback Form</legend>
			<form action="Feedback_dbase.php" method="POST">
			<table border="0" align="center">
				<tr>
					<td class="reg-details">
						Full Name :
					</td>
					<td>
						<input type="text" name="fullname" class="textbox">
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						Email Address :
					</td>
					<td>
						<input type="text" name="email" class="textbox">
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						Telephone :
					</td>
					<td>
						<input type="text" name="telephone" class="textbox">
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						Address :
					</td>
					<td>
						<textarea name="address" rows="3" cols="30" class="textbox"></textarea>
					</td>
				</tr>
				<tr>
					<td class="reg-details">
						Your Comment :
					</td>
					<td>
						<textarea name="comment" rows="3" cols="30" class="textbox"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Send Feedback" name="submit" class="button">
						<input type="reset" value="Clear" name="reset" class="button">
					</td>
				</tr>
			</table>
			</form>
			</fieldset>
			<br />
		</td>
	</tr>
</table>
</center>
</body>
</html>
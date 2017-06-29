<?php

session_start();

	$user = $_SESSION['username'];

if($user)
{
	//user is logged in
	if(isset($_POST['submit']))
		{
		if($_POST['oldpassword']&&$_POST['newpassword']&&$_POST['repeatnewpassword']){

		//Check fields
			$oldpassword =$_POST['oldpassword'];
			$newpassword = $_POST['newpassword'];
			$repeatnewpassword = $_POST['repeatnewpassword'];
		
			//Check password against db
		
			//Connect db
			$connect = mysql_connect("localhost","root","") or die();
			mysql_select_db("dbdelight_bakery") or die();
		
			$queryget = mysql_query("SELECT password FROM customer WHERE username='$user'") or die("Query didn't work");
			$row = mysql_fetch_assoc($queryget);
		
			$oldpassworddb = $row['password'];
		
			//Checks password
			if($oldpassword==$oldpassworddb)
				{
				//Check two new password
				if($newpassword==$repeatnewpassword)
					{
					//Success
					//Change password in db
				
					$querychange = mysql_query("
					UPDATE customer SET password='$newpassword' WHERE username='$user';
					");
					session_destroy();
					die("<center>Your password has been change. Please Log In again.<center>");
				}
				else
					die("<center>New password don't match!</center>");
			}
			else
				die("<center>Old password doesn't match!</center>");
			}
			else
			echo "<center>Fill in <b>All</b> of the Field.</center>";
		}
		else
		{
		echo "
			<head>
				<style>
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
				
					#butang
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
			
					.tdlabels
					{
					font-family: Georgia;
					font-size: 25px;
					font-weight: bold;
					text-align: right;
					padding-right: 15px;
					}
				</style>
			</head>
			<body>
			<center>
			<form action='changepassword.php' method='POST'>
				<table>
					<tr>
						<td class='tdlabels'>
							Old password:
						</td>
						<td>
							<input type='text' name='oldpassword' class='textbox'><p>
							<script>document.getElementById('textbox1').focus()</script>	
						</td>
					</tr>
					<tr>
						<td class='tdlabels'>
							New password:
						</td>
						<td>
							<input type='password' name='newpassword' class='textbox'><br>
						</td>
					</tr>
					<tr>
						<td class='tdlabels'>
							Repeat New password:
						</td>
						<td>
							<input type='password' name='repeatnewpassword' class='textbox'><p>
						</td>
					</tr>
					<tr>
						<td colspan='2' id='butang'>
							<input type='submit' class='button' name='submit' value='Change Password'>
						</td>
					</tr>
				</table>
			</form>
			</center>
			</body>
		";
	}
}
	else
	die("<center>You must logged in</center>");
?>
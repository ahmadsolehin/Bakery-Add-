<?php

include ("con_dbase.php");

	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	date_default_timezone_set('Asia/Kuala_Lumpur');
	$last_login=date('d-m-Y h:i:s A');

if($username&&$password)
	{
	$query = mysql_query("SELECT * FROM customer WHERE username ='$username'");
	$numrows = mysql_num_rows($query);
	if($numrows!=0)
		{
		//code to login
		while($row = mysql_fetch_assoc($query))
			{
			$db_id = $row['id'];
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			$dbstatus = $row['status'];
			}
		//Check to see if they match!
		if($username==$dbusername&&$password==$dbpassword)
			{
			if($dbstatus=='Blocked')
				{?>
				<script language='Javascript'>
					alert('Sorry, Your account are blocked by Admin.');
					location.href='Log-In.php';
				</script>
			<?php
				}
			else
				{
				if($db_id=='1'&&$dbstatus!=='Admin')
					{
					mysql_query("UPDATE customer SET status='Admin' WHERE id='1'");
					?>
						<script language='Javascript'>
							alert('Congratulation, you have successfully being as Admin. Please Re-Login to your account.');
							location.href='Log-In.php';
						</script>
					<?php 
					}
			else
				{
					mysql_query("UPDATE customer SET last_login='$last_login' WHERE username='$dbusername'");
					$_SESSION['login_id']=$db_id;
					$_SESSION['username']=$dbusername;
					$_SESSION['status']=$dbstatus;
					header('location:user/profile.php');
				}
			}
		}
	else
		{?>
			<script language='Javascript'>
				alert('Incorrect Password');
				location.href='Log-In.php';
			</script>
	<?php 
		}
	}
	?>
		<script language='Javascript'>
			alert('That user does not exist.');
			location.href='Log-In.php';
		</script>
	<?php
	}
else 
	{ ?>
		<script language='Javascript'>
			alert('Please enter username and password.');
			location.href='Log-In.php';
		</script>
	<?php
	}
	?>
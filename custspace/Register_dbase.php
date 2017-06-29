<?php

//connect to con_dbase.php file
include ("con_dbase.php");
$submit = $_POST['submit'];

//form data
$fullname = strip_tags($_POST['fullname']);
$username = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);
$gender = strip_tags($_POST['gender']);
$currentstate = strip_tags($_POST['currentstate']);
$telephone = strip_tags($_POST['telephone']);

date_default_timezone_set('Asia/Kuala_Lumpur');
$reg_date=date('d-m-Y h:i:s A');
$last_login_date=date('d-m-Y h:i:s A');

if($submit)
	{
	//check for exixtance
	if($fullname && $username && $email && $password && $repeatpassword && $telephone && $gender && $currentstate)
		{
		if ($password == $repeatpassword)
			{
			//check char length of username
			if (strlen($fullname)>50||strlen($username)>25)
				{ ?>
				<script language='Javascript'>
					alert('Registration Failed. Length for username or fullname is too long!');
					location.href='Register.php';
				</script>
			<?php
				}
			else
				{
				if (strlen($password)>25||strlen($password)<6)
					{ ?>
					<script language='Javascript'>
						alert('Registration Failed. Password must be between 6 to 25 characters.');
						location.href='Register.php';
					</script>
					<?php
					}
				else
					{		
					//Open database
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("dbdelight_bakery");
		
					$namecheck = mysql_query("SELECT username FROM customer WHERE username='$username'");
					$count = mysql_num_rows($namecheck);
					if($count!=0)
						{
							die("<center><h1>Registration Failed!</h1><br />Username already taken.</center>");
						}
						$password = $password;
						$repeatpassword = $repeatpassword;
					
						$queryreg = mysql_query
						("
							INSERT INTO customer VALUES ('','$fullname','$username','$email','$password','$telephone','$gender','$currentstate','Member','$reg_date','$last_login_date')
						");
						header('location:Log-In.php');	
						}
					}
				}
			else
				{?>
				<script language='Javascript'>
					alert('Registration Failed. Your passwords does not match.');
					location.href='Register.php';
				</script>
			<?php
			}
		}
	else
		{?>
			<script language='Javascript'>
				alert('Registration Failed. Please fill in all fields!');
				location.href='Register.php';
			</script>
<?php
		}
	}
?>
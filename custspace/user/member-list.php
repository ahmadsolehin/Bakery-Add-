<?php
	session_start();
	include("../con_dbase.php");
	include("function.php");
	$login_id=$_SESSION['login_id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript">
	function del(p_id){
		if(confirm('I want to delete this item from my Shopping Cart.')){
			document.form1.p_id.value=p_id;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
</script>
<style>
#menu-form
{
text-align: center;
width: 980px;
}

.list_input
{
font-family: Verdana;
font-size: 12px;
}

#title
{
color: #FFFFFF;
font-family: Arial Black;
font-weight: bold;
background-color: #0000A0;
border: 1px solid #ADD8E6;
border-top-right-radius: 35px;
border-top-left-radius: 35px;
}

#last-table
{
color: #FFFFFF;
font-family: Arial Black;
font-weight: bold;
background-color: #0000A0;
border: 1px solid #ADD8E6;
border-bottom-right-radius: 35px;
border-bottom-left-radius: 35px;
}

.input-section
{
background-color: #FFFFFF;
border:1px solid #ADD8E6;
font-family: arial;
font-size: 12px;
}

.label
{
font-family: arial;
font-size: 14px;
background-color: #FFFFFF;
font-weight: bold;
border:1px solid #ADD8E6;
}

#right_icon
{
width: 20px;
height: 20px;
}

</style>
</head>

<body>
<div align="center">
	<h1 align="center">Admin / Member / Blocked List</h1>
	<br />
	<br />

	<form name="form1" method="post" >
		<table border="0" cellpadding="2px" id="menu-form">
			<tr>
				<td colspan="11"  id="title">
					REGISTERED USER DETAILS
				</td>
			</tr>
			<tr>
				<td class="label">
					FULL NAME
				</td>
				<td class="label">
					USERNAME
				</td>
				<td class="label">
					EMAIL
				</td>
				<td class="label">
					TELEPHONE
				</td>
				<td class="label">
					GENDER
				</td>
				<td class="label">
					STATE
				</td>
				<td class="label">
					STATUS
				</td>
				<td class="label">
					REG DATE
				</td>
				<td class="label">
					LAST LOGIN
				</td>
				<td class="label" colspan="2">
					OPTION
				</td>
			</tr>
				<?php
					$result=mysql_query("SELECT * FROM customer") or die("SELECT * FROM customer"."<br /><br />".mysql_error());
					while($row=mysql_fetch_array($result)){
				?>
			<tr>
				<td class="input-section">
					<span class="list_input"><?php echo $row['fullname']?></span>
				</td>
				<td class="input-section">
					<span class="list_input"><?php echo $row['username']?></span>
				</td>
				<td class="input-section">
					<span class="list_input"><?php echo $row['email']?></span>
				</td>
				<td class="input-section">
					<span class="list_input"><?php echo $row['telephone']?></span>
				</td>
				<td class="input-section">
					<span class="list_input"><?php echo $row['gender']?></span>
				</td>
				<td class="input-section">
					<span class="list_input"><?php echo $row['currentstate']?></span>
				</td>
				<td class="input-section">
					<?php
						$user_id=$row['id'];
						$status=$row['status'];
						echo $status;
					?>
				</td>
				<td class="input-section">
					<span  class="list_input"><?php echo $row['reg_date']?></span>
				</td>
				<td class="input-section">
					<span class="list_input"><?php echo $row['last_login']?></span>
				</td>
				<td class="input-section">
					<?php
						if($user_id!=='1'&&$user_id!==$login_id)
							{
					?>
							<a href="update-member_status.php?id=<?php echo $row['id'] ; ?>" id="right_link"/>
								<img src="../../picture/CustomerSpace/update.png"  id="right_icon" title="Update">
							</a> 
						<?php
							}
						?>
				</td>
				<td class="input-section">
					<?php
						if($user_id!=='1'&&$user_id!==$login_id)
							{
					?>
						<a href="delete-member.php?id=<?php echo $row['id'] ; ?>" id="right_link"/>
							<img src="../../picture/CustomerSpace/remove.png"  id="right_icon" title="Remove">
						</a> 
					<?php	
						}
					?>
				</td>
			</tr>
		<?php 
				}
			?>
			<tr>
			<td colspan="11"  id="last-table">
				~END LIST~
			</td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>

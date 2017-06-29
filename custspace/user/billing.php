<?php
	session_start();
	include("../con_dbase.php");
	include("function.php");
	
	$username=$_SESSION['username'];
	
	$query = mysql_query("SELECT * FROM customer WHERE username ='$username'");
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
		{
			//code to login
			while($row = mysql_fetch_assoc($query))
			{
				$name=$row['username'];
				$phone=$row['telephone'];
				$email=$row['email'];
			}
		}
			
	if(isset($_REQUEST['command'])){
	if($_REQUEST['command']=='update'){
		$address=$_REQUEST['address'];
		$deliv_date=$_REQUEST['deliv_date'];
		
		$total=get_order_total();
		date_default_timezone_set('Asia/Kuala_Lumpur');

		$order_date=date('d-m-Y h:i A');	
		$result=mysql_query("INSERT INTO saved_order VALUES('','$total','$name','$email','$address','$phone','$order_date','$deliv_date','Not Paid')");

		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$username=$username;
			$product_id=$_SESSION['cart'][$i]['productid'];
			$quantity=$_SESSION['cart'][$i]['qty'];
			/*$price=get_order_total();*/
			mysql_query("INSERT INTO order_details VALUES ('','$username','$product_id','$quantity','$order_date')");
		}
		die('<center>Thank You! Your order will be proceed after your payment!</center>');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.address.value==''){
			alert('Your address is required.');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>
<style>
	.button
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
	
	#order_table
	{
	text-align: center;
	}
	
	.textbox
		{
		border:1px solid #000000;
		border-right: 3px solid #000000;
		border-top-right-radius:30px;
		border-bottom-right-radius:30px;
		border-top-left-radius:10px;
		border-bottom-left-radius:10px;
		font-family:Calibri;
		font-size:18px;
		margin: 5px;
		padding: 2px;
		}
</style>
</head>

<body>
<center>
<form name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Complete this form to continue your order.</h1>
        <table border="0" cellpadding="2px" align="center" id="order_table">
        	<tr><td>Order Total:</td><td>RM <?php echo get_order_total() ?></td></tr>
            <tr><td>Username:</td><td><?php echo $name; ?></td></tr>
            <tr><td>Email:</td><td><?php echo $email; ?></td></tr>
            <tr><td>Address for Delivery:</td><td><textarea rows="4" cols="30"name="address"  class="textbox"/></textarea></td></tr>
            <tr><td>Phone:</td><td><?php echo $phone; ?></td></tr>
            <tr><td>Delivery Date:</td>
				<td>
					<input type="date" id="date" name="deliv_date" class="textbox" width="250px"/>
				</td>
			</tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Confirm" class="button"/></td></tr>
        </table>
	</div>
</form>

</center>
</body>
</html>

<?php
	session_start();
	include("../con_dbase.php");
	include("function.php");
	
	$save_order_result = mysql_query("SELECT * FROM saved_order") or die("SELECT * FROM saved_order"."<br/><br/>".mysql_error());
	$order_details_result = mysql_query("SELECT * FROM order_details") or die("SELECT * FROM order_details"."<br/><br/>".mysql_error());
	$productlist_result = mysql_query("SELECT * FROM productlist") or die("SELECT * FROM productlist"."<br/><br/>".mysql_error());

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	.table_list
	{
	text-align: center;
	}

	td
	{
	border: 1px solid #ADD8E6;
	}
	
	.table_header
	{
	color: #FFFFFF;
	font-family: Arial Black;
	font-weight: bold;
	background-color: #0000A0;
	border: 2px solid #000000;
	border-top-right-radius: 35px;
	border-top-left-radius: 35px;
	}
	
	.table_footer
	{
	color: #FFFFFF;
	font-family: Arial Black;
	font-weight: bold;
	background-color: #0000A0;
	border: 2px solid #000000;
	border-bottom-right-radius: 35px;
	border-bottom-left-radius: 35px;
	}
	
	#del_icon
	{
	border: 1px solid #000000;
	border-radius: 45px;
	width: 20px;
	height: 20px;
	}	
</style>
</head>

<body>
<center>
<h1>ALL ORDER DETAILS</h1>
<br />

<table border="0" class="table_list">
	<tr>
		<td colspan="10" class="table_header">
			SAVED ORDER TABLE
		</td>
	</tr>
	<tr>
		<td>
			NAME
		</td>
		<td>
			EMAIL
		</td>
		<td>
			ADDRESS
		</td>
		<td>
			PHONE
		</td>
		<td>
			ORDER
		</td>
		<td>
			DELIVERY
		</td>
		<td>
			STATUS
		</td>
		<td>
			TOTAL
		</td>
		<td colspan="2">
		</td>
	<tr>

<?php
while($row=mysql_fetch_array($save_order_result))
	{
	//use for top of table
	$so_id=$row['id'];
	$so_cust_name=$row['cust_name'];
	$so_email=$row['email'];
	$so_address=$row['address'];
	$so_phone=$row['phone'];
	$so_total=$row['order_total'];

	//bottom of table
	$so_order_date=$row['order_date'];
	$so_delivery_date=$row['delivery_date'];
	$so_status=$row['status'];
?>
	<tr>
		<td>
			<?php	echo $so_cust_name; ?>
		</td>
		<td>
			<?php	echo $so_email; ?>
		</td>
		<td>
			<?php	echo $so_address; ?>
		</td>
		<td>
			<?php	echo $so_phone; ?>
		</td>
		<td>
			<?php	echo $so_order_date; ?>			
		</td>
		<td>
			<?php	echo $so_delivery_date; ?>
		</td>
		<td>
			<?php	echo $so_status; ?>
		</td>
		<td>
			<?php	echo 'RM'.$so_total; ?>
		</td>
		<td>
			<a href="update-order.php?id=<?php echo $row['id'] ; ?>" id="right_link"/>
				<img src="../../picture/CustomerSpace/update.png"  id="del_icon" title="Update">
			</a> 
		</td>
		<td>
			<a href="delete-order.php?id=<?php echo $row['id'] ; ?>" id="del_link" title="Remove" /><img src="../../picture/CustomerSpace/remove.png" id="del_icon"> </a> 
		</td>
	<tr>
	<?php } ?>
	<tr>
		<td colspan="10" class="table_footer">
			~END LIST~
		</td>
	</tr>
</table>
<br />
<table border="0" class="table_list">
	<tr>
		<td colspan="4" class="table_header">
			ORDER DETAILS TABLE
		</td>
	</tr>
	<tr>
		<td>
			USERNAME
		</td>
		<td>
			PRODUCT ID
		</td>
		<td>
			QUANTITY
		</td>
		<td>
			ORDER DATE
		</td>
	<tr>
	<?php
while($row=mysql_fetch_array($order_details_result))
	{
	$od_id=$row['id'];
	$od_username=$row['username'];
	$od_product_id=$row['product_id'];
	$od_quantity=$row['quantity'];
	$od_order_date=$row['order_date'];
?>
	<tr>
		<td>
			<?php	echo $od_username; ?>
		</td>
		<td>
			<?php	echo $od_product_id; ?>
		</td>
		<td>
			<?php	echo $od_quantity; ?>
		</td>
		<td>
			<?php	echo $od_order_date; ?>
		</td>
	<tr>
	<?php } ?>
	<tr>
		<td colspan="4" class="table_footer">
			~END LIST~
		</td>
	</tr>
</table>
<br />
<table border="0" class="table_list">
	<b>
	<tr>
		<td colspan="3" class="table_header">
			 PRODUCT LIST TABLE
		</td>
	</tr>
	<tr>
		<td>
			PRODUCT ID
		</td>
		<td>
			PRODUCT NAME
		</td>
		<td>
			PRODUCT PRICE
		</td>
	<tr>
	</b>
	<?php
while($row=mysql_fetch_array($productlist_result))
	{
	$p_id=$row['product_id'];
	$p_name=$row['product_name'];
	$p_price=$row['product_price'];
?>
	<tr>
		<td>
			<?php	echo $p_id; ?>
		</td>
		<td>
			<?php	echo $p_name; ?>
		</td>
		<td>
			<?php	echo $p_price; ?>
		</td>
	<tr>
	<?php } ?>
	<tr>
		<td colspan="3" class="table_footer">
			~END LIST~
		</td>
	</tr>
</table>
<br />
</center>
</body>
</html>

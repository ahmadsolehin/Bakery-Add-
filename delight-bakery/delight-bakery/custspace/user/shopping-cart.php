<?php
	session_start();
	include("../con_dbase.php");
	include("function.php");
	
	$msg = "";
	if(isset($_REQUEST['command']))
		{
			if($_REQUEST['command']=='delete' && $_REQUEST['p_id']>0)
				{
					remove_product($_REQUEST['p_id']);
				}
			else if($_REQUEST['command']=='clear')
				{
					$_SESSION['cart']= array();
				}
			else if($_REQUEST['command']=='update')
				{
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++)
					{
						$p_id=$_SESSION['cart'][$i]['productid'];
						$q=intval($_REQUEST['product'.$p_id]);
						if($q>0 && $q<=999)
							{
								$_SESSION['cart'][$i]['qty']=$q;
							}
						else
							{
							$msg='Some products not updated!, quantity must be a number between 1 and 999';
							}
					}
				}
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<script language="javascript">
	function del(p_id){
		if(confirm('I want to delete this item from my Shopping Cart.')){
			document.form1.p_id.value=p_id;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('Delete all items from your Shopping Cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
</script>

<style>
	table
	{
	font-family: Arial;
	font-size: 20px;
	text-align: center;
	background-color: yellow;
	}
	
	.header
	{
	font-family: Georgia;
	color: #ffffff;
	font-size: 25px;
	font-weight: bold;
	background-color: red;
	}
	
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
	
	#remove_icon
	{
	width: 24px;
	height: 24px;
	border: 1px solid #000000;
	border-radius: 45px;
	}
	
	#remove_icon:hover
	{
	width: 26px;
	height: 26px;
	}
	
</style>
</head>

<body>
<center>
<form name="form1" method="post">
<input type="hidden" name="p_id" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Shopping Cart</h1>
		<?php
		if(isset($_SESSION['cart'])){
		?>
			<input type="button" value="Add Menu" onclick="window.location='product-view.php'" class="button" style="text-align: left;"/>
			<input type="button" value="Clear Cart" class="button" onclick="clear_cart()">
			<input type="button" value="Confirm" class="button" onclick="update_cart()">
			<input type="button" value="Buy Now" class="button" onclick="window.location='billing.php'" >
		<?php
			}
		?>
    </div>
    	<div style="color:#F00"><?php echo $msg; ?></div>
    	<table border="0" cellpadding="5px" cellspacing="1px" style="text-align: center; font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
    	<?php
			if(isset($_SESSION['cart'])){
				if(is_array($_SESSION['cart'])){
					echo '<tr bgcolor="#FFFFFF" style="font-weight:bold">
					<td>Id</td>
					<td>Product Name</td>
					<td>Price</td>
					<td>Quantity</td>
					<td>Total</td>
					<td>Options</td></tr>';
					$max=count($_SESSION['cart']);
					for($i=0;$i<$max;$i++){
						$p_id=$_SESSION['cart'][$i]['productid'];
						$q=$_SESSION['cart'][$i]['qty'];
						$pname=get_product_name($p_id);
						if($q==0) continue;
			
			?>
            		<tr bgcolor="#FFFFFF">
						<td width="50px">
							<?php echo $i+1?>
						</td>
						<td>
							<?php echo $pname?>
						</td>
						<td>
							RM <?php echo get_price($p_id)?>
						</td>
						<td>
							<input type="text" name="product<?php echo $p_id?>" value="<?php echo $q?>" maxlength="3" size="2" />
						</td>                    
						<td>
							RM <?php echo get_price($p_id)*$q?>
						</td>
						<td>
							<a href="javascript:del(<?php echo $p_id?>)"><img src="../../picture/CustomerSpace/remove.png" id="remove_icon" title="remove"></a>
						</td>
					</tr>
            <?php					
				}
			}
			?>
				<tr>
					<td>
					</td>
					<td colspan="6">
						<b>Total Order: RM <?php echo get_order_total()?></b>
					</td>
				</tr>
				<tr>
					<td colspan='6'>
						Notes: <b>Total Order</b> are included discount and Delivery Charge as shown in table below.
						For customer come and take the order. The Delivery Charge will be back to customer.
					</td>
				</tr>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		
		?>
        </table>
    </div>
	</form>

	<br />
	<br />

<div>
	<table border='0' width='400px'>
		<tr>
			<td colspan='2' class='header'>
				Discount Rate
			</td>
		</tr>
		<tr>
			<td>
				Rm15 - Rm29.99
			</td>
			<td>
				3%
			</td>
		</tr>
		<tr>
			<td>
				Rm30 - Rm49.99
			</td>
			<td>
				6%
			</td>
		</tr>
		<tr>
			<td>
				Rm50 - Rm99.99
			</td>
			<td>
				10%
			</td>
		</tr>
		<tr>
			<td>
				Rm100 - Above
			</td>
			<td>
				18%
			</td>
		</tr>
		<tr>
			<td colspan="2" class="header">
				Other Charge
			</td>
		</tr>
		<tr>
			<td>
				Delivery
			</td>
			<td>
				RM 7.00
			</td>
		</tr>
	</table>
</div>
</center>
</body>
</html>
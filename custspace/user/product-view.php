<?php
	session_start();
	include("../con_dbase.php");
	include("function.php");
	
if(isset($_SESSION['username'])) 
	{
	$username = $_SESSION['username'];
	$status = $_SESSION['status'];
	}
	else
		die("<center><h1>Failed!</h1><br />No data received.</center>");
	
	if(isset($_REQUEST['command'])){
		if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
			$p_id=$_REQUEST['productid'];
			addtocart($p_id,1);
			header("location:shopping-cart.php");
			exit();
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu List</title>
<script language="javascript">
	function addtocart(p_id){
		document.form1.productid.value=p_id;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
<style>
#menu-form
{
text-align: center;
width: 850px;
}

#list_picture
{
border: 1px solid #000000;
border-radius: 10px;
width: 320px;
height: 200px;
padding: 5px;
margin: 15px;
}

#list_name
{
font-family: Verdana;
font-weight: bold;
font-size: 35px;
}

#list_price
{
font-family: Colonna MT;
font-size: 50px;
font-weight: bold;
color: red;
}

#img_button
{
width: 80px;
height: 80px;
border: 1px solid #000000;
border-radius: 50px;
}

#img_button:hover
{
border: 2px solid #000000;
}
</style>
</head>

<body>
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />

<div align="center">
	<h1 align="center">Menu List</h1>

		<?php
			$result=mysql_query("SELECT * FROM productlist") or die("SELECT * FROM productlist"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
		
	<table border="0" cellpadding="2px" id="menu-form">
		<tr>
        	<td rowspan="2" width="340px" >
				<img src="<?php echo $row['product_picture']?>" id="list_picture" />
			</td>
		    <td colspan="2" height="150px">
				<span id="list_name"><?php echo $row['product_name']?></span>
            </td>
        </tr>
		<tr>
			<td>
				<span id="list_price">RM <?php echo $row['product_price']?></span>
             </td>
			 <td>
				<input type="image" src="../../picture/CustomerSpace/cart.png" value="Add to Cart" onclick="addtocart(<?php echo $row['product_id']?>)" id="img_button" title="Add to Cart"/>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<hr size="1" />
			</td>
		</tr>
    </table>
	       <?php } ?>
	</div>
</form>
</body>
</html>

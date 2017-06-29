<?php
session_start();
include("../con_dbase.php");

$id = $_SESSION['edit_id'];
$name=$_POST['name'];
$price=$_POST['price'];
		
if($name&&$price)
	{
		$query="UPDATE productlist SET product_name='$name', product_price='$price' WHERE product_id='$id'";
		$result = mysql_query($query) or die("Could Not Execute Query");
		if($result) {
			header('location:menulist.php');
			}
		else
			{ ?>
			<script language='Javascript'>
				alert('Database problem. Cannot update the data.');
				location.href='menulist.php ?>';
			</script>
			<?php
			}
		}
	else
		{ ?>
		<script language='Javascript'>
			alert('Please fill all the fields!.');
			location.href='menulist.php ?>';
		</script>
	<?php
		}
	?>





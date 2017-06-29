<<?php
session_start();
include("../con_dbase.php");

//Use method $_GET to retrieve data from url
$idURL = $_GET['id'];
$query = "DELETE FROM productlist WHERE product_id = '$idURL'";
$result = mysql_query($query);
if($result)
	{?>
	<script language='Javascript'>
		alert('Succes! The menu has been deleted.');
		location.href='menulist.php ?>';
	</script>
	<?php
	}
?>
<<?php
session_start();
include("../con_dbase.php");

//Use method $_GET to retrieve data from url
$idURL = $_GET['id'];
$query = "DELETE FROM saved_order WHERE id = '$idURL'";
$result = mysql_query($query);
if($result)
	{?>
	<script language='Javascript'>
		alert('Succes! The saved order has been deleted.');
		location.href='view-saved_order.php ?>';
	</script>
	<?php
	}
?>
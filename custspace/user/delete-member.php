<?php
include("../con_dbase.php");

//Use method $_GET to retrieve data from url
$idURL = $_GET['id'];
$query = "DELETE FROM customer WHERE id = '$idURL'";
$result = mysql_query($query);
if($result) 
	{?>
		<script language='Javascript'>
			alert('Succes! The member has been delete by admin from Member List.');
			location.href='member-list.php';
		</script>
<?php
	}
?>
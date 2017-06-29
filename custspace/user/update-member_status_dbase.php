<?php
session_start();
include("../con_dbase.php");

$id = $_SESSION['upd_id'];
$status=$_POST['new_status'];
		
if($status)
	{
		$query="UPDATE customer SET status='$status' WHERE id='$id'";
		$result = mysql_query($query) or doe("could not execute query in kemaskini.php");
		if($result) {
			header('location:member-list.php');
		}
		else
			echo "<center><h1>Update Failed!</h1></center>";
	}
	else
		echo "<center><h1>Update Failed!</h1><br />No Data Received.</center>";
?>





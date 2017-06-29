<?php
session_start();
include ("con_dbase.php");

echo "<center><h1>Feedback</h1></center>";
$submit = $_POST['submit'];

//form data
$fullname = strip_tags($_POST['fullname']);
$email = strip_tags($_POST['email']);
$telephone = strip_tags($_POST['telephone']);
$address = strip_tags($_POST['address']);
$comment = strip_tags($_POST['comment']);

if($submit)
	{
	//check for exixtance
	if($fullname && $email && $telephone && $address && $comment)
	{
		$queryreg = mysql_query
		("
		INSERT INTO feedback VALUES ('','$fullname','$email','$telephone','$address','$comment')
		");
		die("<center>Thank You ".$fullname." for your feedback.<br />
		We appreciate all of your comments.</center>");
	}
	else
		echo "<center>Please fill in <b>all</b> fields!</center>";
}
?>
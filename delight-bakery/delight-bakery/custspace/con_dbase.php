<?php
//Connect to the database
$dbhandle = mysql_connect("localhost","root","") or die("Unable to connect to MySQL database");
mysql_select_db("dbdelight_bakery") or die ("Sorry, no database selected");
?>

<?php 
// Connect DB
$connect=mysql_connect("localhost","root","root") or die("Unable to Connect");
mysql_select_db("db_hackthedot") or die("Could not open the db");
?>
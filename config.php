<?php 
try
{
$link = mysql_connect("localhost","root","");
mysql_select_db("db",$link);
}
catch(Exception $e)
{
	echo $e->getMessage();
}
?>
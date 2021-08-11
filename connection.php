<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="mypro_bbms";
$db=new PDO('mysql:host=localhost;dbname=mypro_bbms','root','');
if($db)
	{
		echo "...";
	}
else
	{
		echo "Not Connect";
	}
?>
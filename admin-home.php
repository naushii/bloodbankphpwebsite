<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="s1.css">
</head>
<body>
	<div id="full"></div>
	<div id="inner_full">
		<div id="header"><h2>Blood Bank Management System</h2></div>
		<div id="body">
			<br>
			<?php
            $un=$_SESSION['un'];
            if(!$un)
            {
            	header("location:Index.php");
            }
			?>
			<h1>Welcome Admin</h1><br><br><br><br><br><br>
			<ul>
				<li><a href="donor-red.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stoke-blood-list.php">Quantity of Blood</a></li>
			</ul><br><br><br><br><br>
			<ul>
				<li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
				<li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
			</ul>
        </div>
		<br><br><br><br><br><br><br><br><div id="footer"><h4 align="center">bloodbank@gmail.com</h4>
		<p align="center"><a href="logout.php"><font color="white"></font>logout</a></p></div>
    </div>
</div>
</body>
</html>
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
	<meta charset="utf-5 ">
	<div id="full"></div>
	<div id="inner_filter">
		<div id="header"><marquee><b>For Registration Contact Us 8796837900</b></marquee><h3>Blood Bank Management System</h3></div>
		<div id="body">
			<br><br><br><br><br><br><br>
			<form action="#" method="POST">
			<table align="center">
				<tr>
					<td width="150px" height="60px"><b>Enter Username</b></td>
					<td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Username" style=" width: 180px; height: 30px; border-radius: 10px;"></td>
				</tr>
				<tr>
					<td width="150px" height="60px"><b>Enter Password</b></td>
					<td width="200px" height="70px"><input type="Password" name="ps" placeholder="Enter Password" style=" width: 180px; height: 30px; border-radius: 10px;"></td>
				</tr>
				<tr>
					<td><input type="submit" name="sub" value="Login" style="width: 60px;
					 height: 30px; border-radius: 5px;"></td>
				</tr>
			</table>
			<br><br><br><br><br><br><br><br>
		</form>
		<?php
		if(isset($_POST['sub']))
		{

			$un=$_POST['un'];
			$ps=$_POST['ps'];
			$q=$db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
			$q->execute();
			$res=$q->fetchAll(PDO::FETCH_OBJ);
			if($res)
			{
				echo $_SESSION['un']=$un;
                header("Location:admin-home.php");
			}
			else
			{
	            echo "<script>alert('Wrong User');</script>";
			}
		}
		?>
        </div>
		<br><br><br><br><br><br><div id="footer"><h4 align="center">bloodbank@gmail.com</h4>
	</div>
    </div>
</div>
</body>
</html>
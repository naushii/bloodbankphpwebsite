<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exchange Blood Donor registration</title>
	<link rel="stylesheet" type="text/css" href="s1.css">
<style type="text/css">
	#form1{
	width: 80%
	height: 320px;
	background: red;
	color: white;
	border-radius: 10px;
}
</style>
</head>
<body>
	<?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("location:Index.php");
            }
            ?>
	<div id="full"></div>
	<div id="inner_full">
		<div id="header"><h2>Blood Bank Management System
<button class="backhover" style="color: white; float: right; background-color: red; border-radius: 15%; font-size: 15px;padding-right: 18px; padding-bottom: 18px; padding-left: 18px; padding-top:20px; margin-right: 8px;"><a href="admin-home.php" style="text-decoration: none; color: white;">Back</a></button>
		</h2></div>
		<div id="body">
			<h2>Exchange Blood Doner registration</h2><br><br><br><br>
				<center><div id="form1">
					<form action="" method="post">
					<table>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"  required></td>
							<td width="200px" height="50px">Enter  Father's Name</td>
							<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"  required></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address"  required></textarea></td>
							<td width="200px" height="50px">Enter City</td>
							<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"  required></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"  required></td>
							<td width="200px" height="50px">Enter E-mail</td>
							<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"  required></td>
						</tr>
						<tr>	
							<td width="200px" height="50px">Enter Mobile No</td>
							<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"  required></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name="bgroup">
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
									<option>O+</option>
									<option>O-</option>
									<option>AB+</option>
									<option>AB-</option>
								</select>
							</td>
							<td width="200px" height="50px">Exchange Blood Group</td>
							<td width="200px" height="50px">
								<select name="exbgroup">
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
									<option>O+</option>
									<option>O-</option>
									<option>AB+</option>
									<option>AB-</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="submit"></td>
						</tr>
					</table>
					</form>
					<?php
					if(isset($_POST['submit'])) 
					{
						$name=$_POST['name'];
						$fname=$_POST['fname'];
					 	$address=$_POST['address'];
						$city=$_POST['city'];
						$age=$_POST['age'];
						$bgroup=$_POST['bgroup'];
						$mno=$_POST['mno'];
						$email=$_POST['email'];
						$exbgroup=$_POST['exbgroup'];

						$q = $db->query("SELECT id FROM donor_registration WHERE bgroup = '$exbgroup'");

						$num_row=$q->fetch();
						$unique=(isset($num_row['id']));

						$nums=$q->rowcount();

						if ($bgroup == $exbgroup) {
							echo "Sorry, Same Blood Group can't be exchanged";
						}else{
							if ($nums>0) {
								$q1="INSERT INTO exchange_blood_list(name, fname, address, city, age, bgroup, mno, email, ebgroup) VALUES('$name', '$fname', '$address', '$city', '$age', '$bgroup', '$mno', '$email', '$exbgroup')";
								$st1=$db->prepare($q1);
								$st1->execute();

								$u1 = "UPDATE donor_registration SET name = '$name', fname = '$fname', address = '$address', city = '$city', age = '$age', bgroup = '$bgroup', email = '$email', mno = '$mno' WHERE id ='$unique'";
								$st2=$db->prepare($u1);
								$st2->execute();

							}else{
								echo "Sorry, Selected bloodgroup is not aviailable";
							}
						}
					}

					?>
				</div></center>
		</div>
		<br><br><br><br><br><br><div id="footer"><h4 align="center">bloodbank@gmail.com</h4>
        <p align="center"><a href="logout.php"><font color="white"></font>logout</a></p></div>
    </div>
</div>
</body>
</html>
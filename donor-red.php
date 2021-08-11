<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor registration</title>
    <link rel="stylesheet" type="text/css" href="s1.css">
</head>
<body>
    <div id="full"></div>
    <div id="inner_full">
        <div id="header"><h2>Blood Bank Management System
<button class="backhover" style="color: white; float: right; background-color: red; border-radius: 15%; font-size: 15px;padding-right: 18px; padding-bottom: 18px; padding-left: 18px; padding-top:20px; margin-right: 8px;"><a href="admin-home.php" style="text-decoration: none; color: white;">Back</a></button>
        </h2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("location:Index.php");
            }
            ?>
            <h1>Donor registration</h1><br><br><br><br>
                <center><div id="form">
                    <form action="" method="post">
                    <table>
                        <tr>
                            <td width="200px" height="50px">Enter name</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name" required></td>
                            <td width="200px" height="50px">Enter  Father's name</td>
                            <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name" required></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Address</td>
                            <td width="200px" height="50px"><textarea name="address" required></textarea></td>
                            <td width="200px" height="50px">Enter City</td>
                            <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City" required></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Age</td>
                            <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age" required></td>
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
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter E-mail</td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail" required></td>
                            <td width="200px" height="50px">Enter Mobile No</td>
                            <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No" required></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="sub" value="Save"></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                    if(isset($_POST['sub'])) 
                    {
                        $name=$_POST['name'];
                        $fname=$_POST['fname'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $age=$_POST['age'];
                        $bgroup=$_POST['bgroup'];
                        $mno=$_POST['mno'];
                        $email=$_POST['email'];
                        $q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,mno,email) VALUES
                            (:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
                        $q->bindValue('name',$name);
                        $q->bindValue('fname',$fname);
                        $q->bindValue('address',$address);
                        $q->bindValue('city',$city);
                        $q->bindValue('age',$age);
                        $q->bindValue('bgroup',$bgroup);
                        $q->bindValue('mno',$mno);
                        $q->bindValue('email',$email);
                        if($q->execute()) 
                        {
                            echo "<script>alert('donor_registration successful')</script>";
                        }
                        else
                        {
                            echo "<script>alert('donor_registration Fail')</script>";
                        }
                    }   
                    ?>
                </div></center>
        </div>
         <br><br><br><br><br><br><br><br><div id="footer"><h4 align="center">bloodbank@gmail.com</h4>
        <p align="center"><a href="logout.php">logout</a></p></div>
    </div>
</div>
</body>
</html>
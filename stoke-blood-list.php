<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Quantity of Blood </title>
    <link rel="stylesheet" type="text/css" href="s1.css">

    <style type="text/css">
        td{
            width: 200px;
            height: 40px;
        }
        #form{
    width: 80%;
    height: 250px;
    background-color: red;
    color: white;
    border-radius: 10px;
    overflow: hidden;
    overflow-y: scroll;
}
        
    </style>
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
                header("location:index.php");
            }
            ?>
            <h1>Blood Quantity</h1><br><br>
            <center><div id="form">
        
                <table>
                    <tr>
                        <td><center><b><font color="blue">Name</font></b></center></td>
                        <td><center><b><font color="blue">Qty</font></b></center></td>
                    </tr>
                    <tr>
                        <td><center>A+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>A-</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>B+</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>B-</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>O+</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>

                    <tr>
                        <td><center>O-</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>

                    <tr>
                        <td><center>AB+</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>

                    <tr>
                        <td><center>AB-</center></td>
                        <td><center>
                                    <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                    </tr>
                </div>
                </table>
        </div></center>
        <br><br><br><br>
        <div id="footer"><h4 align="center">itipurwar@gmail.com</h4>
        <p align="center"><a href="logout.php"><font color="white"></font>Logout</a></p></div>
    </div>
</div>
</body>
</html>
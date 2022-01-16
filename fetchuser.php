<?php
session_start();
include("dbconn.php");
$email=$_POST["e"];
//echo($email);
$sql="select usertype from login where email='$email'";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$usertype=$row["usertype"];
$_SESSION['email']=$email;

echo($usertype);
?>
<?php
session_start();
include("dbconn.php");
$needs=$_POST["needs"];
$worker_email=$_POST["worker_email"];
$user_email=$_SESSION["email"];
//echo $user_email;
$sql="select name from registration where email='$user_email'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($res);
$name=$r["name"];
// $sql="select name from registration where email='$user_email'";
// $r=mysqli_fetch_assoc(mysqli_query($conn,$sql))
// echo $sql;
$sql2="insert into request(userid,workerid,needs)values('$user_email','$worker_email','$needs')";
$sql3="insert into notification(senderid,receiverid,content,notification_type)values('$user_email','$worker_email','$name send a request.Do you want to accept?','request')";
if(mysqli_query($conn,$sql2) && mysqli_query($conn,$sql3)){

	echo "Request send successfully";
}
?>
<?php
session_start();
include("dbconn.php");
$userid=$_SESSION["email"];
$workerid=$_POST["workerid"];
$payment=$_POST["payment"];
$billid=$_POST["bill_id"];
//$room_id=$_POST["room_id"];
//$rooms=$_POST["rooms"];


$sql="insert into payment(bill_id,userid,workerid,payment)values($billid,'$userid','$workerid',$payment)";
if(mysqli_query($conn,$sql)){
	$sql1="update bill set bill_status=1 where bill_id=$billid";
	if(mysqli_query($conn,$sql1)){
		header("location:payment.php");
	}
}


?>
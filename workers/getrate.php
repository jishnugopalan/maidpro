<?php
session_start();
include("dbconn.php");
$date1=$_POST["date1"];
$date2=$_POST["date2"];
$email=$_SESSION["email"];
$diff = abs(strtotime($date2) - strtotime($date1));

// $years = floor($diff / (365*60*60*24));
// $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
// $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

// printf("%d years, %d months, %d days\n", $years, $months, $days);

$start = strtotime($date1);
$end = strtotime($date2);

$days_between = ceil(abs($end - $start) / 86400);
if($days_between==0){
	$days_between=1;
}
// echo $days_between;

$sql="select service_charge from worker where email='$email'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($res);

$sc=$r['service_charge'];

$total_charge=(int)$days_between*(int)$sc;
echo $total_charge;


?>
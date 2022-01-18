<?php
$requestid=$_GET['requestid'];
$status=$_GET['status'];
$userid=$_GET['userid'];
include("dbconn.php");
session_start();
$email=$_SESSION['email'];
$status=$_GET['status'];

$sql="select name from registration where email='$email'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($res);
$name=$r["name"];

if($status==1){
$sql1="update request set request_status=1 where request_id=$requestid";
$sql2="insert into notification(senderid,receiverid,content,notification_type)values('$email','$userid','Congratulations!$name accepted your request','accepted')";
if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){

	?>
	<script type="text/javascript">
		alert('You are accepted the request successfully')
		window.location.replace("jobrequest.php")
	</script>

	<?php
}

}

if($status==2){
$sql1="update request set request_status=2 where request_id=$requestid";
$sql2="insert into notification(senderid,receiverid,content,notification_type)values('$email','$userid','Sorry!$name rejected your request','rejected')";
if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){

	?>
	<script type="text/javascript">
		alert('You are rejected the request successfully')
		window.location.replace("jobrequest.php")
	</script>

	<?php
}

}


?>
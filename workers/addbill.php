<?php
session_start();
$request_id=$_POST['request_id'];
$toolname=$_POST['tool_name'];
$rate=$_POST['tool_rate'];
$worker_id=$_SESSION['email'];
$user_id=$_POST['user_id'];

include("dbconn.php");
$sql="insert into bill(userid,workerid,toolname,rate)values('$user_id','$worker_id','$toolname',$rate)";
//echo $sql;
if(mysqli_query($conn,$sql)){
	?>
	<script type="text/javascript">
		alert("Bill added successfully");
		window.location.replace("jobrequest.php");
	</script>
	<?php
}


?>
<?php
session_start();
$request_id=$_POST['request_id'];
$rate=$_POST['rate'];
$worker_id=$_SESSION['email'];
$user_id=$_POST['user_id'];


include("dbconn.php");
$sql="insert into bill(request_id,userid,workerid,rate)values($request_id,'$user_id','$worker_id',$rate)";
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
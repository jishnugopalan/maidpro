<?php
session_start();
include("dbconn.php");
$review=$_POST['review'];
$workerid=$_POST['workerid'];
$userid=$_SESSION["email"];

$sql="insert into review(userid,workerid,review)values('$userid','$workerid','$review')";
if(mysqli_query($conn,$sql)){
	?>
	<script type="text/javascript">
		alert("Review added successfully")
		window.location.replace("myworkers.php")
	</script>
	<?php
}


?>
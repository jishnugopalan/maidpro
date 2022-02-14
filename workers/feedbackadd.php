<?php
session_start();
include("dbconn.php");
$feedbacks=$_POST['feedbacks'];
$userid=$_SESSION["email"];

$sql="insert into feedbacks(email,feedback)values('$userid','$feedbacks')";
if(mysqli_query($conn,$sql)){
	?>
	<script type="text/javascript">
		alert("Feedback added successfully")
		window.location.replace("addfeedback.php")
	</script>
	<?php
}


?>
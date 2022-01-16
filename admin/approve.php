<?php
$email=$_GET['email'];
include("dbconn.php");
$sql="update verification set status=1 where email='$email'";
if(mysqli_query($conn,$sql)){
	$sql2="update login set usertype='worker' where email='$email'";
	if(mysqli_query($conn,$sql2)){
		?>
		<script type="text/javascript">
			alert("Approved successfully")
			window.location.replace("viewworkers.php")
		</script>

		<?php
	}
}

?>
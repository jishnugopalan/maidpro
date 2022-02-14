<?php
$request_id=$_GET['request_id'];
include("dbconn.php");

$sql="update request set request_status=3 where request_id=$request_id";
if(mysqli_query($conn,$sql)){
	?>
      <script type="text/javascript">
      	alert("Job marked as completed")
      	window.location.replace("jobrequest.php")
      </script>
	<?php
}

?>
<?php
$request_id=$_GET['request_id'];
include("dbconn.php");
$sql1="select * from bill where request_id=$request_id";
$res=mysqli_query($conn,$sql1);
$r=mysqli_fetch_assoc($res);
if($r['bill_status']==0){
	?>
      <script type="text/javascript">
      	alert("Please pay the bill first")
      	window.location.replace("myworkers.php")
      </script>
	<?php
}
else{

	$sql="update request set request_status=3 where request_id=$request_id";
if(mysqli_query($conn,$sql)){
	?>
      <script type="text/javascript">
      	alert("Job marked as completed")
      	window.location.replace("myworkers.php")
      </script>
	<?php
}

}



?>
<?php
	include("header.php");
	$request_id=$_GET['requestid'];
	
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Bill</h2>

    
    	<div class="clearfix"></div>
    	<table class="table">
    		<thead>
    			<tr>
    	
    		<th>Total Service Charge+20% Administration Fee</th>
    		<th>Created Date</th>
    		<th>Bill Status</th>
    	</tr>
    	</thead>
    	<tbody>
  <?php
$sql="select * from bill where request_id=$request_id";
$res2=mysqli_query($conn,$sql);
if(mysqli_num_rows($res2)>0){
	while($r2=mysqli_fetch_assoc($res2)){
?>
<tr>
	
<td><?php echo $r2['rate']?></td>
<td><?php echo $r2['datetime']?></td>
<td>
<?php
$bill_status=$r2['bill_status'];
if($bill_status==0){
	
?>
<a href="payment/index.php?bill_id=<?php echo $r2['bill_id']?>&&request_id=<?php echo $request_id?>&&worker_id=<?php echo $r2['workerid']?>" class="btn btn-success">Pay Now</button>
<?php
}
if($bill_status==1){
	echo "Paid";
}

?></td>



</tr>
<?php

	}
}

  ?>
  </tbody>
  </table>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
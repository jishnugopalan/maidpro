<?php
	include("header.php");
	$request_id=$_GET['request_id'];
	$user_id=$_GET['user_id'];
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Create Bill</h2>

    	<form method="POST" action="addbill.php">
    		<input type="hidden" name="request_id" value="<?php echo $_GET['request_id']?>">
    		<input type="hidden" name="user_id" value="<?php echo $_GET['user_id']?>">
    		<!-- <div class="col-md-4">
    			<label>Date From</label>
    			<input class="form-control" type="date" id="date1" name="from">
    			
    		</div>
    		<div class="col-md-4">
    			<label>to</label>
    			<input class="form-control" type="date" id="date2" name="_to" onchange="getRate()">
    		</div> -->

    		<script type="text/javascript">
    			function getRate(){
    				var date1=document.getElementById("date1").value
    				var date2=document.getElementById("date2").value
    				$.ajax({
    					 type: "POST",
    url: "getrate.php",
    data:
    {
    	"date1":date1,
    	"date2":date2
    },
    success: function(data){
    	console.log(data)
        
        document.getElementById("rates").value=data
    }
    				})
    			}
    		</script>
    		<div class="clearfix"></div>
        <?php
$sql="select service_charge from worker where email='$email'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($res);

$sc=$r['service_charge'];
        ?>
    		
    		<div class="col-md-4">
    			<label>Total Service Charge</label>
    			<input type="number" class="form-control" id="rates" name="rate" required="" value="<?php echo $sc?>" readonly>
    		</div>
    		<div class="clearfix">
    		</div>
    		<div class="col-md-4">
    			<button type="submit" class="btn btn-primary">Add</button>
    			
    		</div>

    	</form>
    	<div class="clearfix"></div>
    	<table class="table">
    		<thead>
    			<tr>
    		
    		<th>Total Service Charge</th>
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
if($bill_status==0)
	echo "Not Paid";
if($bill_status==1)
	echo "Paid";

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
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
    		<div class="col-md-4">
    			<label>Tool/Accessory Name</label>
    			<input type="text" class="form-control" name="tool_name" required="">
    		</div>
    		<div class="clearfix"></div>
    		<div class="col-md-4">
    			<label>Rate</label>
    			<input type="number" class="form-control" name="tool_rate" required="">
    		</div>
    		<div class="clearfix">
    		</div>
    		<div class="col-md-4">
    			<button type="submit" class="btn btn-primary">Add</button>
    			
    		</div>

    	</form>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
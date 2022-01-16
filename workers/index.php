<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Services</h2>

    	<?php
    	$sql="select * from category";
    	$res=mysqli_query($conn,$sql);
    	if(mysqli_num_rows($res)>0){
    		while ($r=mysqli_fetch_assoc($res)) {
    	?>
    	<div class="col-md-4">
    		<a href="viewworkers.php?category=<?php echo $r['category']?>">
    		<img src="../admin/<?php echo $r['category_image']?>" class="img-thumbnail">
    		<h3><?php echo $r['category']?></h3>
    	</a>
    	</div>

    	<?php
    			// code...
    		}
    	}

    	?>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
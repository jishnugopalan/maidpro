<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Add Category</h2>
    	<form method="POST" action="addcat.php" enctype="multipart/form-data">
    	<div class="col-md-4">
      <label>Category Name</label>
      <input type="text" name="category" class="form-control" required="">
    	</div>
    	<div class="clearfix"></div>
    	<div class="col-md-4">
      <label>Category Image</label>
       <input type="file" name="catimage" class="custom-file-input" id="validatedCustomFile" required>
    	</div>
    	<div class="clearfix"></div>
    	<div class="col-md-4">
    		<br>
    		<button type="submit" class="btn btn-primary">Add</button>
    	</div>

    		
    	</form>
    	
    	
    </div>
</div>

<?php
	include("footer.php");
?>
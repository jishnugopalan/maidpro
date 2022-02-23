<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Update Category</h2>
    	<form method="POST" action="addcat.php" enctype="multipart/form-data">
    	<div class="col-md-4">
        <label>Select Category</label>
        <select class="form-control" name="category_id" onchange="getrate(this.value)">
           <option value disabled selected>Select Category</option>
          <?php
          include("dbconn.php");
          $sql="select * from category";
          $res=mysqli_query($conn,$sql);
          foreach($res as $cat){
          ?>
          <option value="<?php echo $cat['category_id']?>"><?php echo $cat['category']?></option>
          <?php
          }
          ?>

        </select>
      </div>
      <script type="text/javascript">
        function getrate(val){
          console.log(val)
          var category_id=val
          $.ajax({
            type:"POST",
            url:"getrate.php",
            data:'category_id='+val,
            success:function(data){
              console.log(data)
              document.getElementById("rate").value=data
            }
          })
        } 
      </script>
      <div class="clearfix"></div>
      <div class="col-md-4">
        <label>Rate</label>
        <input type="number" class="form-control" name="rate" value="" id="rate" required="">
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
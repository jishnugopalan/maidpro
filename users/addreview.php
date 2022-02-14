<?php
	include("header.php");
  $workerid=$_GET['workerid'];
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Services</h2>

<?php
$sql1="select * from registration where email='$workerid'";
    $r1=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
    $name=$r1['name'];
?>
<div class="col-md-6">
  <div class="profile_img">  
                                    <span class="prfil-img"><img style="width:30%,vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;" src="../users/<?php echo $r1['profile_pic']?>" alt=""> </span> 
                                    <div class="user-name">
                                        <?php echo $r1['name'] ?>
                                        <span></span>
                                        
                                    </p>
                                    </div>
                                    
                                </div>  
                                <div class="clearfix"></div>
                                <form method="POST" action="reviewadd.php">
                                  <input type="hidden" name="workerid" value="<?php echo $workerid?>">
                                  <div class="col-md-6">
                                    <label>Add a review</label>
                                    <input type="text" required="" name="review" style="width:400px;height: 250px;" class="form-control">
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </form>
    
  
</div>



    	
    </div>
</div>

<?php
	include("footer.php");
?>
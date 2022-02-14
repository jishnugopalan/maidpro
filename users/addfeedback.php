<?php
	include("header.php");
  
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Add Feedbacks</h2>


<div class="col-md-6">
  
                                    
                              
                                
                                <form method="POST" action="feedbackadd.php">
                                  <input type="hidden" name="workerid" value="<?php echo $workerid?>">
                                  <div class="col-md-6">
                                    <label>Add some feedbacks</label>
                                    <input type="text" required="" name="feedbacks" style="width:600px;height: 150px;" class="form-control">
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </form>
    
  
</div>
<div class="clearfix"></div>

<?php
$email=$_SESSION["email"];
$sql="select * from feedbacks where email='$email'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){

  echo "<h3>Recent Feedbacks</h3><br>";
  while($r=mysqli_fetch_assoc($res)){
?>
<div class="col-md-4">
  <p><?php echo $r['feedback']?></p>
  <h5>Posted at <?php echo $r['feedbacktime']?></h5>

</div>
<div class="clearfix"></div>
<?php
  }
}

?>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
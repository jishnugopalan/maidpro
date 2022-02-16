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
                               <h4>Add a review</h4>
            
               <form action="reviewadd.php" method="POST">
                             <fieldset>                 
                               <section>
                                <div class="rating">
            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
            <label for="star5" data-toggle="tooltip" title="5"><h4>☆</h4></label>
            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
            <label for="star4" data-toggle="tooltip" title="4"><h4>☆</h4></label>
            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
            <label for="star3" data-toggle="tooltip" title="3"><h4>☆</h4></label>
            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
            <label for="star2" data-toggle="tooltip" title="2"><h4>☆</h4></label>
            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
            <label for="star1" data-toggle="tooltip" title="1"><h4>☆</h4></label>
            <div class="clear"></div>
        </div>
                              </section>
                            </fieldset>
                            <input type="hidden" name="workerid" value="<?php echo $workerid?>">
                            <input type="text" class="form-control" name="review" required="" placeholder="Write some review" style="width:300px;height: 100px;">
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
            
    
  
</div>



    	
    </div>
</div>

<?php
	include("footer.php");
?>
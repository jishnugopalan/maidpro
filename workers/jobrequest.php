<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Job Request</h2>
 <?php
 $sql="select * from request where workerid='$email'";
 $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)>0){
 	while($r=mysqli_fetch_assoc($res)){
 		$userid=$r['userid'];
 		$sql1="select * from registration where email='$userid'";
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
                                        <p><span><?php echo $r['request_datetime']?></span>
                                    </p>
                                    </div>
                                    
                                </div>  
                                <div class="clearfix"></div>
    <p><?php echo $r['needs']?></p>
    <!-- user details -->
    <a href="" data-toggle="modal" data-target="#exampleModalCenter">
  View User Details
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $name?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="profile_img">  
                                    <span class="prfil-img"><img style="width: 50px;height: 50px;border-radius: 20%;" src="../users/<?php echo $r1['profile_pic']?>" alt=""> </span> 
                                    <div class="user-name">
                                        <?php echo $r1['name'] ?>
                                        <span></span>
                                        
                                    </p>
                                    </div>
                                    
               </div>  

             <div class="clearfix"></div>  
              Email:<?php echo $r1['email']?><br>
               Phone:<?php echo $r1['phone']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <?php 
     if($r['request_status']==0){
    ?>
    <a href="acceptrequest.php?requestid=<?php echo $r['request_id']?>&status=1&userid=<?php echo $r['userid']?>" class="btn btn-success">Accept</a>
    <a href="acceptrequest.php?requestid=<?php echo $r['request_id']?>&status=2&userid=<?php echo $r['userid']?>" class="btn btn-danger">Reject</a>
    <?php
     }
     if($r['request_status']==1){
     ?>
     	<h4 style="color:green;">Accepted</h4>
     	<a href="" class="btn btn-primary">Chat now</a>
     	<a href="" class="btn btn-primary">Send Bill</a>
     	<a href="" class="btn btn-primary">Marked as Completed</a>



     <?php
     }
     if($r['request_status']==2){
     ?>
     	<h4 style="color:red;">Rejected</h4>

     	
     <?php
     }
    ?>

</div>

 <?php
 	}
 }
 ?>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
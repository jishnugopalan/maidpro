<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>My Workers</h2>
 <?php
 $sql="select * from request where userid='$email'";
 $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)>0){
 	while($r=mysqli_fetch_assoc($res)){
 		$userid=$r['workerid'];
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
    <a href="viewdetails.php?email=<?php echo $r['workerid']?>">
  View Worker Details
</a>
    <!-- <a href="" data-toggle="modal" data-target="#exampleModalCenter">
  View Worker Details
</a> -->

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
       
      </div>
    </div>
  </div>
</div>
    
    <?php
     
     if($r['request_status']==1){
     ?>
     	<h4 style="color:green;">Accepted</h4>
     	<a href="chat.php?userid=<?php echo $r['workerid']?>&&username=<?php echo $r1['name']?>" class="btn btn-primary">Chat now</a>
     	<a href="viewbill.php?requestid=<?php echo $r['request_id']?>" class="btn btn-primary">View Bill</a>
  


     <?php
     }
     if($r['request_status']==2){
     ?>
     	<h4 style="color:red;">Rejected</h4>

     	
     <?php
     }
     if($r['request_status']==0){
     ?>
      <h4 style="color:red;">Not Accepted</h4>

      
     <?php
     }
    ?>
     <?php
     
     if($r['request_status']==3){
     ?>
      <h4 style="color:green;">Completed</h4>
      <a href="addreview.php?workerid=<?php echo $r['workerid']?> " class="btn btn-primary">Add Review</a>

      
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
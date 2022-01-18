<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Notifications</h2>

    	
    	<?php
        //$notification_id=$_GET["id"];
        $em=$_SESSION['email'];
        $sql7="select * from notification where receiverid='$em' order by notification_datetime desc";
        $res=mysqli_query($conn,$sql7);
        if(mysqli_num_rows($res)>0){


        while($row=mysqli_fetch_assoc($res)){
            $sender_id=$row['senderid'];

      


        if($row["notification_type"]=="Admin"){
                                        $name="Admin";
                                        $pic="../images/profile_pic.png";
                                    }
                                    else{
                                        $sql2="select name,profile_pic from registration where email='$sender_id'";
                                        $result=mysqli_query($conn,$sql2);
                                        $r2=mysqli_fetch_assoc($result);
                                        $name=$r2["name"];
                                        $pic=$r2["profile_pic"];
                                    } 
                                    ?>
       
                     
                        <!--  <div class="user_img"><img style="width:30%;" class="bg-info rounded-circle" src="<?php echo $pic ?>" class="avatar" alt=""></div><h3 class="panel-title"><?php echo $name ?></h3> -->
                         <div class="profile_img">  
                                    <span class="prfil-img"><img style="width:30%,vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;" src="../users/<?php echo $pic?>" alt=""> </span> 
                                    <div class="user-name">
                                        <?php echo $name ?>
                                        <span></span>
                                        <p><span><?php echo $row["notification_datetime"]?></span>
                                    </p>
                                    </div>
                                    
                                </div>  

                         <div class="panel-body"></div><?php echo $row['content']?>
                         <?php
                         if($row["notification_type"]=="request"){
                        ?>
                        <div class="clearfix"></div>

                         <a href="jobrequest.php" class="btn btn-success">View Details</a>
                        <?php
                         }

                         ?>
                     
                         <?php
                     }
                 }

                         ?>
                   
    </div>
</div>

<?php
	include("footer.php");
?>
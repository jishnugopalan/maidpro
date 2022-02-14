<?php
	include("header.php");
  
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Feedbacks</h2>

      <?php
      include("dbconn.php");
$sql3="select * from feedbacks";
$res=mysqli_query($conn,$sql3);
if(mysqli_num_rows($res)>0){
    while($r3=mysqli_fetch_assoc($res)){
        $userid=$r3['email'];
       
        $sql4="select * from registration where email='$userid'";
        $r4=mysqli_fetch_assoc(mysqli_query($conn,$sql4));
?>
<div class="col-md-6">

   <div class="profile_img">  
                                    <span class="prfil-img"><img style="width:30%,vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;" src="../users/<?php echo $r4['profile_pic']?>" alt=""> </span> 
                                    <div class="user-name">
                                        <?php echo $r4['name'] ?>
    <p><?php echo $r3['feedback']?></p>
    <h5>Posted at <?php echo $r3['feedbacktime']?></h5>
</div>
   </div>
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
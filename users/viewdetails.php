<?php
    include("header.php");
?>
<?php
$worker_email=$_GET['email'];

?>
<div class="inner-block">
    <div class="blank">
        <h2>Workers</h2>

        <?php
        $sql="select * from registration,verification,worker where verification.status=1 and worker.email='$worker_email' and verification.email='$worker_email' and registration.email='$worker_email'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while ($r=mysqli_fetch_assoc($res)) {
        ?>
        <div class="col-md-12 bg-white text-center">
            <a href="viewdetails.php?email=<?php echo $r['email']?>">
            <img src="../users/<?php echo $r['profile_pic']?>" width=240>
            <h3><?php echo $r['name']?></h3>
            <p>Location:

                <?php
                                     $d=$r["district"];
                                     
                                     $s="select district from district where district_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["district"];
                        echo $c;
                        $d=$r["state"];
                                     
                                     $s="select state from state where state_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["state"];
                        echo ",$c";

                ?>
                <br>
                 

            </p>
        </a>
        </div>
        <div class="col-md-6">
            <h2>Job Details</h2>
            <p>Job category:<?php echo $r['category']?><br>
               Expected Service Charge(per day):<?php echo $r['service_charge']?> Rs<br>
               Experience:<?php echo $r['experience']?> years    
            </p>
            <p>
               Description:<?php echo $r['description']?>
                
            </p>
            
        </div>
        <div class="col-md-6">
            
            <h2>About <?php echo $r['name']?></h2>
            <p>
                
                <?php echo $r['house']?><br>
                <?php echo $r['place']?><br>
                <?php
                                     $d=$r["district"];
                                     
                                     $s="select district from district where district_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["district"];
                        echo $c;
                        $d=$r["state"];
                                     
                                     $s="select state from state where state_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["state"];
                        echo ",$c";

                ?><br>
                Pin:<?php echo $r['pincode']?><br>
                Email:<?php echo $r['email']?><br>
                Phone:<?php echo $r['phone']?>

            </p>
        </div>
        <div class="clearfix"></div>

        <?php
                // code...
            }
        }
        else{
        ?>

        <h3 class="text-center">No workers found</h3>

        <?php
        }

        ?>


    <br>
    <?php 
    if($email!=$worker_email){

    
    ?>
    <form method="POST" action="sendrequest.php">
        <div class="clearfix"></div>
        <div class="col-md-6">
             <label>Address</label>
            <input type="text" name="contact_address" class="form-control" required="" style="height: 100px;" placeholder="Enter the address and location landmark">
            <label>Contact Number</label>
            <input type="text" pattern="[6789][0-9]{9}" class="form-control" name="contact_number" required="" placeholder="Contact number">
        </div>
        <div class="col-md-6">
           
        <label>Explain Your needs</label>
        <input type="hidden" name="worker_email" value="<?php echo $worker_email?>" >
        <input type="text" class="form-control" name="needs" style="height: 100px;" required="" placeholder="Explain the required job">
        <label>Booking date</label>
        <input type="date" min="<?php echo date("Y-m-d")?>" class="form-control" name="booking_date" required="">
        

    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
        <button class="btn btn-primary">Send Request</button>
    </div>
        
    </form>
    <?php
}
    ?>
    
    

<div class="clearfix"></div>
<h3>Review</h3>
<?php
$sql3="select * from review where workerid='$worker_email'";
$res=mysqli_query($conn,$sql3);
if(mysqli_num_rows($res)>0){
    while($r3=mysqli_fetch_assoc($res)){
        $userid=$r3['userid'];
       
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
    <br><?php echo $r3['review']?>
    <p>Rated <?php echo $r3['star']?>☆</p>
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
<div class="clearfix"></div>
<?php
    include("footer.php");
?>
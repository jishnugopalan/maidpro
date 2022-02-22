<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Maid Dashboard</h2>
<?php
$email=$_SESSION["email"];
$sql="select * from registration,worker,verification where registration.email='$email' and worker.email='$email' and verification.email='$email'";

$r=mysqli_fetch_assoc(mysqli_query($conn,$sql));


?>
<div class="col-md-12 bg-white text-center">
            
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
            
            <h2>Personal Details</h2>
            <p>
              Date of Birth:<?php echo $r['date_of_birth']?><br>
              Gender:<?php echo $r['gender']?><br>
                
               House: <?php echo $r['house']?><br>
               Place: <?php echo $r['place']?><br>
               District: <?php
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
            <a href="myprofile.php" class="btn btn-primary">Update</a>
        </div>
        <div class="clearfix"></div>



    	
    </div>
</div>

<?php
	include("footer.php");
?>
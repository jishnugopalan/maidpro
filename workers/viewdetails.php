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
    		<img src="../users/<?php echo $r['profile_pic']?>" width=240 height=360>
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
            <p>Starting Time:<?php echo $r['starting_time']?><br>
               Ending Time:<?php echo $r['ending_time']?><br>
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
<div class="col-md-12 text-center">
    <br>
        <button class="btn btn-primary">Book Now</button>
    
</div>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
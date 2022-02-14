<?php
	include("header.php");
    include("dbconn.php");
?>
<?php
$category=$_GET['category'];

?>
<div class="inner-block">
    <div class="blank">
    	<h2>Workers</h2>

    	<?php
    	$sql="select * from registration,verification,worker where verification.status=1 and worker.email=verification.email and verification.email=registration.email and worker.category='$category' ";
    	$res=mysqli_query($conn,$sql);
    	if(mysqli_num_rows($res)>0){
    		while ($r=mysqli_fetch_assoc($res)) {
    	?>
    	<div class="col-md-4 bg-white">
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
    	
    </div>
</div>

<?php
	include("footer.php");
?>
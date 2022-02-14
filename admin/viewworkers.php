
<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Approve Workers</h2>
    	<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Verification Details</th>
            <th>Job Details</th>
            <th>Status</th>


        </tr>
    </thead>
    <tbody>
    	<?php
    	include("dbconn.php");
    	$sql="select * from registration,verification,worker where registration.email=verification.email and verification.email=worker.email and verification.status=0";
    	$res=mysqli_query($conn,$sql);
    	if(mysqli_num_rows($res)>0){
    		while($r=mysqli_fetch_assoc($res)){
    	?>

    	<tr>
            <td><?php echo $r['name']?></td>
            <td><?php echo $r['house']?><br>
            	<?php echo $r['place']?><br>
            	<?php
                                     $d=$r["district"];
                                     
                                     $s="select district from district where district_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["district"];
                        echo $c;

                                     ?><br>
                 <?php
                                     $d=$r["state"];
                                     
                                     $s="select state from state where state_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["state"];
                        echo $c;

                                     ?><br>
            	Pin:<?php 
            	echo $r['pincode']
            	?><br>
            	Phone:<?php echo $r['phone']?><br>
            	Email:<?php echo $r['email']?>

            </td>
            <td>
            	<?php echo $r['verification_type']?><br>
            	<a href="../users/<?php echo $r['document']?>"><img src="../users/<?php echo $r['document']?>" class="img-thumbnail" width="200" height="200"></a>
            </td>
            <td>
            	Job Category:<?php echo $r['category']?><br>
            	Expected Service Charge:<?php echo $r['service_charge']?>Rs<br>
            	Experience:<?php echo $r['experience']?>years<br>
            	Starting time:<?php echo $r['starting_time']?><br>
            	Ending time:<?php echo $r['ending_time']?><br>
            	Description:<?php echo $r['description']?>
            </td>
            <td>
            	<a class="btn btn-success" href="approve.php?email=<?php echo $r['email']?>">Approve</a>
            	<a class="btn btn-danger" href="reject.php?email=<?php echo $r['email']?>">Reject</a>
            </td>
        </tr>
    	<?php
    		}
    	}
    	?>
        
        
    </tbody>
</table>
    </div>
</div>

<?php
	include("footer.php");
?>
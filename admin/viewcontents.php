<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2></h2>
      <table id="table_id" class="display">
    <thead>
        <tr>
            <th>User Name</th>
            <th>Worker name</th>
            <th>Work Booked Date</th>
            <th>Status</th>


        </tr>
    </thead>
    <tbody>
<?php
include("dbconn.php");
$sql="select * from request";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
  while($r=mysqli_fetch_assoc($res)){
    $workerid=$r["workerid"];
    $userid=$r["userid"];

?>
<tr>
  <td>
    <?php
    $s1="select name from registration where email='$workerid'";
    $r1=mysqli_fetch_assoc(mysqli_query($conn,$s1));
    echo $r1["name"];

    ?>
    
  </td>
  <td>
    <?php
    $s1="select name from registration where email='$userid'";
    $r1=mysqli_fetch_assoc(mysqli_query($conn,$s1));
    echo $r1["name"];

    ?>
    
  </td>
  <td>
    <?php echo $r["booking_date"]?>
  </td>
<td>
  <?php
  $status=$r["request_status"];
  if($status==0)
    echo "Pending";
  if($status==1)
    echo "Accepted";
  if($status==2)
    echo "Rejected";
  if($status==3)
    echo "Completed";
  ?>
</td>
  </tr>

<?php
  }
}
?>
</tbody></table>


    	
    </div>
</div>

<?php
	include("footer.php");
?>
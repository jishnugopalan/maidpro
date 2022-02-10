<?php
session_start();
include("dbconn.php");
$reciever=$_SESSION['reciever'];
$email=$_SESSION['email'];
$message=$_POST["message"];

$sql="insert into chat(sender_email,reciever_email,message)values('$email','$reciever','$message')";
if(mysqli_query($conn,$sql)){
	$sq="select profile_pic from registration where email='$email'";
	$re=mysqli_query($conn,$sq);
	$r1=mysqli_fetch_assoc($re);
?>
<div class="container" >
<img src="<?php echo $r1['profile_pic']?>" alt="Avatar"  style="width:100%;" class="right">
  <p><?php echo $message ?></p>
  <span class="time-left text-primary"><?php 
  date_default_timezone_set('Asia/Kolkata');
  $t=date('Y-m-d H:i:s');
  echo $t; ?></span>
</div>
<?php
}
?>
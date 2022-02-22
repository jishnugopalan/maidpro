<?php
session_start();
include("dbconn.php");


if(isset($_POST['updateprofile'])){
	$email=$_SESSION["email"];
$gender=$_POST["gender"];
$dob=$_POST["date_of_birth"];
$house=$_POST["house"];
$street=$_POST["street"];
$phone=$_POST["phone"];
$state=$_POST["state"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$sql1="update registration set gender='$gender',date_of_birth='$dob',house='$house',place='$street',state=$state,district=$district,pincode=$pincode,phone=$phone where email='$email'";
if(mysqli_query($conn,$sql1)){
	?>
	<script type="text/javascript">
		alert("Updated Successfully")
		window.location.replace("myprofile.php")
	</script>
	<?php
}
}
if(isset($_POST['updatepic'])){
	$email=$_SESSION["email"];
	$target_dir="../users/images/";
	$target_file2= $target_dir . basename($_FILES["file"]["name"]);
	if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file2)){
		$sql="update registration set profile_pic='$target_file2' where email='$email'";
		if(mysqli_query($conn,$sql)){
			?>
	<script type="text/javascript">
		alert("Updated Successfully")
		window.location.replace("myprofile.php")
	</script>
	<?php
		}
	}

}


// $target_dir="users/uploads/";
// $target_file2= $target_dir . basename($_FILES["photo"]["name"]);


// $sql1="update registration set gender='$gender',date_of_birth='$dob',house='$house',place='$street',state=$state,district=$district,pincode=$pincode where email='$email'";
// if(mysqli_query($conn,$sql1)){
// 		if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file2)){
// 			$sql2="insert into verification(email,verification_type,document)values('$email','$verification_type','$target_file2')";
// 			if(mysqli_query($conn,$sql2)){
// 				//ECHO "IN";
// 				$sql3="insert into bank_account(email,ac_holder_name,ac_no,ifsc,bank_name)values('$email','$ac_holder_name',$ac_no,'$ifsc','$bank_name')";
// 				//echo $sql3;
// 				$sql4="insert into worker(email,category,service_charge,description,experience)values('$email','$category','$service_charge','$description','$experience')";
// 				if(mysqli_query($conn,$sql4)){
// 					if(mysqli_query($conn,$sql3)){
// 					echo "<script>alert('Form submitted successfully. Please wait for admin approval')
// 					window.location.replace('new/index.php')
// 					</script>";
					
// 				}

// 				}
				
// 			}
// 		}
// }

?>
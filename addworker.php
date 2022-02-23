<?php
session_start();
include("dbconn.php");
$email=$_POST["email"];
$gender=$_POST["gender"];
$dob=$_POST["date_of_birth"];
$house=$_POST["house"];
$street=$_POST["street"];
//$country=$_POST["country"];
$state=$_POST["state"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
//$adhaar_no=$_POST["adhaar_no"];
//$adhaar=$_POST["adhaar"];
//$photo=$_POST["photo"];
// $ac_holder_name=$_POST["ac_holder_name"];
// $ac_no=$_POST["ac_number"];
// $ifsc=$_POST["ifsc"];
// $bank_name=$_POST["bank_name"];
$verification_type=$_POST["verification_type"];

$category=$_POST["job_category"];
$sql6="select category from category where category_id=$category";
$r6=mysqli_fetch_assoc(mysqli_query($conn,$sql6));
$category=$r6['category'];

$service_charge=$_POST["service_charge"];
// $starting_time=$_POST["starting_time"];
// $ending_time=$_POST["ending_time"];
$experience=$_POST["experience"];
$description=$_POST["description"];

$target_dir="users/uploads/";
$target_file2= $target_dir . basename($_FILES["photo"]["name"]);


$sql1="update registration set gender='$gender',date_of_birth='$dob',house='$house',place='$street',state=$state,district=$district,pincode=$pincode where email='$email'";
if(mysqli_query($conn,$sql1)){
		if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file2)){
			$sql2="insert into verification(email,verification_type,document)values('$email','$verification_type','$target_file2')";
			if(mysqli_query($conn,$sql2)){
				//ECHO "IN";
				// $sql3="insert into bank_account(email,ac_holder_name,ac_no,ifsc,bank_name)values('$email','$ac_holder_name',$ac_no,'$ifsc','$bank_name')";
				//echo $sql3;
				$sql4="insert into worker(email,category,service_charge,description,experience)values('$email','$category','$service_charge','$description','$experience')";
				if(mysqli_query($conn,$sql4)){
					
					echo "<script>alert('Form submitted successfully. Please wait for admin approval')
					window.location.replace('new/index.php')
					</script>";
					
				

				}
				
			}
		}
}

?>
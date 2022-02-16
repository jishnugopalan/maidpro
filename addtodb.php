<?php
$email = $_POST['e'];
$name = $_POST['n'];
$phone = $_POST['ph'];
$seeker=$_POST['seeker'];
if($seeker==1){
	$user="not user";
}
else
$user="user";
//$password = $_POST['pa'];
//$usertype = $_POST['us'];
//$email = $_POST['email'];

echo $email;

include('dbconn.php');
	$sql="insert into login(email,usertype)values('$email','$user')";
if(mysqli_query($conn,$sql)){
	$sql1="insert into registration(email,name,phone)values('$email','$name','$phone')";
	if(mysqli_query($conn,$sql1)){
	echo "inserted";
		
	}
}







?>




					
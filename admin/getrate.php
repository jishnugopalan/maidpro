<?php
include("dbconn.php");
$category_id=$_POST['category_id'];

$sql="select * from category where category_id=$category_id";
$r=mysqli_fetch_assoc(mysqli_query($conn,$sql));
echo $r['rate'];
?>
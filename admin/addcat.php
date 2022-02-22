<?php
include("dbconn.php");
$category_id=$_POST["category_id"];
$rate=$_POST['rate'];

$sql="update category set rate=$rate where category_id=$category_id";
if(mysqli_query($conn,$sql)){
   ?>
   <script type="text/javascript">
      alert("Rate added successfully")
      window.location.replace("addcategory.php")
   </script>
   <?php
}

?>
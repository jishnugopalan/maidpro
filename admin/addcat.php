<?php
include("dbconn.php");
$category=$_POST["category"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["catimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
?>
<script type="text/javascript">
	alert("Please insert an image")
	window.location.replace("addcategory.php")
</script>
<?php
}
 if (move_uploaded_file($_FILES["catimage"]["tmp_name"], $target_file)) {
    $sql="insert into category(category,category_image)values('$category','$target_file')";
    if(mysqli_query($conn,$sql)){
    	?>
    	<script type="text/javascript">
	alert("Category added successfully")
	window.location.replace("addcategory.php")
</script>

    	<?php
    }
 } else {
    echo "Sorry, there was an error uploading your file.";
 }
?>
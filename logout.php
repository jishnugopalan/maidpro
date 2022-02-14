<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
if(isset($_SESSION['email'])){
	session_destroy();
?>
<script type="text/javascript">
	window.location.replace("new/index.php")
</script>
<?php

}
else{
	?>
<script type="text/javascript">
	window.location.replace("new/index.php")
</script>
<?php
}



?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("dbconn.php");
$email=$_GET['email'];
$query ="SELECT * FROM state";
$results = mysqli_query($conn,$query);
$s="select name,email,phone from registration where email='$email'";

$r=mysqli_query($conn,$s);
$data=mysqli_fetch_assoc($r);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
<script type="text/javascript">
		function getEmail(val){
			console.log("in getEmail")
			console.log(val)
			$.ajax({
				type:"POST",
				url:"getemail.php",
				data:'email='+val,
				success: function(data){
		console.log(data)
	
		$("#showresult").html(data);


	}
			})
		}
	</script>
</head>
<body>	
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Maid Details</h1>
			</div>
			<div class="signup-block">
				<form method="POST" action="addworker.php" enctype="multipart/form-data">

<h3 class="text-center">Personal Information</h3>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control"  required=""  name="username" id="username" value="<?php echo $data['name'] ?>" readonly>
    <span style="color:red;" id="username_error"></span>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" required=""  name="email" value="<?php echo $data['email'] ?>" readonly>
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" class="form-control"  required="" name="phone" id="phone" value="<?php echo $data['phone'] ?>" readonly>
    <span style="color:red;" id="phone_error"></span>

  </div>
   <fieldset class="col-md-6">
   <label for="inputEmail4" class="form-label">Gender</label>
    <br>
    <div class="col-sm-10">
      <div class="form-check">&nbsp&nbsp&nbsp
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
        <label class="form-check-label" for="gridRadios1">
         Male
        </label>
      
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
        <label class="form-check-label" for="gridRadios2">
         Female
        </label>
      </div>
      
    </div>
  </fieldset>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="date_of_birth" required="" name="date_of_birth">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">House</label>
    <input type="text" class="form-control" id="house" required="" pattern="[a-zA-Z]+\[ .]+\[0-9]" name="house" >
    <span class="error_form" id="house_error"></span>

  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Street</label>
    <input type="text" class="form-control" id="place" required="" name="street">
    <span class="error_form" id="place_error"></span>

  </div>
    <div class="col-md-6">
  <label for="inputState" class="form-label">State</label><br>
  <select class="form-control" aria-label="Default select example" onChange="getDistrict(this.value);" required="" name="state" id="state">
  <option value disabled selected>Select State</option>
<?php
foreach($results as $state) {
?>
<option value="<?php echo $state["state_id"]; ?>"><?php echo $state["state"]; ?></option>
<?php
}
?>
</select>
<script type="text/javascript">
	function getDistrict(val) {
    $.ajax({
    type: "POST",
    url: "getdistrict.php",
    data:'state_id='+val,
    success: function(data){
        $("#city-list").html(data);
    }
    });
}
</script>
    </div>
    <div class="col-md-6">
  <label for="inputState" class="form-label">District</label><br>
  <select class="form-control" aria-label="Default select example" id="city-list" name="district" required="">
    <option value="">Select District</option>
  
</select>
    </div>
    <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="pincode" required="" name="pincode">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="clearfix"></div>
     <!--  <h3 class="text-center">Verification Details</h3> -->
 
  <div class="col-md-6">
  	<label>Select Verification Type</label>
  	<select class="form-control" name="verification_type">
  		<option>SSLC</option>
  		<option>Adhaar Card</option>
  		<option>Driving License</option>
  	</select>
  </div>

<div class="col-md-6">
 
  <label>Upload document</label>

  <input type="file" class="custom-file-input" id="customFileLang" name="photo">

</div>
<div class="clearfix"></div>

<!--  <h3 class="text-center">Bank Account Details</h3><br> -->

 
<div class="col-md-12">

    <label for="inputEmail4" class="form-label">Account holder name</label>
    <input type="text" class="form-control" id="" required="" name="ac_holder_name">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Account number</label>
    <input type="number" class="form-control" id="" required="" name="ac_number">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="clearfix"></div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">IFSC Code</label>
    <input type="text" class="form-control" id="" required="" name="ifsc">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Bank name</label>
    <input type="text" class="form-control" id="" required="" name="bank_name">
    <span class="error_form" id="pincode_error"></span>

  </div>

<div class="clearfix"></div>
<!-- <h3 class="text-center">Job Details</h3> -->

<div class="col-md-12">
	<label>Job Category</label>
	<select class="form-control" name="job_category" required="" onchange="getrates(this.value)">
    <option value disabled selected>Select Category</option>
          <?php
          include("dbconn.php");
          $sql4="select * from category";
          $res4=mysqli_query($conn,$sql4);
          foreach($res4 as $cat){
          ?>
          
          <option value="<?php echo $cat['category_id']?>"><?php echo $cat['category']?></option>
          <?php
          }
          ?>



  </select>
  <script type="text/javascript">
        function getrates(val){
          console.log("inn")
          console.log(val)
          var category_id=val
          $.ajax({
            type:"POST",
            url:"admin/getrate.php",
            data:'category_id='+val,
            success:function(data){
              console.log(data)
              document.getElementById("rate").value=data
            }
          })
        } 
      </script>
</div>
<div class="col-md-12">
	<label>Service Charge(per day)</label>
	<input type="number" name="service_charge" id="rate" class="form-control" required="" readonly="">
</div>
<!-- <div class="clearfix"></div> -->
<!-- <div class="col-md-4">
	<label>Starting Time</label>
	<input type="time" name="starting_time" class="form-control" required="">
</div>
<div class="col-md-4">
	<label>Ending Time</label>
	<input type="time" name="ending_time" class="form-control" required="">
</div> -->
<div class="clearfix"></div>
<div class="col-md-12">
	<label>Experience</label>
	<input type="number" name="experience" class="form-control" required="">
</div>
<div class="col-md-12">
	<label>Small Description about you</label>
	<input type="text" name="description" class="form-control" required="">
</div>
<div class="clearfix"></div>

  <div class="col-md-12">
  <br>

    <button type="submit" class="btn btn-primary btn-lg btn-block" id="sub">Submit</button>
  </div>

    		
    	</form>
				<!-- <div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Login here.</a></h4>
				  <h5><a href="new/index.php">Go Back to Home</a></h5>
				</div> -->
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
<!--scrolling js-->
<script type="text/javascript">
function checkpassword(){
	console.log("in")
		var p1=document.getElementById("password").value
		var p2=document.getElementById("p2").value
		if(p1==p2){
			console.log("ok")
			document.getElementById("signup").disabled = false;
			document.getElementById("error").innerHTML=""

		}
		else{
			console.log("falses")
			document.getElementById("error").innerHTML="Please type the correct password"
			document.getElementById("signup").disabled = true;
		}
	}
</script>

		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						

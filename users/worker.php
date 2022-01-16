<?php
	include("header.php");
?>
<?php
$query ="SELECT * FROM state";
$results = mysqli_query($conn,$query);
$s="select name,email,phone from registration where email='$email'";
//echo($s);
$r=mysqli_query($conn,$s);
$data=mysqli_fetch_assoc($r);
?>
<div class="inner-block">
    <div class="blank">
    	<h2>Become a Worker</h2>
    	<div class="blankpage-main">
    		<h3>Guide Lines</h3>
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
    	</div>
 <?php
$sql1="select verification_id from verification where email='$email'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0)
{
	?>
	<script type="text/javascript">
		alert("You are alredy applied,please wait for admin approval")
		window.location.replace("index.php")
	</script>
	<?php
}
 ?>

    	<form method="POST" action="addworker.php" enctype="multipart/form-data">

<h3 class="text-center">Personal Information</h3>
<div class="col-md-4">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control"  required=""  name="username" id="username" value="<?php echo $data['name'] ?>" readonly>
    <span style="color:red;" id="username_error"></span>
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" required=""  name="email" value="<?php echo $data['email'] ?>" readonly>
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>

  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" class="form-control"  required="" name="phone" id="phone" value="<?php echo $data['phone'] ?>" readonly>
    <span style="color:red;" id="phone_error"></span>

  </div>
   <fieldset class="col-md-4">
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
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="date_of_birth" required="" name="date_of_birth">
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">House</label>
    <input type="text" class="form-control" id="house" required="" pattern="[a-zA-Z]+\[ .]+\[0-9]" name="house" >
    <span class="error_form" id="house_error"></span>

  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Street</label>
    <input type="text" class="form-control" id="place" required="" name="street">
    <span class="error_form" id="place_error"></span>

  </div>
    <div class="col-md-4">
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
    <div class="col-md-4">
  <label for="inputState" class="form-label">District</label><br>
  <select class="form-control" aria-label="Default select example" id="city-list" name="district" required="">
    <option value="">Select District</option>
  
</select>
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="pincode" required="" name="pincode">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="clearfix"></div>
      <h3 class="text-center">Verification Details</h3>
 
  <div class="col-md-4">
  	<label>Select Verification Type</label>
  	<select class="form-control" name="verification_type">
  		<option>SSLC</option>
  		<option>Adhaar Card</option>
  		<option>Driving License</option>
  	</select>
  </div>

<div class="col-md-4">
 
  <label>Upload document</label>

  <input type="file" class="custom-file-input" id="customFileLang" name="photo">

</div>
<div class="clearfix"></div>

 <h3 class="text-center">Bank Account Details</h3><br>

 
<div class="col-md-4">

    <label for="inputEmail4" class="form-label">Account holder name</label>
    <input type="text" class="form-control" id="" required="" name="ac_holder_name">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Account number</label>
    <input type="number" class="form-control" id="" required="" name="ac_number">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="clearfix"></div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">IFSC Code</label>
    <input type="text" class="form-control" id="" required="" name="ifsc">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Bank name</label>
    <input type="text" class="form-control" id="" required="" name="bank_name">
    <span class="error_form" id="pincode_error"></span>

  </div>

<div class="clearfix"></div>
<h3 class="text-center">Job Details</h3>
<?php 
$sql2="select category from category";
$res2=mysqli_query($conn,$sql2);
?>
<div class="col-md-4">
	<label>Job Category</label>
	<select class="form-control" name="job_category" required="">
		<option value disabled selected>Select a category</option>
<?php
foreach($res2 as $cat) {
?>
<option value="<?php echo $cat["category"]; ?>"><?php echo $cat["category"]; ?></option>
<?php
}
?>
	</select>
</div>
<div class="col-md-4">
	<label>Expected Service Charge(per day)</label>
	<input type="number" name="service_charge" class="form-control" required="">
</div>
<div class="clearfix"></div>
<div class="col-md-4">
	<label>Starting Time</label>
	<input type="time" name="starting_time" class="form-control" required="">
</div>
<div class="col-md-4">
	<label>Ending Time</label>
	<input type="time" name="ending_time" class="form-control" required="">
</div>
<div class="clearfix"></div>
<div class="col-md-4">
	<label>Experience</label>
	<input type="number" name="experience" class="form-control" required="">
</div>
<div class="col-md-4">
	<label>Small Description about you</label>
	<input type="text" name="description" class="form-control" required="">
</div>
<div class="clearfix"></div>

  <div class="col-md-12">
  <br>

    <button type="submit" class="btn btn-primary btn-lg btn-block" id="sub">Submit</button>
  </div>

    		
    	</form>
    	
    </div>
</div>

<?php
	include("footer.php");
?>
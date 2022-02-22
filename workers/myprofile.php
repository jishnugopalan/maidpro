<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Maid Dashboard</h2>
<?php
$email=$_SESSION["email"];
$sql="select * from registration,worker,verification where registration.email='$email' and worker.email='$email' and verification.email='$email'";

$r=mysqli_fetch_assoc(mysqli_query($conn,$sql));


?>
<div class="col-md-12 bg-white text-center">
            
            <img src="../users/<?php echo $r['profile_pic']?>" width=240>
            <h3><?php echo $r['name']?></h3>
            <p>Location:

                <?php
                                     $d=$r["district"];
                                     
                                     $s="select district from district where district_id=$d";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $dis=$row["district"];
                        echo $dis;
                        $st=$r["state"];
                                     
                                     $s="select state from state where state_id=$st";
                        $res1=mysqli_query($conn,$s);
                        $row=mysqli_fetch_assoc($res1);
                        $c=$row["state"];
                        echo ",$c";

                ?>
                <br>
                 

            </p>
        </a>

        </div>
         <div class="col-md-6">
            <form method="POST" action="updateprofile.php" enctype="multipart/form-data">
                
                <label>Update Profile</label>
                <input type="file" name="file" class="form-control" required="">
                <button type="submit" name="updatepic" class="btn btn-success">Update Picture</button>
            </form>
            
        </div>
       <form method="POST" action="updateprofile.php">
        <div class="clearfix"></div>
           <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control"  required=""  name="username" id="username" value="<?php echo $r['name'] ?>" readonly>
    <span style="color:red;" id="username_error"></span>
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" required=""  name="email" value="<?php echo $r['email'] ?>" readonly>
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>
   <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" class="form-control"  required="" name="phone" id="phone" value="<?php echo $r['phone'] ?>" pattern="[6789][0-9]{9}">
    <span style="color:red;" id="phone_error"></span>

  </div>
  <div class="clearfix"></div>

      
         <fieldset class="col-md-4">
   <label for="inputEmail4" class="form-label">Gender:<?php echo $r['gender']?></label>
    <br>
    <input type="hidden" name="gender" value="<?php echo $r['gender']?>" id="gnd">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="" id="gridRadios1" value="Male" checked oninput="getgender(this.value)">
        <label class="form-check-label" for="gridRadios1">
         Male
        </label>
      
        <input class="form-check-input" type="radio" name="" id="gridRadios2" value="Female" oninput="getgender(this.value)">
        <label class="form-check-label" for="gridRadios2">
         Female
        </label>
      </div>
      
    </div>
    <script type="text/javascript">
        function getgender(val){
            console.log(val)
            document.getElementById("gnd").value=val
        }
    </script>
  </fieldset>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date of birth</label>
    <input type="hidden" name="date_of_birth" id="dob" value="<?php echo $r['date_of_birth']?>">
    <input type="date" class="form-control" id="date_of_birth" required="" name="" onchange="getdob(this.value)" value="<?php echo $r['date_of_birth']?>">

  </div>
  <script type="text/javascript">
      function getdob(val){
        console.log(val)
        document.getElementById("dob").value=val
      }
  </script>

<div class="col-md-4">
    <label for="inputEmail4" class="form-label">House</label>
    <input type="text" class="form-control" id="house" required="" pattern="[a-zA-Z]+\[ .]+\[0-9]" name="house" value="<?php echo $r['house']?>">
    <span class="error_form" id="house_error"></span>

  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Street</label>
    <input type="text" class="form-control" id="place" required="" name="street" value="<?php echo $r['place']?>">
    <span class="error_form" id="place_error"></span>

  </div>
  <div class="col-md-4">
  <label for="inputState" class="form-label">State</label><br>
  <select class="form-control" aria-label="Default select example" onChange="getDistrict(this.value);" required="" name="state" id="state" >
  <option value="<?php echo $d?>" selected><?php echo $c?></option>
<?php
$query ="SELECT * FROM state";
$results = mysqli_query($conn,$query);
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
    url: "../getdistrict.php",
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
   <option value="<?php echo $d?>"selected><?php echo $dis?></option>
  
</select>
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="pincode" required="" name="pincode" value="<?php echo $r['pincode']?>">
    <span class="error_form" id="pincode_error"></span>

  </div>
  <div class="clearfix"></div>
  <div class="col-md-4">
      <button type="submit" name="updateprofile" class="btn btn-primary">Update</button>
  </div>
</form>

    	
    </div>
</div>

<?php
	include("footer.php");
?>
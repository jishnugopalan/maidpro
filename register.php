<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$seeker=$_GET["seeker"];
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
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form action="adduser.php" method="POST">
					<input type="hidden" name="seeker" value="<?php echo $seeker?>">
					<input type="text" name="username" placeholder="Name" required="" id="username">
					<input type="text" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" name="email" placeholder="Email" required="" onchange="getEmail(this.value)" id="email">
					<div id="showresult" style="color:red;"></div>
					<input type="text" name="phone" pattern="[6789][0-9]{9}" placeholder="Phone" required="" id="phone">

					<input type="password" name="password" class="lock" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required="" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password">
					<input type="password" name="conpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="lock" placeholder="Confirm Password" required="" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="p2" onkeyup="checkpassword()">
					<div id="error" style="color: red;"></div>
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" id="signup" value="Sign up">												
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Login here.</a></h4>
				  <h5><a href="index.php">Go Back to Home</a></h5>
				</div>
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


                      
						

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="In Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	<style type="text/css">
		.login{
			padding-left: 350px;
		}
	</style>
	
</head>
<body>
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form>
					<input type="text" name="email" placeholder="Email" required="" id="email">
					<input type="password" name="password" class="lock" placeholder="Password" id="password">
					<div class="forgot-top-grids">
						<!-- <div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div> -->
						<div class="forgot">
							<a href="forgotpassword.php">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<button type="button" class="btn btn-primary btn-lg btn-block" onclick="signinwith()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>Login</button>
					<h3>Not a member?<a href="register.php"> Sign up now</a></h3>				
					
				</form>
				<h5><a href="new/index.php">Go Back to Home</a></h5>
			</div>
      </div>
</div>
<section class="copyright py-4 text-center">
	<div class="container">
		<p>© 2018 In Travel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
	</div>
</section>
<!-- //copyright -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-auth-compat.js"></script>
    <script>
      // Your web app's Firebase configuration
      var firebaseConfig = {
       apiKey: "AIzaSyAVqYwEIyABIzU_kHLtP7Cu8upR18WZTBg",
  authDomain: "maidpro-project.firebaseapp.com",
  projectId: "maidpro-project",
  storageBucket: "maidpro-project.appspot.com",
  messagingSenderId: "123766703936",
  appId: "1:123766703936:web:99e9145260d3418b44dca5"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);

      

      document.getElementById('login').addEventListener('click', GoogleLogin)
      document.getElementById('logout').addEventListener('click', LogoutUser)

      let provider = new firebase.auth.GoogleAuthProvider()



      function signinwith(){
   var email=document.getElementById("email").value
  var password=document.getElementById("password").value
      	firebase.auth().signInWithEmailAndPassword(email, password).then((userCredential) => {
      		console.log("success")
      		//window.location.replace("users/index.php")
      		$.ajax({
      			type:"POST",
				url:"fetchuser.php",
				data:{
					e:email,
				},
				success: function(data){
					console.log(data)
					if(data=="user"){
						console.log("user")
						window.location.replace("users/index.php")
					}
					else if(data=="worker"){
						console.log("worker")
					window.location.replace("workers/index.php")

					}
					
					else if(data=="admin"){
						console.log("Admin")
					window.location.replace("admin/index.php")

					}
					else{
						alert("You are not verified")
					}
				}
      		})

      	})
      	.catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
    alert(errorMessage)
});
      }





      function showUserDetails(user){
	// $("#registration_form").show()
	// document.getElementById("username").value=`${user.displayName}`
	// document.getElementById("email").value=`${user.email}`


        // document.getElementById('userDetails').innerHTML = `
        //   <img src="${user.photoURL}" style="width:10%">
        //   <p>Name: ${user.displayName}</p>
        //   <p>Email: ${user.email}</p>
        // `
      }

      function checkAuthState(){
        firebase.auth().onAuthStateChanged(user=>{
          if(user){
            document.getElementById('LoginScreen').style.display="none"
            document.getElementById('dashboard').style.display="block"
            showUserDetails(user)
          }else{

          }
        })
      }

      function LogoutUser(){
        console.log('Logout Btn Call')
        firebase.auth().signOut().then(()=>{
        	console.log("Logout")
          //document.getElementById('LoginScreen').style.display="block"
         // document.getElementById('dashboard').style.display="none"
        }).catch(e=>{
          console.log(e)
        })
      }
      //checkAuthState()
    </script>
</body>
</html>
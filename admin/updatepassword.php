<?php
	include("header.php");
?>

<div class="inner-block">
    <div class="blank">
    	<h2>Update Password</h2>


<div class="col-md-4">
     <label for="inputEmail4" class="form-label">Enter Registered Email ID</label>
    <input type="email" class="form-control" id="email" required="" name="email">
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>
  <div class="clearfix"></div>
  <div class="col-md-6">
 <button type="button" class="btn btn-primary" onclick="forgotpassword()">Send Mail</button>
</div>


    	
    </div>
</div>
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



      function forgotpassword(){
        var auth = firebase.auth();
var emailAddress = document.getElementById("email").value
auth.sendPasswordResetEmail(emailAddress).then(function() {
  // Email sent.
  console.log('Email Sent');
  alert("Please check your mail for reset password")
}).catch(function(error) {
  // An error happened.
  alert(error.message)
});
      }



      //checkAuthState()
    </script>
<?php
	include("footer.php");
?>
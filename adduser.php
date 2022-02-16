<?php
$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$seeker=$_POST['seeker'];
?>
<script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
<script src="js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript">
	var firebaseConfig = {
        apiKey: "AIzaSyAVqYwEIyABIzU_kHLtP7Cu8upR18WZTBg",
  authDomain: "maidpro-project.firebaseapp.com",
  projectId: "maidpro-project",
  storageBucket: "maidpro-project.appspot.com",
  messagingSenderId: "123766703936",
  appId: "1:123766703936:web:99e9145260d3418b44dca5"
      };

      firebase.initializeApp(firebaseConfig);
phoneSignin();
  function phoneSignin(){
  	console.log("submit")
  var email='<?php echo $email?>'
  var password='<?php echo $password?>'
  
  firebase.auth().createUserWithEmailAndPassword(email, password).then((userCredential) => {
    
    //window.location.replace("login.php")
    console.log("success")
    var name='<?php echo $username?>'
    var email='<?php echo $email?>'
    var phone='<?php echo $phone?>'
    var password='<?php echo $password?>'
    var seeker='<?php echo $seeker?>'
    // var usertype=document.getElementById("usertype").value
    $.ajax({
    	type:"POST",
				url:"addtodb.php",
				data:{
					n:name,
					e:email,
					ph:phone,
          s:seeker,
          
					
					
				},
				success: function(data){
		console.log(data)
		if(seeker==1){
     
      window.location.replace("adminverify.php?email=<?php echo $email?>")
    }
    else{
        window.location.replace("login.php")
    }
	
	}

    })
  })
  .catch(function(error) {
    // Handle Errors here.
    console.log("in reg")
    //window.location.replace("home.php")
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
    console.log(errorMessage.length)
    alert(errorMessage)
    
  });

      }
</script>
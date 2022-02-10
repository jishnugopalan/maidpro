<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$customer_email=$_GET['userid'];
$_SESSION['reciever']=$customer_email;
$customer_name=$_GET['username'];
// $customer_pic=$_GET['customer_image'];
//$_SESSION['sender']=$email;
// $_SESSION['reciever']=$customer_email;
$sql="select profile_pic from registration where email='$customer_email'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
<script type="text/javascript">
  function getAllMsg(){
    $.ajax({
      url:"fetchmsg.php",
      type:'POST',
      data:{

      },
      success:function(data){
        $("#msg").html(data);
        

      }
    })
  }
  function sendmessage(){
    var msg=document.getElementById("message").value
    console.log(msg.length)
    if(msg.length==0)
    {
      alert("Enter some text")
    }
    else{

    $.ajax({
      url:"sendmessage.php",
      method:'POST',
      data:{
        message:msg
      },
      success:function(data){
        console.log("in success")
        $("#send").html(data);
      }
    })
  }
  }
</script>
</head>
<body onload="getAllMsg()">
<div class="container-fluid bg-light">
<h2 class="text-success text-center">MaidPro Messenger</h2>


<a href="index.php">Home</a>

<div class="container bg-success text-light">
  <img style="width:30%,vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;" src="../users/<?php echo $r['profile_pic'] ?>" alt=""><?php echo $customer_name?>
  <!-- <p>Hello. How are you today?</p> -->
 
</div>

<div id="msg">
  
</div>
<div id="send">
  
</div>
<form>
<input style="width: 100%; height:100px;" type="text" name="msg" id="message" placeholder="type your message here" required="" pattern="[a-z][A-Z]"> <input type="submit" class="btn btn-success" id="button" value="Send" onclick="sendmessage()">
</form>
</div>
</body>
</html>
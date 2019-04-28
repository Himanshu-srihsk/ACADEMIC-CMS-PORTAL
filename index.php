<?php
//include('login.php');
//include('register.php');
include('about.php');
session_start();
if(isset($_SESSION["user"])){
	
	header("Location:student.php");
	
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>College Social Network</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <link rel="stylesheet" href="css/adminstyles.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
   <script type="text/javascript" src="main.js"></script>
   <style>
body {font-family: Arial, Helvetica, sans-serif;}




/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
   
  </head>
  <body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top" >
  <a class="navbar-brand">College Social Networking     </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      </ul>
      <ul class="navbar-nav mr-auto">  
	  
      <li class="nav-item">
	  <a style="cursor:grab;" data-toggle="modal" onclick="document.getElementById('id03').style.display='block'">
	  <i class="fa fa-globe" aria-hidden="true"></i> About</a></li>
	  
	  </ul>
<ul class="navbar-nav ml-auto">  
      <li class="nav-item dropdown" style="margin: 0 0 3px 0;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register/Login<i class="fas fa-sign-in-alt"></i>
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
               
		  <a class="dropdown-item"><button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-outline-primary"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</button></a>

		<a class="dropdown-item"><button onclick="document.getElementById('id02').style.display='block'" type="button" class="btn btn-outline-primary"><i class="fa fa-address-book" aria-hidden="true"></i> Sign Up</button> </a>
		 	  
		  <div class="dropdown-divider"></div>
          <!--<a class="dropdown-item" href="#">Something else here</a>-->
        </div>
	
      </li>
    </ul>

  </div>
</nav>

    <br>
	<br>
	<!-- caraousel part-->
	
	<div class="container-fluid">
	<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/pic1.JPEG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/pic4.JPEG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pic3.JPEG" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- php implementation-->
<br>
<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			//include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}
			else if($opt=="login")
			{
			include('login.php');
			}
			
		}
		else
		{
		echo "<h2><b>'Hello visitor, Welcome to our College Network.'</b></h2>
		<i> <b> Join with us and stay Connected</b></i>";?>
          
		
		 

		<button onclick="document.getElementById('id02').style.display='block'" type="button" class="btn btn-outline-primary"><i class="fa fa-address-book" aria-hidden="true"></i> Sign Up</button> 
		 
	<button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-outline-primary"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</button>
		 
		 
		 <!--
modal creation

-->
<!--login modal-->
<div id="id01" class="modal">
  
  <form method="post" class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="images/avtar.JPEG"  style="width:100px;height:100px;" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <!--<label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>-->

	  <div class="row">
		 <div class="col-md-1"></div>
<div class="col-md-10" id="login_msg">
</div>
<div class="col-md-1"></div>
	</div>
	  
	  <label for="e"><b>Email ID</b></label>
      <input type="email" placeholder="Enter Your Registered email here " id="e" name="e" class="form-control" required>
	  
      <label for="p"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="p" name="p" class="form-control" required>
        
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  
	  <center><input type="submit" class="btn btn-success btn-lg" id="login" value="Login" name="login"/>
      </center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<!--end login-->
	   

<!--modal creation for register-->

<div id="id02" class="modal">
  
  <form class="modal-content animate"  method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/avtar.JPEG"  style="width:100px;height:100px;" alt="Avatar" class="avatar">
    </div>

	<div class="row">
		 <div class="col-md-1"></div>
<div class="col-md-10" id="signup_msg">
</div>
<div class="col-md-1"></div>
	</div>
	
    <div class="container">
      <label for="utype"><b>User Type</b></label>
	  <input  type="text" value="1" class="form-control" required disabled />

	  <label for="stuid"><b>Student ID</b></label>
      <input type="text" placeholder="Student ID " name="stuid" class="form-control" required>
	  
	  <label for="uname"><b>Your Name</b></label>
      <input type="text" placeholder="Student Name" name="uname" class="form-control" required>
	  
	  
	  <label for="email"><b>Your Email</b></label>
      <input type="email" placeholder="Student E-mail" name="email" class="form-control" required>
	  
	  
	  
      <label for="pass"><b>Your Password </b></label>
      <input type="password" placeholder="Enter Password" name="pass" class="form-control" required>
       
      
	  <label for="mob"><b>Your Mobile No.</b></label>
      <input type="text" placeholder="Student phone number" name="mob" class="form-control" required>
	  
	  
	  
	  
	  <tr>
					<td><b>Select Your Gender</b></td><br>
					<Td>
				Male <input type="radio" name="gen" value="m" required/>   
				Female  <input type="radio" name="gen" value="f"/>  
					</td>
				</tr>
	  <br>
	  <tr>
					<td><b>Choose Your Hobbies</b></td><br>
					<Td>
					<input value="reading" type="checkbox" name="hob[]"/>  Reading <br/>
					<input value="singin" type="checkbox" name="hob[]"/>   Singing <br/>
					<input value="playing" type="checkbox" name="hob[]"/>  Playing <br/>
					<input value="Dancing" type="checkbox" name="hob[]"/>  Dancing <br/>
					<input value="others" type="checkbox" name="hob[]"/>  Others<br/>
					
					</td>
				</tr>
	   
	   <tr>
					<td><label for="img"><b>Upload  Your Image</b></label> </td>
					<Td><input class="form-control" type="file" name="img" required /></td><br/>
				</tr>
				
				
	   
	   
	   	<tr>
					<td><b>Date of Birth</b></td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					<select name="mm" required>
					<option value="">Month</option>
					<?php
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>


					<select name="dd" required>
					<option value="">Date</option>
					<?php
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					</td>
				</tr>

	   
	   <br><br>
      <Td colspan="2" align="center">
<input type="submit" class="btn btn-success btn-lg" value="Save" id="save" name="save"/>
<input type="reset" class="btn btn-success btn-lg" value="Reset"/>

					</td>
	  
	  <br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<!--end register-->
	

<!--About -->

<!--end About-->

	
		<?php 
		}
		?>
		
</div>
	<!-- container -->


		</div>
	</div>

</div>
<br/>
<br/>
<br>
<br>	
	
<nav class="navbar navbar-default navbar-bottom" style="background:#2C3033">
 <div class="container-fluid" >

  
	<a href="mailto:himanshukumar9334@gmail.com"><i class="fa fa-envelope-open" aria-hidden="true"></i><b>Send mail<b></a>

	   <hr style=" background-color: red;  ">
	</div>
</nav>	

	
<script>
$('.carousel').carousel({
  interval: 2000
})

var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1  || event.target == modal2) {
        modal.style.display = "none";
    }
}

</script>
  </body>
</html>
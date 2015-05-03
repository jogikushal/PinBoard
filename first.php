<?php
	include('login.php'); // Includes Login Script
	 
	 
	if(isset($_SESSION['login_user']))
	{
	header("location: profile.php");
	}
?>
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="design.css">


<div class="container-fluid">
	<div class="row"> 
<div class="background-image"></div>
<div class="testbox">
 
  <h1>Sign - In</h1>
 	
  <form action="" method="post">
      
  
<br> <h4 align="center">UserName :  <br><input type="text" name="username" id="username" placeholder="Email" required/></h4>
 <!-- <label id="icon" for="name"><i class="icon-user"></i></label>       -->
 <!-- <input type="text" name="name" id="name" placeholder="Name" required/> -->
 <!-- <label id="icon" for="name"><i class="icon-shield"></i></label>-->
<br><h4 align="center">Password :  <br><input type="password" name="password" id="password" placeholder="Password" required/></h4>
  
<div class="text-center">
    <button class="btn btn-primary mybutton" name="submit">
			   				Login
	</button><br/><br/> 
 	<p>Not a member ? <br><a href="second.php"> Sign - Up  </a></p>
 </div>  

   <span><?php echo $error; ?></span>
  </form>
  </div>
  </div>

</div>
</body>
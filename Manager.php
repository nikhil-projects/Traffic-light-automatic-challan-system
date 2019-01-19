<?php include('managerlogin.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrator :login</title>
  <link rel="shortcut icon" href="1.jpg" />
	
  <link rel="stylesheet" type="text/css" href="style22.css">
  <link rel="stylesheet" type="text/css" href="styleiot.css">

  
	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
  <style>
    .active3
{
  color: #1b497a;
  text-shadow: -15px 5px 5px rgba(0,0,0,0.3);
  font-weight:bold;
}
  </style>
</head>
<body>
  <div class="Managerhead">
    <?php include("header.php");?>
   <span>Administrator Login
   </span>
  
  </div><div class="error1">
  <?php include('error.php'); ?></div>
 <section>
  	<div class="container">
   	    <div class="form_content">
   	       	<h2>Login Credentials</h2>
   	       	<p>Admin can control the whole database,find any driver by using Plate number and </p>
   	       	<a href="#">Read More</a>
          	</div>
   	    <div class="form_login">
   	    	<h1>Sign In</h1>
           
   	    	<form method="post" action="Manager.php">
   	    		<input type="text" name="username" pattern="[a-z|A-Z]*" placeholder="Username" required/>
   	    		<input type="password" name="password" placeholder="Password" required/>
   	    		<input type="submit" name="login_user" value="Login">
   	    	</form>
   	    	<a href="#">Forget Password?</a>
   	    </div>
   </div>
  </section>
</body>
</html>
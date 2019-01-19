<?php 
  session_start(); 
     
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Manager.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Manager.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="styleiot.css">
  <style type="text/css">
    .driver
    {
      width: 100%;
      height: 150px;
      background-color: #FF6902;
      margin-top: 25px;
      display: flex;
      margin-right:20px; 
    }
    .finddriver
    {
      margin: 15px;
    }
    fieldset
    {
      padding: 15px;
      width: 500px;
    }
    
    legend
    {
      color: blue;
    }
    .finddriver input[type="text"]
    {
        width: 250px;
        padding: 2px;
        margin-right:  5px;
    }
    .finddriver input[type="submit"]
    {
      height: 35px;
      border-radius: 2px solid gray;
      background-color: transparent;
      color: white;
      font-weight: bold;
      outline: none;
      cursor: pointer;
    }
    .finddriver input[type="submit"]:hover
    {
      box-shadow: -15px 5px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
  <?php include("header.php");?>
 
<?php include("tableconnection.php");?>

<?php include("userlogin.php");?>
<div class="driver">
<div class="finddriver">
  <fieldset><legend>Find By Plate Number</legend>
 <form action="today" method="post" id="myform">
  <input class="input" type="text" name="Plate" placeholder="Enter Vehicle Plate Number" Title="Example HR-7879" required/>
  <input type="Submit" name="submit1">
  </form>
  </fieldset>
 

</div>

<div class="finddriver">
  <fieldset><legend>Find By Aadhar Number</legend>
<form action="today" method="post" id="myform">
  <input class="input" type="text" name="Aadhar" title="12 Digit Number" placeholder="Enter Aadhar ID" required/>
  <input type="Submit" name="submit2">
</form>
</fieldset>
</div>
</div>
<?php include('footer.php') ?>
</body>
</html>
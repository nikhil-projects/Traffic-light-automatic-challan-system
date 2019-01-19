<?php 


$errors = array(); 
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
   array_push($errors, "Not Connected To the Server");
}


if (!mysqli_select_db($con,'driver_info'))
{
   array_push($errors, "DataBase Not selected");
}

if (isset($_POST['reg_user']))
{

$pname =mysqli_real_escape_string($con,$_POST['pname']);
$ename =mysqli_real_escape_string($con,$_POST['ename']);
$category =mysqli_real_escape_string($con,$_POST['category']);
$brand=mysqli_real_escape_string($con,$_POST['brand']);
$description=mysqli_real_escape_string($con,$_POST['description']);
$price=mysqli_real_escape_string($con,$_POST['price']);
$Quantity=mysqli_real_escape_string($con,$_POST['Quantity']);
$publish=mysqli_real_escape_string($con,$_POST['publish']);
$pic=mysqli_real_escape_string($con,$_POST['pic']);



  
 	$sql = "INSERT INTO productinfo (pname,ename,category,brand,description,price,Quantity,publish,pic) VALUES
     ('$pname','$ename','$category','$brand','$description','$price','$Quantity','$publish','$pic')";
 
	if(!mysqli_query($con,$sql))
	{
		array_push($errors, "Error problem at system side try Again");
	}
	else
	{
		array_push($errors, "Registeration Sucessfull");
	}

 
}
	
?>

 <!--
<html>
<head>
  <title>Otp Verification</title>
  
  <style type="text/css">
    .otp1{
  margin-top:150px;
  margin-left: 350px;
  width: 700px;
  height: 200px;
   background-color: skyblue;
   animation-delay: 3s;
   text-align: center;


}
.again{
  color: red;
  font-size: 13px;
  border-bottom: dashed;

}


.otp2{
  margin-left: 20px;
  width: 200px;
  height: 30px;
  border-radius: 25px;
  background-color: white;
  padding: 10px;
  margin-top: 20px;
  font-family: arial;
  outline: none;

}
.otp3{
 height: 35px;
 width: 100px;
 color: white;
 background-color: black;
}
.otp3:hover
{
  cursor: pointer;
}

.hr1{
  text-align: center;
}
body
{
  background-color:#1b497a;
  font-family: 'Oxygen', sans-serif;
}
  </style>
 <link rel="stylesheet" type="text/css" href="styleiot.css">
<body>

  
  <div class="otp1">
    <h2 class="hr1">OTP is send to your Respective Number<br>
                     </h2>
<form action="VerifyOTP.php" method="post">
<input class="otp2" type="text" name ="otp" required placeholder="Enter OTP Here" >
<a class="hover"><input class="otp3" type="submit" name="submit" value="submit OTP"></a>
</form>
<div class="again">
  <a href="register.php">Send OTP Again</a></div>
</div>

</div>
</body>
</html>

-->




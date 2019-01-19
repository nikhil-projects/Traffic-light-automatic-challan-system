<?php

session_start(); 
$mobile=$_POST['phone'];
$SentTo='+91'.$mobile;

### Generate randon OTP
$OTPValue=rand(11111,99999);

$_SESSION['OTPSent']= $OTPValue;

#### 2Factor Credentials
$YourAPIKey='your key';

### Sending OTP to Customer's Number
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$url = "https://2factor.in/API/V1/$YourAPIKey/SMS/$SentTo/$OTPValue"; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
$Response= curl_exec($ch); 
curl_close($ch);
?>

<html>
<head>
	<title>Otp Verification</title>
	<link rel="stylesheet" type="text/css" href="styleiot.css">
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
</head>
<body>
	<?php include("header.php");?>
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


<?php

session_start(); 
$mobile=$_POST['phone'];
$SentTo='+91'.$mobile;
$SMS= "i am happy today";
### Generate randon OTP
$OTPValue=rand(11111,99999);

$_SESSION['OTPSent']= $OTPValue;

#### 2Factor Credentials
$YourAPIKey='your key';

### Sending OTP to Customer's Number
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$url = "https://2factor.in/API/V1/$YourAPIKey/$SMS/$SentTo/$OTPValue"; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
$Response= curl_exec($ch); 
curl_close($ch);
?>
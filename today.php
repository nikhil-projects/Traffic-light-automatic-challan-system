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
<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $month . '/' . $day . '/' . $year;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Today Report</title>
	<link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="styleiot.css">
  <style type="text/css">
.parent2
{
  width: 100%;
  background-color:black ;
 display: flex;
}
.form1
{
  margin-left: 50px;
  width: 320px;
  padding: 10px;
  background-color: rgba(0,0,0,0.3);
}
.form1 input
{
  width: 250px;
  height: 35px;
  margin-top: 5px;
  margin-bottom: 5px;
  border-radius: 3px;
}
.form1 button
{
  width: 100px;
  height: 25px;
  margin-top: 10px;
  float: right;
}
fieldset
{
  padding: 10px;
}
.table_container
{
  height: 270px;
}
</style>
</head>
<body>
  
  <?php include("header.php");?>
 
<?php include("todayconnection.php");?>

<?php include("userlogin.php");?>




          
             

<!-- table-->
        <div class="table_container">
          <div class="info">
            <span>Driver Details</span>
          </div>
        <div class="table">
     <table class="paleBlueRows" width="80%" border="1" cellpadding="1" cellspacing="1">
	   <tr>
	   <th>Name</th>
	   <th>Gender</th>
	   <th>Phone</th>
	   <th>Aadhar</th>
	   <th>Car Plate No.</th>
	   <th>Pan Card</th>
     <th>Bank Balance</th>

     
	   </tr>
	      <?php 
           $amount="500";
           	while($user = mysqli_fetch_assoc($result))
          {
          	echo "<tr>";
          	echo "<td>".$user['Fname']," ",$user['Lname']."</td>";	
          	echo "<td>".$user['gender']."</td>";
          	echo "<td>".$user['Phone']."</td>";
          	echo "<td>".$user['Aadhar']."</td>";
          	echo "<td>".$user['Plate']," ",$user['Type']."</td>";
          	echo "<td>".$user['Pan_card']."</td>";
            echo "<td>".$amount."</td>";
          	echo "</tr>";
            $phone=$user['Phone'];
            $name1=$user['Fname'];
            $name2=$user['Lname'];

          	
          }

	?>
</table>
</div>
</div>
<?php 
  
$sms = "$name1 $name2, You Are Not Followed the rules of Red Light Signal,E-challan Of amount Rs. 500 is issued Through IOT were for RED light Jumping.";
  
?>
<div class="parent2">
<div class="form1">
    <form method="POST" action="#">             
<fieldset>
  <legend>SEND SMS TO DRIVER</legend>
  <label>Driver Number</label><input type="tel" name="userMobile"  id="number"  placeholder="Driver Phone Number" value="<?php echo $phone; ?>" pattern="[6789][0-9]{9}"  required/><br>
  <label>Message</label><input type="text" value="<?php echo $sms; ?>" name="userMessage"  id="textMessage" placeholder="Message is predefined,in data base"required/><br>
  <button type="submit" name="SubmitButton" id="btnSend">Send</button>
</fieldset> 
                </form>
              </div></div>


 <?php 

if(isset($_POST['SubmitButton']))
{

$textMessage=$_POST["userMessage"];
$mobileNumber=$_POST["userMobile"];
$apiKey = urlencode('key');
   
   // Message details
   $numbers = array($mobileNumber);
   $sender = urlencode('TXTLCL');
   $message = rawurlencode($textMessage);

   $numbers = implode(',', $numbers);

   // Prepare data for POST request
   $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

   // Send the POST request with cURL
   $ch = curl_init('https://api.textlocal.in/send/');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);   
   // Process your response here
   echo $response;
}    
?>

</body>
</html>

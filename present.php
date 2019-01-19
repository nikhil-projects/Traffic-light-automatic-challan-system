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
</head>
<body>
  <?php include("header.php");?>
 
<?php include("tableconnection.php");?>

<?php include("userlogin.php");?>

        <div class="table_container">
          <div class="info">
            <span>DataBase of Registered Drivers</span>
          </div>
        <div class="table">
     <table class="paleBlueRows" width="100%" border="1" cellpadding="1" cellspacing="1">
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
          	
          }

	?>
</table>
</div>
</div>

</body>
</html>
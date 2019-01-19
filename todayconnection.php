
<?php 
         //this is a data base connection and fetch data using sql
         ?>
    <?php
$errors = array(); 
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
   array_push($errors, "Not Connected To the Server");
}
else
{
  array_push($errors, "Connected To the Server !
    You can register !");
}

if (!mysqli_select_db($con,'driver_info'))
{
   array_push($errors, "DataBase Not selected");
}

   if (isset($_POST['submit1'])) {
    $Plate = mysqli_real_escape_string($con, $_POST['Plate']);
 $user_check_query = "SELECT * FROM car Where Plate='$Plate'";
  $result = mysqli_query($con, $user_check_query);
}
if (isset($_POST['submit2'])) {
    $Aadhar = mysqli_real_escape_string($con, $_POST['Aadhar']);
 $user_check_query = "SELECT * FROM car Where Aadhar='$Aadhar'";
  $result = mysqli_query($con, $user_check_query);
}

 
 
?>


      <?php 
         //------End-----------------------------
         ?>
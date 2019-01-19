
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
 $user_check_query = "SELECT * FROM car";
  $result = mysqli_query($con, $user_check_query);

?>


      <?php 
         //------End-----------------------------
         ?>
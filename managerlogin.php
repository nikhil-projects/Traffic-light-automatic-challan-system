<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('Localhost','root','', 'driver_info');
// LOGIN USER
  if (isset($_POST['login_user'])) 
  {
    $usertype = mysqli_real_escape_string($db, $_POST['usertype']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
///Student login
  if($usertype== "Student")
  {
      $query = "SELECT * FROM student_register WHERE username='$userid' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in as Student";
        header('location: Studentdashboard.php');
      }else {
        array_push($errors, "Wrong userid And password");
      }
    }

 ///Teacher Login
    if($usertype== "Teacher")
  {
      $query = "SELECT * FROM teacher_register WHERE username='$userid' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in as Teacher";
        header('location: Teacherdashboard.php');
      }else {
        array_push($errors, "Wrong userid And password");
      }
    }
/// parent Login
    ///Teacher Login
    if($usertype== "Parent")
  {
      $query = "SELECT * FROM parent_register WHERE username='$userid' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in as Parent";
        header('location: Parentdashboard.php');
      }else {
        array_push($errors, "Wrong userid And password");
      }
    }

  }

?>

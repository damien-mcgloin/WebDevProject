<?php

session_start();

// all login data is passed directly to the database as this method was considered more secure
// for sensitive details like passwords
// only admin access currently is username: admin1      password: password123

$passw = "CNcLCtCbrbmQmD9q";
$user = "dmcgloin01";
$db = "dmcgloin01";
$host = "dmcgloin01.lampt.eeecs.qub.ac.uk";
$conn = new mysqli($host, $user, $passw, $db);

$username = "";
$password = "";
$email = "";
$domain = "";
$usertype = 1;
$errors = array();

if (isset($_POST['admin_login'])) {
  $username = mysqli_real_escape_string($conn, (trim($_POST['username'])));
  $password = mysqli_real_escape_string($conn, (trim($_POST['password'])));

  $username = htmlentities($username);
  $password = htmlentities($password);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0){
    $password = md5($password);
    $query = "SELECT * FROM OhStaffDetails WHERE username='$username' AND password=('$password')";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['adminusername'] = $username;
      $_SESSION['adminsuccess'] = "You are now logged in";
      header('location: view.php?page=1');
    } else {
      $_SESSION['adminfailure'] = "The login details submitted are not valid";
      header('location: adminlogin.php');
    }
  }

}

?>

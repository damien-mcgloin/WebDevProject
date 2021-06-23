<?php

session_start();

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

/* initially used post request but felt posting user details would be too insecure with this method
if (isset($_POST['user_submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $domain = $_POST['domain'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/Practice8/api/api.php?submit";

  $data = http_build_query(
    array(
      'name'=>$username,
      'pass'=>$password,
      'email'=>$email,
      'domain'=>$domain)
  );

  $opts = array(
    'http' => array(
    'method' => 'POST',
    'header' => 'Content-Type: application/x-www-form-urlencoded',
    'content'=> $data
    )
  );

  $context = stream_context_create($opts);

  $result = file_get_contents($endpoint,false,$context);

}
*/

if (isset($_POST['user_submit'])) {

  $username = mysqli_real_escape_string($conn, (trim($_POST['username'])));
  $password = mysqli_real_escape_string($conn, (trim($_POST['password'])));
  $email = mysqli_real_escape_string($conn, (trim($_POST['email'])));
  $domain = mysqli_real_escape_string($conn, (trim($_POST['domain'])));

  $username = htmlentities($username);
  $password = htmlentities($password);
  $email = htmlentities($email);
  $domain = htmlentities($domain);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  $check_query = "SELECT * FROM OhUserDetails WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      $_SESSION['userdouble'] = "Username already exists";
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      $_SESSION['emaildouble'] = "email already exists";
    }
  }

  if (count($errors) == 0) {

    $password = md5($password);

    $insertsql = "INSERT INTO OhUserDetails (username, password, email, domain, UserTypeID)
              VALUES('$username', '$password', '$email', '$domain', '$usertype')";

    $result = $conn->query($insertsql);

    if(!$result) {
      echo $conn->error;
    }

    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

  }

}


if (isset($_POST['user_login'])) {
  $username = mysqli_real_escape_string($conn, (trim($_POST['username'])));
  $password = mysqli_real_escape_string($conn, (trim($_POST['password'])));

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0){
    $password = md5($password);
    $query = "SELECT * FROM OhUserDetails WHERE username='$username' AND password=('$password')";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: community.php');
    } else {
      $_SESSION['failure'] = "The login details submitted are not valid";
      header('location: login.php');
    }
  }

}

?>

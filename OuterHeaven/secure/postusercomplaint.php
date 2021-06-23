<?php

// an endpoint is created allowing data to be passed through the API
// complaint data and usernames are taken from users on support.php page

if (isset($_POST['user_complaint'])) {

  $email = $_POST['useremail'];
  $complaint = $_POST['userissue'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?complaint";

  $data = http_build_query(
    array(
    'email'=>$email,
    'complaint'=>$complaint)
  );

  $opts = array(
    'http' => array(
    'method'=>'POST',
    'header'=>'Content-Type: application/x-www-form-urlencoded',
    'content'=> $data
  )
  );

  $context = stream_context_create($opts);

  $result = file_get_contents($endpoint,false,$context);

}

?>

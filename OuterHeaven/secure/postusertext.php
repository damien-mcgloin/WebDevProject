<?php

// an endpoint is created allowing user posts and delete requests to be passed
// through the API. All user posts and delete requests are made on communitypage.php

if (isset($_POST['user_post'])) {

  $posttopicid = $_GET['post'];
  $text = $_POST['user_text'];
  $username = $_SESSION['username'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?message";

  $data = http_build_query(
    array(
      'username'=>$username,
      'text'=>$text,
      'id'=>$posttopicid)
    );

    $opts = array(
      'http' => array(
        'method'=>'POST',
        'header'=>'Content-Type: application/x-www-form-urlencoded',
        'content'=>$data
      )
    );

    // initially print_r was used to diagnose issues with posting through API
    //print_r($data);

    $context = stream_context_create($opts);

    $result = file_get_contents($endpoint,false,$context);

  }

  if (isset($_POST['user_delete'])) {

      $posttopicid = $_POST['user_delete'];

      $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?delete";

      $data = http_build_query(
        array(
          'topic'=>$posttopicid)
        );

        $opts = array(
          'http' => array(
            'method'=>'POST',
            'header'=>'Content-Type: application/x-www-form-urlencoded',
            'content'=>$data
          )
        );

        //print_r($data);

        $context = stream_context_create($opts);

        $result = file_get_contents($endpoint,false,$context);

  }

?>

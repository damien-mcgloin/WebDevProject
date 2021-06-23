<?php

if (isset($_POST['create_stepone'])) {

  $language = $_POST["create_language"];
  $platform = $_POST["create_platform"];
  $genre = $_POST["create_genre"];
  $name = $_POST['create_name'];
  $date = $_POST['create_date'];
  $developer = $_POST['create_developer'];
  $publisher = $_POST['create_publisher'];
  $categories = $_POST['create_categories'];
  $spytags = $_POST['create_spytags'];
  $achievements = $_POST['create_achievements'];
  $price = $_POST['create_price'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?createstepone";

  $data = http_build_query(
    array(
    'language'=>$language,
    'platform'=>$platform,
    'genre'=>$genre,
    'name'=>$name,
    'date'=>$date,
    'developer'=>$developer,
    'publisher'=>$publisher,
    'categories'=>$categories,
    'spytags'=>$spytags,
    'achievements'=>$achievements,
    'price'=>$price)
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

if (isset($_POST['create_steptwo'])) {

  $positive = 0;
  $negative = 0;
  $average = 0;
  $median = 0;

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?createsteptwo";

  $data = http_build_query(
    array(
    'positive'=>$positive,
    'negative'=>$negative,
    'average'=>$average,
    'median'=>$median)
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

if (isset($_POST['create_stepthree'])) {

  $screenshotone = $_POST["create_screenshotone"];
  $screenshottwo = $_POST["create_screenshottwo"];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?createstepthree";

  $data = http_build_query(
    array(
    'screenshotone'=>$screenshotone,
    'screenshottwo'=>$screenshottwo)
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

if (isset($_POST['create_stepfour'])) {

  $description = $_POST['new_description'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?createstepfour";

  $data = http_build_query(
    array(
    'description'=>$description)
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

if (isset($_POST['create_stepfive'])) {

  $header = $_POST['create_header'];
  $background = $_POST['create_background'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?createstepfive";

  $data = http_build_query(
    array(
    'header'=>$header,
    'background'=>$background)
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

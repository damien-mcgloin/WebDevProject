<?php

// an endpoint is created for each update allowing changes to be made through the API
// updates are all made on updateproduct.php in admin folder
// data was not encrypted as all updates take place within an admin only section of the site

if (isset($_POST['update_name'])) {

    $id = $_GET['game'];
    $nameupdate = $_POST['new_name'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatename";

    $data = http_build_query(
      array(
      'id'=>$id,
      'name'=>$nameupdate)
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

if (isset($_POST['update_language'])) {

    $id = $_GET['game'];
    $languageupdate = $_POST['new_language'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatelanguage";

    $data = http_build_query(
      array(
      'id'=>$id,
      'language'=>$languageupdate)
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

if (isset($_POST['update_platform'])) {

    $id = $_GET['game'];
    $platformupdate = $_POST['new_platform'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updateplatform";

    $data = http_build_query(
      array(
      'id'=>$id,
      'platform'=>$platformupdate)
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

if (isset($_POST['update_genre'])) {

  $id = $_GET['game'];
  $genreupdate = $_POST['new_genre'];

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updategenre";

  $data = http_build_query(
    array(
    'id'=>$id,
    'genre'=>$genreupdate)
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

if (isset($_POST['update_price'])) {

    $id = $_GET['game'];
    $priceupdate = $_POST['new_price'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updateprice";

    $data = http_build_query(
      array(
      'id'=>$id,
      'price'=>$priceupdate)
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

if (isset($_POST['update_date'])) {

    $id = $_GET['game'];
    $dateupdate = $_POST['new_date'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatedate";

    $data = http_build_query(
      array(
      'id'=>$id,
      'date'=>$dateupdate)
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

if (isset($_POST['update_developer'])) {

    $id = $_GET['game'];
    $developerupdate = $_POST['new_developer'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatedeveloper";

    $data = http_build_query(
      array(
      'id'=>$id,
      'developer'=>$developerupdate)
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

if (isset($_POST['update_publisher'])) {

    $id = $_GET['game'];
    $publisherupdate = $_POST['new_publisher'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatepublisher";

    $data = http_build_query(
      array(
      'id'=>$id,
      'publisher'=>$publisherupdate)
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

if (isset($_POST['update_categories'])) {

    $id = $_GET['game'];
    $categoriesupdate = $_POST['new_categories'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatecategories";

    $data = http_build_query(
      array(
      'id'=>$id,
      'categories'=>$categoriesupdate)
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

if (isset($_POST['update_screenshotone'])) {

    $id = $_GET['game'];
    $screenshotoneupdate = $_POST['new_screenshotone'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatescreenshotone";

    $data = http_build_query(
      array(
      'id'=>$id,
      'screenshotone'=>$screenshotoneupdate)
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

if (isset($_POST['update_screenshottwo'])) {

    $id = $_GET['game'];
    $screenshottwoupdate = $_POST['new_screenshottwo'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatescreenshottwo";

    $data = http_build_query(
      array(
      'id'=>$id,
      'screenshottwo'=>$screenshottwoupdate)
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

if (isset($_POST['update_description'])) {

    $id = $_GET['game'];
    $description = $_POST['new_description'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?updatedescription";

    $data = http_build_query(
      array(
      'id'=>$id,
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

// code for deleting products. not currently in use
if (isset($_POST['delete_product'])) {

    $id = $_GET['game'];

    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?deleteproduct";

    $data = http_build_query(
      array(
      'id'=>$id)
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

<?php

session_start();

include("conn/conn.php");
include("functions/functions.php");
include("secure/postusertext.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <!-- Bootstrap CSS framework -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="styles/style.css" />

  <!-- Favicon-->
  <link rel="icon" type="image" href="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Ffavicon.ico?v=1614522313946" alt="company-logo" />
  <!-- Google Fonts Import -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <title>Outer Heaven</title>
</head>

<body>

  <!-- Navigation bar section -->
  <section id="title">

    <?php

    $headertext = generateHeader();
    echo $headertext;

      ?>

  </section>

  <!-- Forums Section-->

  <section id="community-header">

    <div class="community-background container-fluid">
      <img class="community-banner" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-05%20at%2011.03.16%20AM.png?v=1614942275258" alt="biomutant-pic">
    </div>

  </section>

  <section id="community-discussion">

    <div class="community-discussion-background">
      <h2 class="community-text"><i class="fas fa-users"></i> Community</h2>
      <hr class="community-line">

      <div class="row" style="margin: 0;">
      <div class="col-sm-3">
        <img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-05%20at%208.05.04%20PM.png?v=1614974783258" alt="community-banner" style="width: 100%; padding-top: 1rem; padding-bottom: 1rem;">
      </div>
      <div class="col-sm-6">

        <?php

        $post = $_GET['post'];

        $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?post=$post";
        $result = file_get_contents($endpoint);
        $data = json_decode($result, true);

        if(empty($data)) {
          echo "<h6 style='padding-top: 1rem;'>Looks like you're the first one here</h6>
          <h6>What's on your mind?</h6>
          <h6>Why not make a post and see what others have to say?</h6>
          <h6>Remember you have to be signed in to leave a comment though!</h6>
          <img src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcuphead2.png?v=1619371390304' style='width: 100%;'/>";
        } else {

          foreach($data as $row) {

            // cards taken from bootstrap version 5.0
            // post method is used passing data into postusertext.php in secure folder
            // users can only delete posts if they are logged in and their name matches
            // person who made post

        echo "<div class='card' style='width: 100%; margin-top: 1rem'>
                <div class='card-body'>
                  <p class='card-text'><strong>{$row["user"]}</strong> : {$row["post"]}</p>
                </div>
              </div>";
              if(isset($_SESSION['username']) && $_SESSION['username'] == $row["user"]) {
          echo  "<form action='' method='POST'>
                <button class='btn btn-primary' value='{$row["text_id"]}' type='submit' name='user_delete'>Delete</button>
                </form>";
              }

          }

        }

        ?>

      <?php if(isset($_SESSION['username'])) : ?>

        <!-- form posts taken from bootstrap version 5.0 -->
        <!-- post method is used, data passed into postusertext.php in secure folder -->
        <!-- users must be signed in to leave a post, otherwise it doesn't appear -->

      <form action='' method='POST' style='padding-bottom:1.5rem'>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"></label>
        <textarea class="form-control" name="user_text" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class='btn btn-primary' type='submit' name="user_post">Post</button>
      </form>
      <?php endif ?>
      </div>
      <div class="col-sm-3">
        <img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-05%20at%208.05.04%20PM.png?v=1614974783258" alt="community-banner" style="width: 100%; padding-top: 1rem; padding-bottom: 1rem;">
      </div>
      </div>
        <img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-03%20at%206.00.33%20PM.png?v=1614794446084" alt="community-banner" style="width: 100%; padding-top: 1rem; padding-bottom: 1rem;">
      <div class="d-flex justify-content-center">
        <h5>The annual Outer Heaven Sale is coming <strong>May 14th</strong></h5>
      </div>
      <div class="d-flex justify-content-center">
        <h5><strong>50% off</strong> all games more than one year old!</h5>
      </div>
      <div class="d-flex justify-content-center">
        <h5><strong>33% off</strong> all games more than 6 months old!</h5>
      </div>
      <div class="d-flex justify-content-center">
        <h5>Mark your calendars!</h5>
      </div>
      </div>
      </div>
    </div>

  <!-- Footer Section -->
  <section id="footer">

    <?php

    $footertext = generateFooter();
    echo $footertext;

      ?>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>

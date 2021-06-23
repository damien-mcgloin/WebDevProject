<?php

include("conn/conn.php");
include("functions/functions.php");
include("secure/postuserdata.php");


if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

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

  <!-- Community Header Section -->

  <section id="community-header">

    <div class="community-background container-fluid">
      <img class="community-banner" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fmonster%20hunter.png?v=1619313682316" alt="biomutant-pic">
    </div>

  </section>

  <!-- login Section - login form taken from bootstrap version 5.0 -->
  <!-- post method used. data sent through postuserdata.php in secure folder -->

  <section id="login">

    <div class="login-background">
      <div class="login-container">
        <div class="row" style="margin: 0; padding: 0">
          <div class="col-sm-2" style="margin: 0; padding: 0"></div>
          <div class="forum-container col-sm-8" style="margin: 0; padding: 0">
            <h2 class="login-title"><i class="fas fa-user"></i> Log In</h2>
            <hr class="black-line">

            <form action="login.php" method="post">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                <input name="username" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input name="password" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class='col-12'>
                <button class='btn btn-primary' type='submit' name="user_login">Login</button>

                <?php if(isset($_SESSION['failure'])) : ?>
                  <p></p>
                  <h6>
                    <?php
                    echo $_SESSION['failure'];
                    ?>
                  </h6>
                <?php endif ?>

                <?php if(isset($_SESSION['success'])) : ?>
                  <p></p>
                  <?php unset($_SESSION['failure']); ?>
                  <h6>Welcome <?php echo $_SESSION['username']; ?></h6>
                  <h6><a href="login.php?logout" style="color: black">logout</a></h6>
                <?php endif ?>
              <p>Not registered yet? <a href='community.php'>Sign-up here</a>.</p>
              </form>
              <a href="discover.php?page=1"><img class='login-pic' src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fmultiplayer2.jpeg?v=1619281302237' style='padding-top: 20px; width:100%'/></a>
              <h5 class="d-flex justify-content-center" style="padding-bottom: 20px">Find these and more in our discover section!</h5>
            </div>
            <div class="col-sm-2" style="margin: 0; padding: 0"></div>
          </div>
        </div>
        </div>
        </div>

      <div class="Community-Recommendation-background">
        <h3 class="Community-Recommendation-text Recommendation-top-text">Not a member yet?</h3>
        <hr class="Community-Recommendation-line">
        <h5 class="Community-Recommendation-text Recommendation-bottom-text">What are you waiting for? Check out our community page for discussions on all things gaming.</h5>
        <h6 class="Community-Recommendation-text Recommendation-bottom-text">Click the link below to become part of something bigger. Welcome to Outer Heaven</h6>
        <hr class="gameissues-hr issues-section-end">
        <div class="row community-link-row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <a href="community.php"><img class="community-pic img-fluid" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-04%20at%2010.51.04%20PM.png?v=1614898374316" alt="community-pic"></a>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>

  </section>

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

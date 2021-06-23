<?php

include("conn/conn.php");
include("functions/functions.php");
include("secure/postuserdata.php");

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

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

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
      <img class="community-banner" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-05%20at%2011.03.16%20AM.png?v=1614942275258" alt="biomutant-pic">
    </div>

  </section>

  <!-- Community Discussion Forums - contains three tables taken from bootstrap version 5.0 and also tabs for navigating between trailers -->

  <section id="community-discussion">

    <div class="community-discussion-background">
      <h2 class="community-text"><i class="fas fa-users"></i> Community</h2>
      <hr class="community-line">

      <div class="discussion-news">
        <div class="container-fluid">
          <div class="row">
            <div class="discussion-list col-lg-6 col-sm-8">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active recommended-button" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General Forums</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link recommended-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Game Specific Forums</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link recommended-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Upcoming Releases</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table table-striped">
                    <thead>
                      <tr></tr>
                    </thead>
                    <tbody>

                      <?php

                      $searchid = '1';

                      $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?forum=$searchid";
                      $result = file_get_contents($endpoint);
                      $data = json_decode($result, true);

                      foreach($data as $row) {

                      echo"<tr>
                        <th scope='row'><img class='discussion-forum-image' src='{$row["image"]}' alt='outer-heaven-logo' width='30' height='30'></a></th>
                        <td><a href='communitypage.php?post={$row["post_id"]}' class='discussion-link'>{$row["topic"]}</a></td>
                      </tr>";

                    }

                      ?>

                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <table class="table table-striped">
                    <thead>
                      <tr></tr>
                    </thead>
                    <tbody>

                      <?php

                      $searchid = '2';

                      $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?forum=$searchid";
                      $result = file_get_contents($endpoint);
                      $data = json_decode($result, true);

                      foreach($data as $row) {

                      echo"<tr>
                        <th scope='row'><img class='discussion-forum-image' src='{$row["image"]}' alt='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510' width='30' height='30'></a></th>
                        <td><a href='communitypage.php?post={$row["post_id"]}' class='discussion-link'>{$row["topic"]}</a></td>
                      </tr>";

                    }

                      ?>

                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <table class="table table-striped">
                    <thead>
                      <tr></tr>
                    </thead>
                    <tbody>

                      <?php

                      $searchid = '3';

                      $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?forum=$searchid";
                      $result = file_get_contents($endpoint);
                      $data = json_decode($result, true);

                      foreach($data as $row) {

                      echo"<tr>
                        <th scope='row'><img class='discussion-forum-image' src='{$row["image"]}' alt='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510' width='30' height='30'></a></th>
                        <td><a href='communitypage.php?post={$row["post_id"]}' class='discussion-link'>{$row["topic"]}</a></td>
                      </tr>";

                    }

                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="community-page-banner col-lg-3">
              <img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-05%20at%208.05.04%20PM.png?v=1614974783258" alt="community-banner">
            </div>


          </div>

          <hr>
          <h2 class="trailers-title"><i class="fas fa-film"></i> Trailers</h2>
          <hr>

          <div class="trailer-title-text">
            <h4>Curious to see what everyone's talking about?</h4>
            <h5>Check out these trailer's to see some of 2021's most exciting games</h5>
          </div>

          <div class="news-trailers">

            <div class="trailer-list">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active recommended-button" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-trailer1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Hellblade</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link recommended-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-trailer2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Biomutant</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link recommended-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-trailer3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Deathloop</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-trailer">
                <div class="tab-pane fade show active" id="pills-trailer1" role="tabpanel" aria-labelledby="pills-trailer1-tab">
                  <table class="table trailer-table">
                    <thead>
                      <tr></tr>
                    </thead>
                    <tbody>
                      <div class="card-body container-fluid">
                        <h5 class="card-title">Coming 2021</h5>
                        <div class="card-video embed-responsive embed-responsive-16by9">
                          <iframe class="trailer" width="100%" height="500" src="https://www.youtube.com/embed/2TR0gaG01do" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-trailer2" role="tabpanel" aria-labelledby="pills-trailer2-tab">
                  <table class="table trailer-table">
                    <thead>
                      <tr></tr>
                    </thead>
                    <tbody>
                      <div class="card-body container-fluid">
                        <h5 class="card-title">Coming 2021</h5>
                        <div class="card-video embed-responsive embed-responsive-16by9">
                          <iframe class="trailer" width="100%" height="500" src="https://www.youtube.com/embed/r5c0-TFP18g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-trailer3" role="tabpanel" aria-labelledby="pills-trailer3-tab">
                  <table class="table trailer-table">
                    <thead>
                      <tr></tr>
                    </thead>
                    <tbody>
                      <div class="card-body container-fluid">
                        <h5 class="card-title">Coming 2021</h5>
                        <div class="card-video embed-responsive embed-responsive-16by9">
                          <iframe class="trailer" width="100%" height="500" src="https://www.youtube.com/embed/sj39uFEnhgU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


          </div>

        </div>
      </div>
    </div>

    </div>

  </section>

  <!-- Sign up section - sign up form, button and validation both taken from bootstrap version 5.0 -->
  <!-- post method used - data is passed through postuserdata.php in secure folder -->

  <section id="signup">

    <div class="signup-background">

      <hr class="white-line">
      <h2 class="signup-title"><i class="fas fa-user-plus"></i> Sign Up</h2>
      <hr class="white-line">

      <div class="sales-pitch">
        <h4>Sign up below and become part of the Outer Heaven army.</h4>
        <h5>Welcome to our community!</h5>
      </div>

      <div class='signup-forum'>
        <form method="post" action="community.php" class='row g-3 needs-validation' novalidate>
          <div class='col-md-6'>
            <label for='validationCustom01' class='form-label'>Username</label>
            <input type='text' name='username' value="" class='form-control' id='validationCustom01' required>
            <div class='valid-feedback'>
              Looks good!
            </div>
          </div>
          <div class='col-md-6'>
            <label for='validationCustom02' class='form-label'>Password</label>
            <input type='text' name='password' value="" class='form-control' id='validationCustom02' required>
            <div class='valid-feedback'>
              Looks good!
            </div>
          </div>
          <div class='col-md-6'>
            <label for='validationCustom03' class='form-label'>Email</label>
            <input type='text' name='email' value="" class='form-control' id='validationCustom03' required>
            <div class='invalid-feedback'>
              Please provide a valid e-mail address.
            </div>
          </div>
          <div class='col-md-6'>
            <label for='validationCustomUsername' class='form-label'>e.g @gmail.com</label>
            <div class='input-group has-validation'>
              <span class='input-group-text' id='inputGroupPrepend'>@</span>
              <input type='text' name='domain' value="" class='form-control' id='validationCustomUsername' aria-describedby='inputGroupPrepend' required>
              <div class='invalid-feedback'>
                Please choose a valid domain.
              </div>
            </div>
          </div>
          <div class='col-12'>
            <div class='form-check'>
              <input class='form-check-input' type='checkbox' value='' id='invalidCheck' required>
              <label class='form-check-label' for='invalidCheck'>
                Agree to terms and conditions
              </label>
              <div class='invalid-feedback'>
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class='col-12'>
            <button class='btn btn-primary' type='submit' name="user_submit">Submit</button>
          </div>
          <p>Already have an account? <a href='login.php'>Login here</a>.</p>
          <?php if(isset($_SESSION['userdouble'])) : ?>
            <p>Sign up has failed : </p>
            <h6> That username already exists </h6>
            <?php unset($_SESSION['userdouble']); ?>
          <?php endif ?>
          <?php if(isset($_SESSION['emaildouble'])) : ?>
            <h6> That email already exists </h6>
            <?php unset($_SESSION['emaildouble']); ?>
          <?php endif ?>
        </form>
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

  <script type="text/javascript">
    (function() {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>

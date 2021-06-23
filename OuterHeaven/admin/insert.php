<?php

include("../conn/conn.php");
include("../functions/functions.php");
include("../secure/postadmindata.php");
include("../secure/postnewproduct.php");

if(!isset($_SESSION['adminusername'])) {
  header('location: adminlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <!-- Bootstrap CSS framework -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="../styles/style.css" />

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

    $headertext = generateAdminHeader();
    echo $headertext;

      ?>

  </section>

  <!-- Insert product section -->

  <section id="insert">

    <div class="insert-background">
      <h2 class="insert-text"><i class="fas fa-plus"></i> Insert a product</h2>
      <hr class="insert-line">

      <!-- forms, dropdown menus and buttons taken from bootstrap 5.0 -->

    <form style='width: 80%; margin: auto' action='' method='post'>

    <h5 style="padding-top: 1rem; padding-bottom: 1rem;">Step One</h5>

    <div class='input-group mb-3'>
      <span class='input-group-text' style='width:6rem' id='inputGroup-sizing-default'>Language</span>
      <select name='create_language' class='custom-select' required='required' style='width:50%'>
          <option value='1'>English</option>
          <option value='2'>Not in English</option>
      </select>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' style='width:6rem' id='inputGroup-sizing-default'>Platform</span>
      <select name='create_platform' class='custom-select' required='required' style='width:50%'>
          <option value='1'>windows/mac/linux</option>
          <option value='2'>windows/mac</option>
          <option value='3'>windows</option>
          <option value='4'>windows/linux</option>
          <option value='5'>mac</option>
      </select>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' style='width:6rem' id='inputGroup-sizing-default'>Genre</span>
      <select name='create_genre' class='custom-select' required='required' style='width:50%'>
          <option value='1'>Action</option>
          <option value='2'>Strategy</option>
          <option value='3'>RPG</option>
          <option value='4'>Animation</option>
          <option value='5'>Casual</option>
          <option value='6'>Simulation</option>
          <option value='7'>Racing</option>
          <option value='8'>Adventure</option>
          <option value='9'>Violent</option>
          <option value='10'>Free to play</option>
          <option value='11'>Sports</option>
          <option value='12'>Gore</option>
          <option value='13'>Massively Multiplayer</option>
          <option value='14'>Utilities</option>
          <option value='15'>Design</option>
          <option value='16'>Education</option>
          <option value='17'>Web Publishing</option>
          <option value='18'>Audio Production</option>
          <option value='19'>Photo Editing</option>
          <option value='20'>Early Access</option>
          <option value='21'>Indie</option>
      </select>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Name</span>
      <input type='text' class='form-control' name='create_name' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Price</span>
      <input type='text' class='form-control' name='create_price' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Release Date (format: 2013-07-09)</span>
      <input type='text' class='form-control' name='create_date' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Developer</span>
      <input type='text' class='form-control' name='create_developer' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Publisher</span>
      <input type='text' class='form-control' name='create_publisher' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Categories</span>
      <input type='text' class='form-control' name='create_categories' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Spytags</span>
      <input type='text' class='form-control' name='create_spytags' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Owners</span>
      <input type='text' class='form-control' name='create_owners' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Achievements</span>
      <input type='text' class='form-control' name='create_achievements' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
    <button class='btn btn-primary' type='submit' name='create_stepone'>Complete Step One</button>

    <?php if(isset($_SESSION['StepOneSuccess'])) : ?>
      <p></p>
      <h6>
        <?php
        echo $_SESSION['StepOneSuccess'];
        ?>
      </h6>
    <?php endif ?>

  <h5 style="padding-top: 1rem; padding-bottom: 1rem;">Step Two - set to zero</h5>
  <div class='input-group mb-3'>
    <span class='input-group-text' style='width:10rem' id='inputGroup-sizing-default'>Positive Ratings</span>
    <select name='create_age' class='custom-select' required='required' style='width:50%'>
        <option value='0'>0</option>
    </select>
  </div>
  <div class='input-group mb-3'>
    <span class='input-group-text' style='width:10rem' id='inputGroup-sizing-default'>Negative Ratings</span>
    <select name='create_age' class='custom-select' required='required' style='width:50%'>
        <option value='0'>0</option>
    </select>
  </div>
  <div class='input-group mb-3'>
    <span class='input-group-text' style='width:10rem' id='inputGroup-sizing-default'>Average Playtime</span>
    <select name='create_age' class='custom-select' required='required' style='width:50%'>
        <option value='0'>0</option>
    </select>
  </div>
  <div class='input-group mb-3'>
    <span class='input-group-text' style='width:10rem' id='inputGroup-sizing-default'>Median Playtime</span>
    <select name='create_age' class='custom-select' required='required' style='width:50%'>
        <option value='0'>0</option>
    </select>
  </div>
  <button class='btn btn-primary' type='submit' name='create_steptwo'>Complete Step Two</button>

  <?php if(isset($_SESSION['StepTwoSuccess'])) : ?>
    <p></p>
    <h6>
      <?php
      echo $_SESSION['StepTwoSuccess'];
      ?>
    </h6>
  <?php endif ?>

  <h5 style="padding-top: 1rem; padding-bottom: 1rem;">Step Three</h5>
  <div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Screenshot One</span>
    <input type='text' class='form-control' name='create_screenshotone' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>
  <div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Screenshot Two</span>
    <input type='text' class='form-control' name='create_screenshottwo' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>
  <button class='btn btn-primary' type='submit' name='create_stepthree'>Complete Step Three</button>

  <?php if(isset($_SESSION['StepThreeSuccess'])) : ?>
    <p></p>
    <h6>
      <?php
      echo $_SESSION['StepThreeSuccess'];
      ?>
    </h6>
  <?php endif ?>

  <h5 style="padding-top: 1rem; padding-bottom: 1rem;">Step Four - Description</h5>
  <div class='mb-3'>
    <textarea class='form-control' name='new_description' id='exampleFormControlTextarea1' rows='3'></textarea>
  </div>
  <button class='btn btn-primary' type='submit' name='create_stepfour'>Complete Step Four</button>

  <?php if(isset($_SESSION['StepFourSuccess'])) : ?>
    <p></p>
    <h6>
      <?php
      echo $_SESSION['StepFourSuccess'];
      ?>
    </h6>
  <?php endif ?>

  <h5 style="padding-top: 1rem; padding-bottom: 1rem;">Step Five</h5>
  <div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Header</span>
    <input type='text' class='form-control' name='create_header' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>
  <div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Background</span>
    <input type='text' class='form-control' name='create_background' value='' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>
  <button class='btn btn-primary' type='submit' name='create_stepfive'>Complete Step Five</button>

  <?php if(isset($_SESSION['StepFiveSuccess'])) : ?>
    <p></p>
      <?php unset($_SESSION['StepOneSuccess']); ?>
      <?php unset($_SESSION['StepTwoSuccess']); ?>
      <?php unset($_SESSION['StepThreeSuccess']); ?>
      <?php unset($_SESSION['StepFourSuccess']); ?>
      <?php header("location: view.php"); ?>
  <?php endif ?>

  </form>

    <hr class='gameissues-hr issues-section-end'>
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

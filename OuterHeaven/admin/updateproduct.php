<?php

include("../conn/conn.php");
include("../functions/functions.php");
include("../secure/postadmindata.php");
include("../secure/postproductupdate.php");

if(isset($_GET['game'])) {
  $gameid = $_GET['game'];
  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?game=$gameid";
  $result = file_get_contents($endpoint);
  $data = json_decode($result, true);
}

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

  <!-- Product Header Section -->

  <section id="product">

<?php

  foreach($data as $row) {

    $update = date("F d Y H:i:s.", getlastmod());

    // carousel, forms, table and buttons all taken from bootstrap version 5.0

   echo " <div class='product-info-background container-fluid'>
      <h2 class='product-name'>{$row["name"]}</h2>
      <hr>

      <div id='carouselFeatured' class='carousel slide' data-bs-ride='carousel'>
        <div class='carousel-indicators'>
          <button type='button' data-bs-target='#carouselFeatured' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
          <button type='button' data-bs-target='#carouselFeatured' data-bs-slide-to='1' aria-label='Slide 2'></button>
        </div>
        <div class='carousel-inner'>
          <div class='carousel-item active'>
            <img src={$row["screenshot_one"]} class='d-block w-100 product-carousel' alt='cs-picture'>
          </div>
          <div class='carousel-item'>
            <img src={$row["screenshot_two"]} class='d-block w-100 product-carousel' alt='cs-picture'>
          </div>
        </div>
        <button class='carousel-control-prev' type='button' data-bs-target='#carouselFeatured' data-bs-slide='prev'>
          <span class='carousel-control-prev-icon' aria-hidden='true'></span>
          <span class='visually-hidden'>Previous</span>
        </button>
        <button class='carousel-control-next' type='button' data-bs-target='#carouselFeatured' data-bs-slide='next'>
          <span class='carousel-control-next-icon' aria-hidden='true'></span>
          <span class='visually-hidden'>Next</span>
        </button>
      </div>

      <div class='product-description'>
        <h5 class='product-title'><strong>{$row["name"]}</strong></h5>
        <p>{$row["short_description"]}</p>
        <p><small class='text-muted'>Last updated $update</small></p>
      </div>

      <div class='container-fluid product-data'>
        <table class='table table-striped product-description-table'>
          <thead>
            <tr>
              <th scope='col'>Game Details</th>
              <th scope='col'></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope='row'>Name</th>
              <td>{$row["name"]}</td>
            </tr>
            <tr>
              <th scope='row'>Language</th>
              <td>{$row["language"]}</td>
            </tr>
            <tr>
              <th scope='row'>Price</th>
              <td>{$row["price"]}</td>
            </tr>
            <tr>
              <th scope='row'>Release Date</th>
              <td>{$row["date"]}</td>
            </tr>
            <tr>
              <th scope='row'>Developer</th>
              <td>{$row["developer"]}</td>
            </tr>
            <tr>
              <th scope='row'>Publisher</th>
              <td>{$row["publisher"]}</td>
            </tr>
            <tr>
              <th scope='row'>Platforms</th>
              <td>{$row["platform"]}</td>
            </tr>
            <tr>
              <th scope='row'>Categories</th>
              <td>{$row["categories"]}</td>
            </tr>
            <tr>
              <th scope='row'>Genre</th>
              <td>{$row["genre"]}</td>
            </tr>
            <tr>
              <th scope='row'>Achievements</th>
              <td>{$row["achievements"]}</td>
            </tr>
            <tr>
              <th scope='row'>Positive Ratings</th>
              <td>{$row["positive_ratings"]}</td>
            </tr>
            <tr>
              <th scope='row'>Negative Ratings</th>
              <td>{$row["negative_ratings"]}</td>
            </tr>
            <tr>
              <th scope='row'>Average Playtime (Minutes)</th>
              <td>{$row["average_playtime"]}</td>
            </tr>
            <tr>
              <th scope='row'>Median Playtime (Minutes)</th>
              <td>{$row["median_playtime"]}</td>
            </tr>
            <tr>
              <th scope='row'>Owners</th>
              <td>{$row["owners"]}</td>
            </tr>
          </tbody>
        </table>
      </div>


    <form style='width: 80%; margin: auto' action='' method='POST'>
    <div class='input-group mb-3'>
      <span class='input-group-text' style='width:6rem' id='inputGroup-sizing-default'>Language</span>
      <select name='new_language' class='custom-select' required='required' style='width:50%'>
          <option value='1'>English</option>
          <option value='2'>Not in English</option>
      </select>
      <button class='btn btn-primary' type='submit' name='update_language'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' style='width:6rem' id='inputGroup-sizing-default'>Platform</span>
      <select name='new_platform' class='custom-select' required='required' style='width:50%'>
          <option value='1'>windows/mac/linux</option>
          <option value='2'>windows/mac</option>
          <option value='3'>windows</option>
          <option value='4'>windows/linux</option>
          <option value='5'>mac</option>
      </select>
      <button class='btn btn-primary' type='submit' name='update_platform'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' style='width:6rem' id='inputGroup-sizing-default'>Genre</span>
      <select name='new_genre' class='custom-select' required='required' style='width:50%'>
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
      <button class='btn btn-primary' type='submit' name='update_genre'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Name</span>
      <input type='text' class='form-control' name='new_name' value='{$row["name"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_name'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Price</span>
      <input type='text' class='form-control' name='new_price' value='{$row["price"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_price'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Release Date</span>
      <input type='text' class='form-control' name='new_date' value='{$row["date"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_date'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Developer</span>
      <input type='text' class='form-control' name='new_developer' value='{$row["developer"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_developer'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Publisher</span>
      <input type='text' class='form-control' name='new_publisher' value='{$row["publisher"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_publisher'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Categories</span>
      <input type='text' class='form-control' name='new_categories' value='{$row["categories"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_categories'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Screenshot One</span>
      <input type='text' class='form-control' name='new_screenshotone' value='{$row["screenshot_one"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_screenshotone'>Update</button>
    </div>
    <div class='input-group mb-3'>
      <span class='input-group-text' id='inputGroup-sizing-default'>Screenshot Two</span>
      <input type='text' class='form-control' name='new_screenshottwo' value='{$row["screenshot_two"]}' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      <button class='btn btn-primary' type='submit' name='update_screenshottwo'>Update</button>
    </div>
    <div class='mb-3'>
      <textarea class='form-control' name='new_description' id='exampleFormControlTextarea1' rows='3'>{$row["short_description"]}</textarea>
      <button class='btn btn-primary' type='submit' name='update_description'>Update</button>
    </div>
    <button class='btn btn-primary' type='submit' name='delete_product'>DELETE PRODUCT</button>
  </form>
    <hr class='gameissues-hr issues-section-end'>";

  }

      ?>


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

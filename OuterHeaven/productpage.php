<?php

include("functions/functions.php");

if(isset($_GET['game'])) {
  $gameid = $_GET['game'];
  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?game=$gameid";
  $result = file_get_contents($endpoint);
  $data = json_decode($result, true);
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

  <!-- Product Header Section -->

  <section id="product">

    <div class="product-background container-fluid">
      <img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fesqrcd.png?v=1614808077782" alt="header-image" class="img-fluid">
    </div>

<?php

  foreach($data as $row) {

    $platform = $row["platform_id"];
    $platformshown;

    $update = date("F d Y H:i:s.", getlastmod());

    if($platform == 1) {
    $platformshown = "<i class='fab fa-windows'></i>
    <i class='fab fa-apple'></i>
    <i class='fab fa-linux'></i>";
   } else if ($platform == 2) {
    $platformshown = "<i class='fab fa-windows'></i>
    <i class='fab fa-apple'></i>";
   } else if ($platform == 3) {
    $platformshown = "<i class='fab fa-windows'></i>";
   } else if ($platform == 4) {
    $platformshown = "<i class='fab fa-windows'></i>
    <i class='fab fa-linux'></i>";
   } else if ($platform == 5) {
    $platformshown = "<i class='fab fa-apple'></i>";
   }

   $price = $row["price"];

   if($price == 0) {
     $newprice = "Free to play";
   } else if($price > 0) {
     $newprice = "Price: $".$price;
   }

   // carousel, button and table taken from bootstrap version 5.0

   echo " <div class='product-info-background container-fluid'>
      <h2 class='product-name'>{$row["name"]}</h2>
      <hr>
      <div class='container-fluid'>
        <div class='row'>
          <div class='product-info-top col-lg-6'>
            <p></p>
            <h4>{$platformshown}  {$row["language"]}</h4>
          </div>
          <div class='product-info-bottom col-lg-6'>
            <h4>$newprice<button type='button' class='carousel-button btn btn-success product'>Add to cart</button></h4>
          </div>
          <hr>
        </div>
      </div>

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
        <hr class='gameissues-hr issues-section-end'>
      </div>";
}

    ?>

    <!-- part of shopping cart - feature wasn't completed -->

      <script>
        $(document).ready(function() {

          var i = 0;
          $(".product").click(function() {

            if (i == 0) {
              $(this).html("Remove");
              i = 1;
            } else {
              $(this).html("Add to cart");
              i = 0;
            }
          });
        });
      </script>

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

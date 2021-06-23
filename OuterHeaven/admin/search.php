<?php

include("../conn/conn.php");
include("../functions/functions.php");
include("../secure/postadmindata.php");

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

  <!-- search section - dropdown menu taken from bootstrap 5.0 -->

  <section id="discover">

    <div class="discover-background d-flex justify-content-center">
      <div class="discover-section" style="width: 80%">
        <h4 class="discover-text"><i class="fas fa-search"></i> Search Results</h4>
        <hr class="discover-line">

        <li class="nav-item" style="width: 45%">
          <form action='search.php?search=<?php echo $_GET['search']; ?>' method='GET'>
              <input type='text' name='search'>
              <input type='submit' value='search'>
          </form>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: black">Search by genre</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="search.php?search=Action">Action</a></li>
              <li><a class="dropdown-item" href="search.php?search=Strategy">Strategy</a></li>
              <li><a class="dropdown-item" href="search.php?search=RPG">RPG</a></li>
              <li><a class="dropdown-item" href="search.php?search=Animation">Animation</a></li>
              <li><a class="dropdown-item" href="search.php?search=Casual">Casual</a></li>
              <li><a class="dropdown-item" href="search.php?search=Simulation">Simulation</a></li>
              <li><a class="dropdown-item" href="search.php?search=Racing">Racing</a></li>
              <li><a class="dropdown-item" href="search.php?search=Adventure">Adventure</a></li>
              <li><a class="dropdown-item" href="search.php?search=Violent">Violent</a></li>
              <li><a class="dropdown-item" href="search.php?search=Free">Free to Play</a></li>
              <li><a class="dropdown-item" href="search.php?search=Sports">Sports</a></li>
              <li><a class="dropdown-item" href="search.php?search=Gore">Gore</a></li>
              <li><a class="dropdown-item" href="search.php?search=Multiplayer">Massively Multiplayer</a></li>
              <li><a class="dropdown-item" href="search.php?search=Utilities">Utilities</a></li>
              <li><a class="dropdown-item" href="search.php?search=Design">Design</a></li>
              <li><a class="dropdown-item" href="search.php?search=Education">Education</a></li>
              <li><a class="dropdown-item" href="search.php?search=Publishing">Web Publishing</a></li>
              <li><a class="dropdown-item" href="search.php?search=Audio">Audio Production</a></li>
              <li><a class="dropdown-item" href="search.php?search=Photo">Photo Editing</a></li>
              <li><a class="dropdown-item" href="search.php?search=Early">Early Access</a></li>
              <li><a class="dropdown-item" href="search.php?search=Indie">Indie</a></li>
          </ul>
        </li>

      <div class="row">

      <?php

      $searchid = $_GET['search'];

      $searchid = preg_replace('/[^A-Za-z0-9]/', '_', $searchid);

      $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?search=$searchid";
      $result = file_get_contents($endpoint);
      $data = json_decode($result, true);

      if(empty($data)) {
        echo "<h5>Sorry, no results were found</h5>
        <h6><strong>Suggestions</strong></h6>
        <ul>
        <li>
        Make sure all words are spelled correctly
        </li>
        <li>
        Try different keywords
        </li>
        <li>
        Try fewer keywords
        </li>
        </ul>
        <img class='angry-pic' src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fasura.jpeg?v=1618791465769' style='padding-bottom: 20px'/>";
      } else {

      foreach($data as $row) {

        $platform = $row["platform_id"];
        $platformshown;

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

       $name = $row["name"];
       $shortname = substr($name, 0, 20);

       if(strlen($shortname)>19) {
         $newshortname = $shortname."...";
       } else if(strlen($shortname)<=19) {
         $newshortname = $shortname;
       }

       $price = $row["price"];

       if($price == 0) {
         $newprice = "Free to play";
       } else if($price > 0) {
         $newprice = "$".$price;
       }

       // cards taken from bootstrap 5.0
       echo "<div class='card col-lg-2 col-md-4 col-sm-6 product-card' style='width: 15rem;'>
        <a href='updateproduct.php?game={$row["id"]}'>
          <img src='{$row["header_image"]}' class='card-img-top' style='width: 100%'>
          </a>
          <div class='card-header game-name'>
            $newshortname
          </div>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item'>{$platformshown}</li>
                <li class='list-group-item'>$newprice</li>
              </ul>
            </div>";
      }

  }

    ?>

    </div>

    <hr class="discover-line">


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

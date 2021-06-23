<?php

include("conn/conn.php");
include("functions/functions.php");

if(isset($_GET['page'])) {
  $pageid = $_GET['page'];
  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?page=$pageid";
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

  <!-- Recommended Header Section -->

  <section id="recommended-header">

    <div class="recommended-background container-fluid">
      <img class="ghost-ad img-fluid" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FScreen%20Shot%202021-03-04%20at%207.36.32%20PM.png?v=1614886610068" alt="ghost-ad">
    </div>

  </section>

  <!-- discover section - dropdown menu taken from bootstrap version 5.0 -->

  <section id="discover">

    <div class="discover-background d-flex justify-content-center" style="min-height: 30rem;">
      <div class="discover-section" style="width: 80%">
        <h2 class="discover-text"><i class="fas fa-search"></i> Discover</h2>
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

       // cards taken from bootstrap version 5.0

       echo "<div class='card col-lg-2 col-md-4 col-sm-6 product-card' style='width: 15rem;'>
        <a href='productpage.php?game={$row["id"]}'>
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

    ?>

    </div>

    <nav aria-label="Page navigation example page-width">
      <ul class="pagination justify-content-center">

        <?php

        $page = $_GET['page'];

        $first = 1;

        // this variable has to equal the total number of pages on the site
        $last = 278;

        $previous = $page-1;
        $next = $page+1;

        $pageminustwo = $page-2;
        $pageplustwo = $page+2;

        $pageminusfive = $page-5;
        $pageplusfive = $page+5;

        $lastminusfive = $last-5;

        if($page<6) {

          // pagination tabs taken from bootstrap version 5.0
          // different versions created based on page user is currently on

          echo "<li class='page-item'>
            <a class='page-link' href='discover.php?page=$first'>
              <span aria-hidden='true'>First</span>
            </a>
          </li>
          <li class='page-item'><a class='page-link' href='discover.php?page=1'>1</a></li>
          <li class='page-item'><a class='page-link' href='discover.php?page=2'>2</a></li>
          <li class='page-item'><a class='page-link' href='discover.php?page=3'>3</a></li>
          <li class='page-item'><a class='page-link' href='discover.php?page=4'>4</a></li>
          <li class='page-item'><a class='page-link' href='discover.php?page=5'>5</a></li>
          <li class='page-item'><a class='page-link' href='discover.php?page=6'>6</a></li>
          <li class='page-item'>
          <a class='page-link' href='discover.php?page=$next' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
            </a>
          </li>
          <li class='page-item'>
            <a class='page-link' href='discover.php?page=$last'>
              <span aria-hidden='true'>Last</span>
            </a>
          </li>";

      } elseif($page>5 && $page<$lastminusfive) {
        echo "<li class='page-item'>
          <a class='page-link' href='discover.php?page=$first'>
            <span aria-hidden='true'>First</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageminusfive'>- 5</a></li>
        <li class='page-item'>
          <a class='page-link' href='discover.php?page=$previous' aria-label='Previous'>
          <span aria-hidden='true'>&laquo;</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageminustwo'>$pageminustwo</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$previous'>$previous</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$page'>$page</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$next'>$next</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageplustwo'>$pageplustwo</a></li>
        <li class='page-item'>
        <a class='page-link' href='discover.php?page=$next' aria-label='Next'>
          <span aria-hidden='true'>&raquo;</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageplusfive'>+ 5</a></li>
        <li class='page-item'>
          <a class='page-link' href='discover.php?page=$last'>
            <span aria-hidden='true'>Last</span>
          </a>
        </li>";
      }elseif($page>=$lastminusfive && $page<$last) {
        echo "<li class='page-item'>
          <a class='page-link' href='discover.php?page=$first'>
            <span aria-hidden='true'>First</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageminusfive'>- 5</a></li>
        <li class='page-item'>
          <a class='page-link' href='discover.php?page=$previous' aria-label='Previous'>
          <span aria-hidden='true'>&laquo;</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageminustwo'>$pageminustwo</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$previous'>$previous</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$page'>$page</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$next'>$next</a></li>
        <li class='page-item'>
        <a class='page-link' href='discover.php?page=$next' aria-label='Next'>
          <span aria-hidden='true'>&raquo;</span>
          </a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='discover.php?page=$last'>
            <span aria-hidden='true'>Last</span>
          </a>
        </li>";
      } else {
        echo "<li class='page-item'>
          <a class='page-link' href='discover.php?page=$first'>
            <span aria-hidden='true'>First</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageminusfive'>- 5</a></li>
        <li class='page-item'>
          <a class='page-link' href='discover.php?page=$previous' aria-label='Previous'>
          <span aria-hidden='true'>&laquo;</span>
          </a>
        </li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$pageminustwo'>$pageminustwo</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$previous'>$previous</a></li>
        <li class='page-item'><a class='page-link' href='discover.php?page=$page'>$page</a></li>
        <li class='page-item'>
          <a class='page-link' href='discover.php?page=$last'>
            <span aria-hidden='true'>Last</span>
          </a>
        </li>";
      }

        ?>

      </ul>
    </nav>

    <hr class="discover-line">


    </div>

  </section>

  <!-- Community Recommendation Section -->

  <section id="Community-Recommendation">
    <div class="Community-Recommendation-background">
      <h3 class="Community-Recommendation-text Recommendation-top-text">Looking for thoughts on what games to buy?</h3>
      <hr class="Community-Recommendation-line">
      <h5 class="Community-Recommendation-text Recommendation-bottom-text">Check out our community page for discussions on the latest and greatest games releasing.</h5>
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

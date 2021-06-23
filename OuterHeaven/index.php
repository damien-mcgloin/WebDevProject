<?php

include("conn/conn.php");
include("functions/functions.php");

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

  <!-- Navigation bar section - header is stored in functions.php -->
  <section id="title">

    <?php

    $headertext = generateHeader();
    echo $headertext;

      ?>

  </section>

  <!-- Highlights Section - advertisements for future games stored in functions.php -->

  <section id="highlights">

    <?php

    $highlightstext = generateHighlights();
    echo $highlightstext;

    ?>

  </section>

  <!-- Recommended Games Section - contains three tables taken from bootstrap version 5.0 -->

  <section id="recommended-games">

    <div class="recommended-games-background">
      <div class="recommended-section">
        <h2 class="recommended-text"><i class="fas fa-play-circle"></i> Charts</h2>
        <hr class="recommended-line">
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="recommended-list col-lg-6 col-sm-9">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active recommended-button" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Most Popular</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link recommended-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Most Played</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link recommended-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Recent Releases</button>
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

                    $searchid = 'OhMain.Owners';

                    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?table=$searchid";
                    $result = file_get_contents($endpoint);
                    $data = json_decode($result, true);
                    $count=0;

                    foreach($data as $row) {

                      $name = $row["name"];

                      $replace = "â€™";
                      $newname = str_ireplace($replace, "", $name);

                      $replace1 = "â„¢";
                      $newname1 = str_ireplace($replace1, "", $newname);

                      $replace2 = "â€˜";
                      $newname2 = str_ireplace($replace2, "", $newname1);

                      $replace3 = "â€œ";
                      $newname3 = str_ireplace($replace3, "", $newname2);

                      $replace4 = "â€";
                      $newname4 = str_ireplace($replace4, "", $newname3);

                      $replace5 = "Â®";
                      $newname5 = str_ireplace($replace5, "", $newname4);

                      $replace6 = "ã€Œ";
                      $newname6 = str_ireplace($replace6, "", $newname5);

                      $replace7 = "ã€";
                      $newname7 = str_ireplace($replace7, "", $newname6);

                      $replace8 = "ç©ºã‚’ä»°ãŽã¦é›²ãŸã‹ã";
                      $newname8 = str_ireplace($replace8, "", $newname7);

                      $replace9 = "é€†åˆƒ";
                      $newname9 = str_ireplace($replace9, "", $newname8);

                      $count++;

                    echo "<tr>
                            <th scope='row'>$count</th>
                            <td><a href='productpage.php?game={$row["id"]}' style='color: black'>$newname9</a></td>
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

                    $searchid = 'OhGameData.AveragePlaytime';

                    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?table=$searchid";
                    $result = file_get_contents($endpoint);
                    $data = json_decode($result, true);
                    $count=0;

                    foreach($data as $row) {

                      $name = $row["name"];

                      $replace = "â€™";
                      $newname = str_ireplace($replace, "", $name);

                      $replace1 = "â„¢";
                      $newname1 = str_ireplace($replace1, "", $newname);

                      $replace2 = "â€˜";
                      $newname2 = str_ireplace($replace2, "", $newname1);

                      $replace3 = "â€œ";
                      $newname3 = str_ireplace($replace3, "", $newname2);

                      $replace4 = "â€";
                      $newname4 = str_ireplace($replace4, "", $newname3);

                      $replace5 = "Â®";
                      $newname5 = str_ireplace($replace5, "", $newname4);

                      $replace6 = "ã€Œ";
                      $newname6 = str_ireplace($replace6, "", $newname5);

                      $replace7 = "ã€";
                      $newname7 = str_ireplace($replace7, "", $newname6);

                      $replace8 = "ç©ºã‚’ä»°ãŽã¦é›²ãŸã‹ã";
                      $newname8 = str_ireplace($replace8, "", $newname7);

                      $replace9 = "é€†åˆƒ";
                      $newname9 = str_ireplace($replace9, "", $newname8);

                      $count++;

                    echo "<tr>
                            <th scope='row'>$count</th>
                            <td><a href='productpage.php?game={$row["id"]}' style='color: black'>$newname9</a></td>
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

                    $searchid = 'OhMain.ReleaseDate';

                    $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?table=$searchid";
                    $result = file_get_contents($endpoint);
                    $data = json_decode($result, true);
                    $count=0;

                    foreach($data as $row) {

                      $name = $row["name"];

                      $replace = "â€™";
                      $newname = str_ireplace($replace, "", $name);

                      $replace1 = "â„¢";
                      $newname1 = str_ireplace($replace1, "", $newname);

                      $replace2 = "â€˜";
                      $newname2 = str_ireplace($replace2, "", $newname1);

                      $replace3 = "â€œ";
                      $newname3 = str_ireplace($replace3, "", $newname2);

                      $replace4 = "â€";
                      $newname4 = str_ireplace($replace4, "", $newname3);

                      $replace5 = "Â®";
                      $newname5 = str_ireplace($replace5, "", $newname4);

                      $replace6 = "ã€Œ";
                      $newname6 = str_ireplace($replace6, "", $newname5);

                      $replace7 = "ã€";
                      $newname7 = str_ireplace($replace7, "", $newname6);

                      $replace8 = "ç©ºã‚’ä»°ãŽã¦é›²ãŸã‹ã";
                      $newname8 = str_ireplace($replace8, "", $newname7);

                      $replace9 = "é€†åˆƒ";
                      $newname9 = str_ireplace($replace9, "", $newname8);

                      $count++;

                    echo "<tr>
                            <th scope='row'>$count</th>
                            <td><a href='productpage.php?game={$row["id"]}' style='color: black'>$newname9</td></a>
                          </tr>";


                    }

                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <img class="metal-gear-pic" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fpngkit_ninja-sword-png_1868047.png?v=1614896395949" alt="">
          </div>

        </div>
      </div>

    </div>

  </section>

  <section id="featured">

    <div class="featured-background d-flex justify-content-center">
      <div class="featured-section" style="width: 80%">
      <hr class="featured-line">
      <h2 class="featured-text"><i class="fas fa-star"></i> Featured</h2>
      <hr class="featured-line">
      <div class="row">

<?php

  $searchid = 'OhGameData.PositiveRatings';

  $endpoint = "http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/api/api.php?table=$searchid";
  $result = file_get_contents($endpoint);
  $data = json_decode($result, true);

  foreach($data as $row) {

  $name = $row["name"];

  $replace = "â€™";
  $newname = str_ireplace($replace, "", $name);

  $replace1 = "â„¢";
  $newname1 = str_ireplace($replace1, "", $newname);

  $replace2 = "â€˜";
  $newname2 = str_ireplace($replace2, "", $newname1);

  $replace3 = "â€œ";
  $newname3 = str_ireplace($replace3, "", $newname2);

  $replace4 = "â€";
  $newname4 = str_ireplace($replace4, "", $newname3);

  $replace5 = "Â®";
  $newname5 = str_ireplace($replace5, "", $newname4);

  $replace6 = "ã€Œ";
  $newname6 = str_ireplace($replace6, "", $newname5);

  $replace7 = "ã€";
  $newname7 = str_ireplace($replace7, "", $newname6);

  $replace8 = "ç©ºã‚’ä»°ãŽã¦é›²ãŸã‹ã";
  $newname8 = str_ireplace($replace8, "", $newname7);

  $replace9 = "é€†åˆƒ";
  $newname9 = str_ireplace($replace9, "", $newname8);

  $shortname = substr($newname9, 0, 20);

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

// cards are taken from bootstrap version 5.0

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

    </div>
    </div>

  </section>

  <!-- Footer Section - footer is stored in functions.php folder -->
  <section id="footer">

    <?php

      $footertext = generateFooter();
      echo $footertext;

      ?>

  </section>

  <!-- code is part of shopping cart feature which was not completed -->
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

  <!--Bootstrap script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>

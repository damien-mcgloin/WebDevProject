<?php

  include("../conn/conn.php");

  header('Content-Type: application/json');

  /* GET REQUESTS */

  // game is linked to productpage.php and displays all product information

if(isset($_GET['game'])) {

  $sqlread = "SELECT OhMain.MainID, OhMain.GameName, OhMain.ReleaseDate, OhMain.Categories,
  OhMain.Owners, OhMain.Developer, OhMain.Achievements, OhMain.Price, OhMain.Publisher, OhMain.PlatformsID,
  OhGameData.PositiveRatings, OhGameData.NegativeRatings, OhGameData.AveragePlaytime,
  OhGameData.MedianPlaytime, OhGameData.PositiveRatings, OhDescription.ShortDescription,
  OhMedia.HeaderImage, OhLanguage.Language, OhPlatforms.Platform, OhGenre.Genre, OhMedia.Background,
  OhScreenshots.ScreenshotOne, OhScreenshots.ScreenshotTwo
  FROM OhMain
  INNER JOIN OhDescription ON OhMain.MainID = OhDescription.DescriptionID
  INNER JOIN OhPlatforms ON OhMain.PlatformsID = OhPlatforms.PlatformID
  INNER JOIN OhMedia ON OhDescription.DescriptionID = OhMedia.MediaID
  INNER JOIN OhGenre ON OhMain.GenreID = OhGenre.GenreID
  INNER JOIN OhGameData ON OhMedia.MediaID = OhGameData.GameDataID
  INNER JOIN OhLanguage ON OhMain.LanguageID = OhLanguage.LanguageID
  INNER JOIN OhScreenshots ON OhMain.MainID = OhScreenshots.ScreenshotID";

    $result = $conn->query($sqlread);

$game = $_GET['game'];

$dataset = array();

  if(!$result){
    echo $conn->error;
  }else{

  while($row = $result->fetch_assoc()){

  $row_id = $row['MainID'];

  $releasedate = $row['ReleaseDate'];

  $developer = $row['Developer'];

  $publisher = $row['Publisher'];

  $categories = $row['Categories'];

  $owners = $row['Owners'];

  $achievements = $row['Achievements'];

  $price = $row['Price'];

  $positiveratings = $row['PositiveRatings'];

  $negativeratings = $row['NegativeRatings'];

  $averageplay = $row['AveragePlaytime'];

  $medianplay = $row['MedianPlaytime'];

  $name = $row['GameName'];

  $description = $row['ShortDescription'];

  $replace = "â€™";
  $ndescription = str_ireplace($replace, "", $description);
  $newname = str_ireplace($replace, "", $name);

  $replace1 = "â„¢";
  $nedescription = str_ireplace($replace1, "", $ndescription);
  $newname1 = str_ireplace($replace1, "", $newname);

  $replace2 = "â€˜";
  $newdescription = str_ireplace($replace2, "", $nedescription);
  $newname2 = str_ireplace($replace2, "", $newname1);

  $replace3 = "â€œ";
  $newdescription1 = str_ireplace($replace3, "", $newdescription);
  $newname3 = str_ireplace($replace3, "", $newname2);

  $replace4 = "â€";
  $newdescription2 = str_ireplace($replace4, "", $newdescription1);
  $newname4 = str_ireplace($replace4, "", $newname3);

  $replace5 = "Â®";
  $newdescription3 = str_ireplace($replace5, "", $newdescription2);
  $newname5 = str_ireplace($replace5, "", $newname4);

  $replace6 = "ã€Œ";
  $newdescription4 = str_ireplace($replace6, "", $newdescription3);
  $newname6 = str_ireplace($replace6, "", $newname5);

  $replace7 = "ã€";
  $newdescription5 = str_ireplace($replace7, "", $newdescription4);
  $newname7 = str_ireplace($replace7, "", $newname6);

  $replace8 = "ç©ºã‚’ä»°ãŽã¦é›²ãŸã‹ã";
  $newdescription6 = str_ireplace($replace8, "", $newdescription5);
  $newname8 = str_ireplace($replace8, "", $newname7);

  $replace9 = "é€†åˆƒ";
  $newdescription7 = str_ireplace($replace9, "", $newdescription6);
  $newname9 = str_ireplace($replace9, "", $newname8);

  $newdescription8 = substr($newdescription7, 0, 50);

  $headerimage  = $row['HeaderImage'];

  $language = $row['Language'];

  $platform = $row['Platform'];

  $genre = $row['Genre'];

  $background = $row['Background'];

  $screenshot1 = $row['ScreenshotOne'];

  $screenshot2 = $row['ScreenshotTwo'];

  $platformid = $row['PlatformsID'];

  if($row_id == $game) {
    $line = array('id'=>$row_id, 'name'=>$newname9, 'date'=>$releasedate,
    'categories'=>$categories, 'owners'=>$owners, 'developer'=>$developer,
  'achievements'=>$achievements, 'price'=>$price, 'publisher'=>$publisher,
'positive_ratings'=>$positiveratings, 'negative_ratings'=>$negativeratings,
'average_playtime'=>$averageplay, 'median_playtime'=>$medianplay, 'short_description'=>$newdescription7,
'header_image'=>$headerimage, 'language'=>$language, 'platform'=>$platform, 'background'=>$background,
'screenshot_one'=>$screenshot1, 'screenshot_two'=>$screenshot2, 'platform_id'=>$platformid,
'genre'=>$genre);
    array_push($dataset, $line);
  }
}
}

echo json_encode($dataset);

}

// forum takes a value of 1-3 and displays three different tables on community.php
if(isset($_GET['forum'])) {

  $search = $_GET['forum'];

  $sql = "SELECT * FROM `OhPostTopic`
  INNER JOIN OhPostMedia ON OhPostTopic.PostTopicID = OhPostMedia.PostTopicID
  WHERE OhPostTopic.PostTypeID = $search";

  $result = $conn->query($sql);

$dataset = array();

if(!$result){
  echo $conn->error;
}else{

  while($row = $result->fetch_assoc()){

    $post_id = $row['PostTopicID'];
    $topic = $row['topic'];
    $type_id = $row['PostTypeID'];
    $media_id = $row['PostMediaID'];
    $image = $row['image'];

    $line = array('post_id'=>$post_id, 'topic'=>$topic,'type_id'=>$type_id,
  'media_id'=>$media_id, 'image'=>$image);
    array_push($dataset, $line);

}
}

echo json_encode($dataset);

}

  // page is used on discover.php and view.php to display limit of 36 products.
  // page value is multiplied by 36. then 36 is subtracted from this.
  // the result is an offset value allowing the user to view 36 unique products.
  if(isset($_GET['page'])) {

    $offset = $_GET['page'];

    $offset*=36;
    $offset-=36;

    $sqlread = "SELECT OhMain.MainID, OhMain.GameName, OhMain.ReleaseDate, OhMain.Price, OhMain.PlatformsID, OhMedia.HeaderImage
    FROM OhMain
    INNER JOIN OhDescription ON OhMain.MainID = OhDescription.DescriptionID
    INNER JOIN OhPlatforms ON OhMain.PlatformsID = OhPlatforms.PlatformID
    INNER JOIN OhMedia ON OhDescription.DescriptionID = OhMedia.MediaID
    INNER JOIN OhGenre ON OhMain.GenreID = OhGenre.GenreID
    INNER JOIN OhGameData ON OhMedia.MediaID = OhGameData.GameDataID
    INNER JOIN OhLanguage ON OhMain.LanguageID = OhLanguage.LanguageID
    INNER JOIN OhScreenshots ON OhMain.MainID = OhScreenshots.ScreenshotID
    ORDER BY OhMain.ReleaseDate DESC
    LIMIT 36 OFFSET $offset";

      $result = $conn->query($sqlread);

  $dataset = array();

  if(!$result){
    echo $conn->error;
  }else{

  while($row = $result->fetch_assoc()){

  $row_id = $row['MainID'];

  $releasedate = $row['ReleaseDate'];

  $price = $row['Price'];

  $name = $row['GameName'];

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

  $headerimage  = $row['HeaderImage'];

  $platformid = $row['PlatformsID'];

      $line = array('id'=>$row_id, 'name'=>$newname9,'price'=>$price,
      'header_image'=>$headerimage, 'platform_id'=>$platformid);
      array_push($dataset, $line);

}
}

echo json_encode($dataset);

}

// post is used on communitypage.php to display the posts for the selected forum page.
if(isset($_GET['post'])) {

  $search = $_GET['post'];

  $sql = "SELECT * FROM `OhPostText` WHERE `PostTopicID` = $search";

  $result = $conn->query($sql);

$dataset = array();

if(!$result){
  echo $conn->error;
}else{

  while($row = $result->fetch_assoc()){

        $text_id = $row['PostTextID'];
        $user = $row['user'];
        $post = $row['post'];
        $topic_id = $row['PostTopicID'];

        $line = array('text_id'=>$text_id, 'user'=>$user,'post'=>$post,
      'topic_id'=>$topic_id);
        array_push($dataset, $line);

    }
    }

    echo json_encode($dataset);

    }

// search is used on search.php to display search data either matching genre name or like product name
if(isset($_GET['search'])) {

    $search = $_GET['search'];

    $newsearch = filter_var($search, FILTER_SANITIZE_STRING);
    $newsearch = htmlspecialchars($newsearch);

    $sqlread = "SELECT OhMain.MainID, OhMain.GameName, OhMain.Price, OhMain.PlatformsID,
  OhDescription.ShortDescription, OhMedia.HeaderImage, OhGameData.PositiveRatings,
  OhMain.ReleaseDate, OhMain.Owners, OhGameData.AveragePlaytime, OhGenre.Genre
  FROM OhMain
  INNER JOIN OhDescription ON OhMain.MainID = OhDescription.DescriptionID
  INNER JOIN OhMedia ON OhDescription.DescriptionID = OhMedia.MediaID
  INNER JOIN OhGameData ON OhMedia.MediaID = OhGameData.GameDataID
  INNER JOIN OhGenre ON OhMain.GenreID = OhGenre.GenreID
  WHERE OhMain.GameName Like '%$newsearch%' OR OhGenre.Genre = '$newsearch'
  ORDER BY OhGameData.PositiveRatings DESC
  LIMIT 200";

    $result = $conn->query($sqlread);

      $dataset = array();

      if(!$result){
        echo $conn->error;
      }else{

      while($row = $result->fetch_assoc()){

      $row_id = $row['MainID'];

      $price = $row['Price'];

      $name = $row['GameName'];

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

      $headerimage  = $row['HeaderImage'];

      $platformid = $row['PlatformsID'];

          $line = array('id'=>$row_id, 'name'=>$newname9,'price'=>$price,
          'header_image'=>$headerimage, 'platform_id'=>$platformid);
          array_push($dataset, $line);


    }
  }

    echo json_encode($dataset);

    }


// table is used on index.php to display three tables containing chart information
// also used to display 12 product cards. takes in different variables e.g OhMain.ReleaseDate
    if(isset($_GET['table'])){

      $searchfield = $_GET['table'];

      $sqlread = "SELECT OhMain.MainID, OhMain.GameName, OhMain.Price, OhMain.PlatformsID,
      OhDescription.ShortDescription, OhMedia.HeaderImage, OhGameData.PositiveRatings,
      OhMain.ReleaseDate, OhMain.Owners, OhGameData.AveragePlaytime
      FROM OhMain
      INNER JOIN OhDescription ON OhMain.MainID = OhDescription.DescriptionID
      INNER JOIN OhMedia ON OhDescription.DescriptionID = OhMedia.MediaID
      INNER JOIN OhGameData ON OhMedia.MediaID = OhGameData.GameDataID
      ORDER BY $searchfield DESC
      LIMIT 12";

      $result = $conn->query($sqlread);

      $dataset = array();

      if(!$result){
        echo $conn->error;
      }else{

      while($row = $result->fetch_assoc()){

      $row_id = $row['MainID'];

      $price = $row['Price'];

      $name = $row['GameName'];

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

      $headerimage  = $row['HeaderImage'];

      $platformid = $row['PlatformsID'];

          $line = array('id'=>$row_id, 'name'=>$newname9,'price'=>$price,
          'header_image'=>$headerimage, 'platform_id'=>$platformid);
          array_push($dataset, $line);

    }
    }

    echo json_encode($dataset);

    }

      /* POST REQUESTS */

    // if user submits complaint on support.php the data is passed into the OhComplaints table
    if (isset($_GET['complaint'])) {

      if($_SERVER["REQUEST_METHOD"]==="POST") {
        include('../conn/conn.php');
        $conn->set_charset('utf8mb4');


      $email = mysqli_real_escape_string($conn, (trim($_POST['email'])));
      $complaint = mysqli_real_escape_string($conn, (trim($_POST['complaint'])));
      $email = htmlentities($email);
      $complaint = htmlentities($complaint);

        $insertsql = "INSERT INTO OhComplaints (email, complaint)
                  VALUES('$email', '$complaint')";

        $result = $conn->query($insertsql);

        if(!$result) {
          echo $conn->error;
        }

      }
    }

    // initially used for sign up on community.php but no longer used as it was considered
    // not secure enough for passing user details
    if (isset($_GET['submit'])) {

      if($_SERVER["REQUEST_METHOD"]==="POST") {
        include('../conn/conn.php');
        $conn->set_charset('utf8mb4');

      // user type is hardcoded at 1 as this restricts access to users signing up on main page
      $usertype = 1;
      $errors = array();

      $username = mysqli_real_escape_string($conn, (trim($_POST['name'])));
      $password = mysqli_real_escape_string($conn, (trim($_POST['pass'])));
      $email = mysqli_real_escape_string($conn, (trim($_POST['email'])));
      $domain = mysqli_real_escape_string($conn, (trim($_POST['domain'])));

      $username = htmlentities($username);
      $password = htmlentities($password);
      $email = htmlentities($email);
      $domain = htmlentities($domain);

      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($email)) { array_push($errors, "Email is required"); }
      if (empty($password)) { array_push($errors, "Password is required"); }

      $check_query = "SELECT * FROM OhUserDetails WHERE username='$username' OR email='$email' LIMIT 1";
      $result = mysqli_query($conn, $check_query);
      $user = mysqli_fetch_assoc($result);

      if ($user) {
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
        }
      }

        $password = md5($password);

        $insertsql = "INSERT INTO OhUserDetails (username, password, email, domain, UserTypeID)
                  VALUES('$username', '$password', '$email', '$domain', '$usertype')";

        $result = $conn->query($insertsql);

        if(!$result) {
          echo $conn->error;
        }

    }

    }

    // if user posts a comment on communitypage.php it's passed into the OhPostText table
    if (isset($_GET['message'])) {

      if($_SERVER["REQUEST_METHOD"]==="POST") {
        include('../conn/conn.php');
        $conn->set_charset('utf8mb4');

      $username = mysqli_real_escape_string($conn, (trim($_POST['username'])));
      $username = htmlentities($username);
      $text = mysqli_real_escape_string($conn, (trim($_POST['text'])));
      $text = htmlentities($text);
      $id = $_POST['id'];

          $insertsql = "INSERT INTO OhPostText (user, post, PostTopicID)
                    VALUES('$username', '$text', '$id')";

          $result = $conn->query($insertsql);

          if(!$result) {
            echo $conn->error;
          }

        }

      }

    // if user presses delete button below their comment it is removed from OhPostText table
    if (isset($_GET['delete'])) {

      if($_SERVER["REQUEST_METHOD"]==="POST") {
        include('../conn/conn.php');
        $conn->set_charset('utf8mb4');

        $id = $_POST['topic'];

            $insertsql = "DELETE FROM OhPostText WHERE PostTextID = '$id'";

            $result = $conn->query($insertsql);

            if(!$result) {
              echo $conn->error;
            }

          }

      }

      /* POST requests for inserting new product on insert.php in admin folder */

      // posts product data into OhMain table
      // occurs after admin presses complete step one button on insert.php in admin folder
      if (isset($_GET['createstepone'])) {

        $language = $_POST['language'];
        $platform = $_POST['platform'];
        $genre = $_POST['genre'];

        $name = mysqli_real_escape_string($conn, (trim($_POST['name'])));
        $date = mysqli_real_escape_string($conn, (trim($_POST['date'])));
        $dev = mysqli_real_escape_string($conn, (trim($_POST['developer'])));
        $publisher = mysqli_real_escape_string($conn, (trim($_POST['publisher'])));
        $categories = mysqli_real_escape_string($conn, (trim($_POST['categories'])));
        $spytags = mysqli_real_escape_string($conn, (trim($_POST['spytags'])));
        $achievements = mysqli_real_escape_string($conn, (trim($_POST['achievements'])));
        $price = mysqli_real_escape_string($conn, (trim($_POST['price'])));
        $owners = 0;
        $reqage = 1;

        $name = htmlentities($name);
        $date = htmlentities($date);
        $dev = htmlentities($dev);
        $publisher = htmlentities($publisher);
        $categories = htmlentities($categories);
        $spytags = htmlentities($spytags);
        $achievements = htmlentities($achievements);
        $price = htmlentities($price);

        if (empty($name)) { array_push($errors, "name is required"); }
        if (empty($date)) { array_push($errors, "date is required"); }
        if (empty($dev)) { array_push($errors, "developer is required"); }
        if (empty($publisher)) { array_push($errors, "publisher is required"); }
        if (empty($categories)) { array_push($errors, "categories are required"); }
        if (empty($spytags)) { array_push($errors, "spytags are required"); }
        if (empty($achievements)) { array_push($errors, "achievements are required"); }
        if (empty($price)) { array_push($errors, "price is required"); }

        if (count($errors) == 0) {

          $insertsql = "INSERT INTO OhMain (GameName, ReleaseDate, LanguageID, Developer, Publisher,
          PlatformsID, RequiredAgeID, Categories, GenreID, Spytags, Achievements, Owners, Price)
                    VALUES('$name', '$date', '$language', '$dev', '$publisher', '$platform',
                    '$reqage', '$categories', '$genre', '$spytags', '$achievements', '$owners', '$price')";

          $result = $conn->query($insertsql);

          if(!$result) {
            echo $conn->error;
          }

          $_SESSION['StepOneSuccess'] = "Step One Complete, Proceed To Step Two";

        }

      }

      // posts product data into OhGameData table
      // occurs after admin presses complete step two button on insert.php in admin folder
      if (isset($_GET['createsteptwo'])) {

        $positive = $_POST['positive'];
        $negative = $_POST['negative'];
        $average = $_POST['average'];
        $media = $_POST['median'];

        $positive = 0;
        $negative = 0;
        $average = 0;
        $median = 0;

          $insertsql = "INSERT INTO OhGameData (PositiveRatings, NegativeRatings, AveragePlaytime, MedianPlaytime)
                    VALUES('$positive', '$negative', '$average', '$median')";

          $result = $conn->query($insertsql);

          if(!$result) {
            echo $conn->error;
          }

          $_SESSION['StepTwoSuccess'] = "Step Two Complete, Proceed To Step Three";

      }

      // posts product data into OhScreenshots table
      // occurs after admin presses complete step three button on insert.php in admin folder
      if (isset($_GET['createstepthree'])) {

        $screenshotone = mysqli_real_escape_string($conn, (trim($_POST['screenshotone'])));
        $screenshottwo = mysqli_real_escape_string($conn, (trim($_POST['screenshottwo'])));

        $screenshotone = htmlentities($screenshotone);
        $screenshottwo = htmlentities($screenshottwo);

        if (empty($screenshotone)) { array_push($errors, "screenshot one is required"); }
        if (empty($screenshottwo)) { array_push($errors, "screenshot two is required"); }

        if (count($errors) == 0) {

          $insertsql = "INSERT INTO OhScreenshots (ScreenshotOne, ScreenshotTwo)
                    VALUES('$screenshotone', '$screenshottwo')";

          $result = $conn->query($insertsql);

          if(!$result) {
            echo $conn->error;
          }

          $_SESSION['StepThreeSuccess'] = "Step Three Complete, Proceed To Step Four";

        }

      }

      // posts product data into OhDescription table
      // occurs after admin presses complete step four button on insert.php in admin folder
      if (isset($_GET['createstepfour'])) {

        $shortdescription = mysqli_real_escape_string($conn, (trim($_POST['description'])));

        $shortdescription = htmlentities($shortdescription);

        if (empty($shortdescription)) { array_push($errors, "description is required"); }

        if (count($errors) == 0) {

          $insertsql = "INSERT INTO OhDescription (ShortDescription)
                    VALUES('$shortdescription')";

          $result = $conn->query($insertsql);

          if(!$result) {
            echo $conn->error;
          }

          $_SESSION['StepFourSuccess'] = "Step Four Complete, Proceed To Step Five";

        }

      }

      // posts product data into OhMedia table
      // occurs after admin presses complete step five button on insert.php in admin folder
      if (isset($_GET['createstepfive'])) {

        $headerimage = mysqli_real_escape_string($conn, (trim($_POST['header'])));
        $background = mysqli_real_escape_string($conn, (trim($_POST['background'])));

        $headerimage = htmlentities($headerimage);
        $background = htmlentities($background);

        if (empty($headerimage)) { array_push($errors, "header is required"); }
        if (empty($background)) { array_push($errors, "background is required"); }

        if (count($errors) == 0) {

          $insertsql = "INSERT INTO OhMedia (HeaderImage, Background)
                    VALUES('$headerimage', '$background')";

          $result = $conn->query($insertsql);

          if(!$result) {
            echo $conn->error;
          }

          $_SESSION['StepFiveSuccess'] = "Step Five Complete!";

        }

      }

      /* POST requests for updating products on updateproduct.php in admin folder */

    // all requests occur after admin clicks the relevant update button

    // if admin updates product name the new name is entered into OhMain table
    if (isset($_GET['updatename'])) {

      if($_SERVER["REQUEST_METHOD"]==="POST") {
          include('../conn/conn.php');
          $conn->set_charset('utf8mb4');

          $id = $_POST['id'];
          $nameupdate = mysqli_real_escape_string($conn, (trim($_POST['name'])));
          $nameupdate = htmlentities($nameupdate);

          $query = "UPDATE OhMain SET GameName=' $nameupdate' WHERE MainID= ' $id' ";

          $result = $conn->query($query);

              if(!$result) {
                echo $conn->error;
            }

          }

      }

      // if admin updates product language the new language is entered into OhMain table
      if (isset($_GET['updatelanguage'])) {

        if($_SERVER["REQUEST_METHOD"]==="POST") {
            include('../conn/conn.php');
            $conn->set_charset('utf8mb4');

            $id = $_POST['id'];
            $languageupdate = mysqli_real_escape_string($conn, (trim($_POST['language'])));
            $languageupdate = htmlentities($languageupdate);

            $query = "UPDATE OhMain SET LanguageID=' $languageupdate' WHERE MainID= ' $id' ";

            $result = $conn->query($query);

                if(!$result) {
                  echo $conn->error;
                }

            }

        }

        // if admin updates product platform the new platform is entered into OhMain table
        if (isset($_GET['updateplatform'])) {

          if($_SERVER["REQUEST_METHOD"]==="POST") {
              include('../conn/conn.php');
              $conn->set_charset('utf8mb4');

              $id = $_POST['id'];
              $name = $_POST['platform'];

              $platformupdate = mysqli_real_escape_string($conn, (trim($_POST['platform'])));
              $platformupdate = htmlentities($platformupdate);

              $query = "UPDATE OhMain SET PlatformsID=' $platformupdate' WHERE MainID= ' $id' ";

              $result = $conn->query($query);

                  if(!$result) {
                    echo $conn->error;
                  }

              }

          }

        // if admin updates product genre the new genre is entered into OhMain table
        if (isset($_GET['updategenre'])) {

          if($_SERVER["REQUEST_METHOD"]==="POST") {
                include('../conn/conn.php');
                $conn->set_charset('utf8mb4');

                $id = $_POST['id'];
                $genreupdate = mysqli_real_escape_string($conn, (trim($_POST['genre'])));
                $genreupdate = htmlentities($genreupdate);

                $query = "UPDATE OhMain SET GenreID=' $genreupdate' WHERE MainID= ' $id' ";

                $result = $conn->query($query);

                    if(!$result) {
                      echo $conn->error;
                    }

              }

          }

          // if admin updates product price the new name is entered into OhMain table
          if (isset($_GET['updateprice'])) {

            if($_SERVER["REQUEST_METHOD"]==="POST") {
                  include('../conn/conn.php');
                  $conn->set_charset('utf8mb4');

                  $id = $_POST['id'];
                  $priceupdate = mysqli_real_escape_string($conn, (trim($_POST['price'])));
                  $priceupdate = htmlentities($priceupdate);

                  $query = "UPDATE OhMain SET Price=' $priceupdate' WHERE MainID= ' $id' ";

                  $result = $conn->query($query);

                      if(!$result) {
                        echo $conn->error;
                      }

                }

            }

        // if admin updates product date the new date is entered into OhMain table
        if (isset($_GET['updatedate'])) {

              if($_SERVER["REQUEST_METHOD"]==="POST") {
                    include('../conn/conn.php');
                    $conn->set_charset('utf8mb4');

                    $id = $_POST['id'];
                    $dateupdate = mysqli_real_escape_string($conn, (trim($_POST['date'])));
                    $dateupdate = htmlentities($dateupdate);

                    $query = "UPDATE OhMain SET ReleaseDate=' $dateupdate' WHERE MainID= ' $id' ";

                    $result = $conn->query($query);

                        if(!$result) {
                          echo $conn->error;
                        }

                  }

              }

        // if admin updates product developer the new developer is entered into OhMain table
        if (isset($_GET['updatedeveloper'])) {

          if($_SERVER["REQUEST_METHOD"]==="POST") {
                include('../conn/conn.php');
                $conn->set_charset('utf8mb4');

                $id = $_POST['id'];
                $developerupdate = mysqli_real_escape_string($conn, (trim($_POST['developer'])));
                $developerupdate = htmlentities($developerupdate);

                $query = "UPDATE OhMain SET Developer=' $developerupdate' WHERE MainID= ' $id' ";

                $result = $conn->query($query);

                if(!$result) {
                      echo $conn->error;
                    }

                    }

                }


          // if admin updates product publisher the new publisher is entered into OhMain table
          if (isset($_GET['updatepublisher'])) {

            if($_SERVER["REQUEST_METHOD"]==="POST") {
                include('../conn/conn.php');
                $conn->set_charset('utf8mb4');

                $id = $_POST['id'];
                $publisherupdate = mysqli_real_escape_string($conn, (trim($_POST['publisher'])));
                $publisherupdate = htmlentities($publisherupdate);

                $query = "UPDATE OhMain SET Publisher=' $publisherupdate' WHERE MainID= ' $id' ";

                $result = $conn->query($query);

                    if(!$result) {
                      echo $conn->error;
                    }

              }

          }

          // if admin updates product categories the new categories are entered into OhMain table
          if (isset($_GET['updatecategories'])) {

            if($_SERVER["REQUEST_METHOD"]==="POST") {
                include('../conn/conn.php');
                $conn->set_charset('utf8mb4');

                $id = $_POST['id'];
                $categoriesupdate = mysqli_real_escape_string($conn, (trim($_POST['categories'])));
                $categoriesupdate = htmlentities($categoriesupdate);

                $query = "UPDATE OhMain SET Categories=' $categoriesupdate' WHERE MainID= ' $id' ";

                $result = $conn->query($query);

                    if(!$result) {
                      echo $conn->error;
                    }

              }

          }


          // if admin updates screenshotone the new screenshot is entered into OhScreenshots table
          if (isset($_GET['updatescreenshotone'])) {

            if($_SERVER["REQUEST_METHOD"]==="POST") {
                include('../conn/conn.php');
                $conn->set_charset('utf8mb4');

                $id = $_POST['id'];
                $screenshotoneupdate = mysqli_real_escape_string($conn, (trim($_POST['screenshotone'])));
                $screenshotoneupdate = htmlentities($screenshotoneupdate);

                $query = "UPDATE OhScreenshots SET ScreenshotOne=' $screenshotoneupdate' WHERE ScreenshotID= ' $id' ";

                $result = $conn->query($query);

                    if(!$result) {
                      echo $conn->error;
                    }

              }

          }


          // if admin updates screenshot two the new screenshot is entered into OhScreenshots table
          if (isset($_GET['updatescreenshottwo'])) {

            if($_SERVER["REQUEST_METHOD"]==="POST") {
                include('../conn/conn.php');
                $conn->set_charset('utf8mb4');

                $id = $_POST['id'];
                $screenshottwoupdate = mysqli_real_escape_string($conn, (trim($_POST['screenshottwo'])));
                $screenshottwoupdate = htmlentities($screenshottwoupdate);

                $query = "UPDATE OhScreenshots SET ScreenshotTwo=' $screenshottwoupdate' WHERE ScreenshotID= ' $id' ";

                $result = $conn->query($query);

                    if(!$result) {
                      echo $conn->error;
                    }

              }

          }

    // if admin updates product description the new description is entered into OhDescription table
    if (isset($_GET['updatedescription'])) {

        if($_SERVER["REQUEST_METHOD"]==="POST") {
          include('../conn/conn.php');
          $conn->set_charset('utf8mb4');

          $id = $_POST['id'];
          $descriptionupdate = mysqli_real_escape_string($conn, (trim($_POST['description'])));
          $descriptionupdate = htmlentities($descriptionupdate);

          $query = "UPDATE OhDescription SET ShortDescription=' $descriptionupdate' WHERE DescriptionID= ' $id' ";

          $result = $conn->query($query);

            if(!$result) {
              echo $conn->error;
              }

          }

      }

      // experimenting with multi delete query for removing products
      if (isset($_GET['deleteproduct'])) {

          if($_SERVER["REQUEST_METHOD"]==="POST") {
            include('../conn/conn.php');
            $conn->set_charset('utf8mb4');

            $id = $_POST['id'];

            $query = "DELETE * FROM OhMain WHERE MainID = '$id';";
            $query .= "DELETE * FROM OhGameData WHERE GameDataID = '$id';";
            $query .= "DELETE * FROM OhScreenshots WHERE ScreenshotID = '$id';";
            $query .= "DELETE * FROM OhDescription WHERE DescriptionID = '$id';";
            $query .= "DELETE * FROM OhMedia WHERE MediaID = '$id' ";

            $conn->multi_query($query);
            while ($conn->next_result()) {;}

            $conn->close();

        }

      }


?>

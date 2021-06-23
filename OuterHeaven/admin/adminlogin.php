<?php

include("../conn/conn.php");
include("../functions/functions.php");
include("../secure/postadmindata.php");

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: adminlogin.php");
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

  <!-- navbar -->

  <section id="header">

  <?php

  $footertext = generateAdminHeader();
  echo $footertext;

    ?>

  </section>

  <!-- login Section -->

  <section id="login">

    <div class="login-background" style="height: 80rem;">
      <div class="login-container">
        <div class="row" style="margin: 0; padding: 0">
          <div class="col-sm-2" style="margin: 0; padding: 0"></div>
          <div class="forum-container col-sm-8" style="margin: 0; padding: 0">
            <h2 class="login-title" style="padding-top: 10rem;"><i class="fas fa-user"></i> Log In</h2>
            <hr class="black-line">

            <!-- forms taken from bootstrap version 5.0 -->
            <!-- username : admin1 -->
            <!-- password : password123 -->
            <form action="adminlogin.php" method="post">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                <input name="username" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input name="password" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class='col-12'>
                <button class='btn btn-primary' type='submit' name="admin_login">Login</button>

                <?php if(isset($_SESSION['adminfailure'])) : ?>
                  <p></p>
                  <h6>
                    <?php
                    echo $_SESSION['adminfailure'];
                    ?>
                  </h6>
                <?php endif ?>

                <?php if(isset($_SESSION['adminsuccess'])) : ?>
                  <p></p>
                  <?php unset($_SESSION['adminfailure']); ?>
                  <h6>Welcome <?php echo $_SESSION['adminusername']; ?></h6>
                  <h6><a href="adminlogin.php?logout" style="color: black">logout</a></h6>
                <?php endif ?>
              </form>
            </div>
            <div class="col-sm-2" style="margin: 0; padding: 0"></div>
            <h6 style="padding-top: 10px">Note - You must login to access insert or update features</h6>
          </div>
        </div>
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

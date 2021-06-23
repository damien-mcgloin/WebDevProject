<?php

include("conn/conn.php");
include("functions/functions.php");
include("secure/postusercomplaint.php");

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

  <!-- Common Issues Section-->
  <section id="issues">

    <div class="issues-background container-fluid">
      <p class="notice-text"><strong class="notice-text-color">IMPORTANT NOTICE!</strong> WE ARE CURRENTLY EXPERIENCING HEAVY SUPPORT TRAFFIC, THEREFORE RESPONSE TIMES ARE HIGHER THAN USUAL. WE APPRECIATE YOUR PATIENCE AND UNDERSTANDING</p>
      <hr>
      <img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fgames.jpg?v=1614519729424" class="img-fluid" alt="">
      <div class="welcome-background">
        <h1 class="welcome-msg">Welcome to Outer Heaven Support</h1>
      </div>
      <div class="">
        <div class="row help-icon-row">
          <div class="col col-lg-4 col-md-6 col-sm-12">
            <a href="#gameissues"><i class="help-icon fas fa-gamepad fa-6x"></i></a>
            <h5><strong>GAME TECHNICAL ISSUES</strong></h5>
            <p class="help-text">Is a game you already bought and downloaded not working properly</p>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-12">
            <a href="#orders"><i class="help-icon fas fa-shopping-cart fa-6x"></i></a>
            <h5><strong>ORDERS & PAYMENTS</strong></h5>
            <p class="help-text">Are you having trouble making a purchase?</p>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-12">
            <a href="#account"><i class="help-icon fas fa-users fa-6x"></i></a>
            <h5><strong>ACCOUNT & STORE</strong></h5>
            <p class="help-text">Are you having issues with accessing your account or the store itself?</p>
          </div>

          <div class="col col-lg-4 col-md-6 col-sm-12">
            <a href="#downloads"><i class="help-icon fas fa-download fa-6x"></i></a>
            <h5><strong>DOWNLOADS & INSTALLING</strong></h5>
            <p class="help-text">Did something go wrong when downloading or installing your game?</p>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-12">
            <a href="#cloud"><i class="help-icon fas fa-mobile fa-6x"></i></a>
            <h5><strong>OUTER HEAVEN CLOUD</strong></h5>
            <p class="help-text">Is the OUTER HEAVEN CLOUD app or any of its features not working properly?</p>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-12">
            <a href="#policies"><i class="help-icon fas fa-question fa-6x"></i></a>
            <h5><strong>POLICIES & GENERAL INFO</strong></h5>
            <p class="help-text">Here you can read our policies, or learn more about our service.</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Assistance Section-->
  <section id="gameissues">
    <div class="assistance-background container-fluid">
      <h2 class="issues-width issues-topic"><strong>GAME TECHNICAL ISSUES</strong></h2>
      <hr class="gameissues-hr issues-width">
      <h3 class="general-advice issues-width">General troubleshooting</h3>
      <h5 class="assistance-text issues-width">Graphical problems on tablets <i class="tablet-icon fas fa-tablet"></i></h5>
      <p class="issues-width assistance-text-bottom">1) Such issue occurs when the native screen resolution is in vertical aspect ratio (portrait mode),
        with height resolution parameter being much bigger then width parameter.
        This is a problem for older games, which does not support screen rotate function.</p>
      <p class="issues-width assistance-text-bottom">2) Depending on the game the the solutions will be different. The easiest way would
        be to try to run the game in windowed mode. If the game starts with options launcher,
        you might be able to enable windowed mode there. If not, sometimes simple key combination
        Left Alt + Enter will switch the game's resolution to windowed mode.</p>
      <h5 class="assistance-text issues-width">Crashing in general <i class="tablet-icon fas fa-laptop"></i></h5>
      <p class="issues-width assistance-text-bottom">1) Please make sure that you use "Run as Administrator" to install and to start the game (right-click on the shortcut or setup file and select "Run as Administrator").</p>
      <p class="issues-section-end issues-width issues-section-padding assistance-text-bottom">2) Please reinstall the game AND add it to your antivirus/firewall software exception/trusted list. Simply disabling firewall or AV software could not be enough, since some
        of these software are running still in background or in services list. We recommend reinstalling the game
        outside Program Files or Program Files(x86) folder.</p>
      <hr class="gameissues-hr issues-section-end issues-width">
    </div>
  </section>

  <section id="orders">
    <div class="assistance-background container-fluid">
      <h2 class="issues-width issues-topic"><strong>ORDERS & PAYMENTS</strong></h2>
      <hr class="gameissues-hr issues-width">
      <h3 class="general-advice issues-width">General troubleshooting</h3>
      <h5 class="assistance-text issues-width">How do I buy a gift? <i class="tablet-icon fas fa-gift"></i></h5>
      <p class="issues-width assistance-text-bottom">To buy a gift, proceed to the payment screen, but before clicking "Pay for your
        order now" in Checkout, make sure to select the
        "Gift this order" checkbox, just under the payment options. You will also have to enter
        the gift recipient's email address. Once that is done, proceed with the rest of the
        purchase normally.</p>
      <h5 class="assistance-text issues-width">How do I refund a game? <i class="tablet-icon fas fa-dollar-sign"></i></h5>
      <p class="issues-width assistance-text-bottom"> 1) You may request a refund for a product up to 30 days after purchase, even if it was
        downloaded, launched, and played. To apply for a refund, you should contact our Customer
        Support Team within 30 days of your purchase, and our team will sort it out as soon as
        possible.</p>
      <p class="issues-section-end issues-width issues-section-padding assistance-text-bottom">2) Please keep in mind that we're actively
        monitoring the effects of our new Refund Policy to make sure no one is using it
        to hurt the developers that put their time and heart into making great games. We
        may refuse refunds in such individual cases.</p>
      <hr class="gameissues-hr issues-section-end issues-width">
    </div>
  </section>

  <section id="account">
    <div class="assistance-background container-fluid">
      <h2 class="issues-width issues-topic"><strong>ACCOUNT & STORE</strong></h2>
      <hr class="gameissues-hr issues-width">
      <h3 class="general-advice issues-width">Account-related issues</h3>
      <h5 class="assistance-text issues-width">I can't log in. What do I do? <i class="tablet-icon fas fa-laptop"></i></h5>
      <p class="issues-width assistance-text-bottom">1) First of all, make sure that your login and password are correct. If you get the
        "User not found" error when trying to log in, check your other email addresses and
        aliases, in case you used a different one. You can also look for the Outer Heaven account creation
        confirmation email in your mailboxes, and check what exact address it was sent to.
        If none of the email addresses work, please contact our Support team.</p>
      <p class="issues-width assistance-text-bottom">2) If you seem to be using the correct login credentials, but still cannot log in, try these troubleshooting steps:
      <ol class="issues-width assistance-text-bottom">
        <li>wipe your browser's cache and cookies and reload the OuterHeaven.com page,</li>
        <li>try a different browser (ideally a freshly installed one, with no addons/plugins),</li>
        <li>add OuterHeaven.com to your firewall/antivirus software's whitelist</li>
      </ol>
    </p class="assistance-text issues-width assistance-text-bottom">
      <h5 class="assistance-text issues-width">How can I delete my account? <i class="tablet-icon fas fa-user-circle"></i></h5>
      <p class="issues-width assistance-text-bottom">1) If you're sure that you wish to delete your account, contact our Support team.
        After verifying that you are the account's owner, they will initiate the deletion
        procedure.</p>
      <p class="issues-section-end issues-width issues-section-padding assistance-text-bottom">2) Please keep in mind that account deletion is irreversible.
        Additionally, after an account has been deleted, it's not possible to restore its contents
        (purchases and/or redeemed codes) on a newly created account, and you will not receive
        refunds for any purchases made on your account when it is deleted.</p>
      <hr class="gameissues-hr issues-section-end issues-width">
    </div>
  </section>

  <section id="downloads">
    <div class="assistance-background container-fluid">
      <h2 class="issues-width issues-topic"><strong>DOWNLOADS & INSTALLING</strong></h2>
      <hr class="gameissues-hr issues-width">
      <h3 class="general-advice issues-width">Download-related issues</h3>
      <h5 class="assistance-text issues-width">I'm unable to download my game - what can I do? <i class="tablet-icon fas fa-download"></i></h5>
      <p class="issues-width assistance-text-bottom">As a general rule, if one download method doesn't work for you,
        try a different one. We offer two download methods here at
        Outer Heaven - these are:</p>
      <ol class="issues-width assistance-text-bottom">
        <li>Outer Heaven Cloud - our optional application which offers easy installation of games,
          automatic updates, as well as downloading standalone installers with full
          protection against download corruption.</li>
        <li>Browser downloads - the oldschool option, which lets you just download standalone
          installers onto your computer, and install them anywhere, at any time.</li>
      </ol>
      <h5 class="assistance-text issues-width">"Error 403" when downloading with a browser <i class="tablet-icon fas fa-bug"></i></h5>
      <p class="issues-width assistance-text-bottom"> 1) This error occurs due to an IP mismatch in your browser (this happens in
        unusually-configured networks, if the IP assigned when starting a download is
        different from the IP assigned when connecting to the website itself).</p>
      <p class="issues-section-end issues-width issues-section-padding assistance-text-bottom">2) In such situations, we strongly suggest using
        Outer Heaven Cloud in order to install the game, or to just download the standalone
        installer files. The added benefit will be protection against download corruption,
        offered by Outer Heaven Cloud.</p>
      <hr class="gameissues-hr issues-section-end issues-width">
    </div>
  </section>

  <section id="cloud">
    <div class="assistance-background container-fluid">
      <h2 class="issues-width issues-topic"><strong>OUTER HEAVEN CLOUD</strong></h2>
      <hr class="gameissues-hr issues-width">
      <h3 class="general-advice issues-width">General information</h3>
      <h5 class="assistance-text issues-width">What data does Outer Heaven store? <i class="tablet-icon fas fa-user-secret"></i></h5>
      <p class="issues-width assistance-text-bottom">We’re storing only the data that is required to provide you with the Outer Heaven Cloud features -
        list of games you own on each platform, game time, and achievements, friends list and their
        status, chat and conversation history. All the data we store on our servers is fully encrypted.
        We’re not storing any authentication data from platforms you connect to in Outer Heaven Cloud. Once you
        disconnect a platform, all your imported data will be removed from our servers.</p>
      <h5 class="assistance-text issues-width">What kind of stats and activities will Outer Heaven Cloud show me? <i class="tablet-icon fas fa-laptop"></i></h5>
      <p class="issues-width assistance-text-bottom">You’ll see all your games from connected platforms together with your progress in each title –
        the achievements you’ve earned and your game time.</p>
      <p class="issues-section-end issues-width issues-section-padding assistance-text-bottom">Also, for your Outer Heaven friends, you’ll be able to
        see their online status and what games they are playing, with their achievements and
        time spent in each title.</p>
      <hr class="gameissues-hr issues-section-end issues-width">
    </div>
  </section>

  <section id="policies">
    <div class="assistance-background container-fluid">
      <h2 class="issues-width issues-topic"><strong>POLICIES & GENERAL INFO</strong></h2>
      <hr class="gameissues-hr issues-width">
      <h3 class="general-advice issues-width">Policies</h3>
      <h5 class="assistance-text issues-width">Information we collect <i class="tablet-icon fas fa-info-circle"></i></h5>
      <p class="issues-width assistance-text-bottom">When you register an Outer Heaven account with us, you will need to provide us:
      <ol class="issues-width assistance-text-bottom">
        <li>your username</li>
        <li>your email address</li>
        <li>a password (which is
          encrypted so that we don’t have access to it)</li>
      </ol>
      <p class="issues-width assistance-text-bottom">This information is necessary
      for us to provide you with a Outer Heaven account requested by you. In your Outer Heaven
      account settings you can also set your date of birth, avatar, and your
      geographical location. This information will be protected by your Outer Heaven
      account password. You are responsible for keeping it safe - please don't
      share it with anyone.</p>
      <h5 class="assistance-text issues-width">Rules & Guidelines for OuterHeaven.com Reviews <i class="tablet-icon fas fa-gavel"></i></h5>
      <p class="issues-width assistance-text-bottom">1) Do I need to have purchased a game in order to write a review of it?</p>
      <p class="issues-width assistance-text-bottom"> No, it is not required.
        This allows you to write a review about a game you may have played on a different platform.
        However, please keep in mind that if you do not have the game in your Outer Heaven library, your
        review will not have the 'Verified owner' tag.</p>
      <p class="issues-width assistance-text-bottom">Can I write a negative review?</p>
      <p class="issues-section-end issues-width assistance-text-bottom">2) Yes. If you are unsatisfied with the game (e.g. the
        gameplay, graphics, in-game mechanics and features) you are free to write a review
        and share your opinion with other Outer Heaven users as to why you do not recommend it.</p>
      <p class="gameissues-hr issues-section-padding issues-width"></p>
    </div>
  </section>

  <!-- form and button taken from bootstrap version 5.0 -->
  <!-- post method used to pass data through postusercomplaint.php in secure folder -->

  <section id="help-forum">
    <div class="help-message-background">
      <h3 class="help-text help-top-text">Didn't find the help you needed?</h3>
      <hr>
      <h5 class="help-text help-bottom-text">Send a message below and a member of our support team will get back to you as soon as possible.</h5>

    <form action="support.php" method="post" style="width: 80%; margin: auto">
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Your Email</span>
        <input name="useremail" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Your issue</span>
        <input name="userissue" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class='col-12'>
        <button class='btn btn-primary' type='submit' name="user_complaint">Submit</button>
    </form>

<p class="gameissues-hr issues-section-padding"></p>
<hr class="gameissues-hr issues-section-end issues-width">
</div>
  </section>

  <!-- Footer Section -->
  <section id="footer">

    <?php

    $footertext = generateFooter();
    echo $footertext;

      ?>

  </section>

  <script>

    $(document).ready(function() {

      $(".request").click(function() {
          $(".text").remove();
          $(this).html("Message Sent!");
          console.log("I was clicked");
      });
    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>

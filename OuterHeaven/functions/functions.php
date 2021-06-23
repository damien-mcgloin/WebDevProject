<?php

function generateHeader() {

  $header = "<div class='navbar-background container-fluid'>
      <div class='row'>
        <div class='navbar-logo col'>
          <a href='http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/index.php' class='navbar-brand'><img class='title-image' src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcircle-cropped.png?v=1614619220015' alt='outer-heaven-logo'
              width='45' height='50'>UTER HEAVEN</a>
        </div>

        <div class='navbar-menu col'>
          <div class='d-flex justify-content-right'>
            <li class='nav-item'>
              <a class='nav-link' href='discover.php?page=1'>DISCOVER</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='community.php'>COMMUNITY</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='support.php'>SUPPORT</a>
            </li>
          </div>
        </div>

        <div class='dropdown d-flex justify-content-end col menu-button'>
          <button class='btn btn-secondary dropdown-toggle btn-dark' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
            MENU
          </button>
          <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
            <li><a class='dropdown-item' href='discover.php?page=1'>Discover</a></li>
            <li><a class='dropdown-item' href='community.php'>Community</a></li>
            <li><a class='dropdown-item' href='support.php'>Support</a></li>
            <li><a class='dropdown-item' href='login.php'>Login/Logout</a></li>
            <li><a class='dropdown-item' href='#'>Go to Cart</a></li>
          </ul>
        </div>

      </div>
    </div>";
    RETURN $header;
  }

function generateAdminHeader() {

  $header =   "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
      <div class='container-fluid'>
        <a class='navbar-brand' href='login.php'>
        <a href='http://dmcgloin01.lampt.eeecs.qub.ac.uk/OuterHeaven/admin/adminlogin.php' class='navbar-brand'><img class='title-image' src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcircle-cropped.png?v=1614619220015' alt='outer-heaven-logo'
            width='45' height='50'>UTER HEAVEN</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link' href='insert.php'>Insert</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='view.php?page=1'>Update</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='adminlogin.php'>Login/Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>";
    RETURN $header;

}

function generateFooter() {
  $year = date("Y");
  $footer =  "<div class='footer-background container-fluid'>
      <div class='row'>
        <div class='footer-text col-lg-9 col-md-8 col-sm-12'>
          <a class='navbar-brand'><img class='title-image' src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcircle-cropped.png?v=1614619220015' alt='outer-heaven-logo' width='45' height='50'>UTER HEAVEN</a>
          <p class='copyright-text'>© Copyright Outer Heaven $year. All trademarks and registered trademarks are the property of their respective owners.</p>
        </div>
        <div class='footer-social col-lg-3 col-md-4'>
          <div class='d-flex justify-content-center'>
            <a href='https://www.facebook.com' target='_blank'><i class='social-icon fab fa-facebook-f'></i></a>
            <a href='https://www.twitter.com' target='_blank'><i class='social-icon fab fa-twitter'></i></a>
            <a href='https://www.instagram.com' target='_blank'><i class='social-icon fab fa-instagram'></i></a>
            <a href='mailto:fakeemail@gmail.com'><i class='social-icon fas fa-envelope'></i></a>
          </div>
        </div>
      </div>
    </div>";
    RETURN $footer;
  }

function generateHighlights() {
  $highlights =
  "<div class='highlights-background'>
    <div class='highlights-section'>
      <h2 class='highlights-text'><i class='fas fa-gamepad'></i> Coming soon</h2>
      <hr class='highlights-line'>

    <div id='carouselFeatured' class='carousel slide' data-bs-ride='carousel'>
      <div class='carousel-indicators'>
        <button type='button' data-bs-target='#carouselFeatured' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
        <button type='button' data-bs-target='#carouselFeatured' data-bs-slide-to='1' aria-label='Slide 2'></button>
        <button type='button' data-bs-target='#carouselFeatured' data-bs-slide-to='2' aria-label='Slide 3'></button>
      </div>
      <div class='carousel-inner'>
        <div class='carousel-item active carousel-image'>
          <img src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fhades.jpg?v=1614519732099' class='d-block w-100'>
        </div>
        <div class='carousel-item carousel-image'>
          <img src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fthelastofus2.jpg?v=1614522187233' class='d-block w-100'>
        </div>
        <div class='carousel-item carousel-image'>
          <img src='https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fzelda.jpg?v=1614519731831' class='d-block w-100'>
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
  </div>

</div>";
RETURN $highlights;
}

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <!-- Bootstrap CSS framework -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

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

    <div class="navbar-background container-fluid">
      <div class="row">
        <div class="navbar-logo col">
          <a href="https://damien-mcgloin.github.io/projectpreview/" class="navbar-brand"><img class="title-image" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcircle-cropped.png?v=1614619220015" alt="outer-heaven-logo"
              width="45" height="50">UTER HEAVEN</a>
        </div>

        <div class="navbar-menu col">
          <div class="d-flex justify-content-right">
            <li class="nav-item">
              <a class="nav-link" href="recommended.html">RECOMMENDED</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.html">COMMUNITY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.html">SUPPORT</a>
            </li>
          </div>
        </div>

        <div class="dropdown d-flex justify-content-end col menu-button">
          <button class="btn btn-secondary dropdown-toggle btn-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            MENU
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="recommended.html">Recommended</a></li>
            <li><a class="dropdown-item" href="community.html">Community</a></li>
            <li><a class="dropdown-item" href="support.html">Support</a></li>
            <li><a class="dropdown-item" href="community.html#signup">Sign Up</a></li>
            <li><a class="dropdown-item" href="#">Go to Cart</a></li>
            <li><a class="dropdown-item" href="#">
                <div class="cart">
                  <div class="cart-header">Cart Info</div>
                  <div class="cart-body" data-cart="display">
                    <div>Total item(s): <span data-cart-total-item="0">0</span></div>
                    <div>Total Price: $<span data-cart-total-price="0">0.00</span></div>
                  </div>
                </div></span></li>
            </a></li>
            <li><a class="dropdown-item" href="#"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"></a></li>
          </ul>
        </div>

      </div>
    </div>

  </section>

  <!-- Highlights Section -->

  <section id="highlights">
    <div class="highlights-background container-fluid">
      <h2 class="highlights-text"><i class="fas fa-gamepad"></i> Highlights</h2>
      <hr class="highlights-line">


    <div id="carouselFeatured" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active carousel-image">
          <a href="productpage.html"><img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fhades.jpg?v=1614519732099" class="d-block w-100" alt="hades-picture"></a>
          <div class="carousel-caption d-none d-md-block">
            <h4 class="carousel-price"><strong>$14.99</strong>
              <button type="button" class="carousel-button btn btn-success product">Add to cart</button>
            </h4>
          </div>
        </div>
        <div class="carousel-item carousel-image">
          <a href="productpage.html"><img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fthelastofus2.jpg?v=1614522187233" class="d-block w-100" alt="lou2-picture"></a>
          <div class="carousel-caption d-none d-md-block">
            <h4 class="carousel-price"><strong>$39.99</strong>
              <button type="button" class="carousel-button btn btn-success product">Add to cart</button>
            </h4>
          </div>
        </div>
        <div class="carousel-item carousel-image">
          <a href="productpage.html"><img src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fzelda.jpg?v=1614519731831" class="d-block w-100" alt="zelda-picture"></a>
          <div class="carousel-caption d-none d-md-block">
            <h4 class="carousel-price"><strong>$29.99</strong>
              <button type="button" class="carousel-button btn btn-success product">Add to cart</button>
            </h4>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselFeatured" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselFeatured" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    </div>


  </section>

  <section id="featured">

    <div class="featured-background container-fluid">
      <h2 class="featured-text"><i class="fas fa-star"></i> Featured</h2>
      <hr class="featured-line">
      <div class="row">

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fomori.jpg?v=1614519727794" class="card-img-top" alt="omori-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Omori</strong></h5>
            </a>
            <p class="card-text">Explore a strange world full of colorful friends and foes. Choose your fate and perhaps the fate of others as well...</p>
            <div>
              <h5 class="card-price">$14.99
                <i class="fab fa-windows"></i>
                <i class="fab fa-apple"></i>
                <button class="card-button btn btn-success product">Add to cart</i></button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fbaldur's%20gate%203.jpg?v=1614519727769" class="card-img-top" alt="Baldur'sGate3-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Baldur's Gate 3</strong></h5>
            </a>
            <p class="card-text">Gather your party, and return to the Forgotten Realms in a tale of fellowship and betrayal, sacrifice and survival.</p>
            <div>
              <h5 class="card-price">$44.99
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fouter%20worlds.jpg?v=1614538047343" class="card-img-top" alt="outerworlds-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>The Outer Worlds</strong></h5>
            </a>
            <p class="card-text">As you explore a space colony, the character you decide to become will determine how this player-driven story unfolds. </p>
            <div>
              <h5 class="card-price">$29.99
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fsubnautica.jpg?v=1614616575368" class="card-img-top" alt="subnautica-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Subnautica</strong></h5>
            </a>
            <p class="card-text">Descend into the depths of an alien underwater world filled with wonder and peril. Craft, pilot and out-smart wildlife.</p>
            <div>
              <h5 class="card-price">$19.99
                <i class="fab fa-windows"></i>
                <i class="fab fa-apple"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fparadise%20killer.jpg?v=1614616687333" class="card-img-top" alt="paradisekiller-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Paradise Killer</strong></h5>
            </a>
            <p class="card-text">Gather evidence and interrogate suspects in this open world adventure. Find the killer and prove your case.</p>
            <div>
              <h5 class="card-price">$16.49
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fkentucky%20route%20zero.jpg?v=1614616751632" class="card-img-top" alt="kentuckyroute0-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Kentucky Route Zero</strong></h5>
            </a>
            <p class="card-text">A magical realist adventure game about a secret highway running through the caves beneath Kentucky. </p>
            <div>
              <h5 class="card-price">$18.99
                <i class="fab fa-windows"></i>
                <i class="fab fa-apple"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FSUPERHOT.jpg?v=1614538258595" class="card-img-top" alt="superhot-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>SUPERHOT</strong></h5>
            </a>
            <p class="card-text">SUPERHOT is the first person shooter where time moves only when you move. It's just you, outnumbered and outgunned.</p>
            <div>
              <h5 class="card-price">$11.99
                <i class="fab fa-windows"></i>
                <i class="fab fa-apple"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fpyre.jpg?v=1614538191839" class="card-img-top" alt="pyre-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Pyre</strong></h5>
            </a>
            <p class="card-text">Pyre is a party-based RPG. Lead your band of exiles to freedom through a series of mystical competitions.</p>
            <div>
              <h5 class="card-price">$8.99
                <i class="fab fa-windows"></i>
                <i class="fab fa-apple"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcontrol.jpg?v=1614538326088" class="card-img-top" alt="control-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Control</strong></h5>
            </a>
            <p class="card-text">Winner of over 80 awards, Control is a visually stunning action-adventure that will keep you on the edge of your seat.</p>
            <div>
              <h5 class="card-price">$39.99
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fwasteland%203.jpg?v=1614616845712" class="card-img-top" alt="wasteland3-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Wasteland 3</strong></h5>
            </a>
            <p class="card-text">The RPG series that pioneered the post-apocalyptic genre in video games returns with Wasteland 3.</p>
            <div>
              <h5 class="card-price">$49.99
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fyakuza%207.jpg?v=1614616947665" class="card-img-top" alt="yakuza-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Yakuza: Like A Dragon</strong></h5>
            </a>
            <p class="card-text">Become Ichiban Kasuga, a low-ranking yakuza grunt left on the brink of death by the man he trusted most.</p>
            <div>
              <h5 class="card-price">$49.99
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-md-4 col-sm-6" style="width: 18rem;">
          <a href="productpage.html"><img class="card-picture" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fpathologic%202.jpg?v=1614616998849" class="card-img-top" alt="pathologic2-pic"></a>
          <div class="card-body">
            <a href="productpage.html">
              <h5 class="card-title"><strong>Pathologic 2</strong></h5>
            </a>
            <p class="card-text">Pathologic 2 is a groundbreaking open-world horror RPG. Resist the plague. Make medicine. Heal people.</p>
            <div>
              <h5 class="card-price">$12.99
                <i class="fab fa-windows"></i>
                <button class="card-button btn btn-success product">Add to cart</button>
              </h5>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

  </section>

  <!-- Footer Section -->
  <section id="footer">
    <div class="footer-background container-fluid">
      <div class="row">
        <div class="footer-text col-lg-9 col-md-8 col-sm-12">
          <a class="navbar-brand"><img class="title-image" src="https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fcircle-cropped.png?v=1614619220015" alt="outer-heaven-logo" width="45" height="50">UTER HEAVEN</a>
          <p class="copyright-text">© Copyright Outer Heaven. All trademarks and registered trademarks are the property of their respective owners.</p>
        </div>
        <div class="footer-social col-lg-3 col-md-4">
          <div class="d-flex justify-content-center">
            <a href="https://www.facebook.com" target="_blank"><i class="social-icon fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="social-icon fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="social-icon fab fa-instagram"></i></a>
            <a href="mailto:fakeemail@gmail.com"><i class="social-icon fas fa-envelope"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

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

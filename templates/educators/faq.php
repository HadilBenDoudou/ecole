<?php
require_once('../../identifier.php');
require_once("../../connexiondb.php");




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Data -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Educators | Online Course & Education HTML Template</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png" />

  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css" />
  <link rel="stylesheet" href="assets/css/vendor/slick.css" />
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css" />
  <link rel="stylesheet" href="assets/css/vendor/sal.css" />

  <!-- Site Stylesheet -->
  <link rel="stylesheet" href="assets/css/app.css" />

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-266165434-1");
  </script>
  <script type="text/javascript">
    (function() {
      window.__insp = window.__insp || [];
      __insp.push(["wid", 142940862]);
      var ldinsp = function() {
        if (typeof window.__inspld != "undefined") return;
        window.__inspld = 1;
        var insp = document.createElement("script");
        insp.type = "text/javascript";
        insp.async = true;
        insp.id = "inspsync";
        insp.src =
          ("https:" == document.location.protocol ? "https" : "http") +
          "://cdn.inspectlet.com/inspectlet.js?wid=142940862&r=" +
          Math.floor(new Date().getTime() / 3600000);
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(insp, x);
      };
      setTimeout(ldinsp, 0);
    })();
  </script>
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <img src="assets/media/logo-dark.svg" alt="logo" class="mb-5" /><br />
    <img src="assets/media/preloader.gif" alt="logo" />
  </div>

  <!-- Back To Top Start -->
  <a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="fas fa-angle-double-up"></i>
  </a>

  <!-- Main Wrapper Start -->
  <div id="main-wrapper" class="main-wrapper">
    <!--=====================================-->
    <!--=        Top Area Start       	=-->
    <!--=====================================-->
    <div class="top-bar style-1">
      <div class="top-bar-block">
        <p>
          <i class="fas fa-map-marker-alt"></i> V336+525, Route Oued El Khatf, Kélibia 8090
        </p>
        <p><i class="fas fa-clock"></i>Everyday 7 AM to 7 PM Sunday Off</p>
        <p>
          <i class="fas fa-phone-square-alt"></i><a href="tel:0000000">72 277 090</a>
        </p>
      </div>
    </div>
    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="header">
      <!-- Start Main menu Nav -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index-2.php">
          <img src="assets/media/logo.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
          <ul class="navbar-nav ms-auto me-auto mainmenu">
            <li class="menu-item-has-children">
              <a href="index-3.php">Home</a>
            </li>
            <li class="menu-item-has-children">
              <a>Courses</a>
              <ul class="educators-submenu">
                <li>
                  <a href="courses.php">Courses</a>
                </li>

              </ul>
            </li>

            <li class="menu-item-has-children">
              <a class="active">Pages</a>
              <ul class="educators-submenu multiline">
                <li>
                  <a href="about.php">About Us</a>
                </li>
                <li>
                  <a href="events.php">Events</a>
                </li>
                <li>
                  <a href="event-detail.php">Event Detail</a>
                </li>
                <li>
                  <a href="faq.php" class="active">club Detail</a>
                </li>
                <li>
                  <a href="staff.php">Staff</a>
                </li>
                <li>
                  <a href="staff-detail.php">Staff Detail</a>
                </li>
                <li>
                  <a href="blogs.php">formation</a>
                </li>
                <li>
                  <a href="blog-detail.php">formation Detail</a>
                </li>

                <li>
                  <a href="gallery-1.php">Gallery 1</a>
                </li>
                <li>
                  <a href="gallery-2.php">Gallery 2</a>
                </li>


              </ul>
            </li>
            <li class="menu-item-has-children">
              <a class="active" href="modifiercompte.php?id=<?php echo $_SESSION['user']['iduser'] ?>">

                <?php echo ' ' . $_SESSION['user']['login'] ?>
              </a>
            </li>
            <li class="menu-item-has-children">
              <a class="active" href="../../seDeconnecter.php">Deconnexion</a>

            </li>
          </ul>

        </div>
      </nav>
    </header>
    <!--=====================================-->
    <!--=         Banner Area Start         =-->
    <!--=====================================-->
    <section class="breadcrumb">
      <div class="container">
        <div class="breadcrumb-content">
          <h4>Clubs</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a class="active">Clubs</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=       FAQ Area Start      =-->
    <!--=====================================-->
    <?php
    // Connexion à la base de données avec PDO
    $dsn = 'mysql:host=localhost;dbname=ecole';
    $username = 'root';
    $password = '';

    try {
      $connexion = new PDO($dsn, $username, $password);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Recherche soumise par l'utilisateur
      $search = isset($_GET['text']) ? $_GET['text'] : '';

      // Requête SQL pour récupérer les questions et les réponses en fonction de la recherche
      $requete = "SELECT * FROM club WHERE club_name LIKE :search OR club_description LIKE :search";
      $stmt = $connexion->prepare($requete);
      $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
      $stmt->execute();

      // Récupérer toutes les lignes de résultats dans un tableau associatif
      $faqs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      // Gérer les erreurs PDO
      echo "Erreur : " . $e->getMessage();
    }
    ?>

    <?php
    // Connexion à la base de données avec PDO
    $dsn = 'mysql:host=localhost;dbname=ecole';
    $username = 'root';
    $password = '';

    try {
      $connexion = new PDO($dsn, $username, $password);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Requête SQL pour récupérer tous les clubs
      $requeteClubs = "SELECT * FROM club";
      $stmtClubs = $connexion->query($requeteClubs);

      // Récupérer toutes les lignes de résultats dans un tableau associatif
      $clubs = $stmtClubs->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      // Gérer les erreurs PDO
      echo "Erreur : " . $e->getMessage();
    }
    ?>

    <?php
    // Connexion à la base de données avec PDO
    $dsn = 'mysql:host=localhost;dbname=ecole';
    $username = 'root';
    $password = '';

    try {
      $connexion = new PDO($dsn, $username, $password);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Vérifier si une recherche est effectuée
      $searchText = isset($_GET['text']) ? $_GET['text'] : '';

      // Requête SQL pour récupérer les clubs correspondant à la recherche
      $requeteClubs = "SELECT * FROM club WHERE club_name LIKE :searchText OR club_description LIKE :searchText";
      $stmtClubs = $connexion->prepare($requeteClubs);
      $stmtClubs->bindValue(':searchText', '%' . $searchText . '%', PDO::PARAM_STR);
      $stmtClubs->execute();

      // Récupérer toutes les lignes de résultats dans un tableau associatif
      $clubs = $stmtClubs->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      // Gérer les erreurs PDO
      echo "Erreur : " . $e->getMessage();
    }
    ?>

    <section class="faq style-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="search-block">
              <div class="row">
                <div class="col-12">
                  <form action="" method="GET">
                    <div class="input-group form-group mb-0">
                      <input class="form-control" name="text" type="text" placeholder="Search Clubs..." />
                      <button class="input-group-text anime-btn" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="heading">
          <h2>Clubs</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="text-start">
          <div class="row" id="accordionExample">
            <?php if (!empty($clubs)) : ?>
              <?php foreach ($clubs as $club) : ?>
                <div class="col-lg-6">
                  <div class="faq-block" onclick="showClubDetails(<?php echo $club['club_id']; ?>)">
                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $club['club_id']; ?>" aria-expanded="true" aria-controls="faq<?php echo $club['club_id']; ?>"><?php echo $club['club_name']; ?></a>
                    <div id="faq<?php echo $club['club_id']; ?>" class="accordion-collapse collapse" aria-labelledby="faq<?php echo $club['club_id']; ?>" data-bs-parent="#accordionExample">
                      <p><?php echo $club['club_description']; ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else : ?>
              <div class="col-lg-12">
                <p>Aucun club trouvé.</p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <script>
      function showClubDetails(clubId) {
        // Rediriger avec le club_id dans l'URL
        window.location.href = "?club_id=" + clubId;
      }
    </script>
    <section class="news style-1">
      <div class="container">
        <div class="news-block">
          <div class="news-box">
            <img src="assets/media/news/logo.svg" alt="" />
            <p>Resgrite in Club</p>
            <h2>Your club select</h2>
            <span>Join our club for an unforgettable experience filled
              with camaraderie, expert coaching, and top-notch facilities.
              Whether you're a seasoned pro or a beginner, there's a place
              for you here. Let's make memories together on and off the field.!</span>
            <?php

            $club_id = isset($_GET['club_id']) ? $_GET['club_id'] : null;
            ?>

            <form id="registrationForm" action="club.php?club_id=<?php echo $club_id; ?>&id=<?php echo isset($_SESSION['user']['iduser']) ? $_SESSION['user']['iduser'] : ''; ?>" method="post">
              <?php if (isset($_SESSION['user']['iduser'])) : ?>
                <input type="hidden" name="iduser" class="form-control" value="<?php echo $_SESSION['user']['iduser']; ?>" />
              <?php endif; ?>
              <div class="input-group">
                <input class="form-control" name="email" type="email" placeholder="Enter Email" value="<?php echo isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : ''; ?>" style="color: black;" />
                <button id="registerButton" class="input-group-text educators-btn medium dark" type="submit">Register Now</button>
              </div>
            </form>

            <script>
              // Désactiver le bouton après le clic
              document.getElementById("registrationForm").addEventListener("submit", function() {
                document.getElementById("registerButton").disabled = true;
              });
            </script>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           Footer Area Start       =-->
    <!--=====================================-->
    <footer class="footer">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
              <div class="footer-widget">
                <div class="footer-logo">
                  <a href="index-2.php"><img src="assets/media/logo-light.svg" alt="" /></a>
                </div>
                <p class="about">
                  Schools play a crucial role in shaping the minds and futures
                  of students. They provide a structured environment where
                  students can learn and grow, both academically and socially.
                </p>
                <div class="d-flex social">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                  <a href="#"><i class="fab fa-dribbble-square"></i></a>
                  <a href="#"><i class="fab fa-pinterest-square"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-4 col-12">
              <div class="footer-widget space">
                <h6 class="title">Courses</h6>
                <ul class="links list-unstyled">
                  <li><a href="courses.php">Science</a></li>
                  <li><a href="courses.php">Arts</a></li>
                  <li><a href="courses.php">Music</a></li>
                  <li><a href="courses.php">General Ed.</a></li>
                  <li><a href="courses.php">Spoken Eng</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-3 col-12">
              <div class="footer-widget space">
                <h6 class="title">Links</h6>
                <ul class="links list-unstyled">
                  <li><a href="about.php">About</a></li>
                  <li><a href="gallery-1.php">Gallery</a></li>
                  <li><a href="staff.php">Staff</a></li>
                  <li><a href="events.php">Events</a></li>
                  <li><a href="faq.php">FAQ’s</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-5 col-12">
              <div class="footer-widget">
                <h6 class="title">Contact</h6>
                <ul class="contact list-unstyled">
                  <li>
                    <a href="tel:0000000">
                      <i class="fas fa-phone-square-alt"></i> 72 277 090</a>
                  </li>
                  <li>
                    <a href="mailto:example@info.com">
                      <i class="fas fa-envelope"></i> ecole@info.com</a>
                  </li>
                  <li>
                    <p>
                      <i class="fas fa-map-marked-alt"></i>V336+525, Route Oued El Khatf, Kélibia 8090
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </footer>
  </div>
  <!-- Jquery Js -->
  <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
  <script src="assets/js/vendor/bootstrap.min.js"></script>
  <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/jquery-appear.js"></script>
  <script src="assets/js/vendor/jquery.countdown.min.js"></script>
  <script src="assets/js/vendor/sal.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>

  <!-- Site Scripts -->
  <script src="assets/js/app.js"></script>
</body>


</html>
<?php
require_once('../../identifier.php');
require_once('../../connexiondb.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$requete = "SELECT * FROM utilisateur WHERE iduser = ?";
$resultat = $pdo->prepare($requete);
$resultat->execute([$id]);
$utilisateur = $resultat->fetch();
$login = isset($utilisateur['login']) ? $utilisateur['login'] : "";
$email = isset($utilisateur['email']) ? $utilisateur['email'] : "";

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
          <i class="fas fa-map-marker-alt"></i>V336+525, Route Oued El Khatf, Kélibia 8090
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
                  <a href="event-detail.php" class="active">Event Detail</a>
                </li>
                <li>
                  <a href="faq.php">club Detail</a>
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
          <h4>Event Detail</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a href="events.php">Event</a></li>
            <li><a class="active">Event Detail</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=          Event Area Start         =-->
    <!--=====================================-->
    <section class="event-detail style-1">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-12">
            <div class="img-block">
              <div class="row">
                <?php
                // Connexion à la base de données
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecole";

                try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  // Requête pour récupérer les détails de l'événement
                  $sql = "SELECT * FROM events WHERE id = :event_id";
                  $stmt = $conn->prepare($sql);
                  $stmt->bindParam(':event_id', $_GET['event_id']); // Récupérer l'ID de l'événement depuis l'URL
                  $stmt->execute();

                  $event = $stmt->fetch(PDO::FETCH_ASSOC);

                  if ($event) {
                    echo '<div class="col-lg-8">';
                    // Afficher l'image de l'événement
                    echo "<img src='../../administrateur/pages/charts/" . $event['image_url'] . "' alt=\"Image de l'événement\" />";
                    echo '</div>';
                    echo '<div class="col-lg-4">';
                    echo '<div class="text-block">';
                    // Afficher les détails de l'événement
                    echo "<h4>" . $event['event_name'] . "</h4>";
                    echo "<p>" . $event['description'] . "</p>";
                    echo "<div class='detail'>";
                    echo "<h5>Date & Time</h5>";
                    echo "<span><i class='fas fa-clock'></i> " . $event['date'] . "</span>";
                    echo "<span><i class='fas fa-calendar-alt'></i> " . $event['date'] . "</span>";
                    echo "</div>";
                    echo "<div class='detail'>";
                    echo "<h5>Location</h5>";
                    echo "<span><i class='fas fa-map-marker-alt'></i>" . $event['localisation'] . "</span>";
                    echo "</div>";
                    echo '</div>';
                    echo '</div>';
                  } else {
                    echo "Aucun événement trouvé.";
                  }
                } catch (PDOException $e) {
                  echo "Erreur de connexion : " . $e->getMessage();
                }
                ?>
                <ul class="timer countdown">
                  <li>29<small>Days</small></li>
                  <li>23<small>Hours</small></li>
                  <li>50<small>Minutes</small></li>
                  <li>34<small>Seconds</small></li>
                </ul>
                <div class="row">
                  <div class="col-lg-15">
                    <p class="light-text">
                      <?php echo isset($event['detailed_description']) ? htmlspecialchars($event['detailed_description']) : ""; ?>
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>


          <!-- Le reste de votre contenu -->

          <?php
          $event_id = isset($_GET['event_id']) ? $_GET['event_id'] : null;
          ?>

          <div class="col-xl-4 col-12">
            <div class="search-block">
              <form action="event-detail.php" method="GET">
                <!-- Champ caché pour l'identifiant de l'événement -->
                <input type="hidden" name="event_id" value="<?php echo htmlspecialchars($event_id); ?>">
                <div class="input-group form-group mb-md-0">
                  <input class="form-control" name="search" type="text" placeholder="Search events..." />
                  <button class="input-group-text anime-btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>

            </div>

            <div class="event style-3">
              <div class="row">
                <?php
                // Connexion à la base de données
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecole";

                try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  // Construction de la requête SQL basée sur les paramètres de recherche
                  $sql = "SELECT * FROM events WHERE date > NOW()";
                  if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
                    $search = "%" . $_GET['search'] . "%";
                    $sql .= " AND (event_name LIKE :search OR description LIKE :search OR date LIKE :search)";
                  }
                  $sql .= " ORDER BY date LIMIT 3";

                  $stmt = $conn->prepare($sql);
                  if (isset($search)) {
                    $stmt->bindParam(':search', $search);
                  }
                  $stmt->execute();

                  // Afficher chaque événement
                  while ($event = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-xl-12 col-lg-4 col-md-6 col-12">';
                    echo '<div class="event-block">';
                    echo "<img src='../../administrateur/pages/charts/" . htmlspecialchars($event['image_url']) . "' alt='' />";
                    echo '<div class="event-text">';
                    echo "<h4>" . htmlspecialchars($event['event_name']) . "</h4>";
                    echo "<p>" . htmlspecialchars($event['description']) . "</p>";
                    echo "<a href='event-detail.php?event_id=" . $event['id'] . "' class='educators-btn medium yellow'>View Details</a>";
                    echo '</div>';
                    echo "<span>" . date('d', strtotime($event['date'])) . "<b>" . date('M', strtotime($event['date'])) . "</b></span>";
                    echo '</div>';
                    echo '</div>';
                  }
                } catch (PDOException $e) {
                  echo "Erreur de connexion : " . $e->getMessage();
                }
                ?>
              </div>
            </div>

          </div>
        </div>
    </section>
    <section class="news style-1">
      <div class="container">
        <div class="news-block">
          <div class="news-box">
            <img src="assets/media/news/logo.svg" alt="" />
            <p>Register for the Event</p>
            <h2>Join us</h2>
            <span>Join us for an unforgettable experience at our
              upcoming event! Don't miss the chance to connect with
              industry professionals, expand your knowledge, and
              engage with like-minded individuals.</span>
            <?php

            $event_id = isset($_GET['event_id']) ? $_GET['event_id'] : null;
            ?>

            <form id="registrationForm" action="blog-detail2.php?event_id=<?php echo $event_id; ?>&id=<?php echo isset($_SESSION['user']['iduser']) ? $_SESSION['user']['iduser'] : ''; ?>" method="post">
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
                      <i class="fas fa-map-marked-alt"></i> V336+525, Route Oued El Khatf, Kélibia 8090
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
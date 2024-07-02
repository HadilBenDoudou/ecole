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
                  <a href="blog-detail.php" class="active">formation Detail</a>
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
          <h4>formation Detail</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a href="blogs.php">formation </a></li>
            <li><a class="active">formation Detail</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           blog detail Area Start       =-->
    <!--=====================================-->
    <section class="blog-detail style-1 blog-bg">
      <?php
      // Vérifier si l'ID de la formation est présent dans l'URL
      if (isset($_GET['formation_id'])) {
        // Récupérer l'ID de la formation depuis l'URL
        $formation_id = $_GET['formation_id'];

        // Connexion à la base de données avec PDO
        $dsn = 'mysql:host=localhost;dbname=ecole';
        $username = 'root';
        $password = '';

        try {
          $connexion = new PDO($dsn, $username, $password);
          $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // Requête SQL pour récupérer les données de la formation spécifique avec le nom du responsable de formation
          $requete = "SELECT f.*, p.nom AS responsable_nom FROM formations f LEFT JOIN professeur p ON f.responsable_formation = p.id WHERE f.formation_id = :id";
          $statement = $connexion->prepare($requete);
          $statement->bindParam(':id', $formation_id);
          $statement->execute();

          // Vérifier si la formation a été trouvée
          if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      ?>
            <div class="container">
              <div class="section style-1">
                <div class="container">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="img-block">
                            <img src="../../administrateur/pages/charts/<?php echo $row['image_file']; ?>" alt="" />
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="text-block">
                            <h4><?php echo $row['nom_formation']; ?></h4>
                            <!-- Afficher d'autres informations sur la formation si nécessaire -->
                          </div>
                        </div>
                        <div class="light-text">
                          <span style="color: black;"><i class="fas fa-calendar-alt" style="color: blue;"></i><?php echo $row['date_debut']; ?></span>
                          <span style="color: black;">
                            <i class="fas fa-user-tie" style="color: blue;"></i> <?php echo $row['responsable_nom']; ?>
                          </span>
                        </div>
                        <div class="col-lg-15">
                          <div class="small-text pb-0" style="color: black;">
                            <?php echo $row['description']; ?>
                          </div>
                        </div>
                        <!-- Ajouter d'autres blocs de contenu pour les détails de la formation -->
                      </div>
                    </div>
                    <!-- Ajouter d'autres colonnes si nécessaire -->


              <?php
            } else {
              echo "Aucune formation trouvée avec l'ID spécifié.";
            }
          } catch (PDOException $e) {
            // Gérer les erreurs PDO
            echo "Erreur : " . $e->getMessage();
          }
        } else {
          echo "ID de formation non spécifié dans l'URL.";
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

                // Requête SQL pour récupérer les données des formations
                $requete = "SELECT * FROM formations";
                $resultat = $connexion->query($requete);

                // Récupérer toutes les lignes de résultats dans un tableau associatif
                $formations = $resultat->fetchAll(PDO::FETCH_ASSOC);
              } catch (PDOException $e) {
                // Gérer les erreurs PDO
                echo "Erreur : " . $e->getMessage();
              }
              ?>

              <div class="col-xl-4">
                <div class="blog style-1">
                  <h4>Other formation</h4>
                  <div class="row">
                    <?php
                    // Boucle pour parcourir les formations
                    foreach ($formations as $formation) {
                      // Générer le HTML pour chaque blog lié à la formation
                    ?>
                      <div class="col-xl-12 col-md-6 col-12">
                        <div class="blog-block space">
                          <img src="../../administrateur/pages/charts/<?php echo $formation['image_file']; ?>" alt="" />
                          <span><?php echo $formation['date_debut']; ?> – <?php echo $formation['date_fin']; ?></span>
                          <h4><?php echo $formation['nom_formation']; ?></h4>
                          <p><?php echo $formation['description']; ?></p>
                          <a href="blog-detail.php?formation_id=<?php echo $formation['formation_id']; ?>" class="educators-btn medium dark">Read More</a>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>

                  </div>
                </div>
              </div>
            </div>
    </section>
    <!--=====================================-->
    <!--=           news Area Start         =-->
    <!--=====================================-->
    <section class="news style-1">
      <div class="container">
        <div class="news-block">
          <div class="news-box">
            <img src="assets/media/news/logo.svg" alt="" />
            <p>registration form</p>
            <h2>Registration for Training Program</h2>
            <span>Thank you for your interest in our training program!
              Please fill out the form below to register. Fields marked
              with an asterisk (*) are required.</span>
            <?php

            $formation_id = isset($_GET['formation_id']) ? $_GET['formation_id'] : null;
            ?>

            <form id="registrationForm" action="formation.php?formation_id=<?php echo $formation_id; ?>&id=<?php echo isset($_SESSION['user']['iduser']) ? $_SESSION['user']['iduser'] : ''; ?>" method="post">
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
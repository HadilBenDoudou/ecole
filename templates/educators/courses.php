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
              <a class="active">Courses</a>
              <ul class="educators-submenu">
                <li>
                  <a href="courses.php" class="active">Courses</a>
                </li>

              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="javascript:void(0);">Pages</a>
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
          <h4>Courses</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a class="active">Courses</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=        Course Area Start          =-->
    <!--=====================================-->
    <section class="course style-2">
      <div class="container">
        <div class="heading">
          <h2>Our Course</h2>
          <p>
            Course content refers to the material or subject matter <br />
            that is taught in a particular course.
          </p>
        </div>
        <div class="search-block">
          <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7 col-12">
              <form action="courses.php" method="GET"> <!-- Modifier l'action pour envoyer les données à la même page -->
                <div class="input-group form-group mb-md-0">
                  <input class="form-control" name="text" type="text" placeholder="Search Courses..." />
                  <button class="input-group-text anime-btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-5 col-12">
            </div>

          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
              <li class="nav-item">
                <a href="#all-course" class="educators-btn medium yellow active" aria-current="true" data-bs-toggle="tab">All Courses</a>
              </li>
            </ul>
          </div>
          <form class="card-body tab-content">
            <div class="tab-pane active" id="all-course">
              <div class="row">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecole";

                try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  // Construction de la requête SQL basée sur les paramètres de recherche
                  $sql = "SELECT * FROM couruser WHERE user_id = :user_id";
                  if (isset($_GET['text']) && !empty(trim($_GET['text']))) {
                    $searchText = "%" . $_GET['text'] . "%";
                    $sql .= " AND (subject LIKE :searchText OR NomProfesseur LIKE :searchText)";
                  }

                  $stmt = $conn->prepare($sql);
                  $stmt->bindParam(':user_id', $_SESSION['user']['iduser']);
                  if (isset($searchText)) {
                    $stmt->bindParam(':searchText', $searchText);
                  }
                  $stmt->execute();

                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      $randomImage = "course-" . rand(4, 9) . ".png";
                      echo '<div class="col-lg-4 col-md-6 col-12">';
                      echo '<div class="course-block">';
                      echo '<div class="img-block">';
                      echo '<img src="assets/media/courses/' . $randomImage . '" alt="" />';
                      echo '<a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>';
                      echo '<a href="contact.php" class="educators-btn medium yellow">Start learn</a>';
                      echo '</div>';
                      echo '<div class="text-block">';
                      echo '<h3>' . $row["subject"] . '</h3>';
                      echo '<h5 style="color:gray;">' . $row["NomProfesseur"] . '</h5>';
                      // Afficher d'autres détails du cours
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                    }
                  } else {
                    echo "0 results";
                  }

                  $stmt->closeCursor();
                  $conn = null;
                } catch (PDOException $e) {
                  echo "Error: " . $e->getMessage();
                }
                ?>
              </div>
            </div>
          </form>
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
  <script src="assets/js/vendor/sal.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>

  <!-- Site Scripts -->
  <script src="assets/js/app.js"></script>
</body>


</html>
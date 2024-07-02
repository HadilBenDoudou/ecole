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
          <h4>View course</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a class="active">View course</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           Contact Area Start      =-->
    <!--=====================================-->
    <style>
      .block {
        margin-bottom: 20px;
      }

      .block-content {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      .course {
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
      }

      .course-header {
        background-color: #161F31;
        color: white;
        padding: 10px;
      }

      .course-details {
        display: flex;
        align-items: center;
        padding: 10px;
      }

      .file-icon img {
        width: 50px;
        /* Ajuster la taille de l'icône en conséquence */
        height: auto;
        margin-right: 10px;
      }

      .file-description h3 {
        margin: 0;
      }

      .block-date {
        margin-top: 10px;
        font-style: italic;
        color: #666;
      }

      .arrow {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid red;
        margin: 0 auto;

      }



      .message {
        position: absolute;
        bottom: -20px;
        /* Ajustez la position verticale du message selon vos besoins */
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: none;
        /* Cacher le message par défaut */
      }

      .arrow-down:hover+.message {
        display: block;
        /* Afficher le message lorsque la flèche est survolée */
      }

      .arrow-text {
        text-align: center;
        /* Centrer le texte */
        color: black;
        /* Couleur du texte */
      }

      .btn-depot {
        background-color: #007bff;
        /* Couleur de fond du bouton */
        color: #fff;
        /* Couleur du texte */
        border: none;
        /* Supprimer la bordure */
        padding: 10px 20px;
        /* Ajouter un peu d'espace intérieur */
        border-radius: 5px;
        /* Ajouter des coins arrondis */
        cursor: pointer;
        /* Définir le curseur en pointeur au survol */
        margin-top: 10px;
        /* Ajouter un peu d'espace en haut */
      }

      .btn-depot:hover {
        background-color: #0056b3;
        /* Couleur de fond du bouton au survol */
      }

      .btn-depot-right {
        float: right;
        /* Aligner le bouton à droite */
        background-color: #185ABD;
        /* Couleur de fond du bouton */
        color: #fff;
        /* Couleur du texte */
        border: none;
        /* Supprimer la bordure */
        padding: 10px 20px;
        /* Ajouter un peu d'espace intérieur */
        border-radius: 5px;
        /* Ajouter des coins arrondis */
        cursor: pointer;
        margin-right: 20px;
        /* Définir le curseur en pointeur au survol */
      }

      .btn-depot-right:hover {
        background-color: #0056b3;
        /* Couleur de fond du bouton au survol */
      }
    </style>
    <section class="contant style-1">
      <div class="container2">
        <?php
        // Définition des informations de connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecole";

        // Récupérer l'ID du cours depuis l'URL
        if (isset($_GET['course_id'])) {
          $course_id = $_GET['course_id'];

          try {
            // Connexion à la base de données
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête pour récupérer les informations du cours
            $sql_courses = "SELECT * FROM cour WHERE MatiereID = :course_id";
            $stmt_courses = $conn->prepare($sql_courses);
            $stmt_courses->bindParam(':course_id', $course_id);
            $stmt_courses->execute();
            $courses = $stmt_courses->fetchAll(PDO::FETCH_ASSOC);

            // Si des cours sont trouvés, les afficher
            echo "<h2  style='margin-left:300px;'>Cour</h2>";

            if ($stmt_courses->rowCount() > 0) {

              foreach ($courses as $course) {
                echo "<div class='block' style='width:1700px;margin-left:200px;'>";

                echo "<div class='block-content'>";

                echo "<div class='course'>";
                echo "<div class='course-header'>";
                echo "<h3 style='color:white;'>{$course['Titre']}</h3>";
                echo "</div>"; // .course-header

                echo "<div class='course-details'>";
                // Afficher l'icône en fonction de l'extension du fichier
                $extension = pathinfo($course['Fichier'], PATHINFO_EXTENSION);
                $icon = ($extension == 'pdo') ? 'téléchargement (15).png' : 'téléchargement (14).png';
                echo "<div class='file-icon'><img src='{$icon}' alt='Icon'></div>";
                echo "<div class='file-description'><a style='color:black;' href='../../professeur/pages/tables/{$course['Fichier']}'>Telecharger cour</a></div>";



                echo "</div>"; // .course-details
                echo "<p class='block-date'>Description: {$course['Description']}</p>";
                echo "<p class='block-date'>Date: {$course['DatePublication']}</p>";
                echo "</div>"; // .course

                echo "</div>"; // .block-content
                echo "</div>"; // .block
              }
            }
            // Requête pour récupérer les TP du cours donné
            $sql_tp = "SELECT * FROM tp WHERE MatiereID = :course_id";
            $stmt_tp = $conn->prepare($sql_tp);
            $stmt_tp->bindParam(':course_id', $course_id);
            $stmt_tp->execute();
            $tps = $stmt_tp->fetchAll(PDO::FETCH_ASSOC);

            // Afficher les TP
            echo "<h2 style='margin-left:300px;'>TP</h2>";
            foreach ($tps as $tp) {
              echo "<div class='block' style='width:1700px;margin-left:200px;'>";
              echo "<div class='block-content'>";
              echo "<div class='course'>";
              echo "<div class='course-header' style='background-color: #0C4875;'>";
              echo "<h3 style='color:white;'>{$tp['Titre']}</h3>";
              echo "</div>"; // .course-header

              echo "<div class='course-details'>";
              // Afficher l'icône en fonction de l'extension du fichier
              $extension = pathinfo($tp['Fichier'], PATHINFO_EXTENSION);
              $icon = ($extension == 'pdo') ? 'téléchargement (15).png' : 'téléchargement (14).png';
              echo "<div class='file-icon'><img src='{$icon}' alt='Icon'></div>";
              echo "<div class='file-description'><a style='color:black;' href='../../professeur/pages/tables/{$tp['Fichier']}'>Télécharger le cours</a></div>";
              echo "</div>"; // .course-details

              echo "<p class='block-date'>Description: {$tp['Description']}</p>";
              echo "<p class='block-date'>Date: {$tp['DatePublication']}</p>";

              echo "<div class='arrow'></div>"; // Flèche centrée en dessous du bloc
              echo "<div class='arrow-text'>Correction</div>"; // Texte centré sous la flèche

              // Bouton "Déposer le travail TP" aligné à droite
              echo "<button class='btn-depot-right' onclick='window.location.href=\"travail.php?id=" . $tp['ID'] . "\";'>Déposer le travail TP</button>";


              echo "</div>"; // Fermeture de la div block
              echo "</div>"; // .block-content
              echo "</div>"; // .block



              // Afficher les corrections pour ce TP
              $sql_corrections = "SELECT * FROM corrections WHERE TP_ID = :tp_id";
              $stmt_corrections = $conn->prepare($sql_corrections);
              $stmt_corrections->bindParam(':tp_id', $tp['ID']);
              $stmt_corrections->execute();
              $corrections = $stmt_corrections->fetchAll(PDO::FETCH_ASSOC);

              if (count($corrections) > 0) {
                foreach ($corrections as $correction) {
                  echo "<div class='block' style='width:1700px;margin-left:200px;'>";
                  echo "<div class='block-content'>";
                  echo "<div class='course'>";
                  echo "<div class='course-header' style='background-color: #073753;'>";
                  echo "<h3 style='color:white;'>{$correction['Titre']}</h3>";
                  echo "</div>"; // .course-header

                  echo "<div class='course-details'>";
                  // Afficher l'icône en fonction de l'extension du fichier
                  $extension = pathinfo($correction['Fichier'], PATHINFO_EXTENSION);
                  $icon = ($extension == 'pdo') ? 'téléchargement (15).png' : 'téléchargement (14).png';
                  echo "<div class='file-icon'><img src='{$icon}' alt='Icon'></div>";
                  echo "<div class='file-description'><a style='color:black;' href='../../professeur/pages/tables/{$correction['Fichier']}'>Télécharger le cours</a></div>";
                  echo "</div>"; // .course-details

                  echo "<p class='block-date'>Description: {$correction['Description']}</p>";
                  echo "<p class='block-date'>Date: {$correction['DatePublication']}</p>";

                  echo "</div>"; // .course

                  echo "</div>"; // .block-content
                  echo "</div>"; // .block
                }
              } else {
                echo "<div class='block' style='width:1700px;margin-left:200px;'>";
                echo "<div class='block-content'>";
                echo "<div class='course'>";
                echo "<div class='course-header' style='background-color: #073753;'>";
                echo "<h3 style='color:white;'>Aucune correction disponible pour ce TP</h3>";
                echo "</div>"; // .course-header
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<p>.</p>";
              }
            }
          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
        } else {
          // Rediriger l'utilisateur s'il n'a pas fourni d'ID de cours valide
          header("Location: index.php");
          exit();
        }
        ?>



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
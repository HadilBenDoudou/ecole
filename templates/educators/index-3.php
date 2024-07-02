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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <header class="header">

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
              <a class="active" href="index-3.php">Home</a>

            </li>
            <li class="menu-item-has-children">
              <a>Courses</a>
              <ul class="educators-submenu">
                <li>
                  <a href="courses.php">Courses</a>
                </li>

              </ul>
            </li>




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
                  <a href="blogs.php">Formation</a>
                </li>
                <li>
                  <a href="blog-detail.php">Formation Detail</a>
                </li>

                <li>
                  <a href="gallery-1.php">Gallery 1</a>
                </li>
                <li>
                  <a href="gallery-2.php">Gallery 2</a>
                </li>


              </ul>
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
    <section class="banner style-2">
      <div class="container">
        <div class="row banner-content align-items-center">
          <div class="col-lg-8">
            <p>START YOUR EDUCATIONAL JOURNEY</p>
            <div class="text-block">
              <h2>
                We Educate to <br />
                Build Career
              </h2>
              <div class="tags">
                <a href="emploi.php?id=<?php echo $_SESSION['user']['iduser'] ?>">
                  <p><b>01+</b> Emplois</p>
                </a>


                <p><b>50+</b> Students</p>
              </div>

            </div>
          </div>
          <div class="col-lg-4">
            <img src="assets/media/banner/banner-img-3.png" class="banner-img" alt="" />
          </div>
        </div>
      </div>
      <div class="shape shape1">
        <img src="assets/media/shapes/slide-shape-9.svg" alt="" />
      </div>
      <div class="shape shape2">
        <img src="assets/media/shapes/slide-shape-10.svg" alt="" />
      </div>
      <div class="shape shape3">
        <img src="assets/media/shapes/slide-shape-11.svg" alt="" />
      </div>
      <div class="shape shape4">
        <img src="assets/media/shapes/slide-shape-12.svg" alt="" />
      </div>
      <div class="shape shape5">
        <img src="assets/media/shapes/slide-shape-12.svg" alt="" />
      </div>
      <div class="shape shape6">
        <img src="assets/media/shapes/slide-shape-13.svg" alt="" />
      </div>
      <div class="shape shape7">
        <img src="assets/media/shapes/slide-shape-13.svg" alt="" />
      </div>
      <div class="shape shape8">
        <img src="assets/media/shapes/slide-shape-14.svg" alt="" />
      </div>
      <div class="shape shape9">
        <img src="assets/media/shapes/slide-shape-15.svg" alt="" />
      </div>
      <div class="shape shape10">
        <img src="assets/media/shapes/slide-shape-16.svg" alt="" />
      </div>
      <div class="shape shape11">
        <img src="assets/media/shapes/slide-shape-17.svg" alt="" />
      </div>
    </section>
    <!--=====================================-->
    <!--=           About Area Start       =-->
    <!--=====================================-->
    <section class="about-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-12">
            <img src="img.jpg" alt="" />
          </div>
          <div class="col-lg-5 col-12">
            <div class="about-text">
              <h4 class="title">Get To Know Us</h4>
              <p>
                The Higher Institute of Technological Studies of Kélibia
                or ISET-Kélibia is a Tunisian higher education institution
                founded in 2012 and aimed at training applied license graduates
                within the framework of the LMD reform.
              </p>
              <p class="light-text">
                “ tThe institution is located in Kélibia in the governorate of
                Nabeul.”
              </p>
              <p>
                It has three departments Technology Department
                computer science and process engineering and machine engineering
                maritime.
              </p>
              <a href="about.php" class="educators-btn medium dark">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=      acheivements Area Start      =-->
    <!--=====================================-->
    <div class="acheivements style-1">
      <div class="container">
        <div class="acheivements-slider">
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-1.png" />
            <a href="emploi.php">
              <span> <br /> Emplois</span>
            </a>

          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-2.png" />
            <span>30+ <br />
              Expert Teachers</span>
          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-3.png" />
            <span>1999+ <br />
              Video Lectures</span>
          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-4.png" />
            <span>5,460 <br />
              Certified Students</span>
          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-1.png" />
            <span>320 <br />
              courses</span>
          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-2.png" />
            <span>30+ <br />
              Expert Teachers</span>
          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-3.png" />
            <span>1999+ <br />
              Video Lectures</span>
          </div>
          <div class="acheivements-box">
            <img alt="" src="assets/media/acheivements/course-4.png" />
            <span>5,460 <br />
              Certified Students</span>
          </div>
        </div>
      </div>
    </div>
    <!--=====================================-->
    <!--=        Course Area Start          =-->
    <!--=====================================-->
    <section class="course style-2 text-center">
      <div class="container">
        <!-- Existing course section -->
        <div class="heading">
          <h2>Our Courses</h2>
          <p>Course content refers to the material or subject matter that is taught in a particular course.</p>
        </div>
        <div class="row">
          <!-- Course blocks -->
        </div>

      </div>
    </section>


    <section class="course style-2 text-center">
      <div class="container">
        <h3>Enter Code:</h3>
        <form id="codeForm">

          <div style="display: flex;">
            <input type="text" id="codeInput" name="code" placeholder="Enter code">
            <button type="submit" id="codeSubmit" class="educators-btn medium dark" style="width: 180px;height:50px">Insert Code</button>
          </div>
        </form>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecole";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = "SELECT * FROM couruser WHERE user_id = :user_id";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':user_id', $_SESSION['user']['iduser']);
          $stmt->execute();

          echo " <div class='row'>";
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $randomImage = "course-" . rand(4, 9) . ".png";

              echo '<div class="col-lg-4 col-sm-6 col-12">
                    <div class="course-block">
                      <div class="img-block">
                        <img src="assets/media/courses/' . $randomImage . '" alt="" />
                        <a href="contact.php?course_id=' . $row["code"] . '" class="educators-btn medium yellow">Start learn</a>
                      </div>
                      <div class="text-block">
                        <h3>' . $row["subject"] . '</h3>
                        <div class="detail-sec">
                          <span><i class="fas fa-users"></i>
                          <span><i class="fas fa-book"></i>
                        </div>
                      </div>
                    </div>
                  </div>';
            }
          } else {
            echo "0 results"; // Message à afficher s'il n'y a aucun cours dans la base de données pour cet utilisateur
          }
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage(); // Affichez les éventuelles erreurs de connexion
        }
        $conn = null;
        ?>


        <p id="insertStatus"></p>

      </div>
      <a href="courses.php" class="educators-btn medium dark">View More</a>
    </section>
    <script>
      // Attend que le DOM soit chargé
      document.addEventListener("DOMContentLoaded", function() {
        // Ajoute un écouteur d'événements sur la soumission du formulaire
        document.getElementById("codeForm").addEventListener("submit", function(event) {
          // Empêche le comportement par défaut du formulaire
          event.preventDefault();

          // Récupère les valeurs des champs
          var code = document.getElementById("codeInput").value;
          var userID = 123; // Supposons que l'ID de l'utilisateur est connu ou récupéré de quelque part
          var subject = "Computer Science"; // Supposons que le sujet est connu ou sélectionné

          // Envoie les données au serveur pour l'insertion
          $.post("insert_code.php?id=<?php echo $_SESSION['user']['iduser'] ?>", {
            code: code,
            userID: userID,
            subject: subject
          }, function(data) {
            // Met à jour le message d'état en fonction de la réponse du serveur
            if (data === "success") {
              document.getElementById("insertStatus").innerHTML = "Code inserted successfully!";
              setTimeout(function() {
                location.reload();
              }, 1000);
            } else {
              document.getElementById("insertStatus").innerHTML = "Failed to insert code.";
            }
          });
        });
      });
    </script>








    <!--=====================================-->
    <!--=       Scholarship Area Start      =-->
    <!--=====================================-->

    <!--=====================================-->
    <!--=          Event Area Start         =-->
    <!--=====================================-->
    <section class="event style-1">
      <div class="container">
        <div class="heading">
          <h2>Our Events</h2>
          <p>School events are an important part of the school experience, providing students, staff</p>
        </div>
        <div class="row">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "ecole";

          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Configuration pour afficher les erreurs PDO
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête pour récupérer les événements de la base de données
            $sql = "SELECT * FROM events";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($events) {
              foreach ($events as $event) {
          ?>


                <div class="col-xl-4 col-md-6 col-12">
                  <div class="event-block" style="width: 400px; height: 500px;">
                    <img src="../../administrateur/pages/charts/<?= $event["image_url"] ?>" alt="Image de l'événement <?= $event["event_name"] ?>" style="width: 100%; height: 200px;" />
                    <div class="event-text">
                      <h4><?= $event["event_name"] ?></h4>
                      <p><?= $event["description"] ?></p>
                      <a href="event-detail.php?event_id=<?= $event['id'] ?>" class="educators-btn medium yellow">Voir les détails</a>
                    </div>
                    <span><?= $event["date"] ?> <b></b></span>
                  </div>
                </div>

          <?php
              }
            } else {
              echo "Aucun résultat trouvé.";
            }
          } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
          }

          $conn = null; // Fermeture de la connexion
          ?>
        </div> <!-- Fin de la row -->
      </div> <!-- Fin de la container -->
    </section>

    <!--=====================================-->
    <!--=          Announcement Area Start         =-->
    <!--=====================================-->
    <section class="announcement style-1">
      <div class="container">
        <div class="heading">
          <h2>Recent Announcement</h2>
          <p>The after-school program</p>
        </div>
        <div class="row">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "ecole";

          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT Date, Title, Description FROM Announcements ORDER BY Date DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $announcements = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($announcements as $announcement) {
              echo "<div class='col-xl-3 col-md-6 col-12 p-0'>";
              echo "<div class='side-border'>";
              echo "<div class='announcement-block'>";
              echo "<p>" . $announcement['Date'] . "</p>";
              echo "<h4>" . $announcement['Title'] . "</h4>";
              echo "<span>" . $announcement['Description'] . "</span>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
          } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
          }
          $conn = null;
          ?>
        </div>
      </div>
    </section>

    <!--=====================================-->
    <!--=           Teacher Area Start      =-->
    <!--=====================================-->
    <section class="teacher style-1">
      <div class="container">
        <div class="heading">
          <h2>Our Teachers</h2>
          <p>Our teachers are the backbone of our school community</p>
        </div>
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

            // Requête pour récupérer les informations des enseignants
            $sql = "SELECT * FROM professeur";
            $stmt = $conn->query($sql);

            // Afficher chaque enseignant
            while ($teacher = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo '<div class="col-xl-3 col-sm-6 col-12">';
              echo '<div class="teacher-block">';
              echo "<img src='../../administrateur/pages/forms/" . htmlspecialchars($teacher['image_path']) . "' alt='' style='width: 550px;height: 350px;'/>";
              echo '<div class="text-block">';
              echo "<h4>" . htmlspecialchars($teacher['nom']) . "</h4>";
              echo "<p>" . htmlspecialchars($teacher['prenom']) . "</p>";
              echo "<a href='staff-detail.php?teacher_id=" . $teacher['id'] . "' class='educators-btn medium white'>View Details</a>";
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
          } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
          }
          ?>
        </div>
      </div>
    </section>

    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <div class="testimonial style-1">
      <div class="container">
        <div class="heading">
          <h2>Parents Reviews</h2>
          <p>Exceptional Education and Support: Review for school</p>
        </div>
        <div class="testimonial-slider">
          <?php
          // Your PHP code here
          try {
            // Database connection details
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ecole";

            // Create a new PDO instance
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // SQL statement to select comments and user login
            $sql = "SELECT c.*, u.login 
                        FROM Commentaires c 
                        INNER JOIN Utilisateur u ON c.id_ecriture = u.iduser";
            $stmt = $conn->query($sql);
            $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Loop through the comments and generate testimonial blocks
            foreach ($comments as $comment) {
              echo "<div class='testimonial-block'>";
              echo "<div class='testimonial-box'>";
              echo "<div class='title-block'>";
              echo "<img src='assets/media/parent/parent-1.png' class='testimonial-img' alt='' />";
              echo "<h4><b>" . $comment['login'] . "</b> Guardian/Mother</h4>";
              echo "<div class='quotation'>";
              echo "<img src='assets/media/parent/quotation-mark.png' alt='' />";
              echo "</div>";
              echo "</div>";
              echo "<p>" . $comment['contenu'] . "</p>";
              echo "<div class='left-border'></div>";
              echo "</div>";
              echo "</div>";
            }
          } catch (PDOException $e) {
            // Handle database connection errors
            echo "Connection failed: " . $e->getMessage();
          }
          ?>
        </div>
      </div>
    </div>

    <!--=====================================-->
    <!--=       FAQ Area Start      =-->
    <!--=====================================-->
    <section class="faq style-2">
      <div class="container">
        <div class="heading">
          <h2>Clubs</h2>
          <p>
            Join our club for an unforgettable experience filled<br>
            with camaraderie, expert coaching, and top-notch facilities.<br>
            Whether you're a seasoned pro or a beginner, there's a place<br>
            for you here. Let's make memories together on and off the field.!<br>
          </p>
        </div>
        <div class="row" id="accordionExample">
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide1" aria-expanded="true" aria-controls="slide1">
                What are the requirements for admission?
              </button>
              <div id="slide1" class="accordion-collapse collapse" aria-labelledby="slide1" data-bs-parent="#accordionExample">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide2" aria-expanded="true" aria-controls="slide2">
                Educator accept students from all religion?
              </button>
              <div id="slide2" class="accordion-collapse collapse" aria-labelledby="slide2" data-bs-parent="#accordionExample">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide3" aria-expanded="true" aria-controls="slide3">
                Does Educators offer financial assistance?
              </button>
              <div id="slide3" class="accordion-collapse collapse" aria-labelledby="slide3" data-bs-parent="#accordionExample">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide4" aria-expanded="true" aria-controls="slide4">
                What are the requirements for admission?
              </button>
              <div id="slide4" class="accordion-collapse collapse" aria-labelledby="slide4" data-bs-parent="#accordionExample">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide5" aria-expanded="true" aria-controls="slide5">
                Is Transportation available for students?
              </button>
              <div id="slide5" class="accordion-collapse collapse" aria-labelledby="slide5" data-bs-parent="#accordionExample">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide6" aria-expanded="true" aria-controls="slide6">
                Is Educator School recognized/affiliated?
              </button>
              <div id="slide6" class="accordion-collapse collapse" aria-labelledby="slide6" data-bs-parent="#accordionExample">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
        </div>
        <a href="faq.php" class="educators-btn medium dark">View More</a>
      </div>
    </section>
    <!--=====================================-->
    <!--=       Blog Area Start      =-->
    <!--=====================================-->
    <section class="blog style-2">
      <div class="container">
        <div class="heading">
          <h2>Formation</h2>
          <p>School blogs are a great way to share information and resources</p>
        </div>
        <div class="row">
          <?php
          // Connexion à la base de données avec PDO
          $dsn = 'mysql:host=localhost;dbname=ecole';
          $username = 'root';
          $password = '';

          try {
            $connexion = new PDO($dsn, $username, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL pour récupérer les données de la table formations
            $requete = "SELECT * FROM formations";
            $resultat = $connexion->query($requete);

            // Boucle sur chaque résultat de la requête
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
              // Affichage des données dans la structure HTML des blogs
              echo '<div class="col-lg-6 col-12">
                      <div class="blog-block">
                        <div class="row align-items-center">
                          <div class="col-sm-5 col-12">
                            <div class="img-block">
                          <img src="../../administrateur/pages/charts/' . htmlspecialchars($row['image_file'], ENT_QUOTES) . '" alt="" />;

                              <span>' . date("d", strtotime($row["date_debut"])) . ' <b>' . date("M", strtotime($row["date_debut"])) . '</b></span>
                            </div>
                          </div>
                          <div class="col-sm-7 col-12">
                            <div class="text-block">
                              <h4>' . $row["nom_formation"] . '</h4>
                              <p><i class="fas fa-user-tie"></i>' . $row["responsable_formation"] . '</p>
                              <span>' . $row["description"] . '</span>
                              <a href="blog-detail.php?formation_id=' . $row["formation_id"] . '" class="educators-btn medium dark">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
            }
          } catch (PDOException $e) {
            // Affichage des erreurs PDO
            echo "Erreur : " . $e->getMessage();
          }
          ?>
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
            <p>We value your opinio</p>
            <h2>Your feedback</h2>
            <span>Your feedback is important to us as it helps us
              improve our services. Whether you have a suggestion,
              a compliment, or a concern, we'd love to hear from you.
              Please take a moment to share your thoughts with us by
              leaving your feedback below. Thank you for helping us
              serve you better!</span>
            <form action="add_comment.php" method="post">
              <div class="input-group">
                <input type="hidden" name="writing_id" value="<?php echo isset($_SESSION['user']['iduser']) ? $_SESSION['user']['iduser'] : ''; ?>">
                <input class="form-control" id="content" name="content" rows="4" cols="50" required placeholder="Add Comment" />
                <button class="input-group-text educators-btn medium dark" type="submit">
                  Add Comment
                </button>
              </div>
            </form>
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
                  <li><a href="faq.php">Clubs</a></li>
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
  <script src="assets/js/vendor/sal.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>

  <!-- Site Scripts -->
  <script src="assets/js/app.js"></script>
</body>


</html>
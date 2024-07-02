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
                  <a href="about.php" class="active">About Us</a>
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
            <li class="menu-item-has-children">
              <a class="active" href="modifiercompte.php?id=<?php echo $_SESSION['user']['iduser'] ?>">

                <?php echo ' ' . $_SESSION['user']['login'] ?>
              </a>
            </li>
            <li class="menu-item-has-children">
              <a class="active" href="../../seDeconnecter.php">Deconnexion</a>

            </li>
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
          <h4>About Us</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a class="active">About Us</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           About Area Start       =-->
    <!--=====================================-->
    <section class="about style-3">
      <div class="container">
        <div class="heading">
          <h2>About Us</h2>
          <p>The benefits of experiential learning in schools</p>
        </div>
        <div class="row">
          <div class="col-xl-4 col-12 col-12">
            <img src="assets/media/about/images (1).jpeg" alt="" />
          </div>
          <div class="col-xl-8 col-12 col-12">
            <div class="about-text">
              <h4>Get To Know Us</h4>
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           Text Area Start       =-->
    <!--=====================================-->
    <section class="text">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="text-block">
              <div class="icon-block">
                <img src="assets/media/about/icon-1.png" alt="" />
                <h5>320 courses</h5>
              </div>
              <p>
                At ISET Kelibia, a range of technical and scientific
                courses are offered, covering areas such as computer science,
                electronics, mechanical engineering, electrical engineering,
                business management, networking, renewable energy and Industrial Engineering.
                These courses provide students with the skills needed to succeed
                in their fields of interest and in their future careers.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="text-block">
              <div class="icon-block">
                <img src="assets/media/about/icon-2.png" alt="" />
                <h5>5,460 Medalist</h5>
              </div>
              <p>
                At ISET Kelibia, we also have an impressive number of
                medalists, testifying to the excellence and determination
                of our students. These medalists illustrate our commitment
                to academic excellence and student success, while demonstrating
                the quality of our educational program.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="text-block">
              <div class="icon-block">
                <img src="assets/media/about/icon-3.png" alt="" />
                <h5>Expert Teachers</h5>
              </div>
              <p>
                At ISET Kelibia, our teachers are experts in their field,
                bringing deep expertise and a passion for teaching to every
                lesson. Their dedication to education and commitment to student
                success are at the heart of our academic program, ensuring an enriching,
                quality learning experience for all of our students.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="text-block">
              <div class="icon-block">
                <img src="assets/media/about/icon-4.png" alt="" />
                <h5>199+ Vid lecs</h5>
              </div>
              <p>
                At ISET Kelibia, we also offer a growing library of educational videos
                (vid lecs), providing students with an additional resource to deepen their
                understanding of concepts taught in class. These videos cover a variety of
                topics and provide an interactive and engaging means of supplemental learning,
                strengthening the overall educational experience for our students.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="text-block">
              <div class="icon-block">
                <img src="assets/media/about/icon-5.png" alt="" />
                <h5>Our History</h5>
              </div>
              <p>
                The history of ISET Kelibia is marked by a legacy of excellence and innovation
                in technical and scientific education. Since our beginnings, we have devoted our
                energy to providing quality education and preparing our students to meet the challenges
                of the modern world. Our journey is punctuated with successes and achievements, reflecting
                our ongoing commitment to academic excellence and the personal development of our students.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="text-block">
              <div class="icon-block">
                <img src="assets/media/about/icon-6.png" alt="" />
                <h5>Our Vision</h5>
              </div>
              <p>
                At ISET Kelibia, our vision is to become a recognized leader in technical and scientific education,
                training the next generation of competent and innovative professionals. We aspire to create a dynamic
                and inclusive learning environment, where every student is encouraged to reach their full potential
                and contribute meaningfully to society. Our commitment to excellence, innovation and sustainable
                development guides our path to a future where ISET Kelibia is synonymous with educational excellence
                and student success.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           Teacher Area Start      =-->
    <!--=====================================-->
    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // configuration de PDO pour afficher les erreurs
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Requête SQL pour récupérer les données des professeurs
      $sql = "SELECT * FROM professeur";
      $stmt = $conn->query($sql);

    ?>
      <section class="teacher style-1 text-center">
        <div class="container">
          <div class="heading">
            <h2>Our Teachers</h2>
            <p>Our teachers are the backbone of our school community</p>
          </div>
          <div class="row">
            <?php
            // Boucle d'affichage des professeurs
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="teacher-block">
                  <img src="../../administrateur/pages/forms/<?php echo $row['image_path']; ?>" alt="" />
                  <div class="text-block">
                    <h4><?php echo $row['nom']; ?></h4>
                    <p><?php echo $row['prenom']; ?></p>
                    <a href="staff-detail.php?id=<?php echo $row['id']; ?>" class="educators-btn medium white">View Details</a>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </section>
    <?php

    } catch (PDOException $e) {
      echo "Erreur de connexion : " . $e->getMessage();
    }
    // Fermeture de la connexion à la base de données
    $conn = null;
    ?>

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

  <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
  <script src="assets/js/vendor/bootstrap.min.js"></script>
  <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/jquery-appear.js"></script>
  <script src="assets/js/vendor/sal.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>


  <script src="assets/js/app.js"></script>
</body>



</html>
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
                    <i class="fas fa-map-marker-alt"></i> 7172 Street California, usa,
                    990000
                </p>
                <p><i class="fas fa-clock"></i>Everyday 7 AM to 7 PM Sunday Off</p>
                <p>
                    <i class="fas fa-phone-square-alt"></i><a href="tel:0000000">1223456789</a>
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
                                <li>
                                    <a href="course-detail.php">Course Detail</a>
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
                                    <a href="faq.php">FAQ Detail</a>
                                </li>
                                <li>
                                    <a href="staff.php">Staff</a>
                                </li>
                                <li>
                                    <a href="staff-detail.php">Staff Detail</a>
                                </li>
                                <li>
                                    <a href="blogs.php">Blogs</a>
                                </li>
                                <li>
                                    <a href="blog-detail.php">Blog Detail</a>
                                </li>
                                <li>
                                    <a href="contact.php" class="active">Contact</a>
                                </li>
                                <li>
                                    <a href="gallery-1.php">Gallery 1</a>
                                </li>
                                <li>
                                    <a href="gallery-2.php">Gallery 2</a>
                                </li>

                                <li>
                                    <a href="coming-soon.php">Coming Soon</a>
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
                    <div class="d-flex right-nav">
                        <a href="contact.php" class="educators-btn medium dark">
                            Apply Now</a>
                    </div>
                </div>
            </nav>
        </header>
        <!--=====================================-->
        <!--=         Banner Area Start         =-->
        <!--=====================================-->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-content">
                    <h4>deposer course</h4>
                    <ul>
                        <li><a href="index-2.php">Home</a></li>
                        <li><a class="active">deposer course</a></li>
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

            </div>

        </section>
        <!--=====================================-->
        <!--=           news Area Start         =-->
        <?php
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        ?>
        <section class="news style-1">
            <div class="container">
                <div class="news-block">
                    <div class="news-box">
                        <img src="assets/media/news/logo.svg" alt="" />
                        <p>Workspace</p>
                        <h2>Deposit Your work</h2>
                        <span>Share your projects and collaborate with others by submitting your work to our workspace.</span>
                        <form action="upload.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <input class="form-control" name="file" type="file" placeholder="Your work" />
                                <input type="hidden" name="tp_id" value="<?php echo $_GET['id']; ?>">
                                <button class="input-group-text educators-btn medium dark" type="submit">
                                    Submit Work
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


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
                                            <i class="fas fa-phone-square-alt"></i> +1 234 567
                                            8910</a>
                                    </li>
                                    <li>
                                        <a href="mailto:example@info.com">
                                            <i class="fas fa-envelope"></i> example@info.com</a>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="fas fa-map-marked-alt"></i>70 Avenue Street
                                            Brooklyn, New York, USA
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p class="copyright-text">
                    © 2023 All Rights Reserved by
                    <a href="course-detail.php">Educators</a>
                </p>
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
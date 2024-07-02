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
              <a class="active">Courses</a>
              <ul class="educators-submenu">
                <li>
                  <a href="courses.php">Courses</a>
                </li>
                <li>
                  <a href="course-detail.php" class="active">Course Detail</a>
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
                  <a href="contact.php">Contact</a>
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
          <h4>Course Details</h4>
          <ul>
            <li><a href="index-2.php">Home</a></li>
            <li><a href="contact.php">Courses</a></li>
            <li><a class="active">Course Details</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=        course-detail Area Start          =-->
    <!--=====================================-->
    <section class="course-detail style-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="detail-block">
              <h4>General Education- Class 1</h4>
              <div class="video-block">
                <div class="img-box">
                  <img class="detail-image" src="assets/media/course-detail/video-img.png" alt="" />
                  <div class="overlay">
                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                  </div>
                </div>
                <div class="video-box">
                  <video controls>
                    <source src="assets/media/video/online.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
              <div class="text-block">
                <h5>
                  Prof.James Vlad Russel <span>Course rating 7/10 </span>
                </h5>
                <p>
                  General education is a term used to refer to the
                  foundational knowledge and skills that individuals are
                  expected to possess to function effectively in society. It
                  typically covers a broad range of subjects, such as
                  language, mathematics, science, social studies, and the
                  arts, and is designed to provide students with a
                  well-rounded education.
                </p>
                <h5>Course Overview</h5>
                <p>
                  General education courses are foundational courses that
                  students are typically required to complete as part of their
                  undergraduate education. These courses are designed to
                  provide a broad-based education in a range of subjects, with
                  the aim of developing
                </p>
                <h5>What will you Learn?</h5>
                <p class="m-0">
                  General education courses cover a wide range of subjects and
                  topics, providing students with a broad-based education that
                  goes beyond just technical or vocational training. Here are
                  some of the key things you can expect to learn in general
                  education courses <br />
                  Communication Skills: You will learn how to communicate
                  effectively, both orally and in writing. This may include
                  courses in writing, public speaking, and interpersonal
                  communication.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="detail-block">
              <h4>Full Course Playlist</h4>
              <div class="playlist-block">
                <div class="img-block">
                  <img src="assets/media/course-detail/video-img-2.png" alt="" />
                  <div class="overlay">
                    <a href="course-detail.php"><i class="fas fa-play"></i></a>
                  </div>
                </div>
                <div class="text-block">
                  <p>General Education - Class 2</p>
                </div>
              </div>
              <div class="playlist-block">
                <div class="img-block">
                  <img src="assets/media/course-detail/video-img-3.png" alt="" />
                  <div class="overlay">
                    <a href="course-detail.php"><i class="fas fa-play"></i></a>
                  </div>
                </div>
                <div class="text-block">
                  <p>General Education - Class 2</p>
                </div>
              </div>
              <div class="playlist-block m-0">
                <div class="img-block">
                  <img src="assets/media/course-detail/video-img-4.png" alt="" />
                  <div class="overlay">
                    <a href="course-detail.php"><i class="fas fa-play"></i></a>
                  </div>
                </div>
                <div class="text-block">
                  <p>General Education - Class 2</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=       FAQ Area Start      =-->
    <!--=====================================-->
    <section class="faq style-2">
      <div class="container">
        <div class="heading">
          <h2>FAQ’s</h2>
          <p>
            FAQ (Frequently Asked Questions) content typically <br />
            consists of a list of common questions
          </p>
        </div>
        <div class="row" id="faqExample">
          <div class="col-lg-6 col-12">
            <div class="text-block">
              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#slide1" aria-expanded="true" aria-controls="slide1">
                What are the requirements for admission?
              </button>
              <div id="slide1" class="accordion-collapse collapse" aria-labelledby="slide1" data-bs-parent="#faqExample">
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
              <div id="slide2" class="accordion-collapse collapse" aria-labelledby="slide2" data-bs-parent="#faqExample">
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
              <div id="slide3" class="accordion-collapse collapse" aria-labelledby="slide3" data-bs-parent="#faqExample">
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
              <div id="slide4" class="accordion-collapse collapse" aria-labelledby="slide4" data-bs-parent="#faqExample">
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
              <div id="slide5" class="accordion-collapse collapse" aria-labelledby="slide5" data-bs-parent="#faqExample">
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
              <div id="slide6" class="accordion-collapse collapse" aria-labelledby="slide6" data-bs-parent="#faqExample">
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
    <!--=           news Area Start         =-->
    <!--=====================================-->
    <section class="news style-1">
      <div class="container">
        <div class="news-block">
          <div class="news-box">
            <img src="assets/media/news/logo.svg" alt="" />
            <p>Subscribe to our</p>
            <h2>News Letter</h2>
            <span>Stay up-to-date with the latest news and events happening at
              our school by subscribing to our newsletter. Our newsletter
              provides a wealth of information about our school,
              including:</span>
            <form action="https://uiparadox.co.uk/templates/educators/course-detail.php">
              <div class="input-group">
                <input class="form-control" name="email" type="email" placeholder="Your email address" />
                <button class="input-group-text educators-btn medium dark" type="submit">
                  Subscribe Now
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
  <script src="assets/js/vendor/sal.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>

  <!-- Site Scripts -->
  <script src="assets/js/app.js"></script>
</body>


</html>
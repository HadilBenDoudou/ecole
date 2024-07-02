<?php
require_once('../../identifier.php');
require_once("../../connexiondb.php");




?>
<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Educators | Online Course & Education HTML Template</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png" />

  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css" />
  <link rel="stylesheet" href="assets/css/vendor/slick.css" />
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css" />
  <link rel="stylesheet" href="assets/css/vendor/sal.css" />

  <!-- Site Stylesheet -->
  <link rel="stylesheet" href="assets/css/app.css" />
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
              <a class="active" href="index-3.php">Home</a>
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
    <section class="banner style-1">
      <div class="container">
        <div class="banner-content">
          <div class="row align-items-center">
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
              <p>Discover your potential with our</p>
              <h2>
                Online Courses <br />
                Learning System
              </h2>
              <p class="light-text">
                Educators take your skills to the <br />
                next level with ground-up courses.<br />
                We provide you with
              </p>
              <div class="row">
                <div class="col-lg-8 offset-lg-0">
                  <div class="row">
                    <div class="col-6">
                      <span><i class="fas fa-check-square"></i>Multiple
                        Resources</span>
                    </div>
                    <div class="col-6">
                      <span><i class="fas fa-check-square"></i>Multiple
                        Resources</span>
                    </div>
                    <div class="col-6">
                      <span><i class="fas fa-check-square"></i>Multiple
                        Resources</span>
                    </div>
                    <div class="col-6">
                      <span><i class="fas fa-check-square"></i>Multiple
                        Resources</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-8 col-12">
              <div><img src="../../image/education2.png" /></div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="shape shape1"><img src="assets/media/shapes/slide-shape-1.svg" alt=""></div> -->
      <div class="shape shape2">
        <img src="assets/media/shapes/slide-shape-2.svg" alt="" />
      </div>
      <div class="shape shape3">
        <img src="assets/media/shapes/slide-shape-3.svg" alt="" />
      </div>
      <div class="shape shape4">
        <img src="assets/media/shapes/slide-shape-4.svg" alt="" />
      </div>
      <div class="shape shape5">
        <img src="assets/media/shapes/slide-shape-5.svg" alt="" />
      </div>
      <div class="shape shape6">
        <img src="assets/media/shapes/slide-shape-6.svg" alt="" />
      </div>
      <div class="shape shape7">
        <img src="assets/media/shapes/slide-shape-7.svg" alt="" />
      </div>
      <div class="shape shape8">
        <img src="assets/media/shapes/slide-shape-8.svg" alt="" />
      </div>
    </section>
    <!--=====================================-->
    <!--=      categories Area Start        =-->
    <!--=====================================-->
    <section class="category style-1">
      <div class="container">
        <div class="heading">
          <h2>Course Categories</h2>
          <p>
            Courses that cover vocational skills, such as culinary arts,
            <br />
            computer programming, Graphic Design etc.
          </p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12">
            <a href="course-detail.php">
              <div class="category-block block-1 mb-xl-0">
                <div class="category-heading">
                  <div class="heading-icon">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32 9.56326V15.8133C32 16.5034 31.4404 17.0633 30.75 17.0633C30.0596 17.0633 29.5 16.5034 29.5 15.8133V9.56326C29.5 9.33597 29.4697 9.1116 29.4102 8.89578C29.2266 8.23025 29.6169 7.54202 30.2825 7.35818C30.9478 7.17459 31.6365 7.56497 31.8201 8.2305C31.9395 8.66287 32 9.11136 32 9.56326ZM30.75 20.8133C30.0596 20.8133 29.5 21.3728 29.5 22.0633C29.5 23.4417 28.3784 24.5633 27 24.5633H5C3.62158 24.5633 2.5 23.4417 2.5 22.0633V9.56326C2.5 8.1846 3.62158 7.06326 5 7.06326H13.75C14.4404 7.06326 15 6.50345 15 5.81326C15 5.12283 14.4404 4.56326 13.75 4.56326H5C2.24292 4.56326 0 6.80618 0 9.56326V22.0633C0 24.8201 2.24292 27.0633 5 27.0633H14.75V29.5555H10.375C9.68457 29.5555 9.125 30.1153 9.125 30.8055C9.125 31.4959 9.68457 32.0555 10.375 32.0555H21.625C22.3154 32.0555 22.875 31.4959 22.875 30.8055C22.875 30.1153 22.3154 29.5555 21.625 29.5555H17.25V27.0633H27C29.7571 27.0633 32 24.8201 32 22.0633C32 21.3728 31.4404 20.8133 30.75 20.8133ZM14.8508 10.1265L21.9292 1.574C22.5176 0.783477 23.3757 0.263946 24.3508 0.109405C25.3403 -0.0470895 26.3313 0.190948 27.1416 0.779571C27.9519 1.36844 28.4846 2.23758 28.6411 3.22684C28.7979 4.21634 28.5598 5.2073 27.9709 6.01761L27.9216 6.08108L20.2922 15.2776C20.4097 16.8418 19.8755 18.4463 18.6865 19.6402C16.6201 21.7146 14.2981 22.0008 12.0964 22.0008C8.99707 22.0008 6.53125 20.1409 6.42798 20.0618C6.07031 19.7881 5.88745 19.3433 5.94946 18.8972C6.01147 18.4512 6.30859 18.0728 6.72729 17.907C8.22534 17.3135 8.57373 16.3155 9.05615 14.9339C9.4209 13.8887 9.83447 12.7041 10.8469 11.7381C11.9468 10.6888 13.3613 10.1136 14.8298 10.126C14.8369 10.1258 14.8438 10.1265 14.8508 10.1265ZM16.9153 13.5244C16.3433 12.9502 15.5967 12.6309 14.8132 12.6258C14.8066 12.6258 14.7998 12.6258 14.7932 12.6258C13.9836 12.6258 13.1958 12.9524 12.5728 13.5467C11.9961 14.097 11.7275 14.8665 11.4163 15.7576C11.0554 16.7918 10.6353 17.9956 9.62402 18.9825C10.3206 19.2635 11.1802 19.5008 12.0964 19.5008C14.0723 19.5008 15.5676 19.229 16.9155 17.8758C18.1104 16.6761 18.1104 14.7242 16.9153 13.5244ZM17.4983 10.8487C17.9268 11.0945 18.3267 11.399 18.6868 11.7603C18.9263 12.0008 19.1377 12.2588 19.3242 12.5288L25.9678 4.52078C26.1499 4.25589 26.2224 3.93655 26.1719 3.61795C26.1196 3.28812 25.9421 2.99832 25.6721 2.80203C25.4019 2.60574 25.0718 2.52664 24.7417 2.57864C24.4121 2.63089 24.1223 2.80838 23.926 3.07864L23.8779 3.1409L17.4983 10.8487Z" fill="url(#paint0_linear_317_4110)" />
                      <defs>
                        <linearGradient id="paint0_linear_317_4110" x1="0" y1="16.0591" x2="32" y2="16.0591" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FEA903" offset="0" />
                          <stop offset="0.2931" stop-color="#FED324" />
                          <stop offset="0.5538" stop-color="#FEB73C" />
                          <stop offset="0.7956" stop-color="#FECE4A" />
                          <stop offset="1" stop-color="#FEA14F" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <h5>Graphic Design</h5>
                </div>
                <p>Graphic Design is a program of study that...</p>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <a href="course-detail.php">
              <div class="category-block block-2 mb-xl-0">
                <div class="category-heading">
                  <div class="heading-icon">
                    <svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M31.7962 20.929H25.4065C25.3552 20.929 25.321 20.9717 25.321 21.0144V27.4042C25.321 27.4554 25.3638 27.4896 25.4065 27.4896H31.7962C31.8475 27.4896 31.8816 27.4469 31.8816 27.4042V21.0144C31.8816 20.9632 31.8389 20.929 31.7962 20.929ZM4.20412 27.4896H10.5939C10.6451 27.4896 10.6793 27.4469 10.6793 27.4042V21.0144C10.6793 20.9632 10.6366 20.929 10.5939 20.929H5.20412C4.15286 20.929 4.11869 20.9717 4.11869 21.0144V27.4042C4.11869 27.4554 4.1614 27.4896 4.20412 27.4896ZM21.2036 20.929H14.8138C14.7626 20.929 14.7284 20.9717 14.7284 21.0144V27.4042C14.7284 27.4554 14.7711 27.4896 14.8138 27.4896H21.2036C21.2548 27.4896 21.289 27.4469 21.289 27.4042V21.0144C21.289 20.9632 21.2463 20.929 21.2036 20.929ZM26.5084 16.205L25.6029 15.3081C25.5175 15.2226 25.4748 15.1116 25.4833 15.0005C25.4919 14.8809 25.5431 14.7784 25.6286 14.7016L26.0215 14.3684L23.3648 13.9071L23.7065 15.8548L23.8261 16.5638L24.1593 16.1709C24.2361 16.0854 24.3472 16.0256 24.4583 16.0256C24.4668 16.0171 24.4668 16.0171 24.4753 16.0171C24.5864 16.0171 24.6889 16.0598 24.7743 16.1367L26.2692 17.6316L27.1064 16.7944L26.5768 16.2648C26.5512 16.2477 26.5341 16.2306 26.5084 16.205ZM6.62163 13.4885C7.04021 13.4885 7.38191 13.1468 7.38191 12.7282C7.39045 12.3097 7.04875 11.968 6.62163 11.968C6.20305 11.968 5.86135 12.3097 5.86135 12.7282C5.86989 13.1468 6.21159 13.4885 6.62163 13.4885ZM4.40059 15.5216H9.77379V10.5841H5.40059C4.24683 10.5841 4.12723 10.7037 4.12723 10.8574V15.2483C4.11869 15.402 4.24683 15.5216 4.40059 15.5216ZM6.62163 11.1394C7.5015 11.1394 8.21907 11.8569 8.21907 12.7368C8.21907 13.0272 8.15073 13.292 8.01405 13.5312L8.74015 14.2573C8.90246 14.4197 8.90246 14.6845 8.74015 14.8468C8.65473 14.9237 8.54368 14.9664 8.44117 14.9664C8.33012 14.9664 8.22761 14.9237 8.14218 14.8468L7.42462 14.1207C7.18543 14.2573 6.91207 14.3342 6.62163 14.3342C5.74176 14.3342 5.02419 13.6167 5.02419 12.7368C5.02419 11.8569 5.74176 11.1394 6.62163 11.1394ZM22.4508 13.4629C22.4251 13.3262 22.4679 13.1895 22.5704 13.0956C22.6643 13.0016 22.801 12.9589 22.9377 12.976L27.0552 13.685C27.2175 13.7106 27.3456 13.8302 27.3883 13.984C27.431 14.1377 27.3798 14.3086 27.2602 14.4111L26.5341 15.0262L27.0295 15.5216H31.6083C31.762 15.5216 31.8816 15.402 31.8816 15.2483V10.8574C31.8816 10.7037 31.762 10.5841 31.6083 10.5841H10.6109V15.5216H22.8096L22.4508 13.4629ZM31.2666 1.93059H19.8966C19.5122 1.93059 19.2047 2.23812 19.2047 2.62253C19.2047 3.00694 19.5122 3.31447 19.8966 3.31447H31.2666C31.651 3.31447 31.9585 3.00694 31.9585 2.62253C31.9585 2.23812 31.651 1.93059 31.2666 1.93059ZM4.23829 2.13561C4.51164 1.86225 4.94731 1.86225 5.22067 2.13561C5.49402 2.40897 5.49402 2.84463 5.22067 3.11799C4.94731 3.39135 4.51164 3.39135 4.23829 3.11799C3.96493 2.84463 3.96493 2.40897 4.23829 2.13561ZM8.71453 1.94768C9.09039 1.86225 9.45772 2.0929 9.54314 2.46022C9.62857 2.83609 9.39792 3.20342 9.0306 3.28884C8.65473 3.37427 8.28741 3.14362 8.20198 2.77629C8.11656 2.40897 8.3472 2.0331 8.71453 1.94768ZM12.5415 2.13561C12.8149 1.86225 13.2506 1.86225 13.5239 2.13561C13.7973 2.40897 13.7973 2.84463 13.5239 3.11799C13.2506 3.39135 12.8149 3.39135 12.5415 3.11799C12.2682 2.84463 12.2682 2.40897 12.5415 2.13561ZM34.1539 0H1.83786V0.00854297C1.07758 0.00854297 0.462524 0.623599 0.462524 1.38388V5.24506H35.5293V1.37533C35.5293 0.615057 34.9142 0 34.1539 0ZM4.7252 4.15163C3.8795 4.15163 3.19611 3.46823 3.19611 2.62253C3.19611 1.77683 3.8795 1.09343 4.7252 1.09343C5.57091 1.09343 6.2543 1.77683 6.2543 2.62253C6.2543 3.46823 5.57091 4.15163 4.7252 4.15163ZM8.87683 4.15163C8.03113 4.15163 7.34774 3.46823 7.34774 2.62253C7.34774 1.77683 8.03113 1.09343 8.87683 1.09343C9.72254 1.09343 10.4059 1.77683 10.4059 2.62253C10.4059 3.46823 9.72254 4.15163 8.87683 4.15163ZM13.0285 4.15163C12.1828 4.15163 11.4994 3.46823 11.4994 2.62253C11.4994 1.77683 12.1828 1.09343 13.0285 1.09343C13.8742 1.09343 14.5576 1.77683 14.5576 2.62253C14.5661 3.46823 13.8656 4.15163 13.0285 4.15163ZM31.2837 4.15163H19.8966C19.0509 4.15163 18.3675 3.46823 18.3675 2.62253C18.3675 1.77683 19.0509 1.09343 19.8966 1.09343H31.2666C32.1123 1.09343 32.7957 1.77683 32.7957 2.62253C32.7957 3.46823 32.1123 4.15163 31.2837 4.15163ZM0.471067 30.6247C0.471067 31.3849 1.08612 32 1.8464 32H34.1625C34.9227 32 35.5378 31.3849 35.5378 30.6247V6.08222H0.471067V30.6247ZM22.1176 27.4042C22.1176 27.9167 21.7076 28.3267 21.195 28.3267H14.8053C14.2927 28.3267 13.8827 27.9167 13.8827 27.4042V21.0144C13.8827 20.5019 14.2927 20.0918 14.8053 20.0918H21.195C21.7076 20.0918 22.1176 20.5019 22.1176 21.0144V27.4042ZM32.7188 27.4042C32.7188 27.9167 32.3002 28.3267 31.7962 28.3267H25.4065C24.8939 28.3267 24.4839 27.9167 24.4839 27.4042V21.0144C24.4839 20.5019 24.8939 20.0918 25.4065 20.0918H31.7962C32.3088 20.0918 32.7188 20.5019 32.7188 21.0144V27.4042ZM3.29007 10.8574C3.29007 10.2424 3.78554 9.74693 4.40059 9.74693H10.1924H31.6083C32.2233 9.74693 32.7188 10.2424 32.7188 10.8574V15.2483C32.7273 15.8633 32.2233 16.3588 31.6168 16.3588H27.8752L27.9094 16.393C28.1315 16.6151 28.1315 16.9738 27.9094 17.1959L26.6878 18.4175C26.5682 18.5286 26.423 18.5884 26.2778 18.5884C26.1326 18.5884 25.9874 18.5371 25.8763 18.4261L24.5095 17.0593L23.8945 17.7854C23.7919 17.905 23.6211 17.9562 23.4673 17.9135C23.3136 17.8708 23.194 17.7427 23.1683 17.5804L22.9548 16.3588H10.1838H5.40059C3.78554 16.3588 3.29007 15.8633 3.29007 15.2483V10.8574ZM3.29007 21.0144C3.29007 20.5019 3.70011 20.0918 4.21266 20.0918H10.6024C11.115 20.0918 11.525 20.5019 11.525 21.0144V27.4042C11.5335 27.9167 11.115 28.3267 10.6109 28.3267H5.20412C3.69157 28.3267 3.28153 27.9167 3.28153 27.4042V21.0144H3.29007Z" fill="url(#paint0_linear_317_4125)" />
                      <defs>
                        <linearGradient id="paint0_linear_317_4125" x1="18.0002" y1="32" x2="18.0002" y2="0" gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#D1E6FD" />
                          <stop offset="0.0001" stop-color="#3E9BFF" />
                          <stop offset="1" stop-color="#6D83E9" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <h5>Web Design</h5>
                </div>
                <p>A Web Design is a program of study that...</p>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <a href="course-detail.php">
              <div class="category-block block-3 mb-sm-0">
                <div class="category-heading">
                  <div class="heading-icon">
                    <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.6181 20.6045L23.3524 16.7997L20.0215 25.1213C19.866 25.544 19.4441 25.811 19 25.811C18.5559 25.811 18.134 25.544 17.9785 25.1213L14.6476 16.7997L13.3819 20.6045C13.2486 21.0495 12.8267 21.361 12.3382 21.361H3.87787C6.809 25.2103 11.6055 29.1709 18.4005 33.5095C18.5781 33.6209 18.8003 33.6875 19.0001 33.6875C19.2 33.6875 19.422 33.6209 19.5998 33.5095C26.3948 29.1709 31.1911 25.2103 34.1224 21.361H25.662C25.1732 21.361 24.7514 21.0495 24.6181 20.6045ZM13.5152 13.2175C13.6485 12.7726 14.0704 12.4834 14.5366 12.4611C14.9808 12.4611 15.4249 12.7281 15.5804 13.1509L19 21.6948L22.4196 13.1509C22.5751 12.7281 23.0193 12.4834 23.4634 12.4611C23.9296 12.4834 24.3515 12.7726 24.4847 13.2175L26.4611 19.1361H35.6321C37.1421 16.5995 37.875 14.1075 37.875 11.571C37.875 5.25212 33.4782 0.3125 27.8824 0.3125C23.3967 0.3125 20.51 3.44987 19 6.2755C17.49 3.44987 14.6032 0.3125 10.1176 0.3125C4.52175 0.3125 0.125 5.25212 0.125 11.571C0.125 14.1075 0.857875 16.5995 2.36775 19.1361H11.5387L13.5152 13.2175ZM1.23525 19.136C0.613375 19.136 0.125 19.6255 0.125 20.2485C0.125 20.8714 0.6135 21.361 1.23525 21.361H3.87787C3.3005 20.6045 2.78963 19.8702 2.36775 19.1361L1.23525 19.136ZM36.7648 19.136H35.6323C35.2104 19.8701 34.6996 20.6045 34.1222 21.361H36.7648C37.3866 21.361 37.875 20.8714 37.875 20.2485C37.875 19.6255 37.3865 19.136 36.7648 19.136Z" fill="url(#paint0_linear_317_4131)" />
                      <defs>
                        <linearGradient id="paint0_linear_317_4131" x1="19" y1="33.6875" x2="19" y2="0.3125" gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#FFA68D" />
                          <stop offset="1" stop-color="#FD3A84" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <h5>Health & Fitness</h5>
                </div>
                <p>A Health & Fitness is a program of study that...</p>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <a href="course-detail.php">
              <div class="category-block block-4 mb-0">
                <div class="category-heading">
                  <div class="heading-icon">
                    <svg width="38" height="32" viewBox="0 0 38 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.5084 20.0675V24.2758C24.5084 24.8857 24.0157 25.3792 23.4068 25.3792H14.5933C13.9843 25.3792 13.4916 24.8857 13.4916 24.2758V20.0702C13.0827 19.0993 10.3935 13.9725 0.271425 14.3833V28.6897C0.271301 30.5151 1.75384 32 3.57636 32H34.4236C36.2461 32 37.7287 30.5151 37.7287 28.6897V14.3841C27.6239 13.9738 24.9264 19.0808 24.5084 20.0675ZM34.4236 5.51727H26.7117V3.31039C26.7117 2.98394 26.5676 2.67361 26.3158 2.46338C26.1954 2.36316 23.3228 0 19 0C14.6771 0 11.8046 2.36316 11.6841 2.46338C11.4324 2.67349 11.2882 2.98381 11.2882 3.31039V5.51727H3.57636C1.75384 5.51727 0.271301 7.00217 0.271301 8.82753V12.1744C10.6906 11.7828 14.3055 16.8043 15.303 18.7586H22.6983C23.6991 16.8035 27.3275 11.7868 37.7285 12.1792V8.82753C37.7287 7.00217 36.2461 5.51727 34.4236 5.51727ZM24.5084 5.51727H13.4916V3.87076C14.3028 3.32874 16.3083 2.20688 19.0001 2.20688C21.6662 2.20688 23.6887 3.33185 24.5086 3.87498V5.51727H24.5084ZM15.6949 20.9656V23.1725H22.305V20.9656H15.6949Z" fill="url(#paint0_linear_317_4155)" />
                      <defs>
                        <linearGradient id="paint0_linear_317_4155" x1="19" y1="32" x2="19" y2="0" gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#D5D6FD" />
                          <stop offset="1" stop-color="white" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <h5>Business</h5>
                </div>
                <p>Business is program of study that covers...</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=        Course Area Start          =-->
    <!--=====================================-->
    <section class="course style-1">
      <div class="container">
        <div class="heading">
          <h2>Our Course</h2>
          <p>
            Course content refers to the material or subject matter <br />
            that is taught in a particular course.
          </p>
        </div>
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
              <li class="nav-item">
                <a href="#all-course" class="educators-btn medium yellow active" aria-current="true" data-bs-toggle="tab">All Courses</a>
              </li>
              <li class="nav-item">
                <a href="#popular" class="educators-btn medium yellow" aria-current="false" data-bs-toggle="tab">Popular</a>
              </li>
              <li class="nav-item">
                <a href="#featured" class="educators-btn medium yellow" aria-current="false" data-bs-toggle="tab">Featured</a>
              </li>
              <li class="nav-item">
                <a href="#trending" class="educators-btn medium yellow" aria-current="false" data-bs-toggle="tab">Trending</a>
              </li>
            </ul>
          </div>
          <form class="card-body tab-content">
            <div class="tab-pane active" id="all-course">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>UI UX Design</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-4.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>PHP Learning</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-5.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>Social Marketing</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="popular">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-6.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>UI UX Design</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>PHP Learning</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-7.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>Social Marketing</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="featured">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>React Learning</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 44 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-8.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>Java Learning</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 25 Students</span>
                        <span><i class="fas fa-book"></i> 30 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-6.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>Social Marketing</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="trending">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-5.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>UI UX Design</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-6.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>scss Learning</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 44 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="course-block">
                    <div class="img-block">
                      <a href="course-detail.php" class="detail-link educators-btn medium dark">View Detail</a>
                      <img src="assets/media/courses/course-7.png" alt="" />
                      <a href="contact.php" class="educators-btn medium yellow">Subscribe Now</a>
                    </div>
                    <div class="text-block">
                      <h3>Social Marketing</h3>
                      <span><i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i></span>
                      <p>from Joanie M. Reid</p>
                      <div class="detail-sec">
                        <span><i class="fas fa-users"></i> 21 Students</span>
                        <span><i class="fas fa-book"></i> 36 Classes</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
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
    <!--=           Teacher Area Start      =-->
    <!--=====================================-->
    <section class="teacher style-1">
      <div class="container">
        <div class="heading">
          <h2>Our Teachers</h2>
          <p>Our teachers are the backbone of our school community</p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="teacher-block">
              <img src="assets/media/teacher/teacher-1.png" alt="" />
              <div class="text-block">
                <h4>Jean P. Burriss</h4>
                <p>Mathematics</p>
                <a href="staff-detail.php" class="educators-btn medium white">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="teacher-block">
              <img src="assets/media/teacher/teacher-2.png" alt="" />
              <div class="text-block">
                <h4>Janice Cook</h4>
                <p>Biological Science</p>
                <a href="staff-detail.php" class="educators-btn medium white">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="teacher-block mb-sm-0">
              <img src="assets/media/teacher/teacher-3.png" alt="" />
              <div class="text-block">
                <h4>Tracy Granger</h4>
                <p>Applied Psychology</p>
                <a href="staff-detail.php" class="educators-btn medium white">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="teacher-block mb-0">
              <img src="assets/media/teacher/teacher-4.png" alt="" />
              <div class="text-block">
                <h4>William Leach</h4>
                <p>Physical Chemistry</p>
                <a href="staff-detail.php" class="educators-btn medium white">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=           Testimonial Area Start      =-->
    <!--=====================================-->
    <div class="testimonial style-1">
      <div class="container">
        <div class="heading">
          <h2>Parents Reviews</h2>
          <p>
            Exceptional Education and Support: A Parent's Review for school
          </p>
        </div>
        <div class="testimonial-slider">
          <div class="testimonial-block">
            <div class="testimonial-box">
              <div class="title-block">
                <img src="assets/media/parent/parent-1.png" class="testimonial-img" alt="" />
                <h4>
                  <b>Daniella Smith</b>
                  Guardian/Mother
                </h4>
                <div class="quotation">
                  <img src="assets/media/parent/quotation-mark.png" alt="" />
                </div>
              </div>
              <p>
                we would like to take this prospect to thank the teachers for
                their continuous care, support, collaboration, and most
                importantly patience.
              </p>
              <div class="left-border"></div>
            </div>
          </div>
          <div class="testimonial-block">
            <div class="testimonial-box">
              <div class="title-block">
                <img src="assets/media/parent/parent-2.png" class="testimonial-img" alt="" />
                <h4>
                  <b>Daniella Smith</b>
                  Guardian/Mother
                </h4>
                <div class="quotation">
                  <img src="assets/media/parent/quotation-mark.png" alt="" />
                </div>
              </div>
              <p>
                I would like to show my appreciation to the teachers who have
                taught my son and has guided him to achieving amazing results
                in his IGs and A levels
              </p>
              <div class="left-border"></div>
            </div>
          </div>
          <div class="testimonial-block">
            <div class="testimonial-box">
              <div class="title-block">
                <img src="assets/media/parent/parent-1.png" class="testimonial-img" alt="" />
                <h4>
                  <b>Daniella Smith</b>
                  Guardian/Mother
                </h4>
                <div class="quotation">
                  <img src="assets/media/parent/quotation-mark.png" alt="" />
                </div>
              </div>
              <p>
                I would like to say that I am very impressed with the
                children's events and their performances. Thank You for all
                the effort the teachers have put in with them
              </p>
              <div class="left-border"></div>
            </div>
          </div>
          <div class="testimonial-block">
            <div class="testimonial-box">
              <div class="title-block">
                <img src="assets/media/parent/parent-2.png" class="testimonial-img" alt="" />
                <h4>
                  <b>Daniella Smith</b>
                  Guardian/Mother
                </h4>
                <div class="quotation">
                  <img src="assets/media/parent/quotation-mark.png" alt="" />
                </div>
              </div>
              <p>
                I would like to show my appreciation to the teachers who have
                taught my son and has guided him to achieving amazing results
                in his IGs and A levels
              </p>
              <div class="left-border"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--=====================================-->
    <!--=           Blog Area Start       =-->
    <!--=====================================-->
    <section class="blog style-1">
      <div class="container">
        <div class="heading">
          <h2>Latest Blogs</h2>
          <p>
            School blogs are a great way to share information and resources
          </p>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-6 col-12">
            <div class="blog-block">
              <img src="assets/media/blog/blog-img-1.png" alt="" />
              <span>01.11.2023 – PAUL RODRIGUZ</span>
              <h4>Art & Craft Activities</h4>
              <p>
                Drawing and painting are classic art activities that kids can
                start at a young age. They can experiment with different
                drawing students...
              </p>
              <a href="blog-detail.php" class="educators-btn medium dark">Read More</a>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-12">
            <div class="blog-block">
              <img src="assets/media/blog/blog-img-2.png" alt="" />
              <span> 05.11.2023 – Jacqueline Surry</span>
              <h4>Kids Character Development</h4>
              <p>
                Empathy is the ability to understand and share the feelings of
                others. Schools can promote empathy by encouraging
                students....
              </p>
              <a href="blog-detail.php" class="educators-btn medium dark">Read More</a>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-12 offset-xl-0 offset-md-3">
            <div class="blog-block mb-0">
              <img src="assets/media/blog/blog-img-3.png" alt="" />
              <span>11.11.2023 – FELICIA DROUIN</span>
              <h4>Physical Activities for Kids</h4>
              <p>
                Sports are a great way for kids to get physical exercise and
                develop teamwork and sportsmanship skills.They can participate
                in team ....
              </p>
              <a href="blog-detail.php" class="educators-btn medium dark">Read More</a>
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
            <p>Subscribe to our</p>
            <h2>News Letter</h2>
            <span>Stay up-to-date with the latest news and events happening at
              our school by subscribing to our newsletter. Our newsletter
              provides a wealth of information about our school,
              including:</span>
            <form action="https://uiparadox.co.uk/templates/educators/index.php">
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
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/images.jpeg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100" id="todo-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" id="todo-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list" id="todo-list">
                <!-- Tasks will be dynamically added here -->
              </ul>
            </div>



            <script>
              document.addEventListener('DOMContentLoaded', function() {
                const todoForm = document.getElementById('todo-form');
                const todoInput = document.getElementById('todo-input');
                const todoList = document.getElementById('todo-list');

                // Add event listener for form submission
                todoForm.addEventListener('submit', function(event) {
                  event.preventDefault(); // Prevent form submission

                  const taskName = todoInput.value.trim();
                  if (taskName !== '') {
                    addTask(taskName); // Call function to add task
                    todoInput.value = ''; // Clear input field after adding task
                  }
                });

                // Function to add task
                function addTask(taskName) {
                  const li = document.createElement('li');
                  li.innerHTML = `
            <div class="form-check">
                <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    ${taskName}
                </label>
            </div>
            <i class="remove ti-close"></i>
        `;
                  todoList.appendChild(li);
                }
              });
            </script>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Hi start you day</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">

              </div>

            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">


              </div>

            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0"></p>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">

                </div>

              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">

                  </div>
                  <p></p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>

              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">

                </div>
                <small class="text-muted my-auto"></small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">

                </div>

              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">

                </div>

              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">

                </div>

              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
      ?>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?idUser=<?php echo $idUser ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.php?idUser=<?php echo $idUser ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Envoyer message collective</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Envoyer les notes</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.php?idUser=<?php echo $idUser; ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Donner le code</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table2.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Deposer les cours</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table3.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Deposer les tp</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table4.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Deposer les corrections</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table5.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">voir emploi</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table6.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Mon compte</span>
            </a>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table7.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Modifier le mot de passe</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table8.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">les menmbres de formation</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../seDeconnecter.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Déconnexion</span>
            </a>

          </li>



      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Professeur</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Bangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="container">
                      <br>
                      <p class="mb-4">Today’s <span></span></p>
                      <p class="fs-30 mb-2" id="todaysDate"></p>
                      <p>Your Content Goes Here</p>
                    </div>

                    <script>
                      // JavaScript to get today's date and insert it into the HTML
                      var today = new Date();
                      var options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                      };
                      var dateString = today.toLocaleDateString('fr-FR', options);
                      document.getElementById('todaysDate').textContent = dateString;
                    </script>
                  </div>
                </div>
                <?php
                // Assuming you have a database connection already established
                try {
                  $pdo = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  // Get the user ID from the URL
                  if (isset($_GET['idUser'])) {
                    $iduser = $_GET['idUser'];

                    // Query to fetch user data based on the provided user ID
                    $sql = "SELECT * FROM utilisateur WHERE idUser = ?";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$iduser]);

                    // Check if user exists
                    if ($stmt->rowCount() > 0) {
                      $user = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                      <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                          <div class="card-body">
                            <p class="mb-4"> Carte professeur</p>
                            <p class="fs-30 mb-2"><?php echo $user['carte_professeur']; ?></p>
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 stretch-card transparent"> <!-- Adjusted size -->
                        <div class="card card-light-blue">
                          <div class="card-body">
                            <p class="mb-4">Your email</p>
                            <p class="fs-30 mb-2" style="font-size: 20px;"><?php echo $user['email']; ?></p>
                            <p>0.22% (30 days)</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-4 stretch-card transparent"> <!-- Adjusted size -->
                        <div class="card card-light-danger">
                          <div class="card-body">
                            <p class="mb-4">Your role</p>
                            <p class="fs-30 mb-2"><?php echo $user['role']; ?></p>
                            <p>0.22% (30 days)</p>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
      <?php
                    } else {
                      echo "User not found.";
                    }
                  } else {
                    echo "User ID not provided in URL.";
                  }
                } catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
                }
      ?>


      <!-- plugins:js -->
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="vendors/chart.js/Chart.min.js"></script>
      <script src="vendors/datatables.net/jquery.dataTables.js"></script>
      <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
      <script src="js/dataTables.select.min.js"></script>

      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/template.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/dashboard.js"></script>
      <script src="js/Chart.roundedBarCharts.js"></script>
      <!-- End custom js for this page-->
</body>
<style>
  body {
    background-color: #F5F7FF ! important;
  }
</style>

</html>
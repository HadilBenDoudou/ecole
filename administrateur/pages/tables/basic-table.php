<?php
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="../pages/assets/css/admin.css" rel="stylesheet">
  <title>Skydash Admin</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/all-rapport-stagiaire.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="../pages/assets/css/admin.css" rel="stylesheet">
  <script src="../pages/assets/js/admin.js"></script>
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <style>
    body {
      background-color: #f5f7ff;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../index.php"><img src="../../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo" /></a>
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
              <img src="../../images/faces/images.jpeg" alt="profile" />
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
      <!-- partial:../../partials/_settings-panel.html -->
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
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/images.jpeg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php?idUser=<?php echo $idUser ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">les instriptions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php?idUser=<?php echo $idUser ?>">les etudiants</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php?idUser=<?php echo $idUser ?>">les professeurs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">les categiraies</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">les clubs</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">les formations</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">les evenements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Les comptes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.php?idUser=<?php echo $idUser ?>">les comptes professeurs</a></li>
              </ul>
              <ul class=" nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.php?idUser=<?php echo $idUser ?>">les comptes etudiants</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/loginp.php?idUser=<?php echo $idUser ?>"> Mon compte </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/changer_mot_de_passe.php?idUser=<?php echo $idUser ?>"> modifier mot de passe </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/emploi.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">les emplois</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/annonce.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">les annonces</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/membreclub.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Les membre des clubs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/membreformation.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Les membre des formations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/membreevenement.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Les membre des evenements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../seDeconnecter.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Déconnexion</span>
            </a>

          </li>
        </ul>
      </nav>

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">les comptes des professeurs</h4>
            <p class="card-description">
              les comptes des professeurs
            </p>
            <?php
            if (isset($_GET['compte_message']) && !empty($_GET['compte_message'])) {
              // Afficher l'alerte de succès
              echo '<div class="alert alert-success">' . htmlspecialchars($_GET['compte_message']) . '</div>';
            }
            if (isset($_GET['compte_message1']) && !empty($_GET['compte_message1'])) {
              $error_message = $_GET['compte_message1'];
              echo '<div class="alert alert-danger">' . $error_message . '</div>';
            }

            ?>
            <?php
            $host = "localhost";
            $dbname = "ecole";
            $username = "root";
            $password = "";
            $id = isset($_GET['idUser']) ? $_GET['idUser'] : null;

            try {
              $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
              // Autres configurations PDO...
            } catch (PDOException $e) {
              echo "Erreur de connexion : " . $e->getMessage();
              die();
            }
            $login = isset($_GET['login']) ? $_GET['login'] : "";

            $requeteUser = "SELECT * FROM utilisateur WHERE role = 'PROFESSEUR'";
            if (!empty($login)) {
              $requeteUser .= " AND login LIKE '%$login%'";
            }
            $requeteCount = "SELECT COUNT(*) AS countUser FROM utilisateur";

            $resultatUser = $pdo->query($requeteUser);
            $resultatCount = $pdo->query($requeteCount);

            $tabCount = $resultatCount->fetch();
            $nbrUser = $tabCount['countUser'];

            ?>
            <div class="container" class="div-grande">
              <div class="section-title" class="div-grande">
                <h2>Les Compte des Etudiants</h2>

              </div>
              <div class="panel panel-success margetop60" style="border: #ddd;" class="div-grande">
                <div class="panel-heading" style="background-color: #f2f2f2;border:#f2f2f2;color:black">Rechercher des utilisateurs</div>
                <div class="panel-body" style="background-color: #f2f2f2;border:#f2f2f2">
                  <form method="get" action="basic-table.php?idUser=<?php echo $idUser ?>#services" class="form-inline">
                    <div class="form-group d-flex align-items-end">
                      <input type="text" name="login" style="width: 500px;" placeholder="Login" class="form-control" value="<?php echo $login ?>" />
                      <input type="hidden" name="idUser" value="<?php echo $id; ?>">
                      <button type="submit" class="btn btn-success ml-2" style="background-color:#4B49AC">
                        <span class="glyphicon glyphicon-search"></span>Chercher...
                      </button>
                    </div>
                  </form>
                </div>
              </div>


              <div class="panel panel-primary" style="background-color: #f2f2f2;border:#f2f2f2" class="div-grande">
                <div class="panel-heading" style="background-color: #f2f2f2;border:#f2f2f2;color:#000000">Liste des utilisateurs (<?php echo $nbrUser ?> utilisateurs)</div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>login</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--pour afficher les utilisateurs -->
                      <?php while ($user = $resultatUser->fetch()) { ?>
                        <tr class="<?php echo $user['etat'] == 1 ? 'success' : 'danger' ?>">
                          <td><?php echo $user['login'] ?> </td>
                          <td><?php echo $user['email'] ?> </td>
                          <td><?php echo $user['role'] ?> </td>
                          <td>
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $user['iduser']; ?>" style="color:#4B49AC">
                              modifier</span>
                            </a>

                            <div class="modal fade" id="myModal<?php echo $user['iduser']; ?>" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Modifier l'utilisateur</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- Formulaire de mise à jour -->
                                    <form id="updateForm<?php echo $user['iduser']; ?>" method="post" action="../../../updateUtilisateur.php">

                                      <!-- Champs pour les informations mises à jour -->
                                      <input type="hidden" name="idUser" value="<?php echo $user['iduser']; ?>">
                                      <div class="form-group">
                                        <label for="newLogin">Nouveau Login:</label>
                                        <input type="text" class="form-control" id="newLogin" name="newLogin" value="<?php echo $user['login']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="newEmail">Nouvel Email:</label>
                                        <input type="email" class="form-control" id="newEmail" name="newEmail" value="<?php echo $user['email']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="newRole">Nouveau Role:</label>
                                        <input type="text" class="form-control" id="newRole" name="newRole" value="<?php echo $user['role']; ?>">
                                      </div>
                                      <button type="submit" class="btn btn-success" style="background-color:#4B49AC">Enregistrer</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>


                            &nbsp;&nbsp;
                            <?php
                            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                            ?>
                            <a style="color:#4B49AC" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur')" href="../../../supprimerprofesseur.php?idUser1=<?php echo $user['iduser']; ?>&idUser=<?php echo $idUser; ?>">
                              Supprimer
                            </a>

                            &nbsp;&nbsp;
                            <?php if ($user['etat'] == 1 && $user['role'] != 'ADMIN') { ?>

                              &nbsp;&nbsp;
                            <?php } ?>


                            </a>
                          </td>
                        </tr>
                      <?php } ?><!--fin de utilisateur tableau-->
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <!-- partial -->
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">les comptes des etudiants</h4>
                  <p class="card-description">
                    les comptes des etudiants
                  </p>
                  <?php
                  $host = "localhost";
                  $dbname = "ecole";
                  $username = "root";
                  $password = "";
                  $id = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                  try {
                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    // Autres configurations PDO...
                  } catch (PDOException $e) {
                    echo "Erreur de connexion : " . $e->getMessage();
                    die();
                  }
                  $login = isset($_GET['login']) ? $_GET['login'] : "";

                  $requeteUser = "SELECT * FROM utilisateur WHERE role = 'VISITEUR'";
                  if (!empty($login)) {
                    $requeteUser .= " AND login LIKE '%$login%'";
                  }
                  $requeteCount = "SELECT COUNT(*) AS countUser FROM utilisateur";

                  $resultatUser = $pdo->query($requeteUser);
                  $resultatCount = $pdo->query($requeteCount);

                  $tabCount = $resultatCount->fetch();
                  $nbrUser = $tabCount['countUser'];

                  ?>
                  <div class="container" class="div-grande">
                    <div class="section-title" class="div-grande">
                      <h2>Les Compte des Etudiants</h2>

                    </div>
                    <div class="panel panel-success margetop60" style="border: #ddd;" class="div-grande">
                      <div class="panel-heading" style="background-color: #f2f2f2;border:#f2f2f2;color:black">Rechercher des utilisateurs</div>
                      <div class="panel-body" style="background-color: #f2f2f2;border:#f2f2f2">
                        <form method="get" action="basic-table.php?idUser=<?php echo $idUser ?>#etudiant" class="form-inline">
                          <div class="form-group d-flex align-items-end">
                            <input type="text" name="login" style="width: 500px;" placeholder="Login" class="form-control" value="<?php echo $login ?>" />
                            <input type="hidden" name="idUser" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-success ml-2" style="background-color:#4B49AC">
                              <span class="glyphicon glyphicon-search"></span>Chercher...
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>


                    <div class="panel panel-primary" style="background-color: #f2f2f2;border:#f2f2f2" class="div-grande">
                      <div class="panel-heading" style="background-color: #f2f2f2;border:#f2f2f2;color:#000000">Liste des utilisateurs (<?php echo $nbrUser ?> utilisateurs)</div>
                      <div class="panel-body">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>login</th>
                              <th>Email</th>
                              <th>Role</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!--pour afficher les utilisateurs -->
                            <?php while ($user = $resultatUser->fetch()) { ?>
                              <tr class="<?php echo $user['etat'] == 1 ? 'success' : 'danger' ?>">
                                <td><?php echo $user['login'] ?> </td>
                                <td><?php echo $user['email'] ?> </td>
                                <td><?php echo $user['role'] ?> </td>
                                <td>
                                  <a href="#" data-toggle="modal" data-target="#myModal<?php echo $user['iduser']; ?>" style="color:#4B49AC">
                                    Modifier</span>
                                  </a>

                                  <div class="modal fade" id="myModal<?php echo $user['iduser']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Modifier l'utilisateur</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                          <!-- Formulaire de mise à jour -->
                                          <form id="updateForm<?php echo $user['iduser']; ?>" method="post" action="../../../updateUtilisateur.php?idUser=<?php echo $idUser ?>">

                                            <!-- Champs pour les informations mises à jour -->
                                            <input type="hidden" name="idUser" value="<?php echo $user['iduser']; ?>">
                                            <div class="form-group">
                                              <label for="newLogin">Nouveau Login:</label>
                                              <input type="text" class="form-control" id="newLogin" name="newLogin" value="<?php echo $user['login']; ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="newEmail">Nouvel Email:</label>
                                              <input type="email" class="form-control" id="newEmail" name="newEmail" value="<?php echo $user['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="newRole">Nouveau Role:</label>
                                              <input type="text" class="form-control" id="newRole" name="newRole" value="<?php echo $user['role']; ?>">
                                            </div>
                                            <button type="submit" class="btn btn-success" style="background-color:#4B49AC">Enregistrer</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                                  &nbsp;&nbsp;
                                  <a style="color:#4B49AC" onclick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur')" href="../../../supprimerprofesseur.php?idUser1=<?php echo $user['iduser']; ?>&idUser=<?php echo $idUser; ?>">
                                    Supprimer</span>
                                  </a>
                                  &nbsp;&nbsp;
                                  <?php if ($user['etat'] == 1 && $user['role'] != 'ADMIN') { ?>

                                    &nbsp;&nbsp;
                                  <?php } ?>


                                  </a>
                                </td>
                              </tr>
                            <?php } ?><!--fin de utilisateur tableau-->
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>



                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>

                      </thead>
                      <tbody>

                      </tbody>
                    </table>


                  </div>



                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>

                      </thead>
                      <tbody>

                      </tbody>
                    </table>


                  </div>



                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>

                      </thead>
                      <tbody>

                      </tbody>
                    </table>

                  </div>



                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>

                      </thead>
                      <tbody>

                      </tbody>
                    </table>

                  </div>
                  <div class="col-lg-12 stretch-card">




                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">

                    </footer>
                    <!-- partial -->
                  </div>
                  <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
              </div>
              <!-- container-scroller -->
              <!-- plugins:js -->
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

              <script src="../../vendors/js/vendor.bundle.base.js"></script>
              <!-- endinject -->
              <!-- Plugin js for this page -->
              <!-- End plugin js for this page -->
              <!-- inject:js -->
              <script src="../../js/off-canvas.js"></script>
              <script src="../../js/hoverable-collapse.js"></script>
              <script src="../../js/template.js"></script>
              <script src="../../js/settings.js"></script>
              <script src="../../js/todolist.js"></script>
              <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
              <script src="assets/vendor/aos/aos.js"></script>
              <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
              <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
              <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
              <script src="assets/vendor/typed.js/typed.umd.js"></script>
              <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
              <script src="assets/vendor/php-email-form/validate.js"></script>
              <!-- Template Main JS File -->
              <script src="assets/js/main.js"></script>
              <!-- endinject -->
              <!-- Custom js for this page-->
              <!-- End custom js for this page-->
</body>


</html>
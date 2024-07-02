<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
  die("Échec de la connexion: " . $conn->connect_error);
}
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
  <!-- endinject -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
      <?php
      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null; ?>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php?idUser=<?php echo $idUser ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.php?idUser=<?php echo $idUser ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Envoyer message collective</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Envoyer les notes</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.php?idUser=<?php echo $idUser; ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Donner le code</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table2.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Deposer les cours</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table3.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Deposer les tp</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table4.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Deposer les corrections</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table5.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">voir emploi</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table6.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Mon compte</span>
            </a>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table7.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Modifier le mot de passe</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table8.php?idUser=<?php echo $idUser ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">les menmbres de formation</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../seDeconnecter.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Déconnexion</span>
            </a>

          </li>
      </nav>


      <?php

      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
      ?>
      <div class="main-panel" id="etudiant">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card" style="width: 200px;">
                <div class="card-body">
                  <h4 class="card-title">Ajouter des matieres</h4>
                  <?php
                  if (isset($validationErrors) && !empty($validationErrors)) {
                    foreach ($validationErrors as $error) {
                      echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                  }

                  // Afficher le message de succès avec la classe CSS correspondante
                  if (isset($success_msg) && !empty($success_msg)) {
                    header('refresh:4;url=login.php');
                    echo '<div class="alert alert-success">' . $success_msg . '</div>';
                  }
                  ?>
                  <p class="card-description">

                  </p>
                  <?php
                  if (isset($_GET['matiere']) && !empty($_GET['matiere'])) {
                    // Afficher le message de succès pour l'ajout d'une annonce
                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['matiere']) . '</div>';
                  }
                  if (isset($_GET['matiere2']) && !empty($_GET['matiere2'])) {
                    // Afficher le message de succès pour l'ajout d'une annonce
                    echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['matiere2']) . '</div>';
                  }
                  ?>
                  <form class="forms-sample" action="traitement_ajout_matiere.php?idUser=<?php echo $idUser; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom de la matière</label>
                      <input type="text" id="nom_matiere" name="nom_matiere" required class="form-control" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom du professeur</label>
                      <input class="form-control" type="text" id="nom_prof" name="nom_prof" placeholder="Nom du professeur" required>
                    </div>
                    <div class="form-group">
                      <?php
                      // Connexion à la base de données avec PDO
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "ecole";

                      try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // Configurer PDO pour rapporter les erreurs
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Récupération de l'ID de l'utilisateur depuis l'URL (supposons qu'il soit passé comme paramètre GET)
                        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                        // Requête SQL pour récupérer la carte du professeur de l'utilisateur donné
                        $sql = "SELECT carte_professeur FROM utilisateur WHERE iduser = :idUser";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':idUser', $idUser);
                        $stmt->execute();
                        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

                        // Affichage de la liste déroulante
                        echo '<select id="professeur_id" name="professeur_id" class="form-control" required>';
                        echo '<option value="" disabled selected>Sélectionner un professeur</option>';

                        if ($userRow) {
                          $carte_professeur_utilisateur = $userRow["carte_professeur"];

                          // Requête SQL pour récupérer les professeurs ayant la même carte professionnelle que l'utilisateur
                          $sql_professeurs = "SELECT carte_professeur FROM Professeur WHERE carte_professeur = :carte_professeur";
                          $stmt = $conn->prepare($sql_professeurs);
                          $stmt->bindParam(':carte_professeur', $carte_professeur_utilisateur);
                          $stmt->execute();

                          // Vérification des résultats et affichage de la liste déroulante
                          if ($stmt->rowCount() > 0) {
                            while ($row_professeur = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              echo "<option value='" . $row_professeur["carte_professeur"] . "'>" . $row_professeur["carte_professeur"] . "</option>";
                            }
                          } else {
                            echo "<option disabled>Aucun professeur trouvé</option>";
                          }
                        } else {
                          echo "Aucun utilisateur trouvé avec cet ID.";
                        }

                        echo '</select>';
                      } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                      }
                      ?>


                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Code de la matière (max 8 caractères)</label>
                      <input class="form-control" type="text" id="code_matiere" name="code_matiere" maxlength="8" placeholder="Code de la matière" required>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <style>
              .custom-table {
                width: 100%;
                /* Ajustez la largeur du tableau selon vos besoins */
                font-size: 14px;
                /* Taille de police personnalisée */
                /* Autres propriétés CSS personnalisées si nécessaire */
              }

              .custom-table {
                width: 100%;
                /* Ajustez la largeur du tableau selon vos besoins */
                font-size: 10px;
                /* Taille de police personnalisée */
                /* Autres propriétés CSS personnalisées si nécessaire */
              }

              .custom-table td {
                max-width: 10px;
                /* Limite la largeur maximale des cellules */
                white-space: nowrap;
                /* Empêche le contenu de se retourner à la ligne */
                overflow: hidden;
                /* Masque le contenu qui dépasse la largeur de la cellule */
                text-overflow: ellipsis;
                /* Ajoute des points de suspension (...) pour indiquer que le contenu est tronqué */
              }

              .custom-table tr:nth-child(even) {
                background-color: #f2f2f2;
                /* Couleur de fond pour les lignes paires */
              }
            </style>

            <div class="col-md-6 grid-margin stretch-card" style="width: 1000px;">
              <div class="card" style="background-color: #F5F7FF;">

                <div class="card-body" style="width: 1000px;">
                  <!-- Tableau des événements -->
                  <table class="table custom-table">
                    <?php
                    if (isset($_GET['succes_messagecode']) && !empty($_GET['succes_messagecode'])) {
                      // Afficher le message de succès pour l'ajout d'une annonce
                      echo '<div class="alert alert-success">' . htmlspecialchars($_GET['succes_messagecode']) . '</div>';
                    }
                    if (isset($_GET['erreur_messagecode']) && !empty($_GET['erreur_messagecode'])) {
                      // Afficher le message de succès pour l'ajout d'une annonce
                      echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['erreur_messagecode']) . '</div>';
                    }
                    if (isset($_GET['erreur_message44']) && !empty($_GET['erreur_message44'])) {
                      // Afficher le message de succès pour l'ajout d'une annonce
                      echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['erreur_message44']) . '</div>';
                    }
                    ?>
                    <thead>
                      <tr>


                        <th>Nom de la matière</th>
                        <th>Nom du professeur</th>
                        <th>Code de la matière</th>
                        <th>ID du professeur</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Connexion à la base de données avec PDO
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "ecole";

                      try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // Configurer PDO pour rapporter les erreurs
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Récupération de l'ID de l'utilisateur depuis l'URL (supposons qu'il soit passé comme paramètre GET)
                        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                        // Requête SQL pour récupérer la carte professionnelle de l'utilisateur
                        $requete_carte_professeur = "SELECT carte_professeur FROM utilisateur WHERE iduser = :idUser";
                        $stmt_carte_professeur = $conn->prepare($requete_carte_professeur);
                        $stmt_carte_professeur->bindParam(':idUser', $idUser);
                        $stmt_carte_professeur->execute();
                        $row_carte_professeur = $stmt_carte_professeur->fetch(PDO::FETCH_ASSOC);

                        // Vérification si la carte professionnelle de l'utilisateur a été trouvée
                        if ($row_carte_professeur) {
                          $carte_professeur_utilisateur = $row_carte_professeur['carte_professeur'];

                          // Requête SQL pour récupérer les matières en fonction de la carte professionnelle de l'utilisateur
                          $requete_matiere = "SELECT tm.* 
                            FROM tablematiere tm
                            
                            WHERE tm.ProfesseurID = :carte_professeur";
                          $stmt_matiere = $conn->prepare($requete_matiere);
                          $stmt_matiere->bindParam(':carte_professeur', $carte_professeur_utilisateur);
                          $stmt_matiere->execute();

                          // Affichage des données dans le tableau avec des boutons d'action
                          while ($row = $stmt_matiere->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['NomMatiere'] . "</td>";
                            echo "<td>" . $row['NomProfesseur'] . "</td>";
                            echo "<td>" . $row['CodeMatiere'] . "</td>";
                            echo "<td>" . $row['ProfesseurID'] . "</td>";
                            echo "<td>";
                            echo "<a href='#' data-toggle='modal' data-target='#modifierModal" . $row['ID'] . "'>Modifier</a><br>";
                            echo "<a href='supprimer.php?id=" . $row['ID'] . "&idUser=" . $idUser . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cette matière ?\")'>Supprimer</a>";
                            echo "</td>";
                            echo "</tr>";

                            // Modal correspondant à chaque événement
                            echo "<div class='modal fade' id='modifierModal" . $row['ID'] . "' tabindex='-1' role='dialog' aria-labelledby='modifierModalLabel' aria-hidden='true'>";
                            echo "<div class='modal-dialog' role='document'>";
                            echo "<div class='modal-content'>";
                            echo "<div class='modal-header'>";
                            echo "<h5 class='modal-title' id='modifierModalLabel'>Modifier la matière</h5>";
                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                            echo "<span aria-hidden='true'>&times;</span>";
                            echo "</button>";
                            echo "</div>";
                            echo "<div class='modal-body'>";
                            // Contenu du formulaire de modification
                            echo "<form action='modifier.php?idUser=" . $idUser . "' method='post'>";
                            echo "<input type='hidden' name='id' value='" . $row['ID'] . "'>";
                            echo "<label for='nom'>Nouveau nom de la matière:</label><br>";
                            echo "<input type='text' id='nom' name='nom' value='" . $row['NomMatiere'] . "'><br>";
                            echo "<label for='professeur'>Nouveau nom du professeur:</label><br>";
                            echo "<input type='text' id='nomprofesseur' name='nomprofesseur' value='" . $row['NomProfesseur'] . "'><br>";



                            // Menu déroulant pour choisir le professeur
                            echo "<label for='professeur'>Choisir le professeur:</label><br>";
                            echo "<input type='text' id='professeur' name='professeur' value='" . $row['ProfesseurID'] . "'><br>";

                            echo "<label for='code'>Nouveau code de la matière:</label><br>";
                            echo "<input type='text' id='code' name='code' value='" . $row['CodeMatiere'] . "'><br>";
                            echo "<br>";
                            echo "<input type='submit'class='btn btn-primary'  value='Modifier'>";
                            echo "</form>";
                            echo "</div>";
                            echo "<div class='modal-footer'>";
                            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            // Alterner la valeur pour la prochaine ligne
                          }
                        } else {
                          echo "Aucune carte professionnelle trouvée pour cet utilisateur.";
                        }
                      } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                      }
                      ?>

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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>
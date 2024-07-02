<?php
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="../../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo" /></a>
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
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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
            <?php
            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
            ?>
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
            <a class="nav-link" data-toggle="collapse" href="#charts?idUser=<?php echo $idUser ?>" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">les categiraies</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">les clubs</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>#formation">les formations</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>#evenements">les evenements</a></li>
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
              <ul class="nav flex-column sub-menu">
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
      <!-- partial -->
      <div class="main-panel" id="club">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter un club</h4>
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
                  // Assurez-vous que la session est initialisée dans 'identifier.php' ou ailleurs


                  // Récupérez l'ID de l'utilisateur depuis l'URL ou définissez-le à null si non défini
                  $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                  ?>
                  <?php
                  // Vérification si des erreurs ont été transmises via l'URL
                  if (isset($_GET['error']) && isset($_GET['message'])) {
                    $error_message = $_GET['message'];
                    // Affichage du message d'erreur dans une div de danger
                    echo '<div class="alert alert-danger">' . htmlspecialchars($error_message) . '</div>';
                  }
                  ?>
                  <?php
                  // Vérification si un message de succès est transmis via l'URL
                  if (isset($_GET['success']) && isset($_GET['message'])) {
                    $success_message = $_GET['message'];
                    // Affichage du message de succès dans une div de succès
                    echo '<div class="alert alert-success">' . htmlspecialchars($success_message) . '</div>';
                  }
                  ?>

                  <form class="forms-sample" action="ajouter_club.php?idUser=<?php echo $idUser; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom du club</label>
                      <input type="text" id="club_name" name="club_name" class="form-control" placeholder="Nom du club" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea class="form-control" id="club_description" name="club_description" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Date de fondation</label>
                      <input class="form-control" type="date" id="club_founded_date" name="club_founded_date" placeholder="Date de fondation" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">location</label>
                      <input class="form-control" type="text" id="club_location" name="club_location" placeholder="club location" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Président du club</label>
                      <select id="club_president" name="club_president" class="form-control">
                        <option value="">Sélectionnez un président</option> <!-- Option par défaut sans sélection -->
                        <?php
                        // Connexion à la base de données
                        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

                        // Récupérer les données des étudiants
                        $etudiants = $bdd->query('SELECT id, nom, prenom FROM etudiant');

                        // Afficher les options pour chaque étudiant
                        while ($etudiant = $etudiants->fetch()) {
                          echo '<option value="' . $etudiant['id'] . '">' . $etudiant['nom'] . ' ' . $etudiant['prenom'] . '</option>';
                        }
                        ?>
                      </select>

                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <tr>

                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date de fondation</th>
                        <th>Location</th>
                        <th>Président</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Vérification si un message de succès ou d'erreur est transmis via l'URL
                      if (isset($_GET['success2']) && isset($_GET['message'])) {
                        $success_message = $_GET['message'];
                        // Affichage du message de succès dans une div de succès
                        echo '<div class="alert alert-success">' . htmlspecialchars($success_message) . '</div>';
                      } elseif (isset($_GET['error2']) && isset($_GET['message'])) {
                        $error_message = $_GET['message'];
                        // Affichage du message d'erreur dans une div de danger
                        echo '<div class="alert alert-danger">' . htmlspecialchars($error_message) . '</div>';
                      }
                      ?>

                      <?php
                      // Connexion à la base de données avec PDO
                      $dsn = 'mysql:host=localhost;dbname=ecole';
                      $username = 'root';
                      $password = '';
                      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;


                      try {
                        $connexion = new PDO($dsn, $username, $password);
                        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Requête pour récupérer les clubs
                        $requete = "SELECT * FROM club";
                        $resultat = $connexion->query($requete);

                        // Variable pour alterner les classes CSS
                        $alternate = false;

                        // Afficher chaque club dans une ligne de tableau
                        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                          // Alterner les classes CSS pour les lignes
                          $row_class = $alternate ? 'even-row' : 'odd-row';
                          echo "<tr class='$row_class'>";


                          echo "<td>" . $row['club_name'] . "</td>";

                          echo "<td>" . wordwrap($row['club_description'], 15, "<br>", true) . "</td>";
                          echo "<td>" . $row['club_founded_date'] . "</td>";
                          echo "<td>" . $row['club_location'] . "</td>";
                          echo "<td>" . $row['club_president'] . "</td>";

                          echo "<td>";

                          // Lien pour la modification du club
                          echo "<button class='btn btn-primary btn-sm modifier-btn' data-toggle='modal' data-target='#modifierClub" . $row['club_id'] . "' data-club-id='" . $row['club_id'] . "'>Modifier</button><br>";

                          // Formulaire pour la suppression du club
                          echo "<form method='POST' action='traitement_suppression_club.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                          echo "<input type='hidden' name='club_id' value='" . $row['club_id'] . "'>";
                          echo "<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce club ?\")'>Supprimer</button>";
                          echo "</form>";

                          echo "</td>";

                          echo "</tr>";
                          // Modal correspondant à chaque club
                          echo "<div class='modal fade' id='modifierClub" . $row['club_id'] . "' tabindex='-1' role='dialog' aria-labelledby='modifierClubLabel' aria-hidden='true'>";
                          echo "<div class='modal-dialog' role='document'>";
                          echo "<div class='modal-content'>";
                          echo "<div class='modal-header'>";
                          echo "<h5 class='modal-title' id='modifierClubLabel'>Modifier le club</h5>";
                          echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                          echo "<span aria-hidden='true'>&times;</span>";
                          echo "</button>";
                          echo "</div>";
                          echo "<div class='modal-body'>";

                          echo "<form method='POST' action='modifier_club.php?idUser=" . $idUser . "'>";
                          echo "<input type='hidden' name='club_id' value='" . $row['club_id'] . "'>";
                          echo "<div class='form-group'>";
                          echo "<label for='club_name'>Nom du club</label>";
                          echo "<input type='text' class='form-control' id='club_name' name='club_name' value='" . $row['club_name'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='club_description'>Description</label>";
                          echo "<textarea class='form-control' id='club_description' name='club_description' rows='3' required>" . $row['club_description'] . "</textarea>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='club_founded_date'>Date de fondation</label>";
                          echo "<input type='date' class='form-control' id='club_founded_date' name='club_founded_date' value='" . $row['club_founded_date'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='club_location'>Location</label>";
                          echo "<input type='text' class='form-control' id='club_location' name='club_location' value='" . $row['club_location'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='club_president'>Président</label>";
                          echo "<select class='form-control' id='club_president' name='club_president' required>";
                          // Requête pour récupérer les étudiants
                          $requete_etudiants = "SELECT id, nom, prenom FROM etudiant";
                          $resultat_etudiants = $connexion->query($requete_etudiants);

                          // Afficher les options pour chaque étudiant
                          while ($etudiant = $resultat_etudiants->fetch(PDO::FETCH_ASSOC)) {
                            // Vérifier si l'étudiant est le président actuel du club
                            $selected = ($etudiant['id'] == $row['club_president']) ? 'selected' : '';

                            // Afficher l'option avec le nom complet de l'étudiant
                            echo "<option value='" . $etudiant['id'] . "' $selected>" . $etudiant['nom'] . ' ' . $etudiant['prenom'] . "</option>";
                          }
                          echo "</select>";
                          echo "</div>";
                          echo "<button type='submit' class='btn btn-primary'>Sauvegarder</button>";
                          echo "</form>";


                          echo "<div class='modal-footer'>";
                          echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";

                          // Alterner la valeur pour la prochaine ligne
                          $alternate = !$alternate;
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
          </div>


          <div class="row" id="formation">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php
                  // Vérifier si un message de succès est présent dans la chaîne de requête GET
                  if (isset($_GET['success_message11']) && !empty($_GET['success_message11'])) {
                    // Afficher l'alerte de succès
                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['success_message11']) . '</div>';
                  }
                  if (isset($_GET['date_message']) && !empty($_GET['date_message'])) {
                    $error_message = $_GET['date_message'];
                    echo '<div class="alert alert-danger">' . $error_message . '</div>';
                  }
                  ?>
                  <h4 class="card-title">Ajouter une formation</h4>
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
                  if (isset($_GET['dateimage_message']) && !empty($_GET['dateimage_message'])) {
                    $error_message = $_GET['dateimage_message'];
                    echo '<div class="alert alert-danger">' . $error_message . '</div>';
                  }
                  ?>
                  <?php
                  $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                  ?>

                  <form class="forms-sample" action="ajouter_formation.php?idUser=<?php echo $idUser; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nom_formation">Nom de la formation</label>
                      <input type="text" id="nom_formation" name="nom_formation" class="form-control" placeholder="Nom de la formation" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="date_debut">Date de début</label>
                      <input class="form-control" type="date" id="date_debut" name="date_debut" placeholder="Date de début" required>
                    </div>
                    <div class="form-group">
                      <label for="date_fin">Date de fin</label>
                      <input class="form-control" type="date" id="date_fin" name="date_fin" placeholder="Date de fin" required>
                    </div>
                    <div class="form-group">
                      <label for="lieu_formation">Lieu de la formation</label>
                      <input class="form-control" type="text" id="lieu_formation" name="lieu_formation" placeholder="Lieu de la formation" required>
                    </div>
                    <div class="form-group">
                      <label for="responsable_formation">Responsable de la formation</label>
                      <select class="form-control" id="responsable_formation" name="responsable_formation" required>
                        <option value="">Sélectionnez un responsable</option> <!-- Option par défaut sans sélection -->
                        <?php
                        // Connexion à la base de données
                        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

                        // Récupérer les données des professeurs
                        $professeurs = $bdd->query('SELECT id, nom, prenom FROM professeur');

                        // Afficher les options pour chaque professeur
                        while ($professeur = $professeurs->fetch()) {
                          echo '<option value="' . $professeur['id'] . '">' . $professeur['nom'] . ' ' . $professeur['prenom'] . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="lieu_formation">image de formation</label>
                      <input class="form-control" type="file" id="image_file" name="image_file" placeholder="image de formation" required>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php
                  if (isset($_GET['date_message4']) && !empty($_GET['date_message4'])) {
                    // Afficher l'alerte de succès
                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['date_message4']) . '</div>';
                  }
                  if (isset($_GET['date_message3']) && !empty($_GET['date_message3'])) {
                    $error_message = $_GET['date_message3'];
                    echo '<div class="alert alert-danger">' . $error_message . '</div>';
                  }


                  ?>
                  <table class="table custom-table">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Lieu</th>
                        <th>Responsable</th>
                        <th>image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Connexion à la base de données avec PDO
                      $dsn = 'mysql:host=localhost;dbname=ecole';
                      $username = 'root';
                      $password = '';
                      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                      try {
                        $connexion = new PDO($dsn, $username, $password);
                        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Requête pour récupérer les formations
                        $requete = "SELECT * FROM formations";
                        $resultat = $connexion->query($requete);

                        // Variable pour alterner les classes CSS
                        $alternate = false;

                        // Afficher chaque formation dans une ligne de tableau
                        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                          // Alterner les classes CSS pour les lignes
                          $row_class = $alternate ? 'even-row' : 'odd-row';
                          echo "<tr class='$row_class'>";
                          echo "<td>" . $row['nom_formation'] . "</td>";
                          echo "<td>" . wordwrap($row['description'], 15, "<br>", true) . "</td>";

                          echo "<td>" . $row['date_debut'] . "</td>";
                          echo "<td>" . $row['date_fin'] . "</td>";
                          echo "<td>" . $row['lieu_formation'] . "</td>";
                          echo "<td>" . $row['responsable_formation'] . "</td>";
                          echo "<td><img src='" . $row['image_file'] . "' alt='Image de la formation' style='max-width: 100px; max-height: 100px;'></td>";
                          echo "<td>";
                          // Bouton pour la modification de la formation
                          echo "<button class='btn btn-primary btn-sm modifier-btn' data-toggle='modal' data-target='#modifierFormation" . $row['formation_id'] . "' data-formation-id='" . $row['formation_id'] . "'>Modifier</button><br>";
                          // Formulaire pour la suppression de la formation



                          echo "<form method='POST' action='traitement_suppression_formation.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                          echo "<input type='hidden' name='formation_id' value='" . $row['formation_id'] . "'>";
                          echo "<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cette formation ?\")'>Supprimer</button>";
                          echo "</form>";
                          echo "</td>";



                          echo "</tr>";
                          // Modal correspondant à chaque formation
                          echo "<div class='modal fade' id='modifierFormation" . $row['formation_id'] . "' tabindex='-1' role='dialog' aria-labelledby='modifierFormationLabel' aria-hidden='true'>";
                          echo "<div class='modal-dialog' role='document'>";
                          echo "<div class='modal-content'>";
                          echo "<div class='modal-header'>";
                          echo "<h5 class='modal-title' id='modifierFormationLabel'>Modifier la formation</h5>";
                          echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                          echo "<span aria-hidden='true'>&times;</span>";
                          echo "</button>";
                          echo "</div>";
                          echo "<div class='modal-body'>";
                          echo "<form method='POST' action='modifier_formation.php?idUser=" . $idUser . "'  enctype='multipart/form-data'>";
                          // Vérifier si un message de succès est présent dans la chaîne de requête GET

                          echo "<input type='hidden' name='formation_id' value='" . $row['formation_id'] . "'>";
                          echo "<div class='form-group'>";
                          echo "<label for='nom_formation'>Nom de la formation</label>";
                          echo "<input type='text' class='form-control' id='nom_formation' name='nom_formation' value='" . $row['nom_formation'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='description'>Description</label>";
                          echo "<textarea class='form-control' id='description' name='description' rows='3' required>" . $row['description'] . "</textarea>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='date_debut'>Date de début</label>";
                          echo "<input type='date' class='form-control' id='date_debut' name='date_debut' value='" . $row['date_debut'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='date_fin'>Date de fin</label>";
                          echo "<input type='date' class='form-control' id='date_fin' name='date_fin' value='" . $row['date_fin'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='lieu_formation'>Lieu de la formation</label>";
                          echo "<input type='text' class='form-control' id='lieu_formation' name='lieu_formation' value='" . $row['lieu_formation'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='responsable_formation'>Responsable de la formation</label>";
                          echo "<select class='form-control' id='responsable_formation' name='responsable_formation' required>";
                          // Requête pour récupérer les professeurs
                          $requete_professeurs = "SELECT id, nom, prenom FROM professeur";
                          $resultat_professeurs = $connexion->query($requete_professeurs);

                          // Afficher les options pour chaque professeur
                          while ($professeur = $resultat_professeurs->fetch(PDO::FETCH_ASSOC)) {
                            // Vérifier si le professeur est le responsable actuel de la formation
                            $selected = ($professeur['id'] == $row['responsable_formation']) ? 'selected' : '';

                            // Afficher l'option avec le nom complet du professeur
                            echo "<option value='" . $professeur['id'] . "' $selected>" . $professeur['nom'] . ' ' . $professeur['prenom'] . "</option>";
                          }
                          echo "</select>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='image_url'>URL de l'image</label>";
                          echo "<input type='file' class='form-control' id='image_file' name='image_file' >";

                          echo "</div>";
                          echo "<button type='submit' class='btn btn-primary'>Sauvegarder</button>";
                          echo "</form>";
                          echo "</div>";
                          echo "<div class='modal-footer'>";
                          echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";

                          // Alterner la valeur pour la prochaine ligne
                          $alternate = !$alternate;
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
          </div>

          <div class="row" id="evenements">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter des evenements</h4>
                  <p class="card-description">

                  </p>
                  <?php
                  $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                  ?>
                  <?php
                  if (isset($_GET['eventsus_message']) && !empty($_GET['eventsus_message'])) {
                    // Afficher l'alerte de succès
                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['eventsus_message']) . '</div>';
                  }
                  if (isset($_GET['error_messageevent']) && !empty($_GET['error_messageevent'])) {
                    $error_message = $_GET['error_messageevent'];
                    echo '<div class="alert alert-danger">' . $error_message . '</div>';
                  }

                  ?>
                  <form class="forms-sample" action="ajouter_evenement.php?idUser=<?php echo $idUser; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom de l'événement</label>
                      <input type="text" name="event_name" placeholder="Nom de l'événement" required class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description de l'événement">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">date</label>
                      <input class="form-control" type="date" name="date" required>
                    </div>

                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">Image</label>

                      <input class="form-control" type="file" name="image" accept="image/*" required>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Ajouter l'événement</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <?php
                    if (isset($_GET['eventsus_message2']) && !empty($_GET['eventsus_message2'])) {
                      // Afficher l'alerte de succès
                      echo '<div class="alert alert-success">' . htmlspecialchars($_GET['eventsus_message2']) . '</div>';
                    }
                    if (isset($_GET['error_messageevent2']) && !empty($_GET['error_messageevent2'])) {
                      $error_message = $_GET['error_messageevent2'];
                      echo '<div class="alert alert-danger">' . $error_message . '</div>';
                    }

                    ?>
                    <thead>
                      <tr>
                        <th>Nom de l'événement</th>
                        <th>Description</th>
                        <th>Date</th>

                        <th>Image</th>
                        <th>Action</th> <!-- Nouvelle colonne pour les actions -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Connexion à la base de données avec PDO
                      $dsn = 'mysql:host=localhost;dbname=ecole';
                      $username = 'root';
                      $password = '';
                      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                      try {
                        $connexion = new PDO($dsn, $username, $password);
                        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Requête pour récupérer les événements
                        $requete = "SELECT * FROM events";
                        $resultat = $connexion->query($requete);

                        // Variable pour alterner les classes CSS
                        $alternate = false;

                        // Afficher chaque événement dans une ligne de tableau
                        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                          // Alterner les classes CSS pour les lignes
                          $row_class = $alternate ? 'even-row' : 'odd-row';
                          echo "<tr class='$row_class'>";

                          echo "<td>" . $row['event_name'] . "</td>";
                          echo "<td>" . wordwrap($row['description'], 10, "<br>", true) . "</td>";

                          echo "<td>" . $row['date'] . "</td>";

                          echo "<td><img src='" . $row['image_url'] . "' alt='Image de l'événement'></td>";
                          echo "<td>";

                          // Lien pour la modification de l'événement
                          echo "<button class='btn btn-primary btn-sm modifier-btn' data-toggle='modal' data-target='#modifierModal" . $row['id'] . "' data-event-id='" . $row['id'] . "'>Modifier</button><br>";



                          // Formulaire pour la suppression de l'événement
                          echo "<form method='POST' action='supprimer_evenement.php?idUser=" . $idUser . "'>";
                          echo "<input type='hidden' name='event_id' value='" . $row['id'] . "'>";
                          echo "<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet événement ?\")'>Supprimer</button>";
                          echo "</form>";

                          echo "</td>";

                          echo "</tr>";
                          // Modal correspondant à chaque événement
                          echo "<div class='modal fade' id='modifierModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='modifierModalLabel' aria-hidden='true'>";
                          echo "<div class='modal-dialog' role='document'>";
                          echo "<div class='modal-content'>";
                          echo "<div class='modal-header'>";
                          echo "<h5 class='modal-title' id='modifierModalLabel'>Modifier l'événement</h5>";
                          echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                          echo "<span aria-hidden='true'>&times;</span>";
                          echo "</button>";
                          echo "</div>";
                          echo "<div class='modal-body'>";
                          echo "<form method='POST' action='modifier_evenement.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                          echo "<input type='hidden' name='event_id' value='" . $row['id'] . "'>";
                          echo "<div class='form-group'>";
                          echo "<label for='event_name'>Nom de l'événement</label>";
                          echo "<input type='text' class='form-control' id='event_name' name='event_name' value='" . $row['event_name'] . "' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='description'>Description</label>";
                          echo "<textarea class='form-control' id='description' name='description' rows='3' required>" . $row['description'] . "</textarea>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='date'>Date</label>";
                          echo "<input type='date' class='form-control' id='date' name='date' value='" . $row['date'] . "' required>";
                          echo "</div>";

                          echo "<div class='form-group'>";
                          echo "<label for='image_url'>URL de l'image</label>";
                          echo "<input type='file' class='form-control' id='image_file' name='image_file' >";

                          echo "</div>";
                          echo "<button type='submit' class='btn btn-primary'>Sauvegarder</button>";
                          echo "</form>";
                          echo "</div>";
                          echo "<div class='modal-footer'>";
                          echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";

                          // Alterner la valeur pour la prochaine ligne
                          $alternate = !$alternate;
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
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
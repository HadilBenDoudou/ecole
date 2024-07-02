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
      <?php
      $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
      ?>
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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Les classes</h4>
                  <p class="card-description">
                    Sélectionnez votre classe
                  </p>
                  <?php
                  if (isset($_GET['mail2']) && !empty($_GET['mail2'])) {
                    // Afficher le message de succès pour l'ajout d'une annonce
                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['mail2']) . '</div>';
                  }
                  ?>
                  <form class="forms-sample" action="<?php echo $_SERVER['PHP_SELF']; ?>?idUser=<?php echo $idUser ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="exampleInputUsername1">Classe</label>
                      <select id="classe" name="classe" class="form-control">
                        <option value="" selected>Choisir une classe</option>
                        <!-- Options générées dynamiquement -->
                        <?php
                        // Paramètres de connexion à la base de données
                        $dsn = "mysql:host=localhost;dbname=ecole;charset=utf8";
                        $username = "root";
                        $password = "";

                        try {
                          // Créer une nouvelle connexion PDO
                          $conn = new PDO($dsn, $username, $password);

                          // Définir le mode d'erreur de PDO sur exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                          // Requête SQL pour récupérer les classes uniques depuis la table "etudiant"
                          $sql = "SELECT DISTINCT classe FROM etudiant";
                          $stmt = $conn->query($sql);

                          // Générer les options
                          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $row["classe"] . "'>" . $row["classe"] . "</option>";
                          }
                        } catch (PDOException $e) {
                          // En cas d'erreur de connexion ou d'exécution de la requête
                          echo "Erreur: " . $e->getMessage();
                        }
                        ?>
                      </select>
                    </div>
                    <button type="submit" name="submit_classe" class="btn btn-primary">Choisir le classe</button>
                  </form>

                  <!-- Vérifier si le formulaire a été soumis et que la classe a été sélectionnée -->
                  <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_classe'])) : ?>
                    <?php
                    if (isset($_POST['classe'])) {
                      $classe = $_POST['classe'];

                      // Requête SQL pour récupérer les étudiants de la même classe
                      $sql = "SELECT id, nom, prenom FROM etudiant WHERE classe = :classe";
                      $stmt = $conn->prepare($sql);
                      $stmt->bindParam(':classe', $classe);
                      $stmt->execute();

                      // Vérification s'il y a des résultats
                      if ($stmt->rowCount() > 0) {
                        // Affichage des étudiants de la même classe avec des champs de saisie de note
                        echo "<h2>Liste des étudiants de la classe $classe :</h2>";
                        echo "<form action='passe.php?idUser=" . $idUser . "' method='post'>";
                        // Form pour soumettre les notes
                        echo "<input type='hidden' name='classe' value='$classe'>"; // Pour envoyer la classe avec les notes
                        echo "<table class='table'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Nom</th>";
                        echo "<th>Prénom</th>";
                        echo "<th>Note</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          echo "<tr>";
                          echo "<td>" . $row["nom"] . "</td>";
                          echo "<td>" . $row["prenom"] . "</td>";
                          echo "<td><input type='text' name='notes[" . $row["id"] . "]'><input type='hidden' name='etudiants[]' value='" . $row["id"] . "'></td>";
                          echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "<input type='submit' value='Envoyer les notes' class='btn btn-primary'>";
                        echo "</form>";
                      } else {
                        echo "Aucun étudiant trouvé pour cette classe.";
                      }
                    } else {
                      echo "Veuillez sélectionner une classe.";
                    }
                    ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


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
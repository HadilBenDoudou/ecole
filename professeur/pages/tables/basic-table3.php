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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->


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
            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
            ?>
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


            <div class="main-panel" id="etudiant">
                <div class="content-wrapper">


                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card" style="width: 200px;">

                            <div class="card-body">
                                <h4 class="card-title">Ajouter les tp</h4>
                                <?php
                                if (isset($_GET['tp3']) && !empty($_GET['tp3'])) {
                                    // Afficher le message de succès pour l'ajout d'une annonce
                                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['tp3']) . '</div>';
                                }
                                ?>

                                <?php
                                if (isset($_GET['idUser'])) {
                                    $idUser = $_GET['idUser'];

                                    // Connexion à la base de données avec PDO
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "ecole";

                                    try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        // Définir le mode d'erreur PDO sur exception
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        // Requête SQL pour récupérer la carte du professeur de l'utilisateur donné
                                        $sql = "SELECT carte_professeur FROM utilisateur WHERE iduser = :idUser";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bindParam(':idUser', $idUser);
                                        $stmt->execute();
                                        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

                                        // Vérification si l'utilisateur existe
                                        if ($userRow) {
                                            $carte_professeur_utilisateur = $userRow["carte_professeur"];

                                            // Requête SQL pour récupérer les professeurs ayant la même carte professionnelle que l'utilisateur
                                            $sql_professeurs = "SELECT carte_professeur FROM Professeur WHERE carte_professeur = :carte_professeur";
                                            $stmt_professeurs = $conn->prepare($sql_professeurs);
                                            $stmt_professeurs->bindParam(':carte_professeur', $carte_professeur_utilisateur);
                                            $stmt_professeurs->execute();

                                            //

                                            // Si des professeurs ont été trouvés avec la même carte professionnelle
                                            if ($stmt_professeurs->rowCount() > 0) {
                                                $stmt_matieres = $conn->prepare("SELECT NomMatiere, CodeMatiere FROM tablematiere WHERE ProfesseurID = :carte_professeur");
                                                $stmt_matieres->bindParam(':carte_professeur', $carte_professeur_utilisateur);
                                                $stmt_matieres->execute();
                                                $matieres = $stmt_matieres->fetchAll(PDO::FETCH_ASSOC);

                                                if ($matieres) {
                                                    echo "<p class='card-description'></p>";
                                                    echo "<form class='forms-sample' action='ajoutertp.php?idUser=$idUser' method='post' enctype='multipart/form-data'>";
                                                    echo "<div class='form-group'>";
                                                    echo "<label for='exampleInputUsername1'>Nom de la matière</label>";
                                                    echo "<select id='matiere' name='matiere'  class='form-control' onchange='updateCode()'>";
                                                    echo "<option selected>Choisir une matière</option>";
                                                    foreach ($matieres as $matiere) {
                                                        echo "<option value='" . $matiere['CodeMatiere'] . "' data-id='" . $matiere['ID'] . "'>" . $matiere['NomMatiere'] . "</option>";
                                                    }
                                                    echo "</select>";
                                                    echo "</div>";
                                                    echo "<div class='form-group'>";
                                                    echo "<label for='exampleInputEmail1'>Code de la matière</label>";
                                                    echo "<input type='text' class='form-control' id='codeMatiere' name='codeMatiere' readonly>";
                                                    echo "</div>";
                                                    echo "<label for='exampleInputEmail1'>Titre du tp :</label>";
                                                    echo "<input type='text' id='titre' name='titre'>";
                                                    echo "<br>";
                                                    echo "<label for='exampleInputEmail1'>Description :</label>";
                                                    echo "<textarea id='description' name='description' class='form-control'></textarea>";
                                                    echo "<br>";
                                                    echo "<label for='exampleInputEmail1'>Date de publication :</label>";
                                                    echo "<input type='date' id='datePublication' name='datePublication' class='form-control'>";
                                                    echo "<br>";
                                                    echo "<label for='exampleInputEmail1'>Ajouter un tp :</label>";
                                                    echo "<input type='file' id='coursFile' name='coursFile' class='form-control'>";
                                                } else {
                                                    echo "Aucune matière trouvée pour cet utilisateur.";
                                                }
                                            } else {
                                                echo "Aucun professeur trouvé avec la même carte professionnelle.";
                                            }

                                            echo "</select>";
                                        } else {
                                            echo "Aucun utilisateur trouvé avec cet ID.";
                                        }
                                    } catch (PDOException $e) {
                                        echo "Erreur : " . $e->getMessage();
                                    }
                                } else {
                                    echo "Aucun ID utilisateur n'a été spécifié.";
                                }
                                ?>

                            </div>
                            <script>
                                function updateCode() {
                                    var selectedMatiere = document.getElementById("matiere");
                                    var codeMatiereInput = document.getElementById("codeMatiere");
                                    var selectedCode = selectedMatiere.options[selectedMatiere.selectedIndex].value;
                                    codeMatiereInput.value = selectedCode;
                                }
                            </script>


                            <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                            <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                        <style>
                            /* Style pour le tableau */
                            .table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-bottom: 20px;
                            }

                            .table th,
                            .table td {
                                padding: 10px;
                                border: 1px solid #ddd;
                            }

                            .table th {
                                background-color: #f2f2f2;
                                font-weight: bold;
                                text-align: center;
                            }

                            /* Alternance de couleurs pour les lignes */
                            .table tr:nth-child(even) {
                                background-color: #f9f9f9;
                            }

                            .table tr:nth-child(odd) {
                                background-color: #ddd;
                            }
                        </style>

                        <div class="col-md-6 grid-margin stretch-card" style="width: 1000px;">
                            <div class="card" style="background-color: #F5F7FF;">

                                <div class="card-body" style="width: 1000px;">
                                    <!-- Tableau des événements -->
                                    <table class="table custom-table">
                                        <?php
                                        if (isset($_GET['ttp3']) && !empty($_GET['ttp3'])) {
                                            // Afficher le message de succès pour l'ajout d'une annonce
                                            echo '<div class="alert alert-success">' . htmlspecialchars($_GET['ttp3']) . '</div>';
                                        }
                                        ?>
                                        <?php

                                        // Connexion à la base de données avec PDO
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "ecole";

                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                            // Récupérer l'ID de l'utilisateur depuis la requête GET
                                            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                                            // Requête SQL pour récupérer les cours associés à l'utilisateur
                                            $requete_cours_utilisateur = "SELECT * FROM tp WHERE ProfesseurID = :idUser";
                                            $stmt_cours_utilisateur = $conn->prepare($requete_cours_utilisateur);
                                            $stmt_cours_utilisateur->bindParam(':idUser', $idUser);
                                            $stmt_cours_utilisateur->execute();

                                            // Affichage du tableau HTML
                                            if ($stmt_cours_utilisateur->rowCount() > 0) {
                                                echo "<table class='table custom-table'>";
                                                echo "<tr><th>ProfesseurID</th><th>MatiereID</th><th>Titre</th><th>Description</th><th>DatePublication</th><th>Fichier</th><th>Actions</th></tr>";
                                                while ($row = $stmt_cours_utilisateur->fetch(PDO::FETCH_ASSOC)) {
                                                    // Affichage des données du tableau
                                                    echo "<tr>";
                                                    echo "<td>" . $row['ProfesseurID'] . "</td>";
                                                    echo "<td>" . $row['MatiereID'] . "</td>";
                                                    echo "<td>" . $row['Titre'] . "</td>";
                                                    echo "<td>" . $row['Description'] . "</td>";
                                                    echo "<td>" . $row['DatePublication'] . "</td>";
                                                    echo "<td>" . $row['Fichier'] . "</td>";
                                                    echo "<td>";
                                                    echo "<a href='#' data-toggle='modal' data-target='#modifierModal" . $row['ID'] . "'>Modifier</a><br>";
                                                    echo "<a href='supprimertp.php?id={$row['ID']}&idUser={$idUser}' onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette matière ?');\">Supprimer</a>";

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
                                                    echo "<form action='modifiertp.php?idUser=" . $idUser . "' method='post' enctype='multipart/form-data'>";
                                                    echo "<input type='hidden' name='id' value='" . $row['ID'] . "'>";
                                                    echo "<label for='nom'>Nouveau nom de la matière:</label><br>";
                                                    echo "<input type='text' id='nom' name='nom' value='" . $row['Titre'] . "'><br>";
                                                    echo "<label for='professeur'>Nouveau ID du professeur:</label><br>";
                                                    echo "<input type='text' id='professeur' name='professeur' value='" . $row['ProfesseurID'] . "'><br>";
                                                    echo "<label for='matiere'>Nouveau ID de la matière:</label><br>";
                                                    echo "<input type='text' id='matiere' name='matiere' value='" . $row['MatiereID'] . "'><br>";
                                                    echo "<label for='description'>Nouvelle description:</label><br>";
                                                    echo "<textarea id='description' name='description'>" . $row['Description'] . "</textarea><br>";
                                                    echo "<label for='date'>Nouvelle date de publication:</label><br>";
                                                    echo "<input type='date' id='date' name='date' value='" . $row['DatePublication'] . "'><br>";
                                                    echo "<label for='fichier'>Nouveau fichier:</label><br>";
                                                    echo "<input type='file' id='fichier' name='fichier'><br>"; // Suppression de la valeur ici
                                                    echo "<br>";
                                                    echo "<input type='submit' class='btn btn-primary' value='Modifier'>";
                                                    echo "</form>";

                                                    echo "</div>";
                                                    echo "<div class='modal-footer'>";
                                                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='7'>Aucun enregistrement trouvé pour les tps.</td></tr>";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Erreur : " . $e->getMessage();
                                        }
                                        ?>
                                    </table>


































































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
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                            <!-- endinject -->
                            <!-- Custom js for this page-->
                            <!-- End custom js for this page-->
</body>


</html>
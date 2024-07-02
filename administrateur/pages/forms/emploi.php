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
    <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Tg9o1Jw/2Ua6bbJhYmJiXWU2QK9rOF3caM4/aXEOCViUVp2V6smVJ5j1WoRLuFhQ23QeB6EKpvZ9BYr5drETqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <?php
            // Assurez-vous que la session est initialisée dans 'identifier.php' ou ailleurs

            // Récupérez l'ID de l'utilisateur depuis l'URL ou définissez-le à null si non défini
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
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Les inscriptions</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <?php

                                $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="basic_elements.php?idUser=<?php echo $idUser ?>#etudiant">Les étudiants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="basic_elements.php?idUser=<?php echo $idUser ?>#professeur">Les professeurs</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Les catégories</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">Les clubs</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">Les formations</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.php?idUser=<?php echo $idUser ?>">Les événements</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.php#services?idUser=<?php echo $idUser ?>">Les comptes professeurs</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.php#etudiant?idUser=<?php echo $idUser ?>">Les comptes étudiants</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="../../pages/forms/loginp.php?idUser=<?php echo $idUser ?>">Mon compte</a></li>
                                <li class="nav-item"><a class="nav-link" href="changer_mot_de_passe.php?idUser=<?php echo $idUser ?>">Modifier mot de passe</a></li>
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

            <?php

            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
            ?>


            <!-- ajouter etudiant -->
            <div class="main-panel" id="etudiant">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card" style="width: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Ajouter emplois pour les professeurs</h4>

                                    <p class="card-description">

                                    </p>
                                    <?php
                                    if (isset($_GET['emploisus_message']) && !empty($_GET['emploisus_message'])) {
                                        // Afficher l'alerte de succès
                                        echo '<div class="alert alert-success">' . htmlspecialchars($_GET['emploisus_message']) . '</div>';
                                    }


                                    ?>
                                    <form class="forms-sample" action="ajouter_emploi.php?idUser=<?php echo $idUser; ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Description de l'emploi</label>
                                            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description de l'emploi" rows="4" cols="50" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Classe :</label><br>
                                            <select id="classe" name="classe" class="form-control">
                                                <?php

                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "ecole";
                                                $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                                                try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    $stmt = $conn->prepare("SELECT DISTINCT Classe FROM Etudiant");
                                                    $stmt->execute();

                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                        $selected = ($row['Classe'] == 'Classe de Terminale') ? 'selected' : '';
                                                        echo "<option value='" . $row['Classe'] . "' $selected>" . $row['Classe'] . "</option>";
                                                    }
                                                } catch (PDOException $e) {
                                                    echo "Erreur: " . $e->getMessage();
                                                }
                                                // Fermer la connexion PDO
                                                $conn = null;
                                                ?>
                                            </select><br><br>




                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nom du professeur :</label><br>
                                            <select id="professeur" class="form-control" name="professeur">
                                                <?php
                                                // Connexion à la base de données avec PDO
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "ecole";

                                                try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                    // Configuration de PDO pour afficher les erreurs
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    // Préparation de la requête SQL pour récupérer les noms, prénoms et carte_professeur des professeurs
                                                    $stmt = $conn->prepare("SELECT nom, prenom, carte_professeur FROM Professeur");
                                                    $stmt->execute();

                                                    // Parcourir les résultats de la requête et afficher les options de sélection
                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                        echo "<option value='" . htmlspecialchars($row['carte_professeur']) . "'>" . htmlspecialchars($row['prenom']) . " " . htmlspecialchars($row['nom']) . "</option>";
                                                    }
                                                } catch (PDOException $e) {
                                                    echo "Erreur: " . $e->getMessage();
                                                }
                                                // Fermer la connexion PDO
                                                $conn = null;
                                                ?>
                                            </select><br><br>


                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Télécharger un emploi</label>
                                            <input class="form-control" type="file" id="image_file" name="image_file" placeholder="Télécharger un emploi" required>
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
                                font-size: 14px;
                            }

                            .custom-table {
                                width: 100%;
                                font-size: 10px;
                            }

                            .custom-table td {
                                max-width: 10px;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }

                            .custom-table tr:nth-child(even) {
                                background-color: #f2f2f2;
                            }
                        </style>

                        <div class="col-md-6 grid-margin stretch-card" style="width: 1000px;">
                            <div class="card" style="background-color: #F5F7FF;">

                                <div class="card-body" style="width: 1000px;">
                                    <table class="table custom-table">
                                        <?php
                                        if (isset($_GET['emploisus_message22']) && !empty($_GET['emploisus_message22'])) {
                                            // Afficher l'alerte de succès
                                            echo '<div class="alert alert-success">' . htmlspecialchars($_GET['emploisus_message22']) . '</div>';
                                        }


                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Description de l'emploi</th>
                                                <th>Nom du professeur</th>
                                                <th>Classe</th>
                                                <th>emploi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $dsn = 'mysql:host=localhost;dbname=ecole';
                                            $username = 'root';
                                            $password = '';
                                            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

                                            try {
                                                $connexion = new PDO($dsn, $username, $password);
                                                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                $requete = "SELECT * FROM Emplois_Professeur";
                                                $resultat = $connexion->query($requete);

                                                $alternate = false;

                                                while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                                                    $row_class = $alternate ? 'even-row' : 'odd-row';
                                                    echo "<tr class='$row_class'>";

                                                    echo "<td>" . $row['Description'] . "</td>";
                                                    echo "<td>" . $row['Nom_professeur'] . "</td>";
                                                    echo "<td>" . $row['Classe'] . "</td>";
                                                    echo "<td><a href='" . $row['Image_file'] . "' alt='Image' style='width:100px;height:100px;'>Télecharger <br>Emploi</a>";


                                                    echo "<td>";

                                                    echo "<button class='btn btn-primary btn-sm modifier-btn' data-toggle='modal' data-target='#modifieremploi" . $row['ID'] . "' data-emploi-id='" . $row['ID'] . "'>Modifier</button><br>";

                                                    echo "<form method='POST' action='emploi_suppression.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                                                    echo "<input type='hidden' name='id_emploi' value='" . $row['ID'] . "'>";
                                                    echo "<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet emploi de professeur ?\")'>Supprimer</button>";
                                                    echo "</form>";

                                                    echo "</td>";

                                                    echo "</tr>";

                                                    echo "<div class='modal fade' id='modifieremploi" . $row['ID'] . "' tabindex='-1' role='dialog' aria-labelledby='modifierModalLabel' aria-hidden='true'>";
                                                    echo "<div class='modal-dialog' role='document'>";
                                                    echo "<div class='modal-content'>";
                                                    echo "<div class='modal-header'>";
                                                    echo "<h5 class='modal-title' id='modifierModalLabel'>Modifier l'emploi du professeur</h5>";
                                                    echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                                    echo "<span aria-hidden='true'>&times;</span>";
                                                    echo "</button>";
                                                    echo "</div>";
                                                    echo "<div class='modal-body'>";
                                                    echo "<form method='POST' action='modifier_emploi.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                                                    echo "<input type='hidden' name='id_emploi' value='" . $row['ID'] . "'>";
                                                    echo "<div class='form-group'>";
                                                    echo "<label for='description'>Description de l'emploi</label>";
                                                    echo "<textarea class='form-control' id='description' name='description' rows='3' required>" . htmlspecialchars($row['Description']) . "</textarea>";
                                                    echo "</div>";
                                                    echo "<div class='form-group'>";
                                                    echo "<label for='classe'>Classe</label>";
                                                    echo "<select class='form-control' id='classe' name='classe' required>";
                                                    $dsn = 'mysql:host=localhost;dbname=ecole';
                                                    $username = 'root';
                                                    $password = '';

                                                    try {
                                                        $connexion = new PDO($dsn, $username, $password);
                                                        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                        $requete_classe = "SELECT DISTINCT classe FROM etudiant";
                                                        $resultat_classe = $connexion->query($requete_classe);

                                                        while ($row_classe = $resultat_classe->fetch(PDO::FETCH_ASSOC)) {
                                                            $selected = ($row_classe['classe'] == $row['Classe']) ? 'selected' : ''; // Vérifier si la classe correspond à celle de l'emploi du professeur
                                                            echo "<option value='" . $row_classe['classe'] . "' $selected>" . $row_classe['classe'] . "</option>";
                                                        }
                                                    } catch (PDOException $e) {
                                                        echo "Erreur : " . $e->getMessage();
                                                    }
                                                    echo "</select>";
                                                    echo "</div>";
                                                    echo "<div class='form-group'>";
                                                    echo "<label for='professeur'>Nom du professeur</label>";
                                                    echo "<select class='form-control' id='professeur' name='professeur' required>";

                                                    $requete_professeur = "SELECT carte_professeur, nom, prenom FROM professeur";
                                                    $resultat_professeur = $connexion->query($requete_professeur);

                                                    while ($row_professeur = $resultat_professeur->fetch(PDO::FETCH_ASSOC)) {
                                                        $nom_complet = $row_professeur['nom'] . " " . $row_professeur['prenom'];
                                                        $selected = ($row_professeur['carte_professeur'] == $row['Nom_professeur']) ? 'selected' : ''; // Vérifier si l'ID correspond à celui du professeur de l'emploi
                                                        echo "<option value='" . htmlspecialchars($row_professeur['carte_professeur']) . "' $selected>" . htmlspecialchars($nom_complet) . "</option>";
                                                    }

                                                    echo "</select>";
                                                    echo "</div>";



                                                    echo "<div class='form-group'>";
                                                    echo "<label for='emploi'>Emploi</label>";
                                                    echo "<input type='file' class='form-control' id='emploi' name='emploi'>";
                                                    echo "</div>";
                                                    echo "<button type='submit' class='btn btn-primary'>Sauvegarder</button>";
                                                    echo "</form>";



                                                    echo "<div class='modal-footer'>";
                                                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                    echo "</div>";
                                                    echo "</div>";

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
                        <!-- fin ajouter etudiant-->
                        <!--ajouer professeur-->
                        <div class="main-panel" id="professeur">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card" style="width: 800px;">
                                            <div class="card-body">
                                                <h4 class="card-title">Ajouter des emplois pour etudiants</h4>

                                                <p class="card-description">

                                                </p>
                                                <?php
                                                $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                                                ?>
                                                <?php
                                                if (isset($_GET['emploisus_message222']) && !empty($_GET['emploisus_message222'])) {
                                                    // Afficher l'alerte de succès
                                                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['emploisus_message222']) . '</div>';
                                                }


                                                ?>
                                                <form class="forms-sample" action="ajouter_emploietudiant.php?idUser=<?php echo $idUser; ?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Description</label>
                                                        <textarea type="text" id="description" name="description" rows="4" cols="50" class="form-control" placeholder="Nom" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Classe</label>
                                                        <select id="classe" name="classe" class="form-control">
                                                            <?php
                                                            $servername = "localhost";
                                                            $username = "root";
                                                            $password = "";
                                                            $dbname = "ecole";

                                                            try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                // Set the PDO error mode to exception
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                // Query distinct values of Classe from the Etudiant table
                                                                $sql = "SELECT DISTINCT Classe FROM Etudiant";
                                                                $stmt = $conn->query($sql);

                                                                // Fetch all rows
                                                                $classes = $stmt->fetchAll(PDO::FETCH_COLUMN);

                                                                // Output options
                                                                foreach ($classes as $class) {
                                                                    echo "<option value='$class'>$class</option>";
                                                                }
                                                            } catch (PDOException $e) {
                                                                echo "Connection failed: " . $e->getMessage();
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Image File</label>
                                                        <input class="form-control" type="file" id="image" name="image" placeholder="emploi" required>
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

                                            font-size: 14px;

                                        }

                                        .custom-table {
                                            width: 100%;

                                            font-size: 10px;

                                        }

                                        .custom-table td {
                                            max-width: 10px;

                                            white-space: nowrap;

                                            overflow: hidden;

                                            text-overflow: ellipsis;

                                        }

                                        .custom-table tr:nth-child(even) {
                                            background-color: #f2f2f2;

                                        }
                                    </style>

                                    <div class="col-md-6 grid-margin stretch-card" style="width: 1000px;">
                                        <div class="card" style="background-color: #F5F7FF;">

                                            <div class="card-body" style="width: 1000px;">

                                                <table class="table custom-table">
                                                    <?php
                                                    if (isset($_GET['emploisus_message2222']) && !empty($_GET['emploisus_message2222'])) {
                                                        // Afficher l'alerte de succès
                                                        echo '<div class="alert alert-success">' . htmlspecialchars($_GET['emploisus_message2222']) . '</div>';
                                                    }


                                                    ?>
                                                    <thead>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Classe</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $dsn = 'mysql:host=localhost;dbname=ecole';
                                                        $username = 'root';
                                                        $password = '';
                                                        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
                                                        try {
                                                            $connexion = new PDO($dsn, $username, $password);
                                                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            $requete = "SELECT * FROM Emplois_Etudiant";
                                                            $resultat = $connexion->query($requete);

                                                            $alternate = false;

                                                            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                                                                $row_class = $alternate ? 'even-row' : 'odd-row';
                                                                echo "<tr class='$row_class'>";
                                                                echo "<td>" . $row['Description'] . "</td>";
                                                                echo "<td>" . $row['Classe'] . "</td>";
                                                                echo "<td><a href='" . $row['image_file'] . "' alt='Image' style='width:100px;height:100px;'>Télécharger <br>Emploi</a></td>";
                                                                echo "<td>";
                                                                echo "<button class='btn btn-primary btn-sm modifier-btn' data-toggle='modal' data-target='#modifieremploietudiant" . $row['ID'] . "' data-event-id='" . $row['ID'] . "'>Modifier</button><br>";
                                                                echo "<form method='POST' action='suppression_emploietudiant.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                                                                echo "<input type='hidden' name='id_emploi' value='" . $row['ID'] . "'>";
                                                                echo "<button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet emploi ?\")'>Supprimer</button>";
                                                                echo "</form>";
                                                                echo "</td>";
                                                                echo "</tr>";

                                                                // Modal 
                                                                echo "<div class='modal fade' id='modifieremploietudiant" . $row['ID'] . "' tabindex='-1' role='dialog' aria-labelledby='modifierModalLabel' aria-hidden='true'>";
                                                                echo "<div class='modal-dialog' role='document'>";
                                                                echo "<div class='modal-content'>";
                                                                echo "<div class='modal-header'>";
                                                                echo "<h5 class='modal-title' id='modifierModalLabel'>Modifier l'emploi</h5>";
                                                                echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                                                echo "<span aria-hidden='true'>&times;</span>";
                                                                echo "</button>";
                                                                echo "</div>";
                                                                echo "<div class='modal-body'>";
                                                                echo "<form method='POST' action='modifier_emploietudiant.php?idUser=" . $idUser . "' enctype='multipart/form-data'>";
                                                                echo "<input type='hidden' name='id_emploi' value='" . $row['ID'] . "'>";
                                                                echo "<div class='form-group'>";
                                                                echo "<label for='description'>Description</label>";
                                                                echo "<textarea class='form-control' id='description' name='description' rows='3' required>" . $row['Description'] . "</textarea>";
                                                                echo "</div>";
                                                                echo "<div class='form-group'>";
                                                                echo "<label for='classe'>Classe</label>";
                                                                echo "<select class='form-control' id='classe' name='classe' required>";
                                                                // Query to retrieve classes from the database
                                                                $requete_classe = "SELECT DISTINCT classe FROM etudiant";
                                                                $resultat_classe = $connexion->query($requete_classe);
                                                                while ($row_classe = $resultat_classe->fetch(PDO::FETCH_ASSOC)) {
                                                                    $selected = ($row['Classe'] == $row_classe['classe']) ? 'selected' : '';
                                                                    echo "<option value='" . $row_classe['classe'] . "' $selected>" . $row_classe['classe'] . "</option>";
                                                                }
                                                                echo "</select>";
                                                                echo "</div>";

                                                                echo "<div class='form-group'>";
                                                                echo "<label for='image_file'>Image</label>";
                                                                echo "<input type='file' class='form-control' id='image_file' name='image_file'>";
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


                                    <!--fin ajouter professeur-->






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
                        <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
                        <script src="../../vendors/select2/select2.min.js"></script>
                        <!-- End plugin js for this page -->
                        <!-- inject:js -->
                        <script src="../../js/off-canvas.js"></script>
                        <script src="../../js/hoverable-collapse.js"></script>
                        <script src="../../js/template.js"></script>
                        <script src="../../js/settings.js"></script>
                        <script src="../../js/todolist.js"></script>
                        <!-- endinject -->
                        <!-- Custom js for this page-->
                        <script src="../../js/file-upload.js"></script>
                        <script src="../../js/typeahead.js"></script>
                        <script src="../../js/select2.js"></script>
                        <!-- End custom js for this page-->
</body>

</html>
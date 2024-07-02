<?php
require_once("connexiondb.php");
require_once("fonctions.php");

$validationErrors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $carte_etudiant = isset($_POST['carte_etudiant']) ? $_POST['carte_etudiant'] : null;
    $carte_professeur = isset($_POST['carte_professeur']) ? $_POST['carte_professeur'] : null;

    // Vérification de la complexité du mot de passe
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$/', $pwd1)) {
        $validationErrors[] = 'Le mot de passe doit contenir au moins 8 caractères avec au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.';
    }

    // Vérification du numéro de carte étudiant/professeur
    if (!empty($carte_etudiant) && (!ctype_digit($carte_etudiant) || strlen($carte_etudiant) !== 8)) {
        $validationErrors[] = 'Le numéro de carte étudiant doit contenir exactement 8 chiffres.';
    }

    if (!empty($carte_professeur) && (!ctype_digit($carte_professeur) || strlen($carte_professeur) !== 8)) {
        $validationErrors[] = 'Le numéro de carte professeur doit contenir exactement 8 chiffres.';
    }

    // Vérification des autres champs
    if (empty($login) || empty($pwd1) || empty($pwd2) || empty($email)) {
        $validationErrors[] = 'Tous les champs sont requis.';
    } elseif ($pwd1 !== $pwd2) {
        $validationErrors[] = 'Les mots de passe ne correspondent pas.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validationErrors[] = 'Adresse email invalide.';
    }

    if (empty($validationErrors)) {
        if (rechercher_par_login($login) == 0 && rechercher_par_email($email) == 0) {
            $requete = $pdo->prepare("INSERT INTO utilisateur(login, email, pwd, role, etat, carte_etudiant, carte_professeur) 
                                        VALUES(:plogin, :pemail, :ppwd, :prole, 1, :carte_etudiant, :carte_professeur)");

            if ($role === 'VISITEUR' || empty($carte_professeur)) {
                $carte_professeur = null;
            }
            if ($role === 'PROFESSEUR' || empty($carte_etudiant)) {
                $carte_etudiant = null;
            }
            $requete->execute(array(
                'plogin' => $login,
                'pemail' => $email,
                'ppwd' => md5($pwd1),
                'prole' => $role,
                'carte_etudiant' => $carte_etudiant,
                'carte_professeur' => $carte_professeur
            ));

            $success_msg = "Félicitations, votre compte est créé, mais temporairement inactif jusqu'à activation par l'admin";
        } else {
            if (rechercher_par_login($login) > 0) {
                $validationErrors[] = 'Désolé le login existe déjà';
            }
            if (rechercher_par_email($email) > 0) {
                $validationErrors[] = 'Désolé cet email existe déjà';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Educators | Online Course & Education HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="templates/educators/assets/media/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="templates/educators/assets/css/app.css">
    <link rel="stylesheet" href="assets/css/sigup.css">

</head>

<body>

    <section class="banner style-1">
        <div class="container">
            <div class="banner-content">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                        <strong>
                            <h2>
                                <a class="navbar-brand" href="index-2.html">
                                    <img src="templates/educators/assets/media/logo.svg" alt="">
                                </a> <br>
                            </h2>
                        </strong>
                        <p class="light-text">Welcome to our educational <br> platform where you can log in <br>and enrich your learning experience.</p>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-0">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-20 col-md-20 col-20 ">
                        <div class="trail-content">
                            <h4>Sigup <b>Students</b> </h4>
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
                            <span></span>
                            <form method="POST">
                                <div class="form-group">

                                    <input type="text" name="login" placeholder="your name" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd1" placeholder="your password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd2" placeholder="Confirm your password" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">Choose your role:</label>
                                    <select name="role" id="role" required>
                                        <option value="VISITEUR">VISITEUR</option>
                                        <option value="PROFESSEUR">PROFESSEUR</option>
                                    </select>
                                </div>
                                <div class="form-group" id="carte_etudiant">
                                    <input type="number" name="carte_etudiant" placeholder="Numéro de carte étudiant">
                                </div>
                                <div class="form-group" id="carte_professeur" style="display:none;">
                                    <input type="number" name="carte_professeur" placeholder="Numéro de carte professeur">
                                </div>
                                <script>
                                    // Fonction pour afficher ou masquer les champs en fonction du rôle sélectionné
                                    function toggleCarteInput() {
                                        var role = document.getElementById("role").value;
                                        var carte_etudiant = document.getElementById("carte_etudiant");
                                        var carte_professeur = document.getElementById("carte_professeur");

                                        if (role === "VISITEUR") {
                                            carte_etudiant.style.display = "block";
                                            carte_professeur.style.display = "none";
                                        } else if (role === "PROFESSEUR") {
                                            carte_etudiant.style.display = "none";
                                            carte_professeur.style.display = "block";
                                        }
                                    }

                                    // Ajoutez un écouteur d'événements pour détecter les changements de sélection dans le menu déroulant du rôle
                                    document.getElementById("role").addEventListener("change", toggleCarteInput);

                                    // Appelez la fonction au chargement de la page pour afficher ou masquer les champs en fonction de la valeur initiale du rôle
                                    toggleCarteInput();
                                </script>
                                <button class="educators-btn medium dark"> Get It Now</button>
                            </form>
                            <div style="margin-top: 20px;margin-left:50px;">

                                <a href="login.php" class="signup-image-link" style="color: #000; text-decoration: none;">I am already member</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
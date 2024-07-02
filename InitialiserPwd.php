<?php
require_once 'connexiondb.php';
require_once 'fonctions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'mailer/autoload.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $user = rechercher_user_par_email($email);
        function genererMotDePasse($longueur = 8)
        {
            // Caractères pouvant être utilisés dans le mot de passe
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
            // Mélanger les caractères
            $melangeCaracteres = str_shuffle($caracteres);
            // Extraire la portion souhaitée pour former le mot de passe
            $motDePasse = substr($melangeCaracteres, 0, $longueur);
            return $motDePasse;
        }
        if ($user !== null) {
            $id = $user['iduser'];
            // plus de securiter
            $newPassword = genererMotDePasse(8);
            try {
                // Update mot de passe dans la base
                $stmt = $pdo->prepare("UPDATE utilisateur SET pwd=:newPassword WHERE iduser=:id");
                $stmt->bindParam(':newPassword', $newPassword);
                $stmt->bindParam(':id', $id);
                if ($stmt->execute()) {
                    // Generate a random temporire mot de passe
                    $temporaryPassword = md5($newPassword);
                    // Insert temporere mot de passe  dans table nommer 'oublier' .
                    $stmtOublier = $pdo->prepare("INSERT INTO nouveauxpwd (email, login, password) VALUES (:email, :login, :hashedTemporaryPassword)");
                    $stmtOublier->bindParam(':email', $email);
                    $stmtOublier->bindParam(':login', $user['login']);
                    $stmtOublier->bindParam(':hashedTemporaryPassword', $temporaryPassword);
                    $stmtOublier->execute();


                    //  update nouveau mot de passe  dans table 'utilisateur' par mot de passe plus securiser 
                    $stmtUpdateUser = $pdo->prepare("UPDATE utilisateur SET pwd=:hashedTemporaryPassword WHERE iduser=:id");
                    $stmtUpdateUser->bindParam(':hashedTemporaryPassword', $temporaryPassword);
                    $stmtUpdateUser->bindParam(':id', $id);
                    $stmtUpdateUser->execute();
                    // envoyer mail
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; // Replace par votre SMTP 
                    $mail->SMTPAuth = true;
                    $mail->Username = 'consultwedo@gmail.com'; // Replace par votre email
                    $mail->Password = 'wsde nowg lpbr lspu'; // Replace par votre mot de passe 
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465;

                    $mail->setFrom('consultwedo@gmail.com', 'wedo consult');
                    $mail->addAddress($user['email']);
                    $mail->Subject = "Initialisation de votre mot de passe";
                    $mail->Body = "Votre nouveau mot de passe est: $newPassword. Veuillez le modifier à la prochaine ouverture de session.";

                    if ($mail->send()) {
                        $msg = "Un message contenant votre nouveau mot de passe a été envoyé sur votre adresse Email.";
                    } else {
                        throw new Exception("Erreur lors de l'envoi de l'e-mail: " . $mail->ErrorInfo);
                    }
                } else {
                    throw new Exception("Erreur lors de la mise à jour du mot de passe: " . implode(", ", $stmt->errorInfo()));
                }
            } catch (Exception $e) {
                $msg = "Erreur: " . $e->getMessage();
            }
        } else {
            $msg = "L'Email est incorrect.";
        }
    } else {
        $msg = "Veuillez saisir une adresse email.";
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

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="templates/educators/assets/css/app.css">

    <style>
        body {
            background-color: #f6f6f6;
            background-image: url("templates/educators/assets/media/banner/banner-bg-1.png");
        }

        .trail-content {
            margin-top: 50px;
            margin-right: 20px;
            width: 550px;
            height: 500px;
        }

        a:hover {
            color: #F5C231 !important;
        }
    </style>
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
                        <p class="light-text"></p>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-0">
                                <div class="row">

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-20 col-md-20 col-20 ">
                            <div class="trail-content">
                                <h4>Password <b>Initialization</b> </h4>
                                <?php
                                if (isset($msg)) {
                                    if (strpos($msg, 'Erreur') !== false) {
                                        echo '<div class="alert alert-danger">' . $msg . '</div>';
                                    } else {
                                        echo '<div class="alert alert-success">' . $msg . '</div>';
                                        header("refresh:3;url=login.php");
                                        exit();
                                    }
                                }
                                ?>
                                <span></span>
                                <form method="post">
                                    <div class="form-group">
                                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="email" name="email" placeholder="your Email">
                                    </div>

                                    <button class="educators-btn medium dark"> Get It Now</button>
                                    <a href="login.php"> <img src="image/email2.png" width="100px" height="100px" style="margin-top: 20px;margin-left:150px" 0></a>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>
<?php
session_start();
require_once('connexiondb.php');

$login = isset($_POST['login']) ? $_POST['login'] : "";
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";


$carte_etudiant = isset($_POST['carte_etudiant']) ? $_POST['carte_etudiant'] : "";


$stmt = $pdo->prepare("SELECT iduser, login, email, role, etat, carte_etudiant
                       FROM utilisateur 
                       WHERE login=? AND pwd=MD5(?)");

$stmt->execute([$login, $pwd]);


$user = $stmt->fetch();

if ($user) {
    if ($user['etat'] == 1) {
        if ($user['role'] == 'ADMIN') {
            header('location:administrateur/index.php?idUser=' . $user['iduser']);
            exit();
        } elseif ($user['role'] == 'VISITEUR') {

            if (!empty($carte_etudiant)) {

                $requete = "SELECT u.iduser, u.login, u.email, u.role, u.etat 
                            FROM utilisateur u
                            JOIN etudiant e ON u.carte_etudiant = e.carte_etudiant
                            WHERE u.login=? AND u.pwd=MD5(?) AND e.carte_etudiant = ?";
                $stmt = $pdo->prepare($requete);
                $stmt->execute([$login, $pwd, $carte_etudiant]);
                $user = $stmt->fetch();
                if ($user) {
                    $_SESSION['user'] = $user;
                    header('location:templates/educators/index-3.php?idUser=' . $user['iduser']);
                    exit();
                }
            }
        }
        // Après la vérification du rôle 'VISITEUR'
        elseif ($user['role'] == 'PROFESSEUR') {
            if (!empty($carte_etudiant)) {
                // Vérification si c'est un professeur
                $requete = "SELECT u.iduser, u.login, u.email, u.role, u.etat 
                    FROM utilisateur u
                    JOIN professeur p ON u.carte_professeur = p.carte_professeur
                    WHERE u.login=? AND u.pwd=MD5(?) AND p.carte_professeur = ?";
                $stmt = $pdo->prepare($requete);
                $stmt->execute([$login, $pwd, $carte_etudiant]);
                $user = $stmt->fetch();
                if ($user) {
                    $_SESSION['user'] = $user;
                    header('location:professeur/index.php?idUser=' . $user['iduser']);
                    exit();
                }
            }
        }
    } else {
        $_SESSION['erreurLogin'] = "<strong>Erreur!!</strong> Votre compte est désactivé.<br> Veuillez contacter l'administrateur";
        header('location:login.php');
        exit();
    }
}

$_SESSION['erreurLogin'] = "<strong>Erreur!!</strong> Login, mot de passe ou carte  incorrect(s)!!!";
header('location:login.php');
exit();

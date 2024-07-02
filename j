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

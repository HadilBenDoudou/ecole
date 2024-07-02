<?php
require_once('../../identifier.php');
require_once('../../connexiondb.php');

// Vérification de la méthode de requête
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de l'existence des données soumises
    if (isset($_POST['iduser']) && isset($_POST['login']) && isset($_POST['email'])) {
        // Récupération des données soumises
        $id = intval($_POST['iduser']);
        $login = $_POST['login'];
        $email = $_POST['email'];

        // Préparation et exécution de la requête de mise à jour
        $requete = "UPDATE utilisateur SET login = ?, email = ? WHERE iduser = ?";
        $resultat = $pdo->prepare($requete);
        $resultat->execute([$login, $email, $id]);

        // Redirection vers la page de profil de l'utilisateur après la mise à jour
        header("Location: modifiercompte.php?id=" . $id);
        exit;
    } else {
        // Redirection vers une page d'erreur si les données soumises sont incomplètes
        header("Location: ../../login.php");
        exit;
    }
} else {
    // Redirection vers une page d'erreur si la méthode de requête n'est pas POST
    header("Location: ../../login.php");
    exit;
}

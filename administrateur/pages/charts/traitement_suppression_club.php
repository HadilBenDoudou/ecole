<?php
if (isset($_POST['club_id'])) {
    $club_id = $_POST['club_id'];
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

    $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

    $requete = $bdd->prepare('DELETE FROM club WHERE club_id = ?');

    if ($requete->execute(array($club_id))) {
        header("Location: chartjs.php?idUser=$idUser#club");
        exit;
    } else {
        echo "Une erreur est survenue lors de la suppression du club. Veuillez réessayer.";
    }
} else {
    echo "Identifiant du club manquant.";
}

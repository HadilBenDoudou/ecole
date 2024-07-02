<?php
$dsn = 'mysql:host=localhost;dbname=ecole';
$username = 'root';
$password = '';
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

try {
    $connexion = new PDO($dsn, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['id_emploi'])) {
        $requete = "DELETE FROM Emplois_Etudiant WHERE ID = :id_emploi";
        $statement = $connexion->prepare($requete);
        $statement->bindParam(':id_emploi', $_POST['id_emploi']);

        $statement->execute();

        header('Location: emploi.php?idUser=' . $idUser);
        exit();
    } else {
        echo "Erreur : Identifiant d'emploi non spécifié.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

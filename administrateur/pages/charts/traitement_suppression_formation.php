<?php
if (isset($_POST['formation_id'])) {
    $formation_id = $_POST['formation_id'];
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

    $dsn = 'mysql:host=localhost;dbname=ecole';
    $username = 'root';
    $password = '';

    try {
        $connexion = new PDO($dsn, $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "DELETE FROM formations WHERE formation_id = :formation_id";
        $statement = $connexion->prepare($requete);
        $statement->bindParam(':formation_id', $formation_id);
        $statement->execute();

        header("Location: chartjs.php?idUser=$idUser#formation");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        header("Location: chartjs.php?idUser=$idUser#formation");
        exit();
    }
} else {
    header("Location: chartjs.php?idUser=$idUser#formation");
    exit();
}

<?php
if (isset($_POST['id_emploi'])) {
    $id_emploi = $_POST['id_emploi'];

    $dsn = 'mysql:host=localhost;dbname=ecole';
    $username = 'root';
    $password = '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;


    try {
        $connexion = new PDO($dsn, $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "DELETE FROM Emplois_Professeur WHERE ID = :id_emploi";
        $statement = $connexion->prepare($requete);

        $statement->bindParam(':id_emploi', $id_emploi);

        $statement->execute();

        header("Location: emploi.php?idUser=$idUser");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "ID de l'emploi non spécifié.";
}

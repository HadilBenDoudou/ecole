<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=ecole';
$username = 'root';
$password = '';
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

try {
    $connexion = new PDO($dsn, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si un ID de matière est passé dans l'URL
    if (isset($_GET['id'])) {
        // Récupérer l'ID de la matière à supprimer
        $id = $_GET['id'];

        // Requête SQL pour supprimer la matière avec l'ID spécifié
        $requete = "DELETE FROM tablematiere WHERE ID = :id";
        $statement = $connexion->prepare($requete);
        $statement->bindParam(':id', $id);
        $statement->execute();

        // Redirection vers une page après la suppression
        header("Location: basic-table.php?idUser=$idUser"); // Remplacez "index.php" par la page vers laquelle vous voulez rediriger après la suppression
        exit();
    } else {
        // Si aucun ID n'est passé dans l'URL, afficher un message d'erreur
        echo "ID de matière non spécifié.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

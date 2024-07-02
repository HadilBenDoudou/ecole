<?php
// Vérification de la méthode de requête
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'], $_GET['idUser'])) {
    // Récupération des identifiants de la correction et de l'utilisateur
    $idCorrection = $_GET['id'];
    $idUser = $_GET['idUser'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparation de la requête de suppression
        $sql = "DELETE FROM corrections WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $idCorrection);
        $stmt->execute();

        // Redirection vers une page de confirmation ou une autre page après la suppression
        header("Location: basic-table4.php?idUser=$idUser");
        exit();
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        echo "Erreur : " . $e->getMessage();
    }
} else {
    // Redirection vers une page d'erreur si les données requises ne sont pas disponibles
    header("Location: erreur.php");
    exit();
}

<?php
// Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null; // Remplacez "votre_base_de_données" par le nom de votre base de données

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurer PDO pour rapporter les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si un ID a été fourni dans la requête GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Requête SQL pour supprimer l'enregistrement avec l'ID spécifié
        $sql = "DELETE FROM cour WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Rediriger vers une page de succès ou afficher un message
        header("Location: basic-table2.php?idUser=$idUser"); // Remplacez "index.php" par la page à laquelle vous souhaitez rediriger après la suppression
        exit();
    } else {
        // Si aucun ID n'est fourni dans la requête GET, afficher un message d'erreur
        echo "Aucun ID spécifié pour la suppression.";
    }
} catch (PDOException $e) {
    // En cas d'erreur PDO, afficher l'erreur
    echo "Erreur : " . $e->getMessage();
}

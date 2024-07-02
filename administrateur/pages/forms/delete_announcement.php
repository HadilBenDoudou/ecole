<?php
// Vérifier si l'ID de l'annonce à supprimer est défini et non vide
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";

    try {
        // Connexion à la base de données
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparer et exécuter la requête de suppression
        $sql = "DELETE FROM Announcements WHERE AnnouncementID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_POST['id']]);

        // Redirection vers la page précédente après la suppression
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
} else {
    // Redirection vers la page précédente si l'ID n'est pas défini ou vide
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}

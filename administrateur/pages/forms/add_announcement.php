<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Paramétrage de PDO pour générer des exceptions en cas d'erreur SQL
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    $date = $_POST['date'];
    $title = $_POST['title'];
    $status = $_POST['status'];
    $description = $_POST['description'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO Announcements (Date, Title, Status, Description) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$date, $title, $status, $description]);

    // Vérifier si l'insertion a réussi
    if ($stmt->rowCount() > 0) {
        $anonce1 = "Les données ont été insérées avec succès !";
        header("Location: annonce.php?idUser=$idUser&add_success=" . urlencode($anonce1));
        exit();
    } else {
        echo "Erreur lors de l'ajout de l'annonce.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

// Fermer la connexion
$conn = null;

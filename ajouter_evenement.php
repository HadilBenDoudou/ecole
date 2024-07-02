<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    $event_name = $_POST['event_name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $month = $_POST['month'];

    // Gestion de l'image téléchargée
    $image_url = "uploads/" . basename($_FILES["image"]["name"]); // Chemin où l'image sera stockée sur le serveur
    move_uploaded_file($_FILES["image"]["tmp_name"], $image_url); // Déplacement de l'image téléchargée vers le dossier "uploads"

    // Requête d'insertion
    $stmt = $conn->prepare("INSERT INTO events (event_name, description, date, month, image_url) 
                            VALUES (:event_name, :description, :date, :month, :image_url)");
    $stmt->bindParam(':event_name', $event_name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':month', $month);
    $stmt->bindParam(':image_url', $image_url);

    $stmt->execute();

    echo "L'événement a été ajouté avec succès.";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
$conn = null;

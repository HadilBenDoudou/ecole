<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("DELETE FROM events WHERE id=:id");
    $stmt->bindParam(':id', $_POST['event_id']);

    $stmt->execute();

    header("Location: chartjs.php?idUser=$idUser#evenements");
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
$conn = null;

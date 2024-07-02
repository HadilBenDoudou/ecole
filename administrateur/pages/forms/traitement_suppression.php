<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("DELETE FROM etudiant WHERE id=:id");
    $stmt->bindParam(':id', $_POST['id_etudiant']);

    $stmt->execute();

    header("Location: basic_elements.php?idUser=$idUser");
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
$conn = null;

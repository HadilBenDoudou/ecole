<?php
// Retrieve data from POST request
$code = $_POST['code'];
$userID = $_GET['id']; // Récupérer le paramètre idUser depuis l'URL

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch subject and professor from tablematiere based on code matiere
    $sql_matiere = "SELECT NomMatiere, NomProfesseur FROM tablematiere WHERE CodeMatiere = :code";
    $stmt_matiere = $conn->prepare($sql_matiere);
    $stmt_matiere->bindParam(':code', $code);
    $stmt_matiere->execute();

    $matiere_row = $stmt_matiere->fetch(PDO::FETCH_ASSOC);
    $subject = $matiere_row['NomMatiere'];
    $professeur = $matiere_row['NomProfesseur'];

    // Insert data into database
    $sql = "INSERT INTO couruser (code, user_id, subject, NomProfesseur) VALUES (:code, :userID, :subject, :professeur)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':userID', $userID);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':professeur', $professeur);
    $stmt->execute();

    echo "success";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage(); // Echo detailed error message
}

// Close database connection
$conn = null;

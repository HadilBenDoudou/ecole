<?php
// Paramètres de connexion à la base de données
$dsn = "mysql:host=localhost;dbname=ecole;charset=utf8";
$username = "root";
$password = "";

try {
    // Créer une nouvelle connexion PDO
    $conn = new PDO($dsn, $username, $password);

    // Définir le mode d'erreur de PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si la clé 'classe' existe dans $_POST
    if (isset($_POST['classe'])) {
        // Récupération de la classe sélectionnée
        $classe = $_POST['classe'];

        // Requête SQL pour récupérer les étudiants de la même classe
        $sql = "SELECT id, nom, prenom FROM etudiant WHERE classe = :classe";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':classe', $classe);
        $stmt->execute();

        // Vérification s'il y a des résultats
        if ($stmt->rowCount() > 0) {
            // Affichage des étudiants de la même classe avec des champs de saisie de note
            echo "<h2>Liste des étudiants de la classe $classe :</h2>";
            echo "<form action='passe.php' method='post'>"; // Form pour soumettre les notes
            echo "<input type='hidden' name='classe' value='$classe'>"; // Pour envoyer la classe avec les notes
            echo "<ul>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li>" . $row["prenom"] . " " . $row["nom"] . ": <input type='text' name='notes[" . $row["id"] . "]'><input type='hidden' name='etudiants[]' value='" . $row["id"] . "'></li>";
            }
            echo "</ul>";
            echo "<input type='submit' value='Envoyer les notes'>";
            echo "</form>";
        } else {
            echo "Aucun étudiant trouvé dans cette classe.";
        }
    } else {
        echo "Veuillez sélectionner une classe.";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion ou d'exécution de la requête
    echo "Erreur: " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;

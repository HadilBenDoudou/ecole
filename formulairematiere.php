<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une matière</title>
</head>

<body>
    <h2>Ajouter une matière</h2>
    <form action="traitement_ajout_matiere.php" method="POST">
        <label for="nom_matiere">Nom de la matière:</label><br>
        <input type="text" id="nom_matiere" name="nom_matiere" required><br><br>
        <label for="nom_prof">Nom du professeur:</label><br>
        <input type="text" id="nom_prof" name="nom_prof" required><br><br>

        <label for="professeur_id">Carte du professeur:</label><br>
        <!-- Champ de sélection pour le professeur -->
        <select id="professeur_id" name="professeur_id" required>
            <!-- Option par défaut -->
            <option value="" disabled selected>Sélectionner un professeur</option>
            <!-- PHP pour récupérer et afficher la liste des professeurs -->
            <?php
            // Récupération des professeurs depuis la base de données
            $sql = "SELECT carte_professeur FROM Professeur";
            $result = $conn->query($sql);

            // Affichage des options de la liste déroulante
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["carte_professeur"] . "'>" . $row["carte_professeur"] . "</option>";
                }
            } else {
                echo "<option disabled>Aucun professeur trouvé</option>";
            }
            ?>
        </select><br><br>

        <label for="code_matiere">Code de la matière (max 8 caractères):</label><br>
        <input type="text" id="code_matiere" name="code_matiere" maxlength="8" required><br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>

</html>

<?php
// Fermer la connexion à la base de données
$conn->close();
?>
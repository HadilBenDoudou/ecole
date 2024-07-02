<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'envoi d'email collectif</title>
</head>

<body>
    <h1>Envoyer un email collectif</h1>
    <form action="envoyer_email_collectif.php" method="post">
        <label for="sujet">Sujet :</label><br>
        <input type="text" id="sujet" name="sujet" required><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <label for="classe">Classe :</label><br>
        <select id="classe" name="classe" required>
            <option value="">Sélectionnez une classe</option>
            <?php
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "ecole";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Récupérer les classes à partir de la table "étudiant"
                $query = "SELECT DISTINCT classe FROM etudiant";
                $stmt = $conn->query($query);

                // Afficher les options pour chaque classe
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['classe'] . "'>" . $row['classe'] . "</option>";
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </select><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
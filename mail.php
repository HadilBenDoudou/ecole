<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection de classe</title>
</head>

<body>

    <h2>Sélectionnez votre classe :</h2>

    <form action="envoyer_email_collectif.php" method="post">
        <label for="classe">Classe :</label>
        <select id="classe" name="classe">
            <!-- Options générées dynamiquement -->
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

                // Requête SQL pour récupérer les classes uniques depuis la table "etudiant"
                $sql = "SELECT DISTINCT classe FROM etudiant";
                $stmt = $conn->query($sql);

                // Générer les options
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row["classe"] . "'>" . $row["classe"] . "</option>";
                }
            } catch (PDOException $e) {
                // En cas d'erreur de connexion ou d'exécution de la requête
                echo "Erreur: " . $e->getMessage();
            }
            ?>
        </select>
        <br><br>
        <!-- Tableau pour afficher les noms des utilisateurs et leurs champs de saisie de note -->
        <table>
            <tr>
                <th>Nom de l'étudiant</th>
                <th>Note</th>
            </tr>
            <?php
            // Récupérer les noms des étudiants de la classe sélectionnée
            $classe = $_POST['classe']; // Supposons que la classe soit passée via POST

            $sql = "SELECT nom, prenom FROM etudiant WHERE classe = :classe";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':classe', $classe);
            $stmt->execute();

            // Afficher les noms des utilisateurs avec un champ de saisie de note pour chacun
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["prenom"] . " " . $row["nom"] . "</td>";
                echo "<td><input type='text' name='note[]'></td>"; // Utilisez un tableau pour les champs de note pour permettre la soumission de plusieurs notes
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <input type="submit" value="Envoyer les notes">
    </form>

</body>

</html>
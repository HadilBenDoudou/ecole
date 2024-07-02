<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matieres par Professeur</title>
</head>

<body>
    <h2>Matieres par Professeur</h2>
    <?php
    // Vérification si l'ID du professeur est passé en paramètre dans l'URL
    if (isset($_GET['professeur_id'])) {
        $professeur_id = $_GET['professeur_id'];

        // Connexion à la base de données avec PDO
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecole";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Définir le mode d'erreur PDO sur exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête pour récupérer les matières associées au professeur spécifique
            $stmt = $conn->prepare("SELECT NomMatiere, CodeMatiere FROM TableMatiere WHERE ProfesseurID = ?");
            $stmt->execute([$professeur_id]);
            $matieres = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($matieres) {
                echo "<form action='upload_cours.php?professeur_id=$professeur_id' method='post' enctype='multipart/form-data'>";


                echo "<label for='matiere'>Sélectionnez une matière :</label>";
                echo "<select id='matiere' name='matiere' onchange='updateCode()'>";
                echo "<option  selected>Choisir une matière</option>";
                foreach ($matieres as $matiere) {
                    echo "<option value='" . $matiere['CodeMatiere'] . "'>" . $matiere['NomMatiere'] . "</option>";
                }
                echo "</select>";
                echo "<br>";
                echo "<label for='codeMatiere'>Code de la matière :</label>";
                echo "<input type='text' id='codeMatiere' name='codeMatiere' readonly>";
                echo "<br>";
                echo "<label for='titre'>Titre du cours :</label>";
                echo "<input type='text' id='titre' name='titre'>";
                echo "<br>";
                echo "<label for='description'>Description :</label>";
                echo "<textarea id='description' name='description'></textarea>";
                echo "<br>";
                echo "<label for='datePublication'>Date de publication :</label>";
                echo "<input type='date' id='datePublication' name='datePublication'>";
                echo "<br>";
                echo "<label for='coursFile'>Ajouter un cours :</label>";
                echo "<input type='file' id='coursFile' name='coursFile'>";
                echo "<input type='submit' value='Envoyer'>";
                echo "</form>";
            } else {
                echo "<p>Aucune matière trouvée pour ce professeur.</p>";
            }
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }

        // Fermeture de la connexion
        $conn = null;
    } else {
        echo "Erreur: Aucun ID de professeur spécifié.";
    }
    ?>

    <script>
        function updateCode() {
            var selectedMatiere = document.getElementById("matiere");
            var codeMatiereInput = document.getElementById("codeMatiere");
            var selectedCode = selectedMatiere.options[selectedMatiere.selectedIndex].value;
            codeMatiereInput.value = selectedCode;
        }
    </script>
</body>

</html>
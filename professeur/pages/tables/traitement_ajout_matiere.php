<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des données envoyées via le formulaire
    if (isset($_POST['nom_matiere'], $_POST['nom_prof'], $_POST['professeur_id'], $_POST['code_matiere'])) {
        // Récupération des données du formulaire
        $nom_matiere = $_POST['nom_matiere'];
        $nom_prof = $_POST['nom_prof'];
        $professeur_id = $_POST['professeur_id'];
        $code_matiere = $_POST['code_matiere'];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        // Vérifier la longueur du code de matière
        if (strlen($code_matiere) === 8) {
            // Connexion à la base de données avec PDO
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ecole";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // Configurer PDO pour rapporter les erreurs
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Vérifier si le code de matière existe déjà dans la base de données
                $sql_check = "SELECT CodeMatiere FROM tablematiere WHERE CodeMatiere = :code_matiere";
                $stmt_check = $conn->prepare($sql_check);
                $stmt_check->bindParam(':code_matiere', $code_matiere);
                $stmt_check->execute();
                if ($stmt_check->rowCount() > 0) {
                    // Le code de matière existe déjà, afficher un message d'erreur
                    $matiere2 = "Le code de matière existe déjà dans la base de données.";
                    header("Location: basic-table.php?idUser=$idUser&matiere2=" . urlencode($matiere2));
                    exit();
                }

                // Requête SQL pour insérer les données dans la base de données
                $sql = "INSERT INTO tablematiere (NomMatiere, NomProfesseur, ProfesseurID, CodeMatiere) 
                        VALUES (:nom_matiere, :nom_prof, :professeur_id, :code_matiere)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nom_matiere', $nom_matiere);
                $stmt->bindParam(':nom_prof', $nom_prof);
                $stmt->bindParam(':professeur_id', $professeur_id);
                $stmt->bindParam(':code_matiere', $code_matiere);
                $stmt->execute();
                $matiere = "Matière ajoutée avec succès.";
                header("Location: basic-table.php?idUser=$idUser&matiere=" . urlencode($matiere));
                exit();
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }

            // Fermer la connexion à la base de données
            $conn = null;
        } else {
            $matiere2 = "La longueur du code de matière doit être exactement de 8 caractères.";
            header("Location: basic-table.php?idUser=$idUser&matiere2=" . urlencode($matiere2));
            exit();
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}

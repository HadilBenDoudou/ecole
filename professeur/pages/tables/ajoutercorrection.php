<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des données soumises
    if (isset($_POST['matiere'], $_POST['tp'], $_POST['titre'], $_POST['description'], $_POST['datePublication'])) {
        $matiere = $_POST['matiere'];
        $tp = $_POST['tp'];
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $datePublication = $_POST['datePublication'];
        // Récupération de l'ID du professeur à partir du formulaire
        $professeurID = isset($_GET['idUser']) ? $_GET['idUser'] : null;
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        // Vérification du téléchargement du fichier
        if (isset($_FILES['coursFile']) && $_FILES['coursFile']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['coursFile']['name']);

            $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
            $allowedExtensions = ['pdf', 'doc', 'docx'];

            if (!in_array($fileType, $allowedExtensions)) {

                $corrections88 = "Extension de fichier non autorisée. Veuillez télécharger un fichier PDF, DOC ou DOCX.";
                header("Location: basic-table4.php?idUser=$idUser&corrections88=" . urlencode($corrections88));
                exit();
            }

            if (move_uploaded_file($_FILES['coursFile']['tmp_name'], $uploadFile)) {
                // Connexion à la base de données
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecole";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // Définir le mode d'erreur PDO sur exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Préparez et exécutez la requête d'insertion
                    $sql = "INSERT INTO corrections (ProfesseurID, MatiereID, Titre, Description, DatePublication, Fichier, TP_ID) 
                            VALUES (:professeurID, :matiereID, :titre, :description, :datePublication, :fichier, :tpID)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':professeurID', $professeurID);
                    $stmt->bindParam(':matiereID', $matiere);
                    $stmt->bindParam(':titre', $titre);
                    $stmt->bindParam(':description', $description);
                    $stmt->bindParam(':datePublication', $datePublication);
                    $stmt->bindParam(':fichier', $uploadFile);
                    $stmt->bindParam(':tpID', $tp);
                    $stmt->execute();
                    $corrections = "Modification avec succes.";
                    header("Location: basic-table4.php?idUser=$idUser&corrections=" . urlencode($corrections));
                    exit();
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
            } else {
                echo "Erreur lors du téléchargement du fichier.";
            }
        } else {
            echo "Aucun fichier n'a été téléchargé ou une erreur est survenue lors du téléchargement.";
        }
    } else {
        echo "Toutes les données requises n'ont pas été fournies.";
    }
} else {
    echo "Méthode de requête incorrecte. Veuillez soumettre le formulaire.";
}

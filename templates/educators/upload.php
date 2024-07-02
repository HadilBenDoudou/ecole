<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère l'identifiant du type de travail depuis l'URL
    $tp_id = $_GET['id']; // Assurez-vous de valider et de filtrer cette valeur

    // Chemin où les fichiers seront téléchargés
    $uploadDirectory = "uploads/";

    // Vérifie si le fichier a été téléchargé sans erreur
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $fileName = $_FILES["file"]["name"];
        $filePath = $uploadDirectory . $fileName;

        // Déplace le fichier téléchargé vers le dossier d'uploads
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
            try {
                // Connexion à la base de données avec PDO
                $pdo = new PDO("mysql:host=localhost;dbname=ecole", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Requête SQL pour insérer les données dans la table travaux
                $sql = "INSERT INTO travaux (tp_id, image_file) VALUES (:tp_id, :filePath)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':tp_id', $tp_id);
                $stmt->bindParam(':filePath', $filePath);
                $stmt->execute();
                header("Location: travail.php?id=$tp_id");
            } catch (PDOException $e) {
                echo "Erreur: " . $e->getMessage();
            }
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    } else {
        echo "Erreur: Aucun fichier n'a été téléchargé ou une erreur s'est produite.";
    }
} else {
    echo "Erreur: Le formulaire n'a pas été soumis.";
}

<?php
// Vérification si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si le formulaire a été soumis correctement
    if (isset($_FILES['coursFile']) && $_FILES['coursFile']['error'] === UPLOAD_ERR_OK) {
        // Récupération des données du formulaire
        $matiereID = $_POST['matiere'];
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $datePublication = $_POST['datePublication'];
        // Récupération de l'ID du professeur à partir du formulaire
        $idUser = $_GET['idUser'];


        // Chemin de destination pour le fichier
        $uploadDirectory = 'uploads/';
        $fileName = basename($_FILES['coursFile']['name']);
        $uploadPath = $uploadDirectory . $fileName;

        // Déplacement du fichier téléchargé vers le répertoire d'upload
        if (move_uploaded_file($_FILES['coursFile']['tmp_name'], $uploadPath)) {
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ecole";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // Définir le mode d'erreur PDO sur exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Préparation de la requête SQL pour insérer le cours dans la base de données
                $stmt = $conn->prepare("INSERT INTO Cour (ProfesseurID, MatiereID, Titre, Description, DatePublication, Fichier) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$idUser, $matiereID, $titre, $description, $datePublication, $uploadPath]);

                echo "Le cours a été ajouté avec succès.";
            } catch (PDOException $e) {
                echo "Erreur: " . $e->getMessage();
            }

            // Fermeture de la connexion à la base de données
            $conn = null;
        } else {
            echo "Une erreur s'est produite lors de l'envoi du fichier.";
        }
    } else {
        echo "Une erreur s'est produite lors de la soumission du formulaire.";
    }
} else {
    echo "Le formulaire n'a pas été soumis correctement.";
}

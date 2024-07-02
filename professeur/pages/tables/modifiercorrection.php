<?php
// Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si le formulaire a été soumis et si les données requises existent
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'], $_POST['nom'], $_POST['professeur'], $_POST['matiere'], $_POST['description'], $_POST['date'])) {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $professeur = $_POST['professeur'];
        $matiere = $_POST['matiere'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $tp = isset($_POST['tp']) ? $_POST['tp'] : null;


        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        // Traitement du fichier s'il est envoyé
        if ($_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
            $fichier_nom = $_FILES['fichier']['name'];
            $fichier_tmp = $_FILES['fichier']['tmp_name'];
            $fichier_destination = "uploads/" . basename($fichier_nom);
            // Déplacer le fichier téléchargé vers le dossier de destination
            move_uploaded_file($fichier_tmp, $fichier_destination);
            // Mettre à jour le nom du fichier dans la base de données
            $sql_fichier = "UPDATE corrections SET Fichier = :fichier WHERE ID = :id";
            $stmt_fichier = $conn->prepare($sql_fichier);
            $stmt_fichier->bindParam(':id', $id);
            $stmt_fichier->bindParam(':fichier', $fichier_destination);
            $stmt_fichier->execute();
        }

        // Mettre à jour les autres informations de la correction dans la base de données
        $sql = "UPDATE corrections SET Titre = :nom, ProfesseurID = :professeur, MatiereID = :matiere, Description = :description, DatePublication = :date, TP_ID = :tp WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':professeur', $professeur);
        $stmt->bindParam(':matiere', $matiere);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':tp', $tp);
        $stmt->execute();
        $helooo = "Modification avec succes.";
        header("Location: basic-table4.php?idUser=$idUser&helooo=" . urlencode($helooo));
        exit();
    } else {
        // Redirection vers une page d'erreur si les données requises ne sont pas disponibles
        header("Location: erreur.php");
        exit();
    }
} catch (PDOException $e) {
    // Gestion des erreurs PDO
    echo "Erreur : " . $e->getMessage();
}

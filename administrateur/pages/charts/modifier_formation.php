<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["formation_id"])) {
        $formation_id = $_POST["formation_id"];

        $nom_formation = $_POST["nom_formation"];
        $description = $_POST["description"];
        $date_debut = $_POST["date_debut"];
        $date_fin = $_POST["date_fin"];
        $lieu_formation = $_POST["lieu_formation"];
        $responsable_formation = $_POST["responsable_formation"];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        $dsn = 'mysql:host=localhost;dbname=ecole';
        $username = 'root';
        $password = '';

        try {
            $connexion = new PDO($dsn, $username, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Vérifier si une formation avec la même date de début et la même localisation existe déjà
            $existing_formation = $connexion->prepare('SELECT * FROM formations WHERE date_debut = :date_debut AND lieu_formation = :lieu_formation AND formation_id != :formation_id');
            $existing_formation->bindParam(':date_debut', $date_debut);
            $existing_formation->bindParam(':lieu_formation', $lieu_formation);
            $existing_formation->bindParam(':formation_id', $formation_id);
            $existing_formation->execute();

            if ($existing_formation->rowCount() > 0) {
                $date_message3 = "Une formation avec la même date de début et la même localisation existe déjà.";
                header("Location: chartjs.php?idUser=$idUser&date_message3=" . urlencode($date_message3) . "#formation");
            } else {
                // Sinon, procéder à la mise à jour de la formation dans la base de données
                $requete = "UPDATE formations SET nom_formation = :nom, description = :description, date_debut = :date_debut, date_fin = :date_fin, lieu_formation = :lieu_formation, responsable_formation = :responsable";
                if (!empty($_FILES['image_file']['tmp_name'])) {
                    $requete .= ", image_file = :image_file";
                }
                $requete .= " WHERE formation_id = :formation_id";

                $statement = $connexion->prepare($requete);

                $statement->bindParam(':nom', $nom_formation);
                $statement->bindParam(':description', $description);
                $statement->bindParam(':date_debut', $date_debut);
                $statement->bindParam(':date_fin', $date_fin);
                $statement->bindParam(':lieu_formation', $lieu_formation);
                $statement->bindParam(':responsable', $responsable_formation);
                $statement->bindParam(':formation_id', $formation_id);

                if (!empty($_FILES['image_file']['tmp_name'])) {
                    $uploadDir = 'uploads/';
                    $imageName = uniqid() . '_' . $_FILES['image_file']['name'];
                    $uploadFile = $uploadDir . $imageName;

                    if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile)) {
                        $statement->bindParam(':image_file', $uploadFile);
                    } else {
                        echo "Une erreur s'est produite lors du téléchargement de l'image.";
                    }
                }

                $statement->execute();

                $date_message4 = "Une formation ajouter avec succe";
                header("Location: chartjs.php?idUser=$idUser&date_message4=" . urlencode($date_message4) . "#formation");
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        header("Location: chartjs.php?idUser=$idUser#formation");
        exit();
    }
} else {
    header("Location: formations.php?idUser=$idUser");
    exit();
}

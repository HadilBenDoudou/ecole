<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nom_formation'], $_POST['date_debut'], $_POST['date_fin'], $_FILES['image_file'])) {
        $nom_formation = $_POST['nom_formation'];
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $responsable_formation = isset($_POST['responsable_formation']) ? $_POST['responsable_formation'] : null;
        $lieu_formation = isset($_POST['lieu_formation']) ? $_POST['lieu_formation'] : null;
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["image_file"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Le fichier n'est pas une image.";
            $uploadOk = 0;
        }

        if ($_FILES["image_file"]["size"] > 500000) {
            echo "Désolé, votre image est trop volumineuse.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $dateimage_message = "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
            $uploadOk = 0;
            header("Location: chartjs.php?idUser=$idUser&dateimage_message=" . urlencode($dateimage_message) . "#formation");
            exit;
        }

        if ($uploadOk == 0) {
            echo "Désolé, votre image n'a pas été téléchargée.";
        } else {
            if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
                $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

                // Vérifier si une formation avec la même date de début et la même localisation existe déjà
                $existing_formation = $bdd->prepare('SELECT * FROM formations WHERE date_debut = ? AND lieu_formation = ?');
                $existing_formation->execute([$date_debut, $lieu_formation]);

                if ($existing_formation->rowCount() > 0) {
                    // Si une formation avec la même date de début et la même localisation existe déjà, afficher un message d'erreur
                    $date_message = "Une formation avec la même date de début et la même localisation existe déjà.";
                    header("Location: chartjs.php?idUser=$idUser&date_message=" . urlencode($date_message) . "#formation");
                    exit;
                } else {
                    // Sinon, procéder à l'insertion de la formation dans la base de données
                    $insertion = $bdd->prepare('INSERT INTO formations (nom_formation, description, date_debut, date_fin, responsable_formation, lieu_formation, image_file) VALUES (?, ?, ?, ?, ?, ?, ?)');

                    if ($insertion->execute(array($nom_formation, $description, $date_debut, $date_fin, $responsable_formation, $lieu_formation, $target_file))) {
                        $success_message = "La formation a été ajoutée avec succès.";
                        // Rediriger avec le message de succès dans l'URL
                        header("Location: chartjs.php?idUser=$idUser&success_message11=" . urlencode($success_message) . "#formation");
                        exit;
                    } else {
                        echo "Une erreur est survenue lors de l'ajout de la formation. Veuillez réessayer.";
                    }
                }
            } else {
                echo "Désolé, une erreur s'est produite lors du téléchargement de votre image.";
            }
        }
    } else {
        echo "Tous les champs requis ne sont pas remplis.";
    }
} else {
    header('Location: erreur.php');
    exit;
}

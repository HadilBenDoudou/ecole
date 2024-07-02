<?php

$host = 'localhost';
$database = 'ecole';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_professeur = $_POST['id_professeur'];
    $nomf = $_POST['nomf'];
    $prenomf = $_POST['prenomf'];
    $emailf = $_POST['emailf'];
    $carte_professeur = $_POST['carte_professeur'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

    // Vérification de la longueur de la carte professeur
    if (strlen($carte_professeur) !== 8) {
        $error_message = "Erreur: La longueur de la carte professeur doit être de 8 caractères.";
        header("Location: basic_elements.php?idUser=$idUser&error=1&message=" . urlencode($error_message) . "#professeur");
        exit();
    }

    // Vérification de l'unicité de l'email
    $stmt = $conn->prepare("SELECT id FROM professeur WHERE email = :email AND id != :id_professeur");
    $stmt->bindParam(':email', $emailf);
    $stmt->bindParam(':id_professeur', $id_professeur);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $error_message = "Erreur: Cet email est déjà associé à un autre professeur.";
        header("Location: basic_elements.php?idUser=$idUser&error=1&message=" . urlencode($error_message) . "#professeur");
        exit();
    }

    // Vérification de l'unicité de la carte professeur
    $stmt = $conn->prepare("SELECT id FROM professeur WHERE carte_professeur = :carte_professeur AND id != :id_professeur");
    $stmt->bindParam(':carte_professeur', $carte_professeur);
    $stmt->bindParam(':id_professeur', $id_professeur);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $error_message = "Erreur: Cette carte professeur est déjà associée à un autre professeur.";
        header("Location: basic_elements.php?idUser=$idUser&error=1&message=" . urlencode($error_message) . "#professeur");
        exit();
    }
    $stmt = $conn->prepare("SELECT id FROM professeur WHERE email = :email AND id != :id_professeur");
    $stmt->bindParam(':email', $emailf);
    $stmt->bindParam(':id_professeur', $id_professeur);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $error_message = "Cet email est déjà associé à un autre professeur.";
        header("Location: basic_elements.php?idUser=$idUser&error=1&message=" . urlencode($error_message) . "#professeur");
        exit();
    }

    if ($_FILES['image_path']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image_path"]["name"]);

        if (move_uploaded_file($_FILES["image_path"]["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("UPDATE professeur SET nom=:nom, prenom=:prenom, email=:email, carte_professeur=:carte_professeur, image_path=:image_path, qualification=:qualification, experience=:experience, description=:description WHERE id=:id_professeur");
            $stmt->bindParam(':nom', $nomf);
            $stmt->bindParam(':prenom', $prenomf);
            $stmt->bindParam(':email', $emailf);
            $stmt->bindParam(':carte_professeur', $carte_professeur);
            $stmt->bindParam(':image_path', $target_file);
            $stmt->bindParam(':qualification', $qualification);
            $stmt->bindParam(':experience', $experience);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':id_professeur', $id_professeur);

            if ($stmt->execute()) {
                // Ajouter un paramètre à l'URL pour indiquer la réussite de la mise à jour
                header("Location: basic_elements.php?idUser=$idUser&success=1#professeur");
                exit();
            } else {
                echo "Error updating record";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        $stmt = $conn->prepare("UPDATE professeur SET nom=:nom, prenom=:prenom, email=:email, carte_professeur=:carte_professeur, qualification=:qualification, experience=:experience, description=:description WHERE id=:id_professeur");
        $stmt->bindParam(':nom', $nomf);
        $stmt->bindParam(':prenom', $prenomf);
        $stmt->bindParam(':email', $emailf);
        $stmt->bindParam(':carte_professeur', $carte_professeur);
        $stmt->bindParam(':qualification', $qualification);
        $stmt->bindParam(':experience', $experience);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id_professeur', $id_professeur);

        if ($stmt->execute()) {
            // Ajouter un paramètre à l'URL pour indiquer la réussite de la mise à jour
            header("Location: basic_elements.php?idUser=$idUser&success=1#professeur");
            exit();
        } else {
            echo "Erreur lors de la mise à jour de l'enregistrement";
        }
    }
} else {
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
    header("Location: your_form_page.php?idUser=$idUser");
    exit();
}

$conn = null;

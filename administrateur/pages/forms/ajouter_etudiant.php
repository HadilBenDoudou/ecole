<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nomf'];
    $prenom = $_POST['prenomf'];
    $carte_professeur = $_POST['carte_professeur'];
    $email = $_POST['mailf'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    try {
        $dsn = "mysql:host=localhost;dbname=ecole";
        $username = "root";
        $password = "";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $pdo = new PDO($dsn, $username, $password, $options);

        // Vérification si l'e-mail du professeur existe déjà
        $verif_stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM professeur WHERE email = :email");
        $verif_stmt->bindParam(':email', $email);
        $verif_stmt->execute();
        $result = $verif_stmt->fetch(PDO::FETCH_ASSOC);
        if ($result['count'] > 0) {
            echo "<script>alert('L\'e-mail du professeur existe déjà dans la base de données');</script>";
            echo "<script>window.location.href = 'basic_elements.php?idUser=" . $idUser . "#professeur';</script>";
            exit();
        }

        // Vérification si la carte du professeur existe déjà
        $verif_stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM professeur WHERE carte_professeur = :carte_professeur");
        $verif_stmt->bindParam(':carte_professeur', $carte_professeur);
        $verif_stmt->execute();
        $result = $verif_stmt->fetch(PDO::FETCH_ASSOC);
        if ($result['count'] > 0) {
            echo "<script>alert('La carte du professeur existe déjà dans la base de données');</script>";
            echo "<script>window.location.href = 'basic_elements.php?idUser=" . $idUser . "#professeur';</script>";
            exit();
        }

        // Si tout est bon, procéder à l'insertion
        $stmt = $pdo->prepare("INSERT INTO professeur (nom, prenom, carte_professeur, email, image_path, qualification, experience, description)
                               VALUES (:nom, :prenom, :carte_professeur, :email, :image, :qualification, :experience, :description)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':carte_professeur', $carte_professeur);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':image', $target_file);
        $stmt->bindParam(':qualification', $qualification);
        $stmt->bindParam(':experience', $experience);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        // Si l'insertion est réussie, afficher l'alerte de succèsV

        echo "<script>alert('Ajout du professeur réussi');</script>";
        header("Location: basic_elements.php?idUser=$idUser#professeur");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $pdo = null;
}

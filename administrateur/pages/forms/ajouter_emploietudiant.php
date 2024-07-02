<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $description = $_POST['description'];
        $classe = $_POST['classe'];
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_target_dir = "emploi/";

        $image_target_path = $image_target_dir . basename($image_name);
        move_uploaded_file($image_tmp_name, $image_target_path);

        $sql = "INSERT INTO Emplois_Etudiant (description, classe, image_file) VALUES (:description, :classe, :image)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':classe', $classe);
        $stmt->bindParam(':image', $image_target_path);
        $stmt->execute();
        $emploisus_message222 = "Les données ont été insérées avec succès !";
        header("Location: emploi.php?idUser=$idUser&error=1&emploisus_message222=" . urlencode($emploisus_message222));
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

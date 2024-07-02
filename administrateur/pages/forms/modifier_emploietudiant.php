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

        $id_emploi = $_POST['id_emploi'];
        $description = $_POST['description'];
        $classe = $_POST['classe'];
        $image_name = $_FILES['image_file']['name'];
        $image_tmp_name = $_FILES['image_file']['tmp_name'];
        $image_target_dir = "emploi/";
        if ($image_name != "") {
            $image_target_path = $image_target_dir . basename($image_name);
            move_uploaded_file($image_tmp_name, $image_target_path);
            $sql = "UPDATE Emplois_Etudiant SET description = :description, classe = :classe, image_file = :image WHERE ID = :id_emploi";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':classe', $classe);
            $stmt->bindParam(':image', $image_target_path);
            $stmt->bindParam(':id_emploi', $id_emploi);
            $stmt->execute();
        } else {
            $sql = "UPDATE Emplois_Etudiant SET description = :description, classe = :classe WHERE ID = :id_emploi";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':classe', $classe);
            $stmt->bindParam(':id_emploi', $id_emploi);
            $stmt->execute();
        }

        $emploisus_message2222 = "Les données ont été insérées avec succès !";
        header("Location: emploi.php?idUser=$idUser&error=1&emploisus_message2222=" . urlencode($emploisus_message2222));
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

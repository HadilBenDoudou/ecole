<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['description']) && isset($_POST['classe']) && isset($_POST['professeur']) && isset($_FILES['image_file'])) {
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
            $professeur = $_POST['professeur'];
            $image_name = $_FILES['image_file']['name'];
            $image_tmp = $_FILES['image_file']['tmp_name'];
            $image_destination = "emploi/" . $image_name;

            move_uploaded_file($image_tmp, $image_destination);

            $sql = "INSERT INTO Emplois_Professeur (Description, Nom_professeur, Classe, Image_file)
                    VALUES (:description, :professeur, :classe, :image_file)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':professeur', $professeur);
            $stmt->bindParam(':classe', $classe);
            $stmt->bindParam(':image_file', $image_destination);
            $stmt->execute();
            $emploisus_message = "Les données ont été insérées avec succès !";
            header("Location: emploi.php?idUser=$idUser&error=1&emploisus_message=" . urlencode($emploisus_message));
            exit();
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
        $conn = null;
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_emploi'])) {
        $id_emploi = $_POST['id_emploi'];

        $dsn = 'mysql:host=localhost;dbname=ecole';
        $username = 'root';
        $password = '';
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;


        try {
            $connexion = new PDO($dsn, $username, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $requete = "UPDATE Emplois_Professeur SET Description = :description, Classe = :classe, Nom_professeur = :nom_professeur WHERE ID = :id_emploi";
            $statement = $connexion->prepare($requete);

            $statement->bindParam(':description', $_POST['description']);
            $statement->bindParam(':classe', $_POST['classe']);
            $statement->bindParam(':nom_professeur', $_POST['professeur']);
            $statement->bindParam(':id_emploi', $id_emploi);

            $statement->execute();

            if ($_FILES['emploi']['size'] > 0) {
                $fichier_temporaire = $_FILES['emploi']['tmp_name'];

                $destination = 'emploi/' . $_FILES['emploi']['name'];
                move_uploaded_file($fichier_temporaire, $destination);

                $requete_image = "UPDATE Emplois_Professeur SET Image_file = :image_file WHERE ID = :id_emploi";
                $statement_image = $connexion->prepare($requete_image);
                $statement_image->bindParam(':image_file', $destination);
                $statement_image->bindParam(':id_emploi', $id_emploi);
                $statement_image->execute();
            }

            $emploisus_message22 = "Les données ont été insérées avec succès !";
            header("Location: emploi.php?idUser=$idUser&error=1&emploisus_message22=" . urlencode($emploisus_message22));
            exit();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "ID de l'emploi non spécifié.";
    }
} else {
    echo "Accès non autorisé.";
}

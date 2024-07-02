<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['professeur']) && isset($_POST['matiere']) && isset($_POST['description']) && isset($_POST['date'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $professeur = $_POST['professeur'];
        $matiere = $_POST['matiere'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        $fichier = '';

        if ($_FILES['fichier']['name']) {
            $fichier = $_FILES['fichier']['name'];
            $destination = 'uploads/' . $fichier;
            if (!move_uploaded_file($_FILES['fichier']['tmp_name'], $destination)) {
                echo "Erreur lors du téléchargement du fichier.";
                exit();
            }
        } else {
            $dsn = 'mysql:host=localhost;dbname=ecole;charset=utf8';
            $username = 'root';
            $password = '';

            try {
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion: " . $e->getMessage());
            }

            $query_select = "SELECT Fichier FROM cour WHERE ID=?";
            $stmt_select = $pdo->prepare($query_select);
            $stmt_select->execute([$id]);
            $result = $stmt_select->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $fichier = $result['Fichier'];
            } else {
                echo "Aucun fichier existant trouvé dans la base de données.";
                exit();
            }
        }

        $dsn = 'mysql:host=localhost;dbname=ecole;charset=utf8';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion: " . $e->getMessage());
        }

        $query = "UPDATE cour SET Titre=?, ProfesseurID=?, MatiereID=?, Description=?, DatePublication=?, Fichier=? WHERE ID=?";
        $stmt = $pdo->prepare($query);

        try {
            $stmt->execute([$nom, $professeur, $matiere, $description, $date, $fichier, $id]);

            if ($stmt->rowCount() > 0) {
                $cour25 = "Modifier avec succes.";
                header("Location: basic-table2.php?idUser=$idUser&cour25=" . urlencode($cour25));
                exit();
            } else {
                header("Location: basic-table2.php?idUser=$idUser");
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour: " . $e->getMessage();
        }

        $pdo = null;
    } else {
        echo "Tous les champs requis ne sont pas fournis.";
    }
} else {
    header("Location: page_erreur.php");
    exit();
}

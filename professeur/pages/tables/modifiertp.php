<?php
// modifier.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données avec PDO
    $dsn = 'mysql:host=localhost;dbname=ecole;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion: " . $e->getMessage());
    }

    // Vérification des champs requis
    if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['professeur']) && isset($_POST['matiere']) && isset($_POST['description']) && isset($_POST['date'])) {
        // Récupération des données du formulaire
        $id = $_POST['id'];
        $nom = htmlspecialchars($_POST['nom']);
        $professeur = htmlspecialchars($_POST['professeur']);
        $matiere = htmlspecialchars($_POST['matiere']);
        $description = htmlspecialchars($_POST['description']);
        $date = $_POST['date'];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        // Gestion du fichier s'il est soumis
        $fichier = '';
        if ($_FILES['fichier']['name']) {
            $fichier = $_FILES['fichier']['name'];
            $destination = 'uploads/' . $fichier;
            if (!move_uploaded_file($_FILES['fichier']['tmp_name'], $destination)) {
                echo "Erreur lors du téléchargement du fichier.";
                exit();
            }
        } else {
            // Récupération du fichier existant depuis la base de données
            $query_select = "SELECT Fichier FROM tp WHERE ID=?";
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

        // Requête de mise à jour
        $query = "UPDATE tp SET Titre=?, ProfesseurID=?, MatiereID=?, Description=?, DatePublication=?, Fichier=? WHERE ID=?";
        $stmt = $pdo->prepare($query);

        // Exécution de la requête
        try {
            $stmt->execute([$nom, $professeur, $matiere, $description, $date, $fichier, $id]);

            // Redirection après la mise à jour
            if ($stmt->rowCount() > 0) {
                $ttp3 = "Modification avec succes.";
                header("Location: basic-table3.php?idUser=$idUser&ttp3=" . urlencode($ttp3));
                exit();
            } else {
                header("Location: basic-table3.php?idUser=$idUser");
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour: " . $e->getMessage();
        }
    } else {
        echo "Tous les champs requis ne sont pas fournis.";
    }
} else {
    header("Location: page_erreur.php");
    exit();
}

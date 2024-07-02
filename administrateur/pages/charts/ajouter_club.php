<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['club_name']) && isset($_POST['club_description']) && isset($_POST['club_founded_date']) && isset($_POST['club_location']) && isset($_POST['club_president'])) {
        $club_name = $_POST['club_name'];
        $club_description = $_POST['club_description'];
        $club_founded_date = $_POST['club_founded_date'];
        $club_location = $_POST['club_location'];
        $club_president = $_POST['club_president'];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

        // Vérification si le club existe déjà avec le même nom, date de fondation et emplacement
        $existing_club = $bdd->prepare('SELECT * FROM club WHERE club_founded_date = ? AND club_location = ?');
        $existing_club->execute([$club_founded_date, $club_location]);

        if ($existing_club->rowCount() > 0) {
            // Si le club existe déjà avec les mêmes informations, afficher un message d'erreur
            $error_message = "Un club avec la même date de fondation et le même emplacement existe déjà.";
            header("Location: chartjs.php?idUser=$idUser&error=1&message=" . urlencode($error_message) . "#club");
            exit();
        } else {
            // Sinon, insérer le nouveau club dans la base de données
            $insertion = $bdd->prepare('INSERT INTO club (club_name, club_description, club_founded_date, club_location, club_president) VALUES (?, ?, ?, ?, ?)');
            if ($insertion->execute(array($club_name, $club_description, $club_founded_date, $club_location, $club_president))) {
                // Si l'insertion est réussie, rediriger avec un message de succès
                $success_message = "Le club a été ajouté avec succès.";
                header("Location: chartjs.php?idUser=$idUser&success=1&message=" . urlencode($success_message) . "#club");
                exit();
            } else {
                // En cas d'erreur lors de l'insertion, afficher un message d'erreur
                $error_message = "Une erreur est survenue lors de l'ajout du club. Veuillez réessayer.";
                header("Location: chartjs.php?idUser=$idUser&error=1&message=" . urlencode($error_message) . "#club");
                exit();
            }
        }
    } else {
        // Si tous les champs requis ne sont pas fournis, afficher un message d'erreur
        $validationErrors[] = "Tous les champs sont requis.";
    }
}

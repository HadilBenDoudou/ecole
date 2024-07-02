<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['club_id']) && isset($_POST['club_name']) && isset($_POST['club_description']) && isset($_POST['club_founded_date']) && isset($_POST['club_location']) && isset($_POST['club_president'])) {
        $club_id = $_POST['club_id'];
        $club_name = $_POST['club_name'];
        $club_description = $_POST['club_description'];
        $club_founded_date = $_POST['club_founded_date'];
        $club_location = $_POST['club_location'];
        $club_president = $_POST['club_president'];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

        // Vérifier si le club existe déjà avec la même localisation et la même date de fondation
        $existing_club = $bdd->prepare('SELECT * FROM club WHERE club_founded_date = ? AND club_location = ? AND club_id != ?');
        $existing_club->execute([$club_founded_date, $club_location, $club_id]);

        if ($existing_club->rowCount() > 0) {
            // Si un club avec la même localisation et la même date existe déjà, afficher un message d'erreur
            $error_message = "Un club avec la même localisation et la même date de fondation existe déjà.";
            header("Location: chartjs.php?idUser=$idUser&error2=1&message=" . urlencode($error_message) . "#club");
            exit();
        } else {
            // Sinon, effectuer la mise à jour du club dans la base de données
            $requete = $bdd->prepare('UPDATE club SET club_name = ?, club_description = ?, club_founded_date = ?, club_location = ?, club_president = ? WHERE club_id = ?');

            if ($requete->execute(array($club_name, $club_description, $club_founded_date, $club_location, $club_president, $club_id))) {
                // Si la modification est réussie, rediriger avec un message de succès
                $success_message = "Le club a été modifié avec succès.";
                header("Location: chartjs.php?idUser=$idUser&success2=1&message=" . urlencode($success_message) . "#club");
                exit();
            } else {
                // En cas d'erreur lors de la modification, afficher un message d'erreur
                $error_message = "Une erreur est survenue lors de la modification du club. Veuillez réessayer.";
                header("Location: chartjs.php?idUser=$idUser&error2=1&message=" . urlencode($error_message) . "#club");
                exit();
            }
        }
    } else {
        // Si tous les champs requis ne sont pas fournis, afficher un message d'erreur
        $error_message = "Tous les champs sont requis.";
        header("Location: chartjs.php?idUser=$idUser&error2=1&message=" . urlencode($error_message) . "#club");
        exit();
    }
} else {
    // Si la méthode de la requête n'est pas POST, rediriger vers une page d'erreur
    header('Location: erreur.php');
    exit;
}

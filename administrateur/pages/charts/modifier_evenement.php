<?php
$dsn = 'mysql:host=localhost;dbname=ecole';
$username = 'root';
$password = '';

try {
    $connexion = new PDO($dsn, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['event_id'])) {
        $eventId = $_POST['event_id'];
        $eventName = $_POST['event_name'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

        // Vérification de l'existence de la date dans la base de données
        $existing_event = $connexion->prepare('SELECT * FROM events WHERE date = :date AND id != :event_id');
        $existing_event->bindParam(':date', $date);
        $existing_event->bindParam(':event_id', $eventId);
        $existing_event->execute();

        if ($existing_event->rowCount() > 0) {
            // Si un événement avec la même date existe déjà, afficher un message d'erreur
            $error_messageevent2 = "Un événement avec la même date existe déjà !";
            header("Location: chartjs.php?idUser=$idUser&error=1&error_messageevent2=" . urlencode($error_messageevent2) . "#evenements");
            exit();
        } else {
            // Si la date n'existe pas encore, procéder à la mise à jour
            if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $uploadFile = $uploadDir . basename($_FILES['image_file']['name']);

                if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile)) {
                    $imageUrl = $uploadFile;

                    $requete = "UPDATE events SET event_name = ?, description = ?, date = ?, image_url = ? WHERE id = ?";
                    $statement = $connexion->prepare($requete);
                    $statement->execute([$eventName, $description, $date, $imageUrl, $eventId]);

                    header("Location: chartjs.php?idUser=$idUser#evenements");
                    exit();
                } else {
                    echo "Une erreur s'est produite lors du téléchargement de l'image.";
                }
            } else {
                $requete = "UPDATE events SET event_name = ?, description = ?, date = ? WHERE id = ?";
                $statement = $connexion->prepare($requete);
                $statement->execute([$eventName, $description, $date, $eventId]);

                $eventsus_message2 = "Les données ont été insérées avec succès !";
                header("Location: chartjs.php?idUser=$idUser&error=1&eventsus_message2=" . urlencode($eventsus_message2) . "#evenements");
                exit();
            }
        }
    } else {
        $eventsus_message2 = "Les données ont été insérées avec succès !";
        header("Location: chartjs.php?idUser=$idUser&error=1&eventsus_message2=" . urlencode($eventsus_message2) . "#evenements");
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

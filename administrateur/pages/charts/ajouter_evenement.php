<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $event_name = $_POST['event_name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

    // Vérification de l'existence de la date dans la base de données
    $existing_event = $conn->prepare('SELECT * FROM events WHERE date = :date');
    $existing_event->bindParam(':date', $date);
    $existing_event->execute();

    if ($existing_event->rowCount() > 0) {
        $error_messageevent = "Un événement avec la même date existe déjà !";
        header("Location: chartjs.php?idUser=$idUser&error=1&error_messageevent=" . urlencode($error_messageevent) . "#evenements");
        exit();
    } else {
        // Si la date n'existe pas encore, procéder à l'insertion
        $image_url = "uploads/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_url);


        $stmt = $conn->prepare("INSERT INTO events (event_name, description, date, image_url) 
                            VALUES (:event_name, :description, :date, :image_url)");
        $stmt->bindParam(':event_name', $event_name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':date', $date);

        $stmt->bindParam(':image_url', $image_url);

        $stmt->execute();
        $conn = null;
        $eventsus_message = "Les données ont été insérées avec succès !";
        header("Location: chartjs.php?idUser=$idUser&error=1&eventsus_message=" . urlencode($eventsus_message) . "#evenements");
        exit();


        header("Location: chartjs.php?idUser=$idUser#evenements");
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

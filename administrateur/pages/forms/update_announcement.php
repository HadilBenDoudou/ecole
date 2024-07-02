<?php
// Vérifier si les données du formulaire sont envoyées et non vides
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && !empty($_POST['id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
    try {
        // Connexion à la base de données
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $date = $_POST['date'];
        $title = $_POST['title'];
        $status = $_POST['status'];
        $description = $_POST['description'];

        // Préparer et exécuter la requête de mise à jour
        $sql = "UPDATE Announcements SET Date = ?, Title = ?, Status = ?, Description = ? WHERE AnnouncementID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$date, $title, $status, $description, $id]);

        // Redirection vers la page précédente après la mise à jour
        $anonce2 = "Les données ont été modifiées avec succès !";
        header("Location: annonce.php?idUser=$idUser&edit_success=" . urlencode($anonce2));
        exit();
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
} else {
    // Redirection vers la page précédente si les données du formulaire ne sont pas envoyées ou sont vides
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}

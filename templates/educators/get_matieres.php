<?php
// Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['code_matiere'])) {
        $codeMatiere = $_GET['code_matiere'];
        $sql = "SELECT * FROM tablematiere WHERE CodeMatiere = :codeMatiere";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':codeMatiere', $codeMatiere);
        $stmt->execute();

        $matieres_html = "<div class='row'>";

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $randomImage = "course-" . rand(4, 9) . ".png";

                // Construire le bloc HTML pour chaque matière
                $matieres_html .= "<div >";
                $matieres_html .= "<div class='course-block'>";
                $matieres_html .= "<div class='img-block'>";
                $matieres_html .= "<img src='assets/media/courses/$randomImage' alt='' />";
                $matieres_html .= "</div>";
                $matieres_html .= "<div class='text-block'>";
                $matieres_html .= "<h3>{$row['NomMatiere']}</h3>";
                $matieres_html .= "<div class='detail-sec'>";
                $matieres_html .= "<span><i class='fas fa-users'></i> ";
                $matieres_html .= "<span><i class='fas fa-book'></i> ";
                $matieres_html .= "</div>";
                $matieres_html .= "<a href='contact.php' class='educators-btn medium yellow'>Postuler Maintenant</a>";
                $matieres_html .= "</div>";
                $matieres_html .= "</div>";
                $matieres_html .= "</div>"; // Fermeture de la div de chaque bloc de matière
            }
        }

        // Fermer la dernière ligne
        $matieres_html .= "</div>";

        // Renvoyer le contenu HTML des matières
        echo $matieres_html;
    } else {
        // Si aucun code de matière spécifié
        echo "<div class='col-12'><p>Veuillez entrer un code de matière pour afficher les résultats.</p></div>";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion à la base de données
    echo "Échec de la connexion: " . $e->getMessage();
}

// Fermer la connexion à la base de données
$conn = null;

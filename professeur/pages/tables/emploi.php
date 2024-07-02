<?php
require_once('../../identifier.php');
require_once('../../connexiondb.php');

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ecole", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Supposons que vous avez déjà récupéré l'ID de l'utilisateur connecté
$id_utilisateur = isset($_GET['id']) ? intval($_GET['id']) : 0;

try {
    // Requête pour récupérer les informations de la carte étudiante de l'utilisateur connecté
    $sql_carte_etudiante = "SELECT carte_professeur FROM utilisateur WHERE iduser = ?";
    $stmt_carte_etudiante = $pdo->prepare($sql_carte_etudiante);
    $stmt_carte_etudiante->execute([$id_utilisateur]);

    if ($stmt_carte_etudiante->rowCount() > 0) {
        $carte_etudiante = $stmt_carte_etudiante->fetchColumn();

        // Requête pour récupérer la classe de l'étudiant à partir de la carte étudiante
        $sql_classe_etudiant = "SELECT classe FROM etudiant WHERE carte_etudiant = ?";
        $stmt_classe_etudiant = $pdo->prepare($sql_classe_etudiant);
        $stmt_classe_etudiant->execute([$carte_etudiante]);

        if ($stmt_classe_etudiant->rowCount() > 0) {
            $classe_etudiant = $stmt_classe_etudiant->fetchColumn();

            // Requête pour récupérer l'image de l'emploi étudiant en fonction de la classe
            $sql_image_emploi_etudiant = "SELECT image_file FROM emplois_etudiant WHERE classe = ?";
            $stmt_image_emploi_etudiant = $pdo->prepare($sql_image_emploi_etudiant);
            $stmt_image_emploi_etudiant->execute([$classe_etudiant]);

            if ($stmt_image_emploi_etudiant->rowCount() > 0) {
                $image_file = $stmt_image_emploi_etudiant->fetchColumn();

                // Affichage de l'image de l'emploi étudiant
                echo "<div style='text-align: center;'>"; // Div pour centrer le contenu
                echo "<img src='../../administrateur/pages/forms/$image_file' alt='Emploi étudiant' style='width: 80%; height: auto; display: block; margin: 0 auto;'>"; // Image avec styles
                echo "</div>"; // Fin de la div de centrage

            } else {
                echo "Aucune image trouvée pour cet emploi étudiant.";
            }
        } else {
            echo "Aucune classe trouvée pour cette carte étudiante.";
        }
    } else {
        echo "Aucune carte étudiante trouvée pour cet utilisateur.";
    }
} catch (PDOException $e) {
    die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
}

// Fermeture de la connexion à la base de données
$pdo = null;

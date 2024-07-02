<?php
require '../../../vendor/autoload.php'; // Inclure la bibliothèque PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si idUser est présent dans l'URL
    if (isset($_GET['idUser'])) {
        // Récupérer le sujet et le message du formulaire
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $idUser = $_GET['idUser'];

        // Connexion à la base de données avec PDO
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ecole";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupérer la classe depuis le formulaire POST
            $classe = $_POST['classe'];

            // Requête SQL pour récupérer l'identifiant du professeur à partir de l'identifiant utilisateur
            $stmtProfId = $conn->prepare("SELECT carte_professeur FROM utilisateur WHERE iduser = :idUser");
            $stmtProfId->bindParam(':idUser', $idUser, PDO::PARAM_INT);
            $stmtProfId->execute();

            // Vérifier si l'identifiant du professeur a été trouvé
            if ($stmtProfId->rowCount() > 0) {
                $profId = $stmtProfId->fetch(PDO::FETCH_ASSOC)['carte_professeur'];

                // Requête SQL pour récupérer le nom et le prénom du professeur à partir de son identifiant
                $stmtProf = $conn->prepare("SELECT nom, prenom FROM professeur WHERE carte_professeur = :profId");
                $stmtProf->bindParam(':profId', $profId, PDO::PARAM_STR);
                $stmtProf->execute();

                // Vérifier si des résultats ont été trouvés
                if ($stmtProf->rowCount() > 0) {
                    $professeur = $stmtProf->fetch(PDO::FETCH_ASSOC);
                    $nomExpediteur = $professeur['nom'];
                    $prenomExpediteur = $professeur['prenom'];
                } else {
                    throw new Exception("Aucun professeur trouvé avec l'identifiant $profId.");
                }
            } else {
                throw new Exception("Aucun utilisateur trouvé avec l'identifiant $idUser.");
            }

            // Requête SQL pour récupérer les adresses email des étudiants de la classe
            $sql = "SELECT utilisateur.email 
                    FROM utilisateur 
                    JOIN etudiant ON utilisateur.carte_etudiant = etudiant.carte_etudiant 
                    WHERE utilisateur.carte_etudiant IS NOT NULL 
                    AND etudiant.classe = :classe";

            // Préparer la requête
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':classe', $classe, PDO::PARAM_STR);
            $stmt->execute();

            // Tableau pour stocker toutes les adresses email
            $destinataires = array();

            // Parcourir les résultats et ajouter les adresses email au tableau
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $destinataires[] = $row["email"];
            }

            // Vérifier s'il y a des destinataires
            if (!empty($destinataires)) {
                // Créer une nouvelle instance de PHPMailer
                $mail = new PHPMailer(true);

                // Configuration SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Serveur SMTP pour Gmail
                $mail->SMTPAuth = true;
                $mail->Username = 'consultwedo@gmail.com'; // Votre adresse e-mail Gmail
                $mail->Password = 'wsde nowg lpbr lspu'; // Votre mot de passe Gmail
                $mail->SMTPSecure = 'tls'; // Protocole de sécurité
                $mail->Port = 587; // Port SMTP

                // Définir l'expéditeur
                $mail->setFrom('consultwedo@gmail.com', 'ecole');

                // Ajouter chaque destinataire à l'e-mail
                foreach ($destinataires as $destinataire) {
                    $mail->addAddress($destinataire);
                }

                // Contenu de l'e-mail
                $mail->isHTML(true);
                $mail->Subject = $sujet; // Utiliser le sujet du formulaire
                // Concaténer le message avec le nom de la classe et un message de remerciement
                $mail->Body = $message . "<br><br>Je suis " . $nomExpediteur . " " . $prenomExpediteur . ". Classe : " . $classe . "<br>Merci !";


                // Envoyer l'e-mail
                if ($mail->send()) {
                    $mail = "Email envoyé à tous les destinataires.";
                    header("Location:basic_elements.php?idUser=$idUser&mail=" . urlencode($mail));
                    exit();
                } else {
                    throw new Exception("Erreur lors de l'envoi de l'e-mail.");
                }
            } else {
                echo "Aucun utilisateur trouvé pour l'envoi de l'e-mail collectif.";
            }
        } catch (PDOException $e) {
            echo "Échec de la connexion à la base de données : " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }

        // Fermer la connexion à la base de données
        $conn = null;
    } else {
        echo "L'identifiant de l'utilisateur n'a pas été fourni.";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}

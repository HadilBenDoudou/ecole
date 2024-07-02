<?php
require '../../../vendor/autoload.php'; // Inclure la bibliothèque PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si la classe, les notes et les étudiants ont été envoyés
    if (isset($_POST['classe'], $_POST['notes'], $_POST['etudiants'])) {
        // Récupérer la classe, les notes et les étudiants soumis
        $classe = $_POST['classe'];
        $notes = $_POST['notes'];
        $etudiants = $_POST['etudiants'];
        // Vérifier si 'idUser' est défini dans la requête GET
        if (isset($_GET['idUser'])) {
            $idUser = $_GET['idUser'];

            // Connexion à la base de données avec PDO
            $dsn = "mysql:host=localhost;dbname=ecole;charset=utf8";
            $username = "root";
            $password = "";

            try {
                $conn = new PDO($dsn, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Requête SQL pour récupérer la carte_professeur de l'utilisateur
                $stmtProfId = $conn->prepare("SELECT carte_professeur FROM utilisateur WHERE iduser = :idUser");
                $stmtProfId->bindParam(':idUser', $idUser, PDO::PARAM_INT);
                $stmtProfId->execute();

                // Vérifier si l'identifiant de l'utilisateur a été trouvé
                if ($stmtProfId->rowCount() > 0) {
                    $profId = $stmtProfId->fetch(PDO::FETCH_ASSOC)['carte_professeur'];

                    // Requête SQL pour récupérer le nom et le prénom du professeur à partir de son identifiant
                    $stmtProf = $conn->prepare("SELECT nom, prenom FROM professeur WHERE carte_professeur = :profId");
                    $stmtProf->bindParam(':profId', $profId, PDO::PARAM_STR);
                    $stmtProf->execute();
                    $professor = $stmtProf->fetch(PDO::FETCH_ASSOC);

                    // Préparer la requête pour récupérer les adresses e-mail des étudiants individuellement
                    $sql = "SELECT utilisateur.email 
                            FROM utilisateur 
                            JOIN etudiant ON utilisateur.carte_etudiant = etudiant.carte_etudiant 
                            WHERE utilisateur.carte_etudiant IS NOT NULL 
                            AND etudiant.id = :id";

                    // Préparer la requête
                    $stmt = $conn->prepare($sql);

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
                    foreach ($etudiants as $etudiant_id) {
                        $stmt->bindParam(':id', $etudiant_id, PDO::PARAM_INT);
                        $stmt->execute();
                        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $mail->addAddress($row["email"]);
                            // Contenu de l'e-mail
                            $mail->isHTML(true);
                            $mail->Subject = "Notes pour la classe $classe"; // Sujet de l'e-mail
                            // Corps de l'e-mail contenant les notes
                            $mail->Body = "<h2>Notes pour la classe $classe :</h2>";
                            $mail->Body .= "<ul>";
                            $mail->Body .= "<li>Note : " . $notes[$etudiant_id] . "</li>";
                            $mail->Body .= "</ul>";
                            $mail->Body .= "<br><br>Envoyé par : " . $professor['prenom'] . " " . $professor['nom'] . ". Classe : " . $classe . "<br>Merci !";
                            // Envoyer l'e-mail
                            if (!$mail->send()) {
                                throw new Exception("Erreur lors de l'envoi de l'e-mail à l'étudiant avec l'ID $etudiant_id.");
                            }
                            $mail->clearAddresses(); // Effacer les adresses pour le prochain e-mail
                        }
                    }
                    $mail2 = "Emails envoyés à tous les destinataires.";
                    header("Location: chartjs.php?idUser=$idUser&mail2=" . urlencode($mail2));
                    exit();
                } else {
                    echo "Impossible de trouver l'utilisateur avec cet ID.";
                }
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
            } catch (Exception $e) {
                echo "Erreur : " . $e->getMessage();
            }

            // Fermer la connexion à la base de données
            $conn = null;
        } else {
            echo "L'identifiant de l'utilisateur (idUser) est manquant dans la requête GET.";
        }
    } else {
        echo "Veuillez soumettre à la fois la classe, les notes et les étudiants.";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}

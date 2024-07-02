<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=ecole';
$username = 'root';
$password = '';
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
try {
    $connexion = new PDO($dsn, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si des données ont été soumises via le formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $id = $_POST['id'];
        $nomMatiere = $_POST['nom'];
        $nomProfesseur = $_POST['nomprofesseur'];
        $professeurID = $_POST['professeur'];
        $codeMatiere = $_POST['code'];

        // Vérifier la longueur du code de matière
        if (strlen($codeMatiere) === 8) {
            // Vérifier si le code de matière existe déjà dans la base de données
            $sql_check = "SELECT ID FROM tablematiere WHERE CodeMatiere = :code AND ID != :id";
            $stmt_check = $connexion->prepare($sql_check);
            $stmt_check->bindParam(':code', $codeMatiere);
            $stmt_check->bindParam(':id', $id);
            $stmt_check->execute();
            if ($stmt_check->rowCount() > 0) {
                // Le code de matière existe déjà pour une autre matière, afficher un message d'erreur
                $erreur_messagecode = "Le code de matière existe déjà dans la base de données.";
                header("Location: basic-table.php?idUser=$idUser&erreur_messagecode=" . urlencode($erreur_messagecode));
                exit();
            }

            // Requête SQL pour mettre à jour la matière dans la base de données
            $requete = "UPDATE tablematiere SET NomMatiere = :nom, NomProfesseur = :nom_professeur, ProfesseurID = :professeur_id, CodeMatiere = :code WHERE ID = :id";
            $statement = $connexion->prepare($requete);
            $statement->bindParam(':nom', $nomMatiere);
            $statement->bindParam(':nom_professeur', $nomProfesseur);
            $statement->bindParam(':professeur_id', $professeurID);
            $statement->bindParam(':code', $codeMatiere);
            $statement->bindParam(':id', $id);
            $statement->execute();

            // Redirection vers une page après la modification
            $succes_messagecode = "Matière modifiée avec succès.";
            header("Location: basic-table.php?idUser=$idUser&succes_messagecode=" . urlencode($succes_messagecode));
            exit();
        } else {
            // La longueur du code de matière est incorrecte, afficher un message d'erreur
            $erreur_message44 = "La longueur du code de matière doit être exactement de 8 caractères.";
            header("Location: basic-table.php?idUser=$idUser&erreur_message44=" . urlencode($erreur_message44));
            exit();
        }
    } else {
        echo "Le formulaire de modification n'a pas été soumis.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

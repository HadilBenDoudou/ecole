<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si toutes les données nécessaires sont présentes
    if (isset($_POST['nom_matiere'], $_POST['nom_prof'], $_POST['professeur_id'], $_POST['code_matiere'])) {
        // Récupération des données du formulaire
        $nom_matiere = $_POST['nom_matiere'];
        $nom_prof = $_POST['nom_prof'];
        $carte_professeur = $_POST['professeur_id']; // Utilisez la carte du professeur comme identifiant
        $code_matiere = $_POST['code_matiere'];

        try {
            // Connexion à la base de données avec PDO
            $pdo = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

            // Configuration de PDO pour afficher les erreurs
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparation de la requête SQL pour insérer une nouvelle matière
            $stmt = $pdo->prepare("INSERT INTO tablematiere (NomMatiere, NomProfesseur, ProfesseurID, CodeMatiere) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nom_matiere, $nom_prof, $carte_professeur, $code_matiere]);

            // Récupération de l'ID de la dernière insertion
            $lastInsertId = $pdo->lastInsertId();

            // Fermeture de la connexion PDO
            $pdo = null;

            // Envoi de la réponse avec l'ID de la matière ajoutée
            http_response_code(200);
            header("Location: formulairedeposer.php?professeur_id=$carte_professeur&id_matiere=$lastInsertId");
            exit; // Arrêter l'exécution du script après la redirection

            echo "Matière ajoutée avec succès. ID de la matière ajoutée : $lastInsertId";
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur
            http_response_code(500);
            echo "Erreur lors de l'ajout de la matière : " . $e->getMessage();
        }
    } else {
        // Si des champs sont manquants dans le formulaire
        http_response_code(400);
        echo "Tous les champs du formulaire doivent être remplis.";
    }
} else {
    // Si le formulaire n'a pas été soumis via la méthode POST
    http_response_code(405);
    echo "Le formulaire doit être soumis via la méthode POST.";
}

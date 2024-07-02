<?php

require_once('../../connexiondb.php');

// Vérifier si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_GET['formation_id']) || !isset($_GET['id'])) {
        echo "L'identifiant de l'événement ou de l'utilisateur n'a pas été fourni.";
        exit;
    }

    $eventId = $_GET['formation_id'];
    $userId = $_GET['id'];

    // Récupérer la carte étudiante de l'utilisateur à partir de la table utilisateur
    $queryUser = "SELECT carte_etudiant FROM utilisateur WHERE iduser = :id";
    $stmtUser = $pdo->prepare($queryUser);
    $stmtUser->bindParam(':id', $userId);
    $stmtUser->execute();

    $userData = $stmtUser->fetch(PDO::FETCH_ASSOC);

    if (!$userData) {
        echo "L'utilisateur n'existe pas.";
        exit;
    }

    $studentCard = $userData['carte_etudiant'];

    // Vérifier si l'utilisateur est déjà inscrit à cet événement
    $checkQuery = "SELECT * FROM formationmembre WHERE formation_id = :formation_id AND carte_etudiant = :carte_etudiant";
    $stmtCheck = $pdo->prepare($checkQuery);
    $stmtCheck->bindParam(':formation_id', $eventId);
    $stmtCheck->bindParam(':carte_etudiant', $studentCard);
    $stmtCheck->execute();

    $alreadyRegistered = $stmtCheck->fetch(PDO::FETCH_ASSOC);

    if ($alreadyRegistered) {
        echo "<script>alert('Vous êtes déjà inscrit à cette formation.'); window.location.href = 'blog-detail.php?formation_id=$eventId';</script>";
        exit;
    } else {
        // Vérifier si l'utilisateur est un étudiant
        $query = "SELECT e.nom, e.prenom, e.classe, f.responsable_formation 
                  FROM etudiant e
                  JOIN formations f 
                  WHERE e.carte_etudiant = :carte_etudiant AND f.formation_id = :formation_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':carte_etudiant', $studentCard);
        $stmt->bindParam(':formation_id', $eventId);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $nom = $result['nom'];
            $prenom = $result['prenom'];
            $classe = $result['classe'];
            $responsableFormation = $result['responsable_formation'];

            // Insérer l'utilisateur dans la table formationmembre
            $insertQuery = "INSERT INTO formationmembre (nom, prenom, carte_etudiant, classe, formation_id, formateur_id) 
                            VALUES (:nom, :prenom, :carte_etudiant, :classe, :formation_id, :formateur_id)";
            $stmtInsert = $pdo->prepare($insertQuery);
            $stmtInsert->bindParam(':nom', $nom);
            $stmtInsert->bindParam(':prenom', $prenom);
            $stmtInsert->bindParam(':carte_etudiant', $studentCard);
            $stmtInsert->bindParam(':classe', $classe);
            $stmtInsert->bindParam(':formation_id', $eventId);
            $stmtInsert->bindParam(':formateur_id', $responsableFormation);
            $stmtInsert->execute();

            // Afficher une alerte pour informer l'utilisateur de l'inscription réussie
            echo "<script>alert('Vous êtes inscrit à la formation avec succès !'); window.location.href = 'blog-detail.php?formation_id=$eventId';</script>";
            exit;
        } else {
            echo "Vous devez être un étudiant pour vous inscrire à cette formation.";
        }
    }
}

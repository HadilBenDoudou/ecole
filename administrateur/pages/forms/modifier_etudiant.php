<?php
$serveur = "localhost";
$nom_utilisateur = "root";
$mot_de_passe = "";
$nom_base_de_donnees = "ecole";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", $nom_utilisateur, $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id_etudiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $carte_etudiant = $_POST['carte_etudiant'];
    $classe = $_POST['classe'];

    // Vérification de la longueur de la carte étudiant
    if (strlen($carte_etudiant) != 8) {
        echo "<script>alert('La carte étudiant doit contenir exactement 8 caractères');</script>";
        echo "<script>window.location.href = 'basic_elements.php?idUser=" . $idUser . "#etudiant';</script>";
        exit();
    }

    // Vérification si le numéro de carte étudiant existe déjà
    $verif_query = "SELECT COUNT(*) AS count FROM etudiant WHERE carte_etudiant = :carte_etudiant AND id != :id";
    $verif_stmt = $connexion->prepare($verif_query);
    $verif_stmt->bindParam(':carte_etudiant', $carte_etudiant);
    $verif_stmt->bindParam(':id', $id);
    $verif_stmt->execute();
    $result = $verif_stmt->fetch(PDO::FETCH_ASSOC);
    if ($result['count'] > 0) {
        echo "<script>alert('Le numéro de carte étudiant existe déjà');</script>";
        echo "<script>window.location.href = 'basic_elements.php?idUser=" . $idUser . "#etudiant';</script>";
        exit();
    }

    // Si tout est bon, procéder à la modification
    $requete = $connexion->prepare("UPDATE etudiant SET nom = :nom, prenom = :prenom, carte_etudiant = :carte_etudiant, classe = :classe WHERE id = :id");

    $requete->bindParam(':id', $id);
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':carte_etudiant', $carte_etudiant);
    $requete->bindParam(':classe', $classe);

    $requete->execute();
    echo "<script>alert('Opération de modification réussie');</script>";
    header("Location: basic_elements.php?idUser=$idUser#etudiant");
    exit();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$connexion = null;

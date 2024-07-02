<?php
require_once('../../identifier.php');
require_once('../../connexiondb.php');

$iduser = $_SESSION['user']['iduser'];

$oldpwd = isset($_POST['oldpwd']) ? $_POST['oldpwd'] : "";
$newpwd = isset($_POST['newpwd']) ? $_POST['newpwd'] : "";

$requete = "SELECT * FROM utilisateur WHERE iduser = ? AND pwd = MD5(?)";
$resultat = $pdo->prepare($requete);
$resultat->execute([$iduser, $oldpwd]);

$msg = "";
$interval = 3;
$url = "../../login.php";

if ($resultat->fetch()) {
    $requete = "UPDATE utilisateur SET pwd = MD5(?) WHERE iduser = ?";
    $params = array($newpwd, $iduser);
    $resultat = $pdo->prepare($requete);
    if ($resultat->execute($params)) {
        echo "<script>alert('Félicitation! Votre mot de passe est modifié avec succès')</script>";
        header("Location: ../../login.php");
        exit(); // Stop further execution
    } else {
        $msg = "Error updating password. Please try again later.";
    }
} else {
    echo "<script>alert('Erreur! L\'ancien mot de passe est incorrect !!!!')</script>";
    header("Location: ../../login.php");
    exit(); // Stop further execution
}

// Redirect with error message
header("Location: ../../login.php?msg=" . urlencode($msg));

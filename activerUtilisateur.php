<?php
//Démarre une nouvelle session ou reprend une session existante.  
session_start();

require_once('connexiondb.php');

$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : 0;
$etat = isset($_GET['etat']) ? $_GET['etat'] : 0;

if ($etat == 1)
    $newEtat = 0;
else
    $newEtat = 1;

$requete = "UPDATE utilisateur SET etat=? WHERE iduser=?";
$params = array($newEtat, $idUser);

$resultat = $pdo->prepare($requete);
$resultat->execute($params);



// Redirection avec le paramètre 'sender' inclus dans l'URL
header('Location: professeur/pages/tables/basic-table.php');

<?php

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




header('Location: administrateur/pages/tables/basic-table.php');

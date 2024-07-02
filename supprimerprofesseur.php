<?php
session_start();
require_once('connexiondb.php');

$idUser = isset($_GET['idUser1']) ? $_GET['idUser1'] : 0;
$sender = isset($_GET['sender']) ? $_GET['sender'] : '';
$iduser = isset($_GET['idUser']) ? $_GET['idUser'] : null; // Récupérer le paramètre sender

$requete = "DELETE FROM utilisateur WHERE idUser=?";
$params = array($idUser);
$resultat = $pdo->prepare($requete);
$resultat->execute($params);

// Rediriger vers indexx.php avec le paramètre sender dans l'URL
header('Location: administrateur/pages/tables/basic-table.php?idUser=' . $iduser);

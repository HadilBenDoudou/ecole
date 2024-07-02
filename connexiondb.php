<?php
//connection a la base.
$host = "localhost";
$dbname = "ecole";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Autres configurations PDO...
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}

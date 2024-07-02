<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecole";
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $login = $_POST["login"];
        $email = $_POST["email"];

        $sql = "UPDATE utilisateur SET login = :login, email = :email WHERE iduser = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        echo "<script>alert('Utilisateur mis à jour avec succès.');</script>";
        header("Location: loginp.php?idUser=$id");
    } else {
        echo "<script>alert('Le formulaire n'a pas été soumis.');</script>";
        echo "<script>window.location = 'indexx.php?idUser=<?php echo $idUser; ?>#contact';</script>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

$pdo = null;

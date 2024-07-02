<?php
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Inclure votre fichier de configuration de base de données
  require_once "connexiondb.php";

  // Récupérer les données du formulaire
  $idUser = $_POST['idUser'];
  $newLogin = $_POST['newLogin'];
  $newEmail = $_POST['newEmail'];
  $newRole = $_POST['newRole'];

  // Vérifier si l'e-mail existe déjà dans la base de données
  $checkEmailStmt = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email AND iduser != :id");
  $checkEmailStmt->bindParam(":email", $newEmail, PDO::PARAM_STR);
  $checkEmailStmt->bindParam(":id", $idUser, PDO::PARAM_INT);
  $checkEmailStmt->execute();

  if ($checkEmailStmt->rowCount() > 0) {
    // L'e-mail existe déjà dans la base de données, afficher un message d'erreur
    $compte_message1 = "L'e-mail entré existe déjà.";
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php'; // Définir une page de référence par défaut si $_SERVER['HTTP_REFERER'] n'est pas défini
    $redirect_url = $referer . (parse_url($referer, PHP_URL_QUERY) ? '&' : '?') . 'error=1&compte_message1=' . urlencode($compte_message1);
    header("Location: $redirect_url");
    exit();
  } else {
    // Préparer la requête SQL pour mettre à jour l'utilisateur
    $sql = "UPDATE utilisateur SET login = :login, email = :email, role = :role WHERE iduser = :id";

    if ($stmt = $pdo->prepare($sql)) {
      // Liaison des paramètres
      $stmt->bindParam(":login", $newLogin, PDO::PARAM_STR);
      $stmt->bindParam(":email", $newEmail, PDO::PARAM_STR);
      $stmt->bindParam(":role", $newRole, PDO::PARAM_STR);
      $stmt->bindParam(":id", $idUser, PDO::PARAM_INT);

      // Exécution de la requête
      if ($stmt->execute()) {
        $compte_message = "Les données ont été mises à jour avec succès !";
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php'; // Définir une page de référence par défaut si $_SERVER['HTTP_REFERER'] n'est pas défini
        $redirect_url = $referer . (parse_url($referer, PHP_URL_QUERY) ? '&' : '?') . 'error=0&compte_message=' . urlencode($compte_message);
        header("Location: $redirect_url");
        exit();
      } else {
        echo "Erreur lors de l'exécution de la requête.";
      }
    }
  }

  // Fermer la connexion à la base de données
  unset($pdo);
}

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if writing ID and comment content are set and not empty
    if (isset($_POST['writing_id']) && !empty($_POST['writing_id']) && isset($_POST['content']) && !empty($_POST['content'])) {
        // Sanitize inputs to prevent SQL injection
        $writing_id = $_POST['writing_id'];
        $content = htmlspecialchars($_POST['content']);

        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecole";

        try {
            // Create a new PDO instance
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // SQL statement to insert the comment into the database
            $sql = "INSERT INTO Commentaires (id_ecriture, contenu) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            // Execute the prepared statement
            $stmt->execute([$writing_id, $content]);

            // Close the database connection
            $conn = null;

            // Redirect to the page where the comment was added
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        // Redirect to the previous page if writing ID or comment content is missing
        header("Location: previous_page.php");
        exit();
    }
}

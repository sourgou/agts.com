<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agts_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Préparer et lier
    $stmt = $conn->prepare("INSERT INTO messages (name, prenom, email, phone, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $prenom, $email, $phone, $message);
    if ($stmt === false) {
        die("Erreur de préparation : " . $conn->error);
    }

    $stmt->bind_param("sssss", $name, $prenom, $email, $phone, $message);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "<script>alert('Message envoyé avec succès !'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Échec de l\'envoi du message : " . $stmt->error . "'); window.location.href='index.php';</script>";
    }

    $stmt->close();
} else {
    echo "Méthode non autorisée.";
}

$conn->close();
?>

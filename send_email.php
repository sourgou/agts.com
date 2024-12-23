<?php
// Connexion à la base de données
$servername = "localhost"; // ou l'adresse de ton serveur
$username = "root"; // par défaut pour XAMPP
$password = ""; // par défaut pour XAMPP, sinon mets ton mot de passe
$dbname = "agts_db";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prenom']); // Ajouté ici pour le prénom
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']); // Ajouté ici
    $message = htmlspecialchars($_POST['message']);

    // Préparer et lier
    $stmt = $conn->prepare("INSERT INTO messages (name, prenom, email, phone, message) VALUES (?, ?, ?, ?, ?)"); // Modifié ici pour inclure le prénom
    $stmt->bind_param("sssss", $name, $prenom, $email, $phone, $message); // Modifié ici pour inclure le prénom

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "<script>alert('Message envoyé avec succès !'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Échec de l\'envoi du message. Veuillez réessayer.'); window.location.href='index.php';</script>";
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
} else {
    echo "Méthode non autorisée.";
}

$conn->close();
?>

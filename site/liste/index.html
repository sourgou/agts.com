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

// Récupérer les messages
$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Reçus</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="logo1.jpg" alt="Logo de Mon Entreprise" />
            
        </div>
        <nav>
            <ul>
                <li><a href="#about">À propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th> <!-- Ajouté ici pour le prénom -->
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $num = 1; // Initialiser le compteur
                    // Afficher chaque message
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['prenom']}</td> <!-- Affichage du prénom -->
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['message']}</td>
                                <td>{$row['created_at']}</td>
                              </tr>";
                        $num++; // Incrémenter le compteur
                    }
                } else {
                    echo "<tr><td colspan='7'>Aucun message trouvé.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Mon Entreprise</p>
    </footer>
</body>
</html>

<?php
// Fermer la connexion
$conn->close();
?>

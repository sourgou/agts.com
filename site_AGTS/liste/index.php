<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
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
    <title>Messages Reçus - AGTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0056b3;
            --secondary: #ff7d00;
            --accent: #00a896;
            --dark: #2d3748;
            --light: #f8f9fa;
            --text: #4a5568;
            --white: #ffffff;
            --table-header: #f1f5f9;
            --table-row-odd: #ffffff;
            --table-row-even: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--light);
        }

        /* Header */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo img {
            height: 60px;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-icon {
            background-color: var(--primary);
            color: var(--white);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-title {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--primary);
            display: inline-block;
        }

        .message-count {
            background-color: var(--primary);
            color: var(--white);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-left: 10px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border-radius: 10px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background-color: var(--primary);
            color: var(--white);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: var(--table-row-even);
        }

        tr:nth-child(odd) {
            background-color: var(--table-row-odd);
        }

        tr:hover {
            background-color: #edf2f7;
        }

        .message-cell {
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .message-cell:hover {
            white-space: normal;
            overflow: visible;
            position: relative;
            z-index: 1;
            background-color: var(--white);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .action-cell {
            text-align: center;
        }

        .action-btn {
            background-color: var(--accent);
            color: var(--white);
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.8rem;
        }

        .action-btn:hover {
            background-color: #008672;
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            th, td {
                padding: 10px 5px;
                font-size: 0.9rem;
            }
            
            .header-container {
                flex-direction: column;
                gap: 15px;
            }
            
            .admin-info {
                margin-top: 10px;
            }
        }

        @media (max-width: 600px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }

        /* No messages */
        .no-messages {
            text-align: center;
            padding: 40px;
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .no-messages i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="logo1.jpg" alt="Logo AGTS" />
            </div>
            <div class="admin-info">
                <div class="admin-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <span>Espace Administrateur</span>
            </div>
        </div>
    </header>
    
    <main>
        <h1 class="page-title">
            Messages Reçus
            <span class="message-count">
                <?php echo $result->num_rows; ?> message(s)
            </span>
        </h1>
        
        <?php if ($result->num_rows > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th class="action-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    while($row = $result->fetch_assoc()) :
                        $formatted_date = date("d/m/Y H:i", strtotime($row['created_at']));
                    ?>
                        <tr>
                            <td><?php echo $num; ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td class="message-cell" title="<?php echo htmlspecialchars($row['message']); ?>">
                                <?php echo htmlspecialchars(substr($row['message'], 0, 50)); ?>...
                            </td>
                            <td><?php echo $formatted_date; ?></td>
                            <td class="action-cell">
                                <button class="action-btn" onclick="window.location.href='mailto:<?php echo $row['email']; ?>?subject=AGTS%20-%20Réponse%20à%20votre%20message'">
                                    <i class="fas fa-reply"></i> Répondre
                                </button>
                            </td>
                        </tr>
                    <?php
                    $num++;
                    endwhile;
                    ?>
                </tbody>
            </table>
        <?php else : ?>
            <div class="no-messages">
                <i class="fas fa-inbox"></i>
                <h2>Aucun message trouvé</h2>
                <p>Aucun message n'a été reçu pour le moment.</p>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> AGTS - Tous droits réservés</p>
    </footer>

    <script>
        // Confirmation avant de répondre
        document.querySelectorAll('.action-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir répondre à ce message ?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>

<?php
// Fermer la connexion
$conn->close();
?>
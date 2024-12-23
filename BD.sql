-- Créer la base de données
CREATE DATABASE agts_db;

-- Utiliser la base de données
USE agts_db;

-- Créer la table messages
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,  -- Ajouté ici pour le prénom
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,  -- Ajouté ici pour le numéro de téléphone
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

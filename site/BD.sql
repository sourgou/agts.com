-- Créer la base de données
CREATE DATABASE agts_db;

-- Utiliser la base de données
USE agts_db;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

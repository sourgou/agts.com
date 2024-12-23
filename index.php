<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGTS</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo/logo1.jpg" alt="Logo de Mon Entreprise" />
        </div>
        <nav>
            <ul>
                <li><a href="#about">À propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <h1>Bienvenue chez AGTS</h1>
        <p>Votre partenaire disponible pour tous vos services.</p>
        <a href="#services" class="cta-button">Découvrez nos services</a>
    </section>

    <section id="services">
        <h2>Nos Différents Services</h2>
        <div class="services-container">
            <div class="service-item">Bureautique</div>
            <div class="service-item">Informatique</div>
            <div class="service-item">Vente de mobilier de bureau</div>
            <div class="service-item">Import-export et location de matériels</div>
            <div class="service-item">Prestations de services</div>
            <div class="service-item">Transport</div>
            <div class="service-item">Location de véhicule</div>
            <div class="service-item">Vente de véhicules</div>
            <div class="service-item">BTP</div>
            <div class="service-item">Forage</div>
        </div>
    </section>
    
    <section id="about">
        <h2>À propos de nous</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Nous sommes une entreprise dédiée à fournir les meilleurs services dans divers domaines, y compris la bureautique, l'informatique, et bien plus encore.</p>
                <p>Notre équipe est composée de professionnels expérimentés qui s'engagent à offrir une qualité exceptionnelle à nos clients.</p>
            </div>
            <div class="about-image">
                <img src="logo/logo.jpg" alt="Notre Équipe">
            </div>
        </div>
        <section id="contact">
        <h2>Contactez-nous</h2>
        <form id="contact-form" action="send_email.php" method="POST">
            <input type="text" name="name" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prénom" required> <!-- Champ Prénom ajouté ici -->
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Numéro de téléphone" required> <!-- Ajouté ici -->
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <div class="contact-info"></div>
    </section>
    
    <footer>
        <p>© 2024 AGTS. Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
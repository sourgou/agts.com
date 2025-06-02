<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGTS - Solutions Professionnelles Intégrées</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0056b3;       /* Bleu professionnel */
            --secondary: #ff7d00;     /* Orange vif */
            --accent: #00a896;        /* Vert émeraude */
            --dark: #2d3748;          /* Gris foncé */
            --light: #f8f9fa;         /* Blanc cassé */
            --text: #4a5568;          /* Gris texte */
            --white: #ffffff;
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

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 60px;
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.05);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
            position: relative;
        }

        nav ul li a {
            color: var(--dark);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
            padding: 5px 0;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        nav ul li a:hover:after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            padding: 0 20px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--white);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .cta-button {
            display: inline-block;
            background-color: var(--secondary);
            color: var(--white);
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 125, 0, 0.4);
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .cta-button:hover {
            background-color: #e67300;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 125, 0, 0.6);
        }

        /* Services Section */
        #services {
            padding: 80px 0;
            background-color: var(--white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-item {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .service-item:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: linear-gradient(to bottom, var(--primary), var(--accent));
            transition: height 0.3s ease;
        }

        .service-item:hover:before {
            height: 100%;
        }

        .service-item i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            display: block;
        }

        .service-item h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        /* About Section */
        #about {
            padding: 80px 0;
            background-color: var(--light);
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-text {
            padding-right: 30px;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Contact Section */
        #contact {
            padding: 80px 0;
            background-color: var(--white);
        }

        #contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: var(--white);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        #contact-form input,
        #contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        #contact-form input:focus,
        #contact-form textarea:focus {
            border-color: var(--primary);
            outline: none;
        }

        #contact-form textarea {
            min-height: 150px;
            resize: vertical;
        }

        #contact-form button {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            width: 100%;
        }

        #contact-form button:hover {
            background-color: #004494;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 86, 179, 0.4);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 30px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
            }

            .about-text {
                padding-right: 0;
                margin-bottom: 30px;
            }

            .hero h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            .logo {
                margin-bottom: 20px;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="logo/logo1.jpg" alt="Logo AGTS" />
            </div>
            <nav>
                <ul>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Solutions Professionnelles Intégrées</h1>
            <p>AGTS - Votre partenaire polyvalent pour tous vos besoins professionnels</p>
            <a href="#services" class="cta-button">Découvrez nos services</a>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Nos Services Complets</h2>
            </div>
            <div class="services-container">
                <div class="service-item">
                    <i class="fas fa-laptop"></i>
                    <h3>Bureautique</h3>
                    <p>Solutions complètes pour optimiser votre espace de travail</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-server"></i>
                    <h3>Informatique</h3>
                    <p>Services informatiques sur mesure pour votre entreprise</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-chair"></i>
                    <h3>Mobilier de bureau</h3>
                    <p>Vente de mobilier ergonomique et design pour vos bureaux</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>Import-export</h3>
                    <p>Location de matériels et solutions logistiques internationales</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Prestations de services</h3>
                    <p>Des solutions adaptées à tous vos besoins spécifiques</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-truck"></i>
                    <h3>Transport</h3>
                    <p>Services de transport fiables et sécurisés</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-car"></i>
                    <h3>Location de véhicule</h3>
                    <p>Une large gamme de véhicules pour tous vos déplacements</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-car-side"></i>
                    <h3>Vente de véhicules</h3>
                    <p>Véhicules neufs et d'occasion de qualité</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-hard-hat"></i>
                    <h3>BTP</h3>
                    <p>Services complets en bâtiment et travaux publics</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-water"></i>
                    <h3>Forage</h3>
                    <p>Solutions professionnelles pour vos besoins en forage</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>À propos de nous</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>AGTS est une entreprise dynamique et polyvalente, spécialisée dans la fourniture de solutions professionnelles intégrées. Notre mission est d'accompagner nos clients en leur offrant des services de qualité dans divers domaines d'activité.</p>
                    <p>Fondée sur des valeurs d'excellence, d'intégrité et d'innovation, notre entreprise s'engage à fournir des solutions sur mesure qui répondent précisément aux besoins spécifiques de chaque client.</p>
                    <p>Notre équipe est composée de professionnels expérimentés et passionnés, dévoués à offrir des services exceptionnels et à établir des relations durables avec nos clients.</p>
                </div>
                <div class="about-image">
                    <img src="logo/logo.jpg" alt="Équipe AGTS">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contactez-nous</h2>
            </div>
            <form id="contact-form" action="send_email.php" method="POST">
                <input type="text" name="name" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Numéro de téléphone" required>
                <textarea name="message" placeholder="Votre message" required></textarea>
                <button type="submit">Envoyer le message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2023 AGTS. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.service-item, .about-content, #contact-form').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
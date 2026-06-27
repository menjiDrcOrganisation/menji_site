<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menji DRC | Transformation Digitale & Cybersécurité à Kinshasa</title>
    <meta name="description" content="Menji DRC : Experts en solutions digitales en RDC. Développement web, mobile, UI/UX et cybersécurité pour entreprises ambitieuses.">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header class="oc-navbar">
        <div class="container nav-container">
            <div class="logo">MENJI<span>DRC</span></div>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('apropos') }}">À propos</a></li>
                    <li><a href="#services">Nos Services</a></li>
                    <li><a href="{{ route('realisations') }}">Nos réalisations</a></li>
                </ul>
            </nav>
            {{-- <a href="{{ route('demande') }}" class="btn-primary">Demander un devis</a> --}}
        </div>
    </header>

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <span class="badge">Partenaire Tech #1 en RDC</span>
                <h1>Bâtissez l'avenir de votre entreprise avec la <span>technologie</span>.</h1>
                <p>Menji DRC conçoit des solutions digitales fiables, innovantes et sur mesure pour les entreprises qui visent l'excellence à Kinshasa et à l'international.</p>
                <div class="hero-actions">
                    <a href="#contact" class="btn-main">Commencer votre projet</a>
                    <a href="{{ route('realisations') }}" class="btn-secondary">Voir nos réalisations</a>
                </div>
            </div>
            <div class="hero-illustration">
                <div class="oc-drawing">
                    <div class="circle-base"></div>
                    <i class="fas fa-laptop-code floating-icon icon-1"></i>
                    <i class="fas fa-shield-halved floating-icon icon-2"></i>
                    <i class="fas fa-database floating-icon icon-3"></i>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="title-center">Nos Solutions Digitales</h2>
            <div class="grid-services">
                <article class="service-card">
                    <div class="card-head"><i class="fas fa-globe"></i></div>
                    <h3>Développement Web</h3>
                    <p>Sites vitrines et plateformes e-commerce optimisés pour le SEO et la conversion.</p>
                </article>
                <article class="service-card">
                    <div class="card-head"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Développement Mobile</h3>
                    <p>Applications Android & iOS intuitives, adaptées aux réalités du marché africain.</p>
                </article>
                <article class="service-card">
                    <div class="card-head"><i class="fas fa-lock"></i></div>
                    <h3>Cybersécurité</h3>
                    <p>Protection de vos données et audit de sécurité pour une sérénité totale.</p>
                </article>
                <article class="service-card">
                    <div class="card-head"><i class="fas fa-bezier-curve"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>Conception d'interfaces modernes centrées sur l'expérience utilisateur.</p>
                </article>
                <article class="service-card">
                    <div class="card-head"><i class="fas fa-cloud"></i></div>
                    <h3>Cloud Computing</h3>
                    <p>Migration et gestion de vos infrastructures sur des serveurs sécurisés.</p>
                </article>
                <article class="service-card">
                    <div class="card-head"><i class="fas fa-microchip"></i></div>
                    <h3>Solutions SaaS</h3>
                    <p>Logiciels de gestion sur mesure pour pharmacies, bailleurs et églises.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container contact-box">
            <div class="contact-text">
                <h2>Prêt à passer au niveau supérieur ?</h2>
                <p>Discutons de vos besoins et recevez un audit digital gratuit sous 24h.</p>
                <ul class="contact-details">
                    <li><i class="fas fa-envelope"></i> contact@menjidrc.com</li>
                    <li><i class="fas fa-location-dot"></i> Gombe, Kinshasa, RDC</li>
                </ul>
            </div>
            <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nom de l'entreprise" required>
                <input type="email" name="email" placeholder="Votre email" required>
                <input type="text" name="service" placeholder="Service demandé (Web, Mobile, etc.)" required>
                <textarea name="message" placeholder="Décrivez votre projet..." minlength="10" required></textarea>
                <input type="hidden" name="subject" value="Demande depuis la page d'accueil">
                <label>
                    <input type="checkbox" name="consent" value="1" required>
                    J'accepte d'être recontacté par Menji DRC.
                </label>
                <button type="submit" class="btn-main">Envoyer ma demande</button>
            </form>
        </div>
    </section>

    <footer class="oc-footer">
        <div class="container footer-grid">
            <div class="footer-col brand-info">
                <div class="logo">MENJI<span>DRC</span></div>
                <p>Leader de la transformation digitale en RDC. Nous accompagnons les entreprises dans l'adoption des technologies de demain.</p>
                <div class="social-icons">
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Nos Solutions</h4>
                <ul>
                    <li><a href="#services">Développement Web</a></li>
                    <li><a href="#services">Applications Mobiles</a></li>
                    <li><a href="#services">Cybersécurité</a></li>
                    <li><a href="#services">Cloud Computing</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Menji DRC</h4>
                <ul>
                    <li><a href="{{ route('apropos') }}">Notre Vision</a></li>
                    <li><a href="{{ route('apropos') }}">L'Équipe</a></li>
                    {{-- <li><a href="{{ route('blog.index') }}">Études de cas</a></li> --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Ressources</h4>
                <ul>
                    {{-- <li><a href="{{ route('blog.index') }}">Blog Expertise</a></li> --}}
                    <li><a href="#">Mentions Légales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="https://wa.me/243XXXXXXXXX">Assistance Directe</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container bottom-flex">
                <p>&copy; 2026 MENJI DRC. Tous droits réservés. Kinshasa, République Démocratique du Congo.</p>
                <div class="lang-selector">
                    <span><i class="fas fa-globe"></i> Français (RDC)</span>
                </div>
            </div>
        </div>
    </footer>

    <div id="wa-chatbot">
        <div class="wa-popup" id="waPopup">
            <div class="wa-header">
                <strong>Support Menji DRC</strong>
                <span onclick="toggleWa()">&times;</span>
            </div>
            <div class="wa-body">
                Bonjour ! 👋 Besoin d'une solution tech ou d'un devis rapide ?
            </div>
            <div class="wa-footer">
                <a href="https://wa.me/243XXXXXXXXX" target="_blank" class="wa-link">Lancer la discussion</a>
            </div>
        </div>
        <button class="wa-btn" onclick="toggleWa()">
            <i class="fab fa-whatsapp"></i>
        </button>
    </div>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

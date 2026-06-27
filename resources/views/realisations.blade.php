<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menji DRC | Nos réalisations</title>
    <meta name="description" content="Découvrez quelques réalisations Menji DRC: web, mobile, cybersécurité et SaaS.">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header class="oc-navbar">
        <div class="container nav-container">
            <div class="logo"><a href="{{ route('accueil') }}">MENJI<span>DRC</span></a></div>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('apropos') }}">À propos</a></li>
                    <li><a href="{{ route('realisations') }}">Nos réalisations</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <a href="{{ route('demande') }}" class="btn-primary">Demander un devis</a>
        </div>
    </header>

    <main>
        <section class="about-hero">
            <div class="container">
                <span class="badge">Cas concrets</span>
                <h1>Nos <span class="highlight">réalisations</span> qui créent de l'impact</h1>
                <p class="subtitle">Des projets digitaux conçus pour répondre à des besoins réels: performance, sécurité et adoption utilisateur.</p>
            </div>
        </section>

        <section class="projects-showcase container">
            <div class="projects-grid">
                <article class="project-card">
                    <div class="project-head">
                        <span class="project-tag">Ticketing Platform</span>
                        <h3>KimiaTicket</h3>
                    </div>
                    <p>KimiaTicket est une plateforme numérique de billetterie conçue pour gérer la vente et le contrôle des billets de bout en bout, en remplaçant le papier par un système moderne et sécurisé.</p>

                    <h4 class="project-block-title">Fonctionnalités principales</h4>
                    <ul class="project-list">
                        <li><i class="fas fa-check-circle"></i> Création et gestion d'événements</li>
                        <li><i class="fas fa-check-circle"></i> Vente de billets en ligne</li>
                        <li><i class="fas fa-check-circle"></i> Paiement Mobile Money et autres moyens de paiement</li>
                        <li><i class="fas fa-check-circle"></i> Génération de billets électroniques avec QR Code</li>
                        <li><i class="fas fa-check-circle"></i> Validation des billets à l'entrée via scan QR Code</li>
                        <li><i class="fas fa-check-circle"></i> Tableau de bord organisateurs et statistiques de ventes en temps réel</li>
                        <li><i class="fas fa-check-circle"></i> Gestion des participants et notifications utilisateurs</li>
                    </ul>

                    <h4 class="project-block-title">Objectifs</h4>
                    <ul class="project-list">
                        <li><i class="fas fa-bullseye"></i> Réduire la fraude liée aux faux billets</li>
                        <li><i class="fas fa-bullseye"></i> Faciliter l'achat de billets sans déplacement</li>
                        <li><i class="fas fa-bullseye"></i> Donner un meilleur suivi des ventes aux organisateurs</li>
                        <li><i class="fas fa-bullseye"></i> Moderniser l'organisation des événements en RDC</li>
                    </ul>
                </article>

                <article class="project-card">
                    <div class="project-head">
                        <span class="project-tag">Smart Transport</span>
                        <h3>AxenTrans</h3>
                    </div>
                    <p>AxenTrans est une plateforme de transport intelligente qui permet aux voyageurs de rechercher, réserver et suivre leurs trajets auprès de plusieurs compagnies.</p>

                    <h4 class="project-block-title">Fonctionnalités voyageurs</h4>
                    <ul class="project-list">
                        <li><i class="fas fa-check-circle"></i> Recherche de trajets et réservation de billets</li>
                        <li><i class="fas fa-check-circle"></i> Paiement en ligne</li>
                        <li><i class="fas fa-check-circle"></i> Billet électronique et historique des voyages</li>
                        <li><i class="fas fa-check-circle"></i> Suivi du véhicule en temps réel</li>
                        <li><i class="fas fa-check-circle"></i> Notifications de départ et d'arrivée</li>
                    </ul>

                    <h4 class="project-block-title">Fonctionnalités compagnies</h4>
                    <ul class="project-list">
                        <li><i class="fas fa-check-circle"></i> Gestion des bus, chauffeurs et itinéraires</li>
                        <li><i class="fas fa-check-circle"></i> Gestion des réservations et des horaires</li>
                        <li><i class="fas fa-check-circle"></i> Statistiques d'exploitation</li>
                    </ul>

                    <h4 class="project-block-title">Suivi en temps réel</h4>
                    <ul class="project-list">
                        <li><i class="fas fa-map-marker-alt"></i> Géolocalisation GPS des véhicules</li>
                        <li><i class="fas fa-map"></i> Affichage cartographique avec Flutter Map</li>
                        <li><i class="fas fa-route"></i> Calcul d'itinéraire</li>
                        <li><i class="fas fa-sync-alt"></i> Mise à jour automatique de la position chauffeur</li>
                        <li><i class="fas fa-location-arrow"></i> Suivi de progression jusqu'à destination</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class="stats-bar">
            <div class="container stats-grid">
                <div class="stat-item">
                    <span class="stat-number">+50</span>
                    <span class="stat-label">Projets livrés</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">+20</span>
                    <span class="stat-label">Entreprises accompagnées</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Satisfaction client</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support & maintenance</span>
                </div>
            </div>
        </section>

        <section class="container contact" style="padding-top: 20px;">
            <div class="contact-box">
                <div class="contact-text">
                    <h2>Vous voulez un projet similaire ?</h2>
                    <p>Parlez-nous de votre besoin et nous construisons une solution adaptée à votre contexte.</p>
                </div>
                <div>
                    <a href="{{ route('demande') }}" class="btn-main">Lancer mon projet</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="oc-footer">
        <div class="container">
            <p>&copy; 2026 Menji DRC. Innovation digitale à Kinshasa.</p>
        </div>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

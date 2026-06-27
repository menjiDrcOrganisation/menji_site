<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menji DRC | À propos</title>
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
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('realisations') }}">Nos réalisations</a></li>
                </ul>
            </nav>
            {{-- <a href="{{ route('demande') }}" class="btn-primary">Demander un devis</a> --}}
        </div>
    </header>

    <main>
        <section class="about-hero">
            <div class="container">
                <span class="badge">Notre Histoire</span>
                <h1>L'innovation au cœur de la <span class="highlight">RDC</span>.</h1>
                <p class="subtitle">Menji DRC est née d'une ambition simple : combler le fossé technologique en offrant aux entreprises congolaises des solutions digitales de standard international.</p>
            </div>
        </section>

        <section class="vision-mission container">
            <div class="oc-grid-2">
                <div class="vision-card">
                    <div class="card-icon"><i class="fas fa-eye"></i></div>
                    <h2>Notre Vision</h2>
                    <p>Devenir le moteur de la souveraineté numérique en Afrique Centrale en propulsant les PME locales grâce à des infrastructures sécurisées et intelligentes.</p>
                </div>
                <div class="mission-card">
                    <div class="card-icon"><i class="fas fa-bullseye"></i></div>
                    <h2>Notre Mission</h2>
                    <p>Accompagner chaque client dans sa transformation digitale par un conseil stratégique, un développement d'excellence et une cybersécurité sans faille.</p>
                </div>
            </div>
        </section>

        <section class="stats-bar">
            <div class="container stats-grid">
                <div class="stat-item">
                    <span class="stat-number">+50</span>
                    <span class="stat-label">Projets livrés</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Clients satisfaits</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support Technique</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Sécurité Garantie</span>
                </div>
            </div>
        </section>

        <section class="team-section container">
            <h2 class="section-title">Rencontrez nos experts</h2>
            <p class="text-center">Une équipe pluridisciplinaire d'ingénieurs et de designers passionnés par l'impact technologique.</p>

            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">
                        <img src="https://ui-avatars.com/api/?name=Ingenieur+Directeur&background=7451eb&color=fff" alt="CEO">
                    </div>
                    <h3>Jonathan Menji</h3>
                    <p class="role">Lead Développeur & Visionnaire</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-avatar">
                        <img src="https://ui-avatars.com/api/?name=Expert+Cyber&background=34a853&color=fff" alt="CTO">
                    </div>
                    <h3>Sarah Kalala</h3>
                    <p class="role">Experte en Cybersécurité</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                    <li><a href="{{ route('accueil') }}#services">Développement Web</a></li>
                    <li><a href="{{ route('accueil') }}#services">Applications Mobiles</a></li>
                    <li><a href="{{ route('accueil') }}#services">Cybersécurité</a></li>
                    <li><a href="{{ route('accueil') }}#services">Cloud Computing</a></li>
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

                <!-- Expertise -->
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="adn-card">
                        <div class="adn-icon-wrapper">
                            <i class="bi bi-gear adn-icon"></i>
                            <div class="adn-badge">Expertise</div>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Notre Expertise</h3>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="bi bi-code-slash me-2"></i> Développement sur mesure</li>
                            <li class="mb-2"><i class="bi bi-palette me-2"></i> UX/UI Design innovant</li>
                            <li class="mb-2"><i class="bi bi-shield-lock me-2"></i> Cybersécurité intégrée</li>
                            <li class="mb-2"><i class="bi bi-phone me-2"></i> Solutions mobiles</li>
                            <li><i class="bi bi-cloud me-2"></i> Infrastructure Cloud</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

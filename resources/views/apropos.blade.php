@extends('layout')
@section('title', 'Menji Drc - A Propos')

@section('content')
    <style>
        :root {
            --menji-primary: #2c3e50;
            --menji-secondary: #3498db;
            --menji-accent: #f48915;
            --menji-dark: #1a1a2e;
            --menji-light: #f8f9fa;
            --menji-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            --menji-shadow: 0 10px 25px rgba(44, 62, 80, 0.1);
            --menji-border: #e2e8f0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        /* Hero Section */
        .hero-about {
            background: linear-gradient(rgba(26, 26, 46, 0.9), rgba(44, 62, 80, 0.9)), /*url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')*/;
            background-size: cover;
            background-position: center;
            color: white;
            padding: 180px 0 120px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-about::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: var(--menji-gradient);
            border-radius: 50%;
            opacity: 0.1;
            z-index: 1;
        }
        
        .hero-about::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -15%;
            width: 400px;
            height: 400px;
            background: var(--menji-gradient);
            border-radius: 50%;
            opacity: 0.1;
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .hero-badge {
            display: inline-block;
            padding: 8px 20px;
            background: var(--menji-accent);
            color: white;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        /* About Section */
        .about-section {
            padding: 100px 0;
            background: var(--menji-light);
            position: relative;
        }
        
        .about-img-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--menji-shadow);
            position: relative;
            transition: transform 0.5s ease;
        }
        
        .about-img-container:hover {
            transform: translateY(-10px);
        }
        
        .about-img-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--menji-gradient);
            opacity: 0.1;
            z-index: 1;
        }
        
        .about-stats {
            display: flex;
            gap: 30px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--menji-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* ADN Section */
        .adn-section {
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .adn-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--menji-gradient);
        }
        
        .adn-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem 2rem;
            height: 100%;
            transition: all 0.4s ease;
            border: 1px solid var(--menji-border);
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .adn-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--menji-shadow);
        }
        
        .adn-icon-wrapper {
            width: 80px;
            height: 80px;
            background: var(--menji-gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .adn-card:hover .adn-icon-wrapper {
            transform: rotate(5deg) scale(1.1);
        }
        
        .adn-icon {
            font-size: 2.5rem;
            color: white;
        }
        
        .adn-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 5px 12px;
            background: var(--menji-accent);
            color: white;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(244, 137, 21, 0.3);
        }
        
        /* Values Section */
        .values-section {
            padding: 100px 0;
            background: var(--menji-light);
        }
        
        .value-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem 2rem;
            height: 100%;
            transition: all 0.4s ease;
            border: 1px solid var(--menji-border);
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        
        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--menji-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .value-card:hover::before {
            transform: scaleX(1);
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--menji-shadow);
        }
        
        .value-icon {
            font-size: 3rem;
            color: var(--menji-primary);
            margin-bottom: 1.5rem;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .value-card:hover .value-icon {
            transform: scale(1.2);
            color: var(--menji-accent);
        }
        
        .value-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--menji-dark);
        }
        
        .value-description {
            color: #666;
            line-height: 1.6;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-about {
                padding: 120px 0 80px;
            }
            
            .hero-about h1 {
                font-size: 2.5rem;
            }
            
            .about-stats {
                gap: 20px;
                justify-content: center;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .adn-card,
            .value-card {
                padding: 2rem 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .adn-icon-wrapper {
                width: 70px;
                height: 70px;
            }
            
            .adn-icon {
                font-size: 2rem;
            }
            
            .value-icon {
                font-size: 2.5rem;
            }
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-on-scroll {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-about">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">À Propos de Nous</div>
                <h1 class="display-2 fw-bold mb-4">Qui sommes-nous ?</h1>
                <p class="lead fs-3 mb-4">Menji DRC - Innovation Technologique au Cœur de l'Afrique</p>
                <p class="fs-5 mx-auto" style="max-width: 800px;">
                    Une équipe passionnée qui transforme les défis digitaux en opportunités de croissance
                </p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-img-container">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="Équipe Menji DRC" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-header mb-4">
                        <h2 class="display-5 fw-bold mb-3">Notre Histoire</h2>
                        <p class="lead text-muted">Des solutions digitales sur mesure pour l'Afrique et au-delà</p>
                    </div>
                    
                    <div class="about-content">
                        <p class="mb-3">Fondée en 2021 par des experts en technologie digitale, Menji DRC est née de la passion pour l'innovation et la transformation numérique en République Démocratique du Congo.</p>
                        <p class="mb-3">Nous combinons expertise technique et créativité pour offrir des solutions sur mesure qui répondent aux défis spécifiques du marché africain tout en répondant aux standards internationaux.</p>
                        <p class="mb-4">Notre équipe est composée de professionnels passionnés, engagés à fournir des services de haute qualité dans les domaines du développement web, mobile, cloud computing et cybersécurité.</p>
                        
                        <div class="about-stats">
                            <div class="stat-item">
                                <div class="stat-number">3+</div>
                                <div class="stat-label">Années d'expérience</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Projets réussis</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">100%</div>
                                <div class="stat-label">Satisfaction client</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ADN Section -->
    <section class="adn-section bg-light">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-3">Notre ADN</h2>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    Les piliers fondamentaux qui définissent notre identité et guident nos actions
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Mission -->
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="adn-card">
                        <div class="adn-icon-wrapper">
                            <i class="bi bi-bullseye adn-icon"></i>
                            <div class="adn-badge">Mission</div>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Notre Mission</h3>
                        <p class="mb-3">Accompagner les entreprises dans la création de solutions numériques fiables, esthétiques et sécurisées.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Solutions personnalisées</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Approche centrée utilisateur</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sécurité intégrée</li>
                        </ul>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="adn-card">
                        <div class="adn-icon-wrapper">
                            <i class="bi bi-eye adn-icon"></i>
                            <div class="adn-badge">Vision</div>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Notre Vision</h3>
                        <p class="mb-3">Devenir la référence africaine dans l'innovation technologique.</p>
                        <div class="bg-primary bg-opacity-10 p-3 rounded mt-4">
                            <h4 class="h6 fw-bold text-primary mb-2">Notre ambition</h4>
                            <p class="mb-0 small">"Être le catalyseur de la révolution digitale en Afrique centrale d'ici 2030"</p>
                        </div>
                    </div>
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
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-3">Nos Valeurs Fondamentales</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">
                    Les principes qui guident chacune de nos actions et définissent notre culture d'entreprise
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card">
                        <i class="bi bi-shield-lock value-icon"></i>
                        <h3 class="value-title">Sécurité</h3>
                        <p class="value-description">
                            Nous priorisons la protection des données et systèmes de nos clients à chaque étape, avec des protocoles rigoureux et une approche proactive de la cybersécurité.
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card">
                        <i class="bi bi-lightbulb value-icon"></i>
                        <h3 class="value-title">Créativité</h3>
                        <p class="value-description">
                            Nous repoussons les limites conventionnelles pour offrir des solutions uniques et innovantes, adaptées aux contextes locaux tout en étant compétitives au niveau mondial.
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card">
                        <i class="bi bi-people value-icon"></i>
                        <h3 class="value-title">Proximité</h3>
                        <p class="value-description">
                            Une écoute active et un accompagnement personnalisé pour chaque client, avec une équipe disponible, réactive et engagée dans la réussite de vos projets.
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-card">
                        <i class="bi bi-cpu value-icon"></i>
                        <h3 class="value-title">Innovation</h3>
                        <p class="value-description">
                            Adoption des technologies émergentes pour des solutions à la pointe du progrès, tout en restant accessibles et pragmatiques pour répondre aux besoins réels.
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="value-card">
                        <i class="bi bi-award value-icon"></i>
                        <h3 class="value-title">Professionnalisme</h3>
                        <p class="value-description">
                            Exigence de qualité, respect des délais et éthique professionnelle irréprochable dans toutes nos interventions. Nous nous engageons à délivrer l'excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation au scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '50px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, observerOptions);

            // Observer pour les cartes
            document.querySelectorAll('.adn-card, .value-card').forEach(card => {
                observer.observe(card);
            });

            // Animation des statistiques
            const statNumbers = document.querySelectorAll('.stat-number');
            
            const animateCounter = (element, start, end, duration) => {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const currentValue = Math.floor(progress * (end - start) + start);
                    
                    if (element.textContent.includes('%')) {
                        element.textContent = currentValue + '%';
                    } else if (element.textContent.includes('+')) {
                        element.textContent = currentValue + '+';
                    } else {
                        element.textContent = currentValue;
                    }
                    
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            };

            // Observer pour les compteurs
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const valueElement = entry.target;
                        const currentText = valueElement.textContent;
                        const targetValue = parseInt(currentText.replace(/[^0-9]/g, ''));
                        
                        if (!isNaN(targetValue)) {
                            animateCounter(valueElement, 0, targetValue, 1500);
                            counterObserver.unobserve(valueElement);
                        }
                    }
                });
            }, { threshold: 0.5 });

            statNumbers.forEach(value => {
                counterObserver.observe(value);
            });

            // Effets hover sur les cartes
            const cards = document.querySelectorAll('.adn-card, .value-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.adn-icon, .value-icon');
                    if (icon) {
                        icon.style.transform = 'scale(1.2)';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.adn-icon, .value-icon');
                    if (icon) {
                        icon.style.transform = 'scale(1)';
                    }
                });
            });

            // Animation progressive des éléments
            const animateElements = document.querySelectorAll('.adn-card, .value-card, .about-img-container');
            animateElements.forEach((el, index) => {
                el.style.animationDelay = `${index * 100}ms`;
                el.classList.add('animate-on-scroll');
            });
        });
    </script>
@endsection
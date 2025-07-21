@extends('layout')
@section('title', 'A Propos')

@section('content')
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .hero-section {
            background: 
                linear-gradient(to right, rgba(44, 62, 80, 0.9), rgba(26, 26, 46, 0.9)),
                url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            position: relative;
            text-align: center;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
        }
        
        .section-titles {
            position: relative;
            margin-bottom: 50px;
        }
        
        .section-titles h2 {
            font-weight: 700;
            position: relative;
            display: inline-block;
            color: var(--primary-color);
        }
        
        .section-titles h2:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--accent-color);
            bottom: -10px;
            left: 25%;
        }
        
        .value-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 100%;
            background: white;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .value-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .value-card:hover .value-icon {
            transform: scale(1.2);
        }
        
        .mission-vision-box {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            border-left: 4px solid var(--accent-color);
            transition: transform 0.3s ease;
        }
        
        .mission-vision-box:hover {
            transform: translateY(-5px);
        }
        
        .team-cta {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-color) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .team-cta::before {
            content: "";
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(231, 76, 60, 0.1);
            border-radius: 50%;
        }
        
        .img-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            transition: transform 0.5s ease;
        }
        
        .img-container:hover {
            transform: scale(1.02);
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 100px 0;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
        }
    </style>

    <!-- Hero Section avec image de fond -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">Qui sommes-nous ?</h1>
            <p class="lead fs-4 animate__animated animate__fadeInUp">Menji DRC - Innovation Technologique au Cœur de l'Afrique</p>
            {{-- <div class="d-flex justify-content-center mt-4 animate__animated animate__fadeInUp animate__delay-1s">
                <a href="#about" class="btn btn-primary btn-lg px-4 me-3">
                    <i class="bi bi-arrow-down-circle me-2"></i> Découvrir
                </a>
                <a href="#contact" class="btn btn-outline-light btn-lg px-4">
                    <i class="bi bi-chat-dots me-2"></i> Nous contacter
                </a>
            </div> --}}
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="Équipe Menji DRC" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Notre Histoire</h2>
                    <p class="lead text-primary">Des solutions digitales sur mesure pour l'Afrique et au-delà</p>
                    <p>Fondée en 2020 par des experts en technologie digitale, Menji DRC est née de la passion pour l'innovation et la transformation numérique en République Démocratique du Congo.</p>
                    <p>Nous combinons expertise technique et créativité pour offrir des solutions sur mesure qui répondent aux défis spécifiques du marché africain tout en répondant aux standards internationaux.</p>
                    {{-- <div class="d-flex align-items-center mt-4">
                        <div class="me-4">
                            <h3 class="text-accent mb-0">50+</h3>
                            <p class="text-muted mb-0">Projets réalisés</p>
                        </div>
                        <div class="me-4">
                            <h3 class="text-accent mb-0">15+</h3>
                            <p class="text-muted mb-0">Clients satisfaits</p>
                        </div>
                        <div>
                            <h3 class="text-accent mb-0">100%</h3>
                            <p class="text-muted mb-0">Engagement qualité</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-titles text-center">
                <h2>Notre ADN</h2>
                <p class="lead">Ce qui nous motive et nous guide au quotidien</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="mission-vision-box">
                        <i class="bi bi-bullseye value-icon"></i>
                        <h3 class="fw-bold">Notre Mission</h3>
                        <p class="fs-5">Accompagner les entreprises et les particuliers dans la création de solutions numériques fiables, esthétiques et sécurisées.</p>
                        <p>Nous nous engageons à fournir des produits qui allient performance technique et design exceptionnel, tout en respectant les délais et budgets impartis.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Solutions personnalisées</li>
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Approche centrée utilisateur</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i> Sécurité intégrée dès la conception</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mission-vision-box">
                        <i class="bi bi-eye value-icon"></i>
                        <h3 class="fw-bold">Notre Vision</h3>
                        <p class="fs-5">Devenir une référence africaine dans l'innovation technologique.</p>
                        <p>Nous aspirons à être les pionniers de la tech en RDC et dans toute l'Afrique, en mettant l'intelligence et la créativité au service de la transformation numérique du continent.</p>
                        <div class="bg-primary-light p-3 rounded mt-4">
                            <h4 class="h5 text-white">Notre ambition</h4>
                            <p class="text-white mb-0">"Être le catalyseur de la révolution digitale en Afrique centrale d'ici 2030"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-5">
        <div class="container py-5">
            <div class="section-titles text-center">
                <h2>Nos Valeurs Fondamentales</h2>
                <p class="lead">Les principes qui guident chacune de nos actions</p>
            </div>
            
            <div class="row g-4">
                <!-- Sécurité -->
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <i class="bi bi-shield-lock value-icon"></i>
                        <h3>Sécurité</h3>
                        <p>Nous priorisons la protection des données et systèmes de nos clients à chaque étape de nos développements, avec des protocoles rigoureux.</p>
                    </div>
                </div>
                
                <!-- Créativité -->
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <i class="bi bi-lightbulb value-icon"></i>
                        <h3>Créativité</h3>
                        <p>Nous repoussons les limites conventionnelles pour offrir des solutions uniques et innovantes, adaptées aux contextes locaux.</p>
                    </div>
                </div>
                
                <!-- Proximité -->
                <div class="col-md-4">
                    <div class="value-card text-center p-4">
                        <i class="bi bi-people value-icon"></i>
                        <h3>Proximité</h3>
                        <p>Une écoute active et un accompagnement personnalisé pour chaque client, avec une équipe disponible et réactive.</p>
                    </div>
                </div>
                
                <!-- Innovation -->
                <div class="col-md-6">
                    <div class="value-card text-center p-4">
                        <i class="bi bi-cpu value-icon"></i>
                        <h3>Innovation</h3>
                        <p>Adoption des technologies émergentes pour des solutions à la pointe du progrès, tout en restant accessibles.</p>
                    </div>
                </div>
                
                <!-- Professionnalisme -->
                <div class="col-md-6">
                    <div class="value-card text-center p-4">
                        <i class="bi bi-award value-icon"></i>
                        <h3>Professionnalisme</h3>
                        <p>Exigence de qualité, respect des délais et éthique professionnelle irréprochable dans toutes nos interventions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team CTA -->
   <section class="team-carousel py-5 bg-light">
    <div class="container py-5">
        <div class="section-title text-center mb-5">
            <h2>Notre Équipe d'Experts</h2>
            <p class="lead">Découvrez les talents derrière Menji DRC</p>
        </div>

        <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <!-- Membre 1 -->
                        <div class="col-lg-4">
                            <div class="team-card text-center mx-auto">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" 
                                         alt="Directeur Technique" class="img-fluid rounded-circle">
                                </div>
                                <h3 class="mt-4 mb-1">Patrick Mboma</h3>
                                <p class="text-primary fw-bold">Directeur Technique</p>
                                <p class="text-muted">Expert en sécurité cloud</p>
                                <div class="team-social mt-3">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <!-- Membre 2 -->
                        <div class="col-lg-4">
                            <div class="team-card text-center mx-auto">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" 
                                         alt="Lead Designer" class="img-fluid rounded-circle">
                                </div>
                                <h3 class="mt-4 mb-1">Sarah Kayembe</h3>
                                <p class="text-primary fw-bold">Lead Designer UI/UX</p>
                                <p class="text-muted">Spécialiste en expérience utilisateur</p>
                                <div class="team-social mt-3">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-dribbble"></i></a>
                                    <a href="#"><i class="bi bi-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <!-- Membre 3 -->
                        <div class="col-lg-4">
                            <div class="team-card text-center mx-auto">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" 
                                         alt="Développeur Fullstack" class="img-fluid rounded-circle">
                                </div>
                                <h3 class="mt-4 mb-1">David Kabasele</h3>
                                <p class="text-primary fw-bold">Développeur Fullstack</p>
                                <p class="text-muted">Expert JavaScript</p>
                                <div class="team-social mt-3">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-stack-overflow"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <!-- Membre 4 -->
                        <div class="col-lg-4">
                            <div class="team-card text-center mx-auto">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1562788869-4ed32648eb72?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" 
                                         alt="Responsable Sécurité" class="img-fluid rounded-circle">
                                </div>
                                <h3 class="mt-4 mb-1">Rachel Tshibangu</h3>
                                <p class="text-primary fw-bold">Responsable Cybersécurité</p>
                                <p class="text-muted">Spécialiste en pentesting</p>
                                <div class="team-social mt-3">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-shield-lock"></i></a>
                                    <a href="#"><i class="bi bi-git"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contrôles du carrousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>

            <!-- Indicateurs -->
            <div class="carousel-indicators position-relative mt-4">
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="0" class="active bg-primary" aria-current="true"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="1" class="bg-primary"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="2" class="bg-primary"></button>
                <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="3" class="bg-primary"></button>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
            <a href="#contact" class="btn btn-primary btn-lg px-4 me-2">
                <i class="bi bi-people me-2"></i> Rencontrer l'équipe
            </a>
            <a href="/about" class="btn btn-outline-primary btn-lg px-4">
                <i class="bi bi-info-circle me-2"></i> Notre histoire
            </a>
        </div>
    </div>
</section>

<style>
    .team-carousel {
        position: relative;
    }
    
    .team-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        max-width: 350px;
        margin: 0 auto;
    }
    
    .team-img-container {
        width: 180px;
        height: 180px;
        margin: 0 auto;
        position: relative;
    }
    
    .team-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 5px solid #f8f9fa;
        border-radius: 50%;
    }
    
    .team-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: #f8f9fa;
        color: var(--primary-color);
        border-radius: 50%;
        margin: 0 5px;
        transition: all 0.3s ease;
    }
    
    .team-social a:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-3px);
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: auto;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-size: 60%;
    }
    
    @media (max-width: 768px) {
        .team-img-container {
            width: 150px;
            height: 150px;
        }
        
        .team-card {
            padding: 20px;
        }
    }
</style>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script>
        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.value-card, .mission-vision-box');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            }, { threshold: 0.1 });
            
            animateElements.forEach(el => observer.observe(el));
        });
    </script>

@endsection

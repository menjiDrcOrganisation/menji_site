@extends('layout')
@section('title', 'Menji Drc - Accueil')

@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Bienvenue chez Menji Drc</h2>
        <p data-aos="fade-up" data-aos-delay="200">Nous sommes une équipe passionnée, spécialisée dans le développement de solutions numériques sur mesure pour répondre aux besoins des entreprises modernes. Explorez nos services et découvrez comment nous pouvons vous aider à atteindre vos objectifs.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          {{-- <a href="#about" class="btn-get-started">Se connecter</a> --}}
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    {{-- <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section --> --}}

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="63" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients Satisfaits</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="91" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projets</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1013" data-purecounter-duration="1" class="purecounter"></span>
                <p>Heures de Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Travailleurs Acharnés</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title text-center" data-aos="fade-up">
          <h2>Services</h2>
          <p>Découvrez nos services sur mesure</p>
      </div>  
      {{-- !-- End Section Title --> --}}

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Design.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-globe2 fs-1"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Développement Web </h3>
                </a>
                <p>Nous créons des sites web dynamiques et performants, adaptés à votre entreprise. Que ce soit pour un site vitrine, une plateforme e-commerce ou une application web complexe, nous avons l'expertise pour vous accompagner.</p>
              <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/numérique.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-phone fs-1"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Développement Mobile</h3>
                </a>
                <p>Nous concevons des applications mobiles innovantes et intuitives pour vous aider à atteindre vos utilisateurs sur tous les appareils. De l'idée à la mise en ligne, nous vous guidons à chaque étape.</p>
              <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/téléchargement.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bar-chart-line fs-1"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Marketing Digital</h3>
                </a>
                <p>Boostez la visibilité de votre entreprise grâce à nos stratégies de marketing digital. SEO, publicité en ligne, gestion de réseaux sociaux... Nous vous aidons à atteindre les bonnes personnes, au bon moment.</p>
              <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Voici.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-diagram-3 fs-1"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Gestion de Projet IT</h3>
                </a>
                <p>Vous avez un projet numérique en tête ? Nous vous accompagnons dans sa réalisation, en vous offrant un soutien complet à chaque étape : analyse des besoins, planification, développement et suivi.</p>
              <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

           <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Vie.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Sécurité informatique </h3>
                </a>
                <p>Audit, mise en place de systèmes de surveillance, cybersécurité, protection des données et infrastructures.</p>
              <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/What.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Cloud Computing</h3>
                </a>
                <p>Solutions d'hébergement, migration vers le cloud, gestion des serveurs et services Saas.</p>
                <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/d6fc5bad-4c89-4732-bdfb-5546e5e3171e.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-magic"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>UI/UX Design</h3>
                </a>
                <p>Conception de marquettes interactives, prototypage(Figma, Adobe XD), expérience utilisateur fluide.</p>
              <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/29a56d50-8232-4bfe-8fb7-0634fd985495.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-palette-fill"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Graphisme & Communication</h3>
                </a>
                <p>Création de logos, affiches, flyers, chartes graphiques, design de marque.</p>
                <a href="#" class="btn btn-sm ico "><i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <style>
        .blog-carousel {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
        }
        
        .carousel-item {
            padding: 40px;
        }
        
        .blog-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        
        .blog-card:hover {
            transform: translateY(-10px);
        }
        
        .blog-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .blog-card .card-body {
            padding: 25px;
        }
        
        .blog-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(231, 76, 60, 0.9);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
        }
        
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        
        /* Modal Newsletter */
        .newsletter-modal .modal-content {
            border-radius: 15px;
            border: none;
        }
        
        .newsletter-modal .modal-header {
            border: none;
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            border-radius: 15px 15px 0 0;
        }
        
        .newsletter-modal .btn-close {
            filter: invert(1);
        }
    </style>

<!-- Section Carrousel Blog -->
<section class="blog-carousel section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-5 fw-bold">Découvrez Notre Blog Tech</h2>
                <p class="lead">Les dernières actualités et conseils de nos experts</p>
            </div>
        </div>
        
        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Article 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="blog-card position-relative">
                                <span class="blog-tag">Sécurité</span>
                                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Sécurité informatique">
                                <div class="card-body">
                                    <h5 class="card-title">5 Bonnes Pratiques en Cybersécurité</h5>
                                    <p class="card-text">Protégez vos données avec ces méthodes éprouvées...</p>
                                    <a href="#" class="btn btn-sm btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Article 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="blog-card position-relative">
                                <span class="blog-tag">Cloud</span>
                                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Cloud Computing">
                                <div class="card-body">
                                    <h5 class="card-title">Migration vers le Cloud: Guide Complet</h5>
                                    <p class="card-text">Tout ce que vous devez savoir pour une transition réussie...</p>
                                    <a href="#" class="btn btn-sm btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Article 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="blog-card position-relative">
                                <span class="blog-tag">UI/UX</span>
                                <img src="https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Design UI/UX">
                                <div class="card-body">
                                    <h5 class="card-title">Tendances UI/UX 2023</h5>
                                    <p class="card-text">Découvrez les nouveautés qui vont marquer cette année...</p>
                                    <a href="#" class="btn btn-sm btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Deuxième slide (articles 4-6) -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Article 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="blog-card position-relative">
                                <span class="blog-tag">Dev</span>
                                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Développement">
                                <div class="card-body">
                                    <h5 class="card-title">Framework JavaScript 2023</h5>
                                    <p class="card-text">Comparatif des meilleures solutions front-end...</p>
                                    <a href="#" class="btn btn-sm btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Article 5 -->
                        {{-- <div class="col-md-4 mb-4">
                            <div class="blog-card position-relative">
                                <span class="blog-tag">IA</span>
                                <img src="https://images.unsplash.com/photo-1677442135136-760c813cdb0e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Intelligence Artificielle">
                                <div class="card-body">
                                    <h5 class="card-title">L'IA dans le Développement Web</h5>
                                    <p class="card-text">Comment ChatGPT révolutionne notre métier...</p>
                                    <a href="#" class="btn btn-sm btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div> --}}
                        
                        <!-- Article 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="blog-card position-relative">
                                <span class="blog-tag">Mobile</span>
                                <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Développement Mobile">
                                <div class="card-body">
                                    <h5 class="card-title">Flutter vs React Native</h5>
                                    <p class="card-text">Quelle solution choisir pour votre app mobile...</p>
                                    <a href="#" class="btn btn-sm btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
</section>


<!-- /Features Section -->

    <!-- Services 2 Section -->
    <section id="pourquoi-menji" class="pourquoi-menji-section">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2>Pourquoi Menji ?</h2>
      {{-- <p>Notre valeur ajoutée</p> --}}
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="avantage-box">
          <div class="icon">
            <i class="bi bi-shield-lock"></i>
          </div>
          <h3>Expertise en sécurité informatique</h3>
          <p>Des solutions de cybersécurité robustes pour protéger votre entreprise</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="avantage-box">
          <div class="icon">
            <i class="bi bi-gear"></i>
          </div>
          <h3>Solutions sur mesure</h3>
          <p>Des services personnalisés adaptés à vos besoins spécifiques</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="avantage-box">
          <div class="icon">
            <i class="bi bi-lightbulb"></i>
          </div>
          <h3>Équipe jeune & créative</h3>
          <p>Une approche innovante et des idées fraîches pour vos projets</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="avantage-box">
          <div class="icon">
            <i class="bi bi-globe"></i>
          </div>
          <h3>Présence locale & vision globale</h3>
          <p>Proche de vous avec une expertise internationale</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .pourquoi-menji-section {
    padding: 100px 0;
    background-color: #f8f9fa;
  }

  .section-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .section-header h2 {
    font-size: 36px;
    font-weight: 700;
    color: #2a2a2a;
    margin-bottom: 15px;
  }

  .section-header p {
    font-size: 18px;
    color: #6c757d;
    position: relative;
    display: inline-block;
  }

  .section-header p::after {
    content: '';
    position: absolute;
    width: 50%;
    height: 2px;
    background: var(--accent-color);
    bottom: -10px;
    left: 25%;
  }

  .avantage-box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: transform 0.3s ease;
    text-align: center;
  }

  .avantage-box:hover {
    transform: translateY(-10px);
  }

  .avantage-box .icon {
    font-size: 40px;
    color: var(--accent-color);
    margin-bottom: 20px;
  }

  .avantage-box h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #2a2a2a;
  }

  .avantage-box p {
    font-size: 15px;
    color: #6c757d;
    line-height: 1.6;
  }

  @media (max-width: 992px) {
    .pourquoi-menji-section {
      padding: 80px 0;
    }
    
    .avantage-box {
      margin-bottom: 30px;
    }
  }

  @media (max-width: 768px) {
    .section-header h2 {
      font-size: 28px;
    }
    
    .section-header p {
      font-size: 16px;
    }
  }
</style>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>CHECK OUR PORTFOLIO</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section> --}}
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    {{-- <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section --> --}}

    <!-- Contact Section -->
    {{-- <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section --> --}}

  </main>

@endsection
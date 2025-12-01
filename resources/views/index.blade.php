@extends('layout')
@section('title', 'Menji Drc - Accueil')

@section('content')
  <main class="main">

    <!-- Hero Section - Design Moderne -->
    <section class="hero-modern dark-background">
      <div class="container-fluid px-0">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="hero-content ps-lg-5">
              <h1 class="display-4 fw-bold mb-4">Transformez vos idées en <span class="text-gradient">solutions numériques</span></h1>
              <p class="lead mb-4">Nous accompagnons les entreprises dans leur transformation digitale avec des solutions innovantes et sur mesure.</p>
              <div class="d-flex flex-wrap gap-3">
               
                <a href="#services" class="btn btn-outline-light btn-lg px-4 py-3">
                  <i class="bi bi-grid me-2"></i>Voir nos services
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="hero-visual position-relative">
              <div class="floating-elements">
                <div class="element element-1">
                  <i class="bi bi-laptop"></i>
                </div>
                <div class="element element-2">
                  <i class="bi bi-phone"></i>
                </div>
                <div class="element element-3">
                  <i class="bi bi-shield-check"></i>
                </div>
                <div class="element element-4">
                  <i class="bi bi-cloud"></i>
                </div>
              </div>
              <div class="code-snippet">
                <pre><code class="language-javascript">// Solution digitale sur mesure
const solution = new MenjiSolution({
  expertise: ['Web', 'Mobile', 'Cloud'],
  security: 'Enterprise Grade',
  support: '24/7',
  innovation: true
});</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section - Cards Modernes -->
 

    <!-- Services Section - Grid Moderne -->
    <section id="services" class="services-modern py-5">
      <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
          <h2 class="display-5 fw-bold mb-3">Nos Services</h2>
          <p class="lead text-muted">Des solutions complètes pour votre transformation digitale</p>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-globe2"></i>
              </div>
              <div class="service-content">
                <h4>Développement Web</h4>
                <p>Applications web performantes et sites e-commerce sur mesure.</p>
                <ul class="service-features">
                  <li><i class="bi bi-check-circle"></i> Applications React/Vue.js</li>
                  <li><i class="bi bi-check-circle"></i> E-commerce Magento/WooCommerce</li>
                  <li><i class="bi bi-check-circle"></i> API RESTful</li>
                </ul>
                <a href="#" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-phone"></i>
              </div>
              <div class="service-content">
                <h4>Applications Mobile</h4>
                <p>Applications natives et cross-platform pour iOS et Android.</p>
                <ul class="service-features">
                  <li><i class="bi bi-check-circle"></i> Applications natives</li>
                  <li><i class="bi bi-check-circle"></i> Flutter/React Native</li>
                  <li><i class="bi bi-check-circle"></i> Publication stores</li>
                </ul>
                <a href="#" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="service-content">
                <h4>Sécurité Informatique</h4>
                <p>Protection avancée de vos données et infrastructures.</p>
                <ul class="service-features">
                  <li><i class="bi bi-check-circle"></i> Audit de sécurité</li>
                  <li><i class="bi bi-check-circle"></i> Pentesting</li>
                  <li><i class="bi bi-check-circle"></i> Surveillance 24/7</li>
                </ul>
                <a href="#" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
              </div>
            </div>
          </div>

        

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div class="service-content">
                <h4>Marketing Digital</h4>
                <p>Stratégies digitales pour booster votre visibilité.</p>
                <ul class="service-features">
                  <li><i class="bi bi-check-circle"></i> SEO/SEA</li>
                  <li><i class="bi bi-check-circle"></i> Social Media</li>
                  <li><i class="bi bi-check-circle"></i> Analytics</li>
                </ul>
                <a href="#" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-card featured">
              <div class="service-icon">
                <i class="bi bi-ticket-detailed"></i>
              </div>
              <div class="service-content">
                <h4>Kimia Ticket</h4>
                <p>Solution de gestion de tickets et support client optimisée.</p>
                <ul class="service-features">
                  <li><i class="bi bi-check-circle"></i> Gestion multi-canaux</li>
                  <li><i class="bi bi-check-circle"></i> Automatisation des réponses</li>
                  <li><i class="bi bi-check-circle"></i> Analytics et reporting</li>
                  <li><i class="bi bi-check-circle"></i> Intégration CRM</li>
                </ul>
                <a href="{{ route('demande') }}" class="btn btn-primary btn-sm mt-3">
                  <i class="bi bi-arrow-right me-1"></i>Accéder à Kimia Ticket
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="process-modern light-background py-5">
      <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
          <h2 class="display-5 fw-bold mb-3">Notre Processus</h2>
          <p class="lead text-muted">Une méthodologie éprouvée pour réussir vos projets</p>
        </div>

        <div class="process-timeline">
          <div class="process-step" data-aos="fade-right" data-aos-delay="100">
            <div class="step-number">01</div>
            <div class="step-content">
              <h4>Analyse & Conception</h4>
              <p>Étude approfondie de vos besoins et conception de la solution.</p>
            </div>
          </div>

          <div class="process-step" data-aos="fade-left" data-aos-delay="200">
            <div class="step-number">02</div>
            <div class="step-content">
              <h4>Développement</h4>
              <p>Création itérative avec tests et validations régulières.</p>
            </div>
          </div>

          <div class="process-step" data-aos="fade-right" data-aos-delay="300">
            <div class="step-number">03</div>
            <div class="step-content">
              <h4>Déploiement</h4>
              <p>Mise en production et formation des utilisateurs.</p>
            </div>
          </div>

          <div class="process-step" data-aos="fade-left" data-aos-delay="400">
            <div class="step-number">04</div>
            <div class="step-content">
              <h4>Support & Évolution</h4>
              <p>Maintenance et amélioration continue de la solution.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Technologies Section -->
    <section class="tech-stack py-5">
      <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
          <h2 class="display-5 fw-bold mb-3">Nos Technologies</h2>
          <p class="lead text-muted">Nous maîtrisons les meilleures technologies du marché</p>
        </div>

        <div class="tech-grid">
          <div class="tech-item" data-aos="flip-up" data-aos-delay="100">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React">
            <span>React</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="200">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js">
            <span>Vue.js</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="300">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js">
            <span>Node.js</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="400">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter">
            <span>Flutter</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="500">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aws/aws-original.svg" alt="AWS">
            <span>AWS</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="600">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker">
            <span>Docker</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="700">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
            <span>PHP</span>
          </div>
          <div class="tech-item" data-aos="flip-up" data-aos-delay="800">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python">
            <span>Python</span>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section dark-background py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8" data-aos="fade-right">
            <h2 class="display-6 fw-bold mb-3">Prêt à démarrer votre projet ?</h2>
            <p class="lead mb-4">Contactez-nous pour une consultation gratuite et découvrez comment nous pouvons vous aider.</p>
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="text-lg-end">
             
              <a href="{{ route('demande') }}" class="btn btn-outline-light btn-lg px-4 py-3 mt-2 mt-md-0 ms-md-2">
                <i class="bi bi-ticket-detailed me-2"></i>Kimia Ticket
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <style>
    /* Hero Modern */
    .hero-modern {
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .hero-modern::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      opacity: 0.1;
    }

    .text-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-visual {
      padding: 2rem;
      position: relative;
    }

    .floating-elements {
      position: relative;
      height: 400px;
    }

    .element {
      position: absolute;
      width: 60px;
      height: 60px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      animation: float 6s ease-in-out infinite;
    }

    .element-1 {
      top: 20%;
      left: 10%;
      animation-delay: 0s;
    }

    .element-2 {
      top: 60%;
      right: 15%;
      animation-delay: 1s;
    }

    .element-3 {
      top: 40%;
      right: 30%;
      animation-delay: 2s;
    }

    .element-4 {
      bottom: 30%;
      left: 20%;
      animation-delay: 3s;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
    }

    .code-snippet {
      background: #1e1e1e;
      border-radius: 10px;
      padding: 1.5rem;
      margin-top: 2rem;
      box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .code-snippet pre {
      margin: 0;
      color: #d4d4d4;
      font-family: 'Courier New', monospace;
      font-size: 0.9rem;
    }

    /* Stats Modern */
    .stat-card {
      background: white;
      border-radius: 15px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
      height: 100%;
    }

    .stat-card:hover {
      transform: translateY(-5px);
    }

    .stat-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 1.8rem;
      color: white;
    }

    .stat-content h3 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: #2d3748;
    }

    .counter {
      font-size: 2.5rem;
      font-weight: 700;
      color: #2d3748;
    }

    /* Services Modern */
    .service-card {
      background: white;
      border-radius: 15px;
      padding: 2rem;
      height: 100%;
      transition: all 0.3s ease;
      border: 1px solid #e2e8f0;
      position: relative;
      overflow: hidden;
    }

    .service-card.featured {
      border: 2px solid #667eea;
      box-shadow: 0 15px 35px rgba(102, 126, 234, 0.15);
    }

    .service-card.featured::before {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      height: 6px;
    }

    .service-card.featured .service-icon {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .service-card.featured:hover {
      box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
    }

    .service-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, #667eea20 0%, #764ba220 100%);
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      font-size: 2rem;
      color: #667eea;
      transition: all 0.3s ease;
    }

    .service-content h4 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #2d3748;
    }

    .service-content p {
      color: #718096;
      margin-bottom: 1.5rem;
    }

    .service-features {
      list-style: none;
      padding: 0;
      margin-bottom: 1.5rem;
    }

    .service-features li {
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      font-size: 0.9rem;
      color: #4a5568;
    }

    .service-features i {
      color: #48bb78;
      margin-right: 0.5rem;
      flex-shrink: 0;
    }

    .btn-outline-primary {
      border-width: 2px;
      font-weight: 500;
    }

    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      font-weight: 500;
    }

    /* Process Modern */
    .process-timeline {
      position: relative;
      max-width: 800px;
      margin: 0 auto;
    }

    .process-timeline::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 2px;
      background: linear-gradient(to bottom, #667eea, #764ba2);
      transform: translateX(-50%);
    }

    .process-step {
      display: flex;
      align-items: center;
      margin-bottom: 3rem;
      position: relative;
    }

    .process-step:nth-child(odd) {
      flex-direction: row-reverse;
    }

    .step-number {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 1.2rem;
      flex-shrink: 0;
      margin: 0 2rem;
      position: relative;
      z-index: 1;
    }

    .step-content {
      background: white;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      flex: 1;
    }

    /* Technologies */
    .tech-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 1.5rem;
      max-width: 800px;
      margin: 0 auto;
    }

    .tech-item {
      background: white;
      border-radius: 10px;
      padding: 1.5rem;
      text-align: center;
      transition: all 0.3s ease;
      border: 1px solid #e2e8f0;
    }

    .tech-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .tech-item img {
      width: 50px;
      height: 50px;
      margin-bottom: 1rem;
    }

    .tech-item span {
      display: block;
      font-weight: 600;
      color: #2d3748;
    }

    /* CTA */
    .cta-section {
      border-radius: 20px;
      margin: 4rem auto;
      max-width: 1200px;
      position: relative;
      overflow: hidden;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 400px;
      height: 400px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      opacity: 0.1;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .process-timeline::before {
        left: 30px;
      }
      
      .process-step {
        flex-direction: row !important;
      }
      
      .step-number {
        margin-right: 2rem;
        margin-left: 0;
      }
      
      .hero-visual {
        margin-top: 3rem;
      }
    }

    @media (max-width: 768px) {
      .display-4 {
        font-size: 2.5rem;
      }
      
      .display-5 {
        font-size: 2rem;
      }
      
      .display-6 {
        font-size: 1.8rem;
      }
      
      .cta-section .text-lg-end {
        text-align: left !important;
        margin-top: 1.5rem;
      }
      
      .cta-section .btn {
        width: 100%;
        margin-bottom: 0.5rem;
      }
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Counter Animation
      const counters = document.querySelectorAll('.counter');
      
      const startCounter = (counter) => {
        const count = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = Math.floor(duration / count);
        let current = 0;
        
        const timer = setInterval(() => {
          current += Math.ceil(count / 50);
          if (current >= count) {
            current = count;
            clearInterval(timer);
          }
          counter.textContent = current;
        }, step);
      };
      
      // Intersection Observer for counters
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            startCounter(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      
      counters.forEach(counter => {
        observer.observe(counter);
      });
      
      // AOS Initialization
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    });
  </script>
@endsection
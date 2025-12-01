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
                <pre><code class="language-javascript">
                // Solution digitale sur mesure
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

<section class="avantages-section py-5" aria-label="Nos avantages">
  <div class="container">
    <!-- En-tête de section améliorée -->
    <div class="section-header text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold mb-3">Nos Atouts Distinctifs</h2>
      <p class="lead text-muted mx-auto" style="max-width: 600px;">
        Découvrez ce qui fait notre différence et nous permet de vous offrir une excellence digitale
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Avantage 1 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="avantage-card h-100">
          <div class="avantage-icon-wrapper">
            <div class="avantage-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
            <div class="icon-badge">1</div>
          </div>
          <div class="avantage-content">
            <h3 class="avantage-title">Expertise en sécurité informatique</h3>
            <p class="avantage-description">
              Nous protégeons vos données avec des solutions de cybersécurité robustes 
              et conformes aux dernières normes internationales.
            </p>
            <ul class="avantage-features">
              <li><i class="bi bi-check-circle-fill"></i> Audit de sécurité complet</li>
              <li><i class="bi bi-check-circle-fill"></i> Protection 24h/24</li>
              <li><i class="bi bi-check-circle-fill"></i> Conformité RGPD</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Avantage 2 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="avantage-card h-100">
          <div class="avantage-icon-wrapper">
            <div class="avantage-icon">
              <i class="bi bi-gear-fill"></i>
            </div>
            <div class="icon-badge">2</div>
          </div>
          <div class="avantage-content">
            <h3 class="avantage-title">Solutions sur mesure</h3>
            <p class="avantage-description">
              Nous concevons des solutions digitales personnalisées qui s'adaptent 
              parfaitement à vos besoins métiers et objectifs stratégiques.
            </p>
            <ul class="avantage-features">
              <li><i class="bi bi-check-circle-fill"></i> Étude approfondie des besoins</li>
              <li><i class="bi bi-check-circle-fill"></i> Développement adaptatif</li>
              <li><i class="bi bi-check-circle-fill"></i> Évolutivité garantie</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Avantage 3 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="avantage-card h-100">
          <div class="avantage-icon-wrapper">
            <div class="avantage-icon">
              <i class="bi bi-lightbulb-fill"></i>
            </div>
            <div class="icon-badge">3</div>
          </div>
          <div class="avantage-content">
            <h3 class="avantage-title">Équipe jeune & créative</h3>
            <p class="avantage-description">
              Notre équipe dynamique apporte des idées innovantes et une approche 
              moderne pour transformer vos projets en succès digitaux.
            </p>
            <ul class="avantage-features">
              <li><i class="bi bi-check-circle-fill"></i> Innovation continue</li>
              <li><i class="bi bi-check-circle-fill"></i> Veille technologique</li>
              <li><i class="bi bi-check-circle-fill"></i> Design thinking</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Avantage 4 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="avantage-card h-100">
          <div class="avantage-icon-wrapper">
            <div class="avantage-icon">
              <i class="bi bi-globe2"></i>
            </div>
            <div class="icon-badge">4</div>
          </div>
          <div class="avantage-content">
            <h3 class="avantage-title">Vision locale & globale</h3>
            <p class="avantage-description">
              Proximité avec nos clients locaux couplée à une expertise et une 
              vision internationale des tendances digitales.
            </p>
            <ul class="avantage-features">
              <li><i class="bi bi-check-circle-fill"></i> Support local réactif</li>
              <li><i class="bi bi-check-circle-fill"></i> Standards internationaux</li>
              <li><i class="bi bi-check-circle-fill"></i> Multilinguisme</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Indicateurs visuels supplémentaires -->
    <div class="row mt-5 pt-4" data-aos="fade-up" data-aos-delay="500">
      <div class="col-12">
        <div class="trust-indicators">
          <div class="trust-item">
            <div class="trust-value">100%</div>
            <div class="trust-label">Satisfaction client</div>
          </div>
          <div class="trust-item">
            <div class="trust-value">24/7</div>
            <div class="trust-label">Support disponible</div>
          </div>
          <div class="trust-item">
            <div class="trust-value">+50</div>
            <div class="trust-label">Projets réussis</div>
          </div>
          <div class="trust-item">
            <div class="trust-value">99.9%</div>
            <div class="trust-label">Uptime garanti</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Variables pour les couleurs et animations */
  :root {
    --avantage-primary: #4f46e5;
    --avantage-secondary: #7c3aed;
    --avantage-gradient: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
    --avantage-light: #f8fafc;
    --avantage-shadow: 0 10px 25px rgba(79, 70, 229, 0.1);
  }

  .avantages-section {
    background: var(--avantage-light);
    position: relative;
    overflow: hidden;
  }

  .avantages-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 600px;
    height: 600px;
    background: var(--avantage-gradient);
    border-radius: 50%;
    opacity: 0.03;
    z-index: 0;
  }

  .avantages-section::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -15%;
    width: 400px;
    height: 400px;
    background: var(--avantage-gradient);
    border-radius: 50%;
    opacity: 0.03;
    z-index: 0;
  }

  .avantages-section .container {
    position: relative;
    z-index: 1;
  }

  /* Carte d'avantage améliorée */
  .avantage-card {
    background: white;
    border-radius: 20px;
    padding: 2.5rem 2rem;
    height: 100%;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid #e2e8f0;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .avantage-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--avantage-gradient);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }

  .avantage-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--avantage-shadow);
    border-color: transparent;
  }

  .avantage-card:hover::before {
    transform: scaleX(1);
  }

  /* Icon wrapper avec badge */
  .avantage-icon-wrapper {
    position: relative;
    margin-bottom: 1.5rem;
    display: inline-block;
  }

  .avantage-icon {
    width: 80px;
    height: 80px;
    background: var(--avantage-gradient);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
    transition: all 0.3s ease;
    position: relative;
  }

  .avantage-card:hover .avantage-icon {
    transform: scale(1.1) rotate(5deg);
  }

  .icon-badge {
    position: absolute;
    top: -10px;
    right: -10px;
    width: 30px;
    height: 30px;
    background: #10b981;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
    font-weight: 700;
    box-shadow: 0 4px 6px rgba(16, 185, 129, 0.3);
  }

  /* Contenu */
  .avantage-content {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .avantage-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #1e293b;
    line-height: 1.3;
  }

  .avantage-description {
    color: #64748b;
    margin-bottom: 1.5rem;
    line-height: 1.6;
    flex: 1;
  }

  .avantage-features {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .avantage-features li {
    margin-bottom: 0.75rem;
    display: flex;
    align-items: flex-start;
    font-size: 0.9rem;
    color: #475569;
  }

  .avantage-features i {
    color: #10b981;
    margin-right: 0.75rem;
    margin-top: 0.125rem;
    flex-shrink: 0;
  }

  /* Indicateurs de confiance */
  .trust-indicators {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    max-width: 800px;
    margin: 0 auto;
  }

  .trust-item {
    text-align: center;
    padding: 0 1.5rem;
  }

  .trust-value {
    font-size: 2.5rem;
    font-weight: 800;
    background: var(--avantage-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 0.5rem;
  }

  .trust-label {
    font-size: 0.9rem;
    color: #64748b;
    font-weight: 500;
  }

  /* Responsive */
  @media (max-width: 1200px) {
    .avantage-card {
      padding: 2rem 1.5rem;
    }
    
    .trust-indicators {
      gap: 1.5rem;
    }
  }

  @media (max-width: 992px) {
    .avantage-icon {
      width: 70px;
      height: 70px;
      font-size: 2rem;
    }
    
    .avantage-title {
      font-size: 1.3rem;
    }
  }

  @media (max-width: 768px) {
    .avantages-section::before,
    .avantages-section::after {
      display: none;
    }
    
    .trust-indicators {
      flex-direction: column;
      gap: 1.5rem;
      text-align: center;
    }
    
    .trust-item {
      padding: 0.5rem 0;
      border-bottom: 1px solid #e2e8f0;
    }
    
    .trust-item:last-child {
      border-bottom: none;
    }
    
    .section-header h2 {
      font-size: 2rem;
    }
  }

  @media (max-width: 576px) {
    .avantage-card {
      padding: 1.75rem 1.25rem;
    }
    
    .avantage-icon {
      width: 60px;
      height: 60px;
      font-size: 1.75rem;
    }
  }

  /* Animation spécifique pour les cartes */
  @keyframes cardEntrance {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .avantage-card {
    animation: cardEntrance 0.6s ease-out forwards;
    opacity: 0;
  }

  .avantage-card:nth-child(1) { animation-delay: 0.1s; }
  .avantage-card:nth-child(2) { animation-delay: 0.2s; }
  .avantage-card:nth-child(3) { animation-delay: 0.3s; }
  .avantage-card:nth-child(4) { animation-delay: 0.4s; }

  /* Mode sombre */
  @media (prefers-color-scheme: dark) {
    .avantages-section {
      background: #1a202c;
    }
    
    .avantage-card {
      background: #2d3748;
      border-color: #4a5568;
    }
    
    .avantage-title {
      color: #e2e8f0;
    }
    
    .avantage-description,
    .avantage-features li {
      color: #a0aec0;
    }
    
    .trust-indicators {
      background: #2d3748;
    }
    
    .trust-label {
      color: #a0aec0;
    }
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animation au scroll
  const observerOptions = {
    threshold: 0.2,
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
  document.querySelectorAll('.avantage-card').forEach(card => {
    observer.observe(card);
  });

  // Effet hover sur les icônes
  const cards = document.querySelectorAll('.avantage-card');
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      const icon = this.querySelector('.avantage-icon');
      icon.style.transform = 'scale(1.1) rotate(5deg)';
    });
    
    card.addEventListener('mouseleave', function() {
      const icon = this.querySelector('.avantage-icon');
      icon.style.transform = 'scale(1) rotate(0deg)';
    });
  });

  // Animation des indicateurs de confiance
  const trustValues = document.querySelectorAll('.trust-value');
  trustValues.forEach(value => {
    const targetValue = value.textContent;
    value.textContent = '0';
    
    const animateCounter = () => {
      let current = 0;
      const increment = targetValue.includes('%') ? 1 : 
                       targetValue.includes('/') ? 1 : 
                       Math.max(1, Math.floor(parseInt(targetValue.replace('+', '')) / 50));
      
      const timer = setInterval(() => {
        current += increment;
        if (current >= parseInt(targetValue.replace('+', '').replace('%', ''))) {
          current = targetValue.replace('+', '').replace('%', '');
          value.textContent = targetValue;
          clearInterval(timer);
        } else {
          value.textContent = targetValue.includes('+') ? `+${current}` : 
                            targetValue.includes('%') ? `${current}%` : 
                            targetValue.includes('/') ? targetValue : current;
        }
      }, 30);
    };

    // Déclencher l'animation quand visible
    const trustObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter();
          trustObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    trustObserver.observe(value);
  });
});
</script>

<section id="services" class="pourquoi-menji-section py-5" aria-label="Pourquoi choisir Menji">
  <div class="container">
    <!-- En-tête de section améliorée -->
    <div class="section-header text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold mb-3">Pourquoi Choisir Menji ?</h2>
      <p class="lead text-muted mx-auto" style="max-width: 600px;">
        Découvrez les atouts qui font de Menji votre partenaire digital de confiance pour une transformation réussie
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Raison 1 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="menji-card h-100">
          <div class="menji-icon-wrapper">
            <div class="menji-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
            <div class="menji-badge">Sécurité</div>
          </div>
          <div class="menji-content">
            <h3 class="menji-title">Expertise en sécurité informatique</h3>
            <p class="menji-description">
              Protégez vos actifs numériques avec nos solutions de cybersécurité robustes 
              conformes aux normes internationales les plus strictes.
            </p>
            <ul class="menji-features">
              <li><i class="bi bi-check-circle-fill"></i> Audit de sécurité complet</li>
              <li><i class="bi bi-check-circle-fill"></i> Surveillance 24h/24 et 7j/7</li>
              <li><i class="bi bi-check-circle-fill"></i> Conformité RGPD & certifications</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Raison 2 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="menji-card h-100">
          <div class="menji-icon-wrapper">
            <div class="menji-icon">
              <i class="bi bi-gear-fill"></i>
            </div>
            <div class="menji-badge">Sur-mesure</div>
          </div>
          <div class="menji-content">
            <h3 class="menji-title">Solutions adaptées à vos besoins</h3>
            <p class="menji-description">
              Nous développons des solutions digitales personnalisées qui s'alignent 
              parfaitement avec vos objectifs métiers et votre vision stratégique.
            </p>
            <ul class="menji-features">
              <li><i class="bi bi-check-circle-fill"></i> Analyse approfondie des besoins</li>
              <li><i class="bi bi-check-circle-fill"></i> Développement agile et flexible</li>
              <li><i class="bi bi-check-circle-fill"></i> Évolutivité garantie</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Raison 3 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="menji-card h-100">
          <div class="menji-icon-wrapper">
            <div class="menji-icon">
              <i class="bi bi-lightbulb-fill"></i>
            </div>
            <div class="menji-badge">Innovation</div>
          </div>
          <div class="menji-content">
            <h3 class="menji-title">Équipe jeune & visionnaire</h3>
            <p class="menji-description">
              Notre équipe dynamique combine créativité et expertise technique 
              pour transformer vos idées en succès digitaux tangibles.
            </p>
            <ul class="menji-features">
              <li><i class="bi bi-check-circle-fill"></i> Approche design thinking</li>
              <li><i class="bi bi-check-circle-fill"></i> Veille technologique active</li>
              <li><i class="bi bi-check-circle-fill"></i> Solutions avant-gardistes</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Raison 4 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="menji-card h-100">
          <div class="menji-icon-wrapper">
            <div class="menji-icon">
              <i class="bi bi-globe2"></i>
            </div>
            <div class="menji-badge">Global</div>
          </div>
          <div class="menji-content">
            <h3 class="menji-title">Présence locale, expertise mondiale</h3>
            <p class="menji-description">
              Bénéficiez de la proximité d'un partenaire local avec une vision 
              et des compétences à l'échelle internationale.
            </p>
            <ul class="menji-features">
              <li><i class="bi bi-check-circle-fill"></i> Support réactif en local</li>
              <li><i class="bi bi-check-circle-fill"></i> Standards internationaux</li>
              <li><i class="bi bi-check-circle-fill"></i> Approche multiculturelle</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Indicateurs de performance -->
    <div class="row mt-5 pt-4" data-aos="fade-up" data-aos-delay="500">
      <div class="col-12">
        <div class="menji-stats">
          <div class="stat-item">
            <div class="stat-value" data-count="100">0%</div>
            <div class="stat-label">Satisfaction client</div>
          </div>
          <div class="stat-item">
            <div class="stat-value" data-count="24">0/7</div>
            <div class="stat-label">Support disponible</div>
          </div>
          <div class="stat-item">
            <div class="stat-value" data-count="50">0+</div>
            <div class="stat-label">Projets livrés</div>
          </div>
          <div class="stat-item">
            <div class="stat-value" data-count="99.9">0%</div>
            <div class="stat-label">Disponibilité garantie</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Variables de couleurs pour Menji */
  :root {
    --menji-primary: #2b6cb0;
    --menji-secondary: #4299e1;
    --menji-gradient: linear-gradient(135deg, #2b6cb0 0%, #4299e1 100%);
    --menji-accent: #38b2ac;
    --menji-light: #f7fafc;
    --menji-shadow: 0 10px 25px rgba(43, 108, 176, 0.1);
    --menji-border: #e2e8f0;
  }

  .pourquoi-menji-section {
    background: var(--menji-light);
    position: relative;
    overflow: hidden;
  }

  .pourquoi-menji-section::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: var(--menji-gradient);
    border-radius: 50%;
    opacity: 0.03;
    z-index: 0;
  }

  .pourquoi-menji-section::after {
    content: '';
    position: absolute;
    bottom: -20%;
    left: -8%;
    width: 300px;
    height: 300px;
    background: var(--menji-gradient);
    border-radius: 50%;
    opacity: 0.03;
    z-index: 0;
  }

  .pourquoi-menji-section .container {
    position: relative;
    z-index: 1;
  }

  /* Style des cartes */
  .menji-card {
    background: white;
    border-radius: 16px;
    padding: 2rem 1.75rem;
    height: 100%;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid var(--menji-border);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  }

  .menji-card::before {
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

  .menji-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--menji-shadow);
    border-color: transparent;
  }

  .menji-card:hover::before {
    transform: scaleX(1);
  }

  /* Icon wrapper avec badge */
  .menji-icon-wrapper {
    position: relative;
    margin-bottom: 1.5rem;
    display: inline-block;
  }

  .menji-icon {
    width: 70px;
    height: 70px;
    background: var(--menji-gradient);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    transition: all 0.3s ease;
    position: relative;
  }

  .menji-card:hover .menji-icon {
    transform: scale(1.05) rotate(3deg);
  }

  .menji-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    padding: 4px 10px;
    background: var(--menji-accent);
    color: white;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    box-shadow: 0 4px 6px rgba(56, 178, 172, 0.3);
    white-space: nowrap;
  }

  /* Contenu */
  .menji-content {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .menji-title {
    font-size: 1.35rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #2d3748;
    line-height: 1.3;
  }

  .menji-description {
    color: #4a5568;
    margin-bottom: 1.5rem;
    line-height: 1.6;
    flex: 1;
  }

  .menji-features {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .menji-features li {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: flex-start;
    font-size: 0.9rem;
    color: #4a5568;
  }

  .menji-features i {
    color: var(--menji-accent);
    margin-right: 0.5rem;
    margin-top: 0.125rem;
    flex-shrink: 0;
  }

  /* Indicateurs de performance */
  .menji-stats {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 2rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    max-width: 800px;
    margin: 0 auto;
    border: 1px solid var(--menji-border);
  }

  .stat-item {
    text-align: center;
    padding: 0 1.5rem;
  }

  .stat-value {
    font-size: 2.25rem;
    font-weight: 800;
    background: var(--menji-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 0.25rem;
  }

  .stat-label {
    font-size: 0.9rem;
    color: #718096;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Responsive */
  @media (max-width: 1200px) {
    .menji-card {
      padding: 1.75rem 1.5rem;
    }
    
    .menji-stats {
      gap: 1.5rem;
    }
  }

  @media (max-width: 992px) {
    .menji-icon {
      width: 65px;
      height: 65px;
      font-size: 1.75rem;
    }
    
    .menji-title {
      font-size: 1.25rem;
    }
    
    .stat-value {
      font-size: 2rem;
    }
  }

  @media (max-width: 768px) {
    .pourquoi-menji-section::before,
    .pourquoi-menji-section::after {
      display: none;
    }
    
    .menji-stats {
      flex-direction: column;
      gap: 1.5rem;
      text-align: center;
    }
    
    .stat-item {
      padding: 0.75rem 0;
      border-bottom: 1px solid var(--menji-border);
    }
    
    .stat-item:last-child {
      border-bottom: none;
    }
    
    .section-header h2 {
      font-size: 1.75rem;
    }
  }

  @media (max-width: 576px) {
    .menji-card {
      padding: 1.5rem 1.25rem;
    }
    
    .menji-icon {
      width: 60px;
      height: 60px;
      font-size: 1.5rem;
    }
    
    .menji-badge {
      font-size: 0.7rem;
      padding: 3px 8px;
    }
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

  .menji-card {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
  }

  .menji-card:nth-child(1) { animation-delay: 0.1s; }
  .menji-card:nth-child(2) { animation-delay: 0.2s; }
  .menji-card:nth-child(3) { animation-delay: 0.3s; }
  .menji-card:nth-child(4) { animation-delay: 0.4s; }

  /* Mode sombre */
  @media (prefers-color-scheme: dark) {
    .pourquoi-menji-section {
      background: #1a202c;
    }
    
    .menji-card {
      background: #2d3748;
      border-color: #4a5568;
    }
    
    .menji-title {
      color: #e2e8f0;
    }
    
    .menji-description,
    .menji-features li {
      color: #a0aec0;
    }
    
    .menji-stats {
      background: #2d3748;
      border-color: #4a5568;
    }
    
    .stat-label {
      color: #a0aec0;
    }
  }
</style>

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
  document.querySelectorAll('.menji-card').forEach(card => {
    observer.observe(card);
  });

  // Animation des compteurs
  const statValues = document.querySelectorAll('.stat-value');
  
  const animateCounter = (element, start, end, duration) => {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      const currentValue = Math.floor(progress * (end - start) + start);
      
      if (element.getAttribute('data-count').includes('%')) {
        element.textContent = currentValue.toFixed(1) + '%';
      } else if (element.getAttribute('data-count').includes('/')) {
        element.textContent = currentValue + '/7';
      } else if (element.getAttribute('data-count').includes('+')) {
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

  // Observer pour déclencher les compteurs
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const valueElement = entry.target;
        const targetValue = parseFloat(valueElement.getAttribute('data-count'));
        animateCounter(valueElement, 0, targetValue, 1500);
        counterObserver.unobserve(valueElement);
      }
    });
  }, { threshold: 0.5 });

  statValues.forEach(value => {
    counterObserver.observe(value);
  });

  // Effets hover sur les cartes
  const cards = document.querySelectorAll('.menji-card');
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      const icon = this.querySelector('.menji-icon');
      if (icon) {
        icon.style.transform = 'scale(1.05) rotate(3deg)';
      }
    });
    
    card.addEventListener('mouseleave', function() {
      const icon = this.querySelector('.menji-icon');
      if (icon) {
        icon.style.transform = 'scale(1) rotate(0deg)';
      }
    });
  });
});
</script>


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
@extends('layout')
@section('title', 'Menji Drc - Blog')

@section('content')
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #f72585;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --success-color: #4cc9f0;
            --warning-color: #f8961e;
            --danger-color: #ef233c;
            --transition-speed: 0.4s;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            line-height: 1.7;
            background-color: #f8fafc;
            overflow-x: hidden;
        }
        
        /* Hero Section améliorée */
        .hero-section {
            background: linear-gradient(135deg, rgba(27, 38, 44, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%), 
                        url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 120px 0;
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: #f8fafc;
            transform: skewY(-3deg);
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 25px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            animation: fadeInDown 1s both;
        }
        
        .hero-description {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 40px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
            animation: fadeInUp 1s both 0.3s;
        }
        
        /* Section des offres */
        .offers-section {
            padding: 80px 20px;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 50px;
            position: relative;
            font-weight: 700;
        }
        
        .section-title:after {
            content: "";
            display: block;
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            margin: 20px auto 0;
            border-radius: 3px;
            animation: scaleX 1s both;
        }
        
        /* Grille des offres améliorée */
        .offers-grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            padding: 20px 0;
        }
        
        .job-card {
            border-radius: 12px;
            transition: all var(--transition-speed) cubic-bezier(0.25, 0.8, 0.25, 1);
            border: none;
            overflow: hidden;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform var(--transition-speed) ease;
        }
        
        .job-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .job-card:hover::before {
            transform: scaleX(1);
        }
        
        .card-img-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .job-card:hover .card-img-top {
            transform: scale(1.1);
        }
        
        .card-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            height: calc(100% - 200px);
        }
        
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }
        
        .job-card:hover .card-title {
            color: var(--primary-color);
        }
        
        .card-text {
            color: #64748b;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .see-more-btn {
            display: inline-flex;
            align-items: center;
            color: var(--primary-color);
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none !important;
        }
        
        .see-more-btn:hover {
            color: var(--accent-color);
            transform: translateX(5px);
        }
        
        .see-more-btn i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        
        .see-more-btn:hover i {
            transform: translateX(3px);
        }
        
        .badge-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }
        
        .job-badge {
            background-color: #e2e8f0;
            color: #334155;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        /* Animation pour les cartes */
        @keyframes cardEntrance {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-card {
            animation: cardEntrance 0.6s ease-out both;
        }
        
        /* Délai d'animation pour chaque carte */
        .job-card:nth-child(1) { animation-delay: 0.1s; }
        .job-card:nth-child(2) { animation-delay: 0.2s; }
        .job-card:nth-child(3) { animation-delay: 0.3s; }
        .job-card:nth-child(4) { animation-delay: 0.4s; }
        .job-card:nth-child(5) { animation-delay: 0.5s; }
        .job-card:nth-child(6) { animation-delay: 0.6s; }
        
        /* Effet de vague en bas */
        .wave-divider {
            position: relative;
            height: 100px;
            overflow: hidden;
            margin-top: -1px;
        }
        
        .wave-divider svg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-description {
                font-size: 1.1rem;
            }
            
            .offers-grid-container {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
                background-attachment: scroll;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .offers-grid-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-description {
                font-size: 1rem;
                padding: 0 20px;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title animate__animated animate__fadeInDown">Opportunités professionnelles</h1>
            <p class="hero-description animate__animated animate__fadeInUp">
                Découvrez nos offres d'emploi stimulantes et rejoignez une équipe dynamique et passionnée.
            </p>
        </div>
    </section>

    <!-- Offers Section -->
    <section class="offers-section" id="offres">
        <div class="container">
            <h2 class="section-title">Découvrez nos opportunités</h2>
            
            <!-- Liste des offres -->
            <div class="row g-4">
                <?php foreach ($posts as $index => $post): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 job-card shadow-sm border-0 overflow-hidden animate-card">
                        <!-- Image de l'offre -->
                        @if($post->images->count() > 0)
                            <div class="card-img-container position-relative overflow-hidden">
                                <img src="{{ asset('storage/' . $post->images[0]->image_path) }}" 
                                     alt="Illustration de l'article {{ $post->title }}"
                                     class="card-img-top object-fit-cover"
                                     loading="lazy">
                            </div>
                        @endif
                        
                        <div class="card-body d-flex flex-column">
                            <!-- Badges (optionnel) -->
                        
                            <div class="mb-2">
                                <h5 class="card-title fw-bold mb-2">{{ $post->title }}</h5>
                                <div class="description-container">
                                    <p class="card-text text-muted mb-3 short-description line-clamp-3" style="--line-clamp: 3;">
                                        {!! nl2br(e(Str::limit($post->content, 200))) !!}
                                    </p>
                                </div>
                                
                            </div>
                            
                            <div class="mt-auto pt-3">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <div class="d-flex align-items-center gap-3">
                <div>
                    <small class="text-muted d-block">Publié le</small>
                    <span class="fw-semibold text-success">
                        <?= date('d/m/Y', strtotime($post->created_at)) ?>
                    </span>
                </div>
                <div class="vr"></div>
                
            </div>
        </div>
        <a href="{{ route('blog.show', $post->id) }}" class="see-more-btn">
                                    Voir plus <i class="bi bi-arrow-right"></i>
                                </a>
    </div>
</div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // Animation avec ScrollReveal
        ScrollReveal().reveal('.job-card', {
            delay: 200,
            distance: '20px',
            origin: 'bottom',
            interval: 100,
            easing: 'cubic-bezier(0.5, 0, 0, 1)',
            reset: true
        });
        
        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.job-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });
        
        // Effet de survol amélioré
        document.querySelectorAll('.job-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
                this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });
    </script>
@endsection
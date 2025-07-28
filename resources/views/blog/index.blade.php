@extends('layout')
@section('title', 'Menji Drc - Blog')

@section('content')
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --secondary-color: #3f37c9;
            --accent-color: #f48915;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --text-color: #2d3748;
            --text-muted: #64748b;
            --border-radius: 0.5rem;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Hero Section */
        .blog-hero {
            background: linear-gradient(135deg, rgba(27, 38, 44, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%);
            color: white;
            padding: 6rem 0 4rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }
        
        .blog-hero::after {
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
        
        .blog-hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .blog-hero-description {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        
        /* Blog Grid Layout */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .blog-item {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }
        
        .blog-item.featured {
            grid-column: span 2;
            grid-row: span 2;
        }
        
        .blog-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .blog-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            color: white;
        }
        
        .post-meta {
            display: flex;
            gap: 1rem;
            margin-bottom: 0.75rem;
            font-size: 0.875rem;
        }
        
        .post-date, .post-category {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .post-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0;
            line-height: 1.3;
        }
        
        .post-title a {
            color: white;
            text-decoration: none;
        }
        
        .blog-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .blog-item:hover img {
            transform: scale(1.05);
        }
        
        /* Blog Posts Section */
        .blog-posts {
            padding: 5rem 0;
            background-color: #f8fafc;
        }
        
        .blog-post-item {
            position: relative;
            height: 100%;
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .post-img {
            height: 250px;
            overflow: hidden;
        }
        
        .post-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .post-meta-alt {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem 1.5rem 0;
            color: var(--text-muted);
            font-size: 0.875rem;
        }
        
        .post-content {
            padding: 1.5rem;
        }
        
        .readmore {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .readmore:hover {
            color: var(--primary-hover);
        }
        
        .blog-post-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .blog-post-item:hover img {
            transform: scale(1.05);
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .blog-item.featured {
                grid-column: span 2;
            }
        }
        
        @media (max-width: 768px) {
            .blog-hero {
                padding: 4rem 0 3rem;
            }
            
            .blog-hero-title {
                font-size: 2rem;
            }
            
            .blog-hero-description {
                font-size: 1rem;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .blog-item.featured {
                grid-column: span 1;
            }
            
            .post-title {
                font-size: 1.25rem;
            }
        }
        
        @media (max-width: 576px) {
            .blog-hero {
                padding: 3rem 0 2rem;
            }
            
            .blog-hero-title {
                font-size: 1.75rem;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="container">
            <h1 class="blog-hero-title">Notre Blog</h1>
            <p class="blog-hero-description">
                Découvrez nos dernières actualités, conseils et réflexions sur notre secteur d'activité.
            </p>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="section">
        <div class="container">
            <div class="blog-grid">
                <!-- Featured Post -->
                @if($featuredPost = $posts->first())
                <article class="blog-item featured">
                    <img src="{{ $featuredPost->images->count() > 0 ? asset('storage/' . $featuredPost->images[0]->image_path) : 'https://via.placeholder.com/800x600' }}" 
                         alt="{{ $featuredPost->title }}">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="post-date">
                                <i class="bi bi-calendar"></i>
                                {{ $featuredPost->created_at->format('d M Y') }}
                            </span>
                            <span class="post-category">
                                <i class="bi bi-bookmark"></i>
                                {{ $featuredPost->category->name ?? 'Général' }}
                            </span>
                        </div>
                        <h2 class="post-title">
                            <a href="{{ route('blog.show', $featuredPost->id) }}">{{ $featuredPost->title }}</a>
                        </h2>
                    </div>
                </article>
                @endif

                <!-- Regular Posts -->
                @foreach($posts->slice(1, 4) as $post)
                <article class="blog-item">
                    <img src="{{ $post->images->count() > 0 ? asset('storage/' . $post->images[0]->image_path) : 'https://via.placeholder.com/400x300' }}" 
                         alt="{{ $post->title }}">
                    <div class="blog-content">
                        <div class="post-meta">
                            <span class="post-date">
                                <i class="bi bi-calendar"></i>
                                {{ $post->created_at->format('d M Y') }}
                            </span>
                            <span class="post-category">
                                <i class="bi bi-bookmark"></i>
                                {{ $post->category->name ?? 'Général' }}
                            </span>
                        </div>
                        <h3 class="post-title">
                            <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                        </h3>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Blog Posts List Section -->
    <section class="blog-posts">
        <div class="container">
            <div class="row gy-4">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <article class="blog-post-item">
                        <div class="post-img">
                            <img src="{{ $post->images->count() > 0 ? asset('storage/' . $post->images[0]->image_path) : 'https://via.placeholder.com/600x400' }}" 
                                 alt="{{ $post->title }}">
                        </div>
                        <div class="post-meta-alt">
                            <span>
                                <i class="bi bi-calendar"></i>
                                {{ $post->created_at->format('d M Y') }}
                            </span>
                            <span>
                                <i class="bi bi-person"></i>
                                {{ $post->author->name }}
                            </span>
                        </div>
                        <div class="post-content">
                            <h3>{{ $post->title }}</h3>
                            
                            <p class="mt-3 mb-4">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                            <a href="{{ route('blog.show', $post->id) }}" class="readmore">
                                <span>Lire l'article</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', function() {
            // Animation pour les éléments du blog
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.blog-item, .blog-post-item');
                
                elements.forEach((element, index) => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Initialisation
            const blogItems = document.querySelectorAll('.blog-item, .blog-post-item');
            blogItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(30px)';
                item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            });
            
            // Écouteur d'événement
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Appel initial
            
            // Effet de survol amélioré
            document.querySelectorAll('.blog-item, .blog-post-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                });
            });
        });
    </script>
@endsection
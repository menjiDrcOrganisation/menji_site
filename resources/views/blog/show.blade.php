<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    <meta name="author" content="{{ $post->author->name }}">
    <meta property="og:title" content="{{ $post->title }} | Blog">
    <meta property="og:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    @if($post->images->count() > 0)
    <meta property="og:image" content="{{ asset('storage/' . $post->images[0]->image_path) }}">
    @endif
    <meta property="og:type" content="article">
    <meta name="twitter:card" content="summary_large_image">
    
    <title>{{ $post->title }} | Blog</title>
    
    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --secondary-color: #3f37c9;
            --accent-color: #f72585;
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
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: #f8fafc;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        
        .article-header {
            background: linear-gradient(135deg, rgba(27, 38, 44, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%), 
                        url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 6rem 0 3rem;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .article-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }
        
        .article-header .container {
            position: relative;
            z-index: 1;
        }
        
        .article-title {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .gallery-container {
            position: relative;
            margin-bottom: 2rem;
            overflow: hidden;
            border-radius: var(--border-radius);
        }
        
        .main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            cursor: zoom-in;
        }
        
        .main-image:hover {
            transform: scale(1.01);
        }
        
        .thumbnail-container {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
            padding-bottom: 0.75rem;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #f1f1f1;
            overflow-x: auto;
        }
        
        .thumbnail-container::-webkit-scrollbar {
            height: 6px;
        }
        
        .thumbnail-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .thumbnail-container::-webkit-scrollbar-thumb {
            background-color: var(--primary-color);
            border-radius: 10px;
        }
        
        .thumbnail {
            width: 120px;
            height: 80px;
            object-fit: cover;
            border-radius: calc(var(--border-radius) - 0.25rem);
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
            flex-shrink: 0;
        }
        
        .thumbnail:hover {
            transform: translateY(-0.25rem);
            border-color: var(--accent-color);
            box-shadow: var(--shadow);
        }
        
        .thumbnail.active {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px var(--primary-color);
        }
        
        .article-content {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
        }
        
        .article-content h2, 
        .article-content h3, 
        .article-content h4 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .article-content p {
            margin-bottom: 1.25rem;
        }
        
        .article-content a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .article-content a:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }
        
        .article-content ul, 
        .article-content ol {
            margin-bottom: 1.25rem;
            padding-left: 1.5rem;
        }
        
        .article-content li {
            margin-bottom: 0.5rem;
        }
        
        .meta-info {
            display: flex;
            flex-wrap: wrap;
            gap: 1.25rem;
            margin-bottom: 2rem;
            padding-bottom: 1.25rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }
        
        .meta-item i {
            color: var(--accent-color);
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            margin-bottom: 2rem;
            color: white;
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
            padding: 0.5rem 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            backdrop-filter: blur(5px);
        }
        
        .back-button:hover {
            transform: translateX(-0.25rem);
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .author-bio {
            background-color: white;
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }
        
        .author-bio img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
            border: 3px solid var(--primary-color);
        }
        
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }
        
        .tag {
            background-color: var(--primary-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .tag:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
        }
        
        /* Modal for image zoom */
        .modal-image {
            max-width: 90%;
            max-height: 90vh;
            margin: auto;
            display: block;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .article-title {
                font-size: 2rem;
            }
            
            .main-image {
                height: 400px;
            }
        }
        
        @media (max-width: 768px) {
            .article-header {
                padding: 4rem 0 2rem;
            }
            
            .article-title {
                font-size: 1.75rem;
            }
            
            .main-image {
                height: 350px;
            }
            
            .article-content {
                padding: 1.5rem;
            }
            
            .meta-info {
                gap: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .article-title {
                font-size: 1.5rem;
            }
            
            .main-image {
                height: 250px;
            }
            
            .thumbnail {
                width: 80px;
                height: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="article-header">
        <div class="container">
            <a href="{{ route('blog.index') }}" class="back-button">
                <i class="bi bi-arrow-left me-2"></i> Retour aux articles
            </a>
            <h1 class="article-title">{{ $post->title }}</h1>
            <div class="meta-info">
                <div class="meta-item">
                    <i class="bi bi-person"></i>
                    <span>Auteur : {{ $post->author->name }}</span>
                </div>
                <div class="meta-item">
                    <i class="bi bi-calendar"></i>
                    <span>Publié le : {{ $post->created_at->translatedFormat('d F Y') }}</span>
                </div>
                <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>Temps de lecture : {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min</span>
                </div>
                @if($post->category)
                <div class="meta-item">
                    <i class="bi bi-bookmark"></i>
                    <span>Catégorie : {{ $post->category->name }}</span>
                </div>
                @endif
            </div>
            
            {{-- @if($post->tags->count() > 0)
            <div class="tags">
                @foreach($post->tags as $tag)
                <a href="{{ route('posts.tag', $tag->slug) }}" class="tag">
                    #{{ $tag->name }}
                </a>
                @endforeach
            </div>
            @endif --}}
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mb-5">
        <div class="row g-4">
            <!-- Article Content -->
            <div class="col-lg-8">
                @if($post->images->count() > 0)
                <div class="gallery-container">
                    <img id="mainImage" 
                         src="{{ asset('storage/' . $post->images[0]->image_path) }}" 
                         alt="{{ $post->title }}" 
                         class="main-image w-100"
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal"
                         onclick="updateModalImage('{{ asset('storage/' . $post->images[0]->image_path) }}')">
                    
                    <div class="thumbnail-container">
                        @foreach($post->images as $image)
                        <img src="{{ asset('storage/' . $image->image_path) }}" 
                             alt="Image {{ $loop->iteration }} pour {{ $post->title }}" 
                             class="thumbnail {{ $loop->first ? 'active' : '' }}"
                             onclick="changeMainImage(this, '{{ asset('storage/' . $image->image_path) }}')">
                        @endforeach
                    </div>
                </div>
                @endif
                
                <article class="article-content">
                    <div class="content-text">
                        {!! $post->content !!}
                    </div>
                    
                    @if($post->source)
                    <div class="mt-4 pt-3 border-top">
                        <h4>Sources</h4>
                        <p class="text-muted">{{ $post->source }}</p>
                    </div>
                    @endif
                </article>
                
                <!-- Author Bio -->
                {{-- <div class="author-bio d-flex align-items-center">
                    @if($post->author->profile_photo_path)
                    <img src="{{ asset('storage/' . $post->author->profile_photo_path) }}" 
                         alt="Photo de {{ $post->author->name }}">
                    @else
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=random" 
                         alt="Photo de {{ $post->author->name }}">
                    @endif
                    <div>
                        <h5 class="mb-1">{{ $post->author->name }}</h5>
                        <p class="text-muted small mb-1">{{ $post->author->bio ?? 'Auteur sur notre blog' }}</p>
                        <div class="social-links">
                            @if($post->author->twitter_url)
                            <a href="{{ $post->author->twitter_url }}" class="text-decoration-none me-2" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                            @endif
                            @if($post->author->linkedin_url)
                            <a href="{{ $post->author->linkedin_url }}" class="text-decoration-none me-2" target="_blank">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            @endif
                            @if($post->author->website_url)
                            <a href="{{ $post->author->website_url }}" class="text-decoration-none" target="_blank">
                                <i class="bi bi-globe"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div> --}}
                
                <!-- Comments Section -->
                {{-- <div class="article-content">
                    <h3 class="mb-4">Commentaires</h3>
                    <div class="comment-form mb-4">
                        <form id="commentForm">
                            <div class="mb-3">
                                <label for="commentText" class="form-label">Votre commentaire</label>
                                <textarea class="form-control" id="commentText" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Publier</button>
                        </form>
                    </div>
                    
                    <div class="comments-list">
                        <!-- Sample comment -->
                        <div class="comment mb-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" 
                                     alt="John Doe" 
                                     class="rounded-circle me-2" 
                                     width="40" 
                                     height="40">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="text-muted small ms-2">2 jours ago</span>
                                </div>
                            </div>
                            <p class="mb-0">Très intéressant comme article, merci pour ces informations !</p>
                        </div>
                        
                        <!-- Another sample comment -->
                        <div class="comment mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=random" 
                                     alt="Jane Smith" 
                                     class="rounded-circle me-2" 
                                     width="40" 
                                     height="40">
                                <div>
                                    <strong>Jane Smith</strong>
                                    <span class="text-muted small ms-2">1 semaine ago</span>
                                </div>
                            </div>
                            <p class="mb-0">J'ai appris beaucoup de choses, surtout sur la partie technique. Bravo !</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            
            <!-- Sidebar -->
            {{-- <div class="col-lg-4">
                <!-- Related Posts -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Articles similaires</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            @foreach($relatedPosts as $related)
                            <a href="{{ route('posts.show', $related->slug) }}" 
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                @if($related->images->count() > 0)
                                <img src="{{ asset('storage/' . $related->images[0]->thumbnail_path ?? $related->images[0]->image_path) }}" 
                                     alt="{{ $related->title }}" 
                                     class="rounded me-3" 
                                     width="60" 
                                     height="60">
                                @endif
                                <span>{{ $related->title }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Newsletter -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Newsletter</h5>
                    </div>
                    <div class="card-body">
                        <p class="small text-muted">Abonnez-vous pour recevoir nos derniers articles</p>
                        <form class="mt-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">S'abonner</button>
                        </form>
                    </div>
                </div>
                
                <!-- Popular Tags -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Tags populaires</h5>
                    </div>
                    <div class="card-body">
                        <div class="tags">
                            @foreach($popularTags as $tag)
                            <a href="{{ route('posts.tag', $tag->slug) }}" class="tag">
                                #{{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </main>
    
    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" class="modal-image">
                </div>
            </div>
        </div>
    </div>
    

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Change main image when thumbnail is clicked
        function changeMainImage(element, newSrc) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = newSrc;
            
            // Update active thumbnail
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            element.classList.add('active');
        }
        
        // Update modal image when main image is clicked
        function updateModalImage(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalImage').alt = document.getElementById('mainImage').alt;
        }
        
        // Image gallery with keyboard navigation
        document.addEventListener('keydown', function(e) {
            const thumbnails = document.querySelectorAll('.thumbnail');
            if (thumbnails.length === 0) return;
            
            let currentIndex = Array.from(thumbnails).findIndex(t => t.classList.contains('active'));
            
            if (e.key === 'ArrowRight' && currentIndex < thumbnails.length - 1) {
                thumbnails[currentIndex + 1].click();
            } else if (e.key === 'ArrowLeft' && currentIndex > 0) {
                thumbnails[currentIndex - 1].click();
            }
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Form submission
        document.getElementById('commentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would typically send the comment to your backend
            alert('Merci pour votre commentaire ! Il sera publié après modération.');
            this.reset();
        });
    </script>
</body>
</html>
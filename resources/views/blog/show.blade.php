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
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: #f8fafc;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        
        /* Article Header */
        .article-header {
            background: linear-gradient(135deg, rgba(27, 38, 44, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%);
            color: white;
            padding: 8rem 0 4rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }
        
        .article-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%);
            z-index: 0;
        }
        
        .article-header .container {
            position: relative;
            z-index: 1;
        }
        
        .article-title {
            font-size: 2.8rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        /* Gallery Section */
        .gallery-container {
            position: relative;
            margin-bottom: 3rem;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }
        
        .main-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
            transition: var(--transition);
            cursor: zoom-in;
        }
        
        .main-image:hover {
            transform: scale(1.02);
        }
        
        .thumbnail-container {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
            padding-bottom: 1rem;
            overflow-x: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #f1f1f1;
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
            width: 150px;
            height: 100px;
            object-fit: cover;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
            flex-shrink: 0;
            box-shadow: var(--shadow-sm);
        }
        
        .thumbnail:hover {
            transform: translateY(-5px);
            border-color: var(--accent-color);
            box-shadow: var(--shadow-md);
        }
        
        .thumbnail.active {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px var(--primary-color);
        }
        
        /* Article Content */
        .article-content {
            background: white;
            border-radius: var(--border-radius);
            padding: 3rem;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
        }
        
        .article-content h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin: 2.5rem 0 1.5rem;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .article-content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            border-radius: 3px;
        }
        
        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 2rem 0 1.2rem;
            color: var(--dark-color);
        }
        
        .article-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .article-content a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            border-bottom: 1px dotted currentColor;
        }
        
        .article-content a:hover {
            color: var(--primary-hover);
            border-bottom-style: solid;
        }
        
        .article-content blockquote {
            border-left: 4px solid var(--primary-color);
            padding: 1rem 1.5rem;
            margin: 2rem 0;
            background-color: rgba(67, 97, 238, 0.05);
            font-style: italic;
            color: var(--text-muted);
        }
        
        .article-content ul, 
        .article-content ol {
            margin: 1.5rem 0;
            padding-left: 2rem;
        }
        
        .article-content li {
            margin-bottom: 0.8rem;
        }
        
        /* Meta Info */
        .meta-info {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
        }
        
        .meta-item i {
            color: var(--accent-color);
            font-size: 1.1rem;
        }
        
        /* Back Button */
        .back-button {
            display: inline-flex;
            align-items: center;
            margin-bottom: 2rem;
            color: white;
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
            padding: 0.75rem 1.25rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .back-button:hover {
            transform: translateX(-5px);
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        /* Tags */
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1.5rem;
        }
        
        .tag {
            background-color: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
        }
        
        .tag:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        
        /* Image Modal */
        .modal-image {
            max-width: 90%;
            max-height: 80vh;
            margin: auto;
            display: block;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .main-image {
                height: 500px;
            }
        }
        
        @media (max-width: 992px) {
            .article-title {
                font-size: 2.4rem;
            }
            
            .article-content {
                padding: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .article-header {
                padding: 6rem 0 3rem;
            }
            
            .article-title {
                font-size: 2rem;
            }
            
            .main-image {
                height: 400px;
            }
            
            .thumbnail {
                width: 120px;
                height: 80px;
            }
        }
        
        @media (max-width: 576px) {
            .article-header {
                padding: 5rem 0 2rem;
            }
            
            .article-title {
                font-size: 1.8rem;
            }
            
            .main-image {
                height: 300px;
            }
            
            .article-content {
                padding: 1.5rem;
            }
            
            .article-content h2 {
                font-size: 1.6rem;
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
                    <span>{{ $post->author->name }}</span>
                </div>
                <div class="meta-item">
                    <i class="bi bi-calendar"></i>
                    <span>{{ $post->created_at->translatedFormat('d F Y') }}</span>
                </div>
                <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min de lecture</span>
                </div>
                @if($post->category)
                <div class="meta-item">
                    <i class="bi bi-bookmark"></i>
                    <span>{{ $post->category->name }}</span>
                </div>
                @endif
            </div>
            
            {{-- @if($post->tags->count() > 0)
            <div class="tags">
                @foreach($post->tags as $tag)
                <a href="{{ route('blog.tag', $tag->slug) }}" class="tag">
                    <i class="bi bi-tag me-1"></i> {{ $tag->name }}
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
                    <div class="mt-5 pt-4 border-top">
                        <h4>Sources et références</h4>
                        <div class="mt-3">
                            {!! nl2br(e($post->source)) !!}
                        </div>
                    </div>
                    @endif
                </article>
                
                <!-- Author Bio -->
                <div class="author-bio bg-light p-4 rounded-3 d-flex align-items-center mb-4">
                    @if($post->author->profile_photo_path)
                    <img src="{{ asset('storage/' . $post->author->profile_photo_path) }}" 
                         alt="Photo de {{ $post->author->name }}"
                         class="rounded-circle me-4"
                         width="80"
                         height="80">
                    @else
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=random" 
                         alt="Photo de {{ $post->author->name }}"
                         class="rounded-circle me-4"
                         width="80"
                         height="80">
                    @endif
                    <div>
                        <h5 class="mb-1">{{ $post->author->name }}</h5>
                        <p class="text-muted mb-2">{{ $post->author->bio ?? 'Auteur sur notre blog' }}</p>
                        <div class="social-links">
                            @if($post->author->twitter_url)
                            <a href="{{ $post->author->twitter_url }}" class="text-decoration-none me-3" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                            @endif
                            @if($post->author->linkedin_url)
                            <a href="{{ $post->author->linkedin_url }}" class="text-decoration-none me-3" target="_blank">
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
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Share Widget -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Partager cet article</h5>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-facebook me-1"></i> Facebook
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm rounded-pill">
                                <i class="bi bi-twitter me-1"></i> Twitter
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-pill">
                                <i class="bi bi-linkedin me-1"></i> LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Related Posts -->
                {{-- @if($relatedPosts->count() > 0)
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Articles similaires</h5>
                        <div class="list-group list-group-flush">
                            @foreach($relatedPosts as $related)
                            <a href="{{ route('blog.show', $related->id) }}" 
                               class="list-group-item list-group-item-action border-0 px-0 py-3">
                                <div class="d-flex align-items-center">
                                    @if($related->images->count() > 0)
                                    <img src="{{ asset('storage/' . $related->images[0]->image_path) }}" 
                                         alt="{{ $related->title }}"
                                         class="rounded me-3"
                                         width="60"
                                         height="60"
                                         style="object-fit: cover;">
                                    @endif
                                    <div>
                                        <h6 class="mb-1">{{ Str::limit($related->title, 50) }}</h6>
                                        <small class="text-muted">{{ $related->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif --}}
                
                <!-- Newsletter -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Newsletter</h5>
                        <p class="text-muted small mb-3">Abonnez-vous pour recevoir nos derniers articles</p>
                        <form class="mt-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-envelope me-1"></i> S'abonner
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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
        
        // Share buttons functionality
        document.querySelectorAll('.btn-share').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const url = window.location.href;
                const title = document.title;
                
                if (this.classList.contains('btn-facebook')) {
                    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
                } else if (this.classList.contains('btn-twitter')) {
                    window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`, '_blank');
                } else if (this.classList.contains('btn-linkedin')) {
                    window.open(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(url)}&title=${encodeURIComponent(title)}`, '_blank');
                }
            });
        });
    </script>
</body>
</html>
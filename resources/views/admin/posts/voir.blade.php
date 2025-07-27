<x-app-layout>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Gestion des Articles</h1>
            <a href="{{ route('admin.posts.create') }}" class="create-btn">
                <i class="bi bi-plus-circle"></i> Nouvel Article
            </a>
        </div>

        <div class="articles-list">
            @foreach($posts as $post)
            <div class="article-card">
                @if($post->images->count() > 0)
                <div class="article-image">
                    <img src="{{ asset('storage/' . $post->images[0]->image_path) }}" alt="{{ $post->title }}">
                </div>
                @endif
                
                <div class="article-content">
                    <h3>{{ $post->title }}</h3>
                    <p class="article-excerpt">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                    <div class="article-meta">
                        <span>Créé le {{ $post->created_at->format('d/m/Y') }}</span>
                        <span>{{ $post->images->count() }} images</span>
                    </div>
                </div>
                
                <div class="article-actions">
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="action-btn edit-btn">
                        <i class="bi bi-pencil"></i> Modifier
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn delete-btn" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                            <i class="bi bi-trash"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>

    <style>
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .admin-header h1 {
            font-size: 2rem;
            color: #1e293b;
            margin: 0;
        }

        .create-btn {
            background-color: #4f46e5;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .create-btn:hover {
            background-color: #4338ca;
            transform: translateY(-2px);
        }

        .articles-list {
            display: grid;
            gap: 1.5rem;
        }

        .article-card {
            display: flex;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .article-image {
            width: 250px;
            height: 200px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .article-card:hover .article-image img {
            transform: scale(1.05);
        }

        .article-content {
            flex: 1;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .article-content h3 {
            margin: 0 0 1rem 0;
            color: #1e293b;
            font-size: 1.25rem;
        }

        .article-excerpt {
            color: #64748b;
            margin: 0 0 1rem 0;
            flex-grow: 1;
        }

        .article-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #94a3b8;
        }

        .article-actions {
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
            justify-content: center;
            gap: 0.75rem;
            border-left: 1px solid #f1f5f9;
        }

        .action-btn {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #e0e7ff;
            color: #4f46e5;
        }

        .edit-btn:hover {
            background-color: #c7d2fe;
        }

        .delete-btn {
            background-color: #fee2e2;
            color: #dc2626;
        }

        .delete-btn:hover {
            background-color: #fecaca;
        }

        .pagination {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .article-card {
                flex-direction: column;
            }

            .article-image {
                width: 100%;
                height: 180px;
            }

            .article-actions {
                flex-direction: row;
                border-left: none;
                border-top: 1px solid #f1f5f9;
                padding: 1rem;
                justify-content: flex-end;
            }
        }

        @media (max-width: 600px) {
            .admin-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .article-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</x-app-layout> 
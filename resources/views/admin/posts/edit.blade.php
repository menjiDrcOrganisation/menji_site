<div class="article-form-container">
    <!-- Formulaire principal de mise à jour -->
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="article-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title" class="form-label">Titre de l'article</label>
            <input type="text" id="title" name="title" class="form-input" 
                   value="{{ old('title', $post->title) }}" 
                   placeholder="Entrez un titre percutant" required>
            <div class="form-hint">Maximum 255 caractères</div>
        </div>

        <div class="form-group">
            <label for="content" class="form-label">Contenu</label>
            <textarea id="content" name="content" class="form-textarea" rows="10" 
                      placeholder="Rédigez votre contenu ici..." required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Images actuelles</label>
            <div class="current-images-grid">
                @foreach ($post->images as $image)
                <div class="image-thumbnail">
                    <img src="{{ asset('storage/' . $image->image_path) }}" 
                         alt="Image {{ $loop->iteration }}" 
                         class="thumbnail-image">
                    
                    <!-- Bouton de suppression sera placé ici via CSS -->
                </div>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label for="images" class="form-label">Ajouter de nouvelles images</label>
            <div class="file-upload-wrapper">
                <input type="file" id="images" name="images[]" 
                       class="file-upload-input" 
                       multiple accept="image/*">
                <label for="images" class="file-upload-label">
                    <i class="upload-icon"></i>
                    <span>Glissez-déposez vos fichiers ou cliquez pour parcourir</span>
                    <div class="file-upload-hint">Formats acceptés : JPG, PNG, GIF (max 2MB par image)</div>
                </label>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="save-icon"></i> Mettre à jour l'article
            </button>
            <a href="" class="btn btn-secondary">
                Annuler
            </a>
        </div>
    </form>

    <!-- Formulaires de suppression des images (gérés via JavaScript pour un meilleur UX) -->
    <div class="delete-forms-container" id="deleteFormsContainer">
        @foreach ($post->images as $image)
        <form action="{{ route('posts.images.destroy', $image->id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
        </form>
        @endforeach
    </div>
</div>

<style>
    :root {
        --primary-color: #2b6cb0;
        --primary-hover: #2c5282;
        --danger-color: #e53e3e;
        --danger-hover: #c53030;
        --text-color: #2d3748;
        --text-muted: #718096;
        --border-color: #e2e8f0;
        --bg-color: #f7fafc;
        --radius: 0.375rem;
        --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --transition: all 0.2s ease-in-out;
    }

    .article-form-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow-md);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--text-color);
    }

    .form-hint {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-top: 0.25rem;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid var(--border-color);
        border-radius: var(--radius);
        font-size: 1rem;
        transition: var(--transition);
    }

    .form-input:focus, .form-textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
    }

    .form-textarea {
        min-height: 200px;
        resize: vertical;
    }

    .current-images-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 0.5rem;
    }

    .image-thumbnail {
        position: relative;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
    }

    .thumbnail-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        display: block;
    }

    .image-thumbnail:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .delete-btn {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        width: 24px;
        height: 24px;
        background-color: var(--danger-color);
        color: white;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }

    .delete-btn:hover {
        background-color: var(--danger-hover);
    }

    .file-upload-wrapper {
        position: relative;
        margin-top: 0.5rem;
    }

    .file-upload-input {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    .file-upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem;
        border: 2px dashed var(--border-color);
        border-radius: var(--radius);
        background-color: var(--bg-color);
        text-align: center;
        transition: var(--transition);
    }

    .file-upload-label:hover {
        border-color: var(--primary-color);
    }

    .upload-icon {
        display: block;
        width: 48px;
        height: 48px;
        margin-bottom: 1rem;
        background-color: #e2e8f0;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4'%3E%3C/path%3E%3Cpolyline points='17 8 12 3 7 8'%3E%3C/polyline%3E%3Cline x1='12' y1='3' x2='12' y2='15'%3E%3C/line%3E%3C/svg%3E") no-repeat center;
    }

    .file-upload-hint {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin-top: 0.5rem;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid var(--border-color);
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: var(--radius);
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-primary:hover {
        background-color: var(--primary-hover);
    }

    .btn-secondary {
        background-color: white;
        color: var(--primary-color);
        border: 1px solid var(--primary-color);
    }

    .btn-secondary:hover {
        background-color: var(--bg-color);
    }

    .save-icon {
        display: inline-block;
        width: 16px;
        height: 16px;
        margin-right: 0.5rem;
        background-color: currentColor;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z'%3E%3C/path%3E%3Cpolyline points='17 21 17 13 7 13 7 21'%3E%3C/polyline%3E%3Cpolyline points='7 3 7 8 15 8'%3E%3C/polyline%3E%3C/svg%3E") no-repeat center;
    }

    @media (max-width: 768px) {
        .article-form-container {
            padding: 1rem;
            margin: 1rem;
        }
        
        .current-images-grid {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout des boutons de suppression avec confirmation
        const thumbnails = document.querySelectorAll('.image-thumbnail');
        const deleteForms = document.querySelectorAll('.delete-form');
        
        thumbnails.forEach((thumbnail, index) => {
            const deleteBtn = document.createElement('button');
            deleteBtn.className = 'delete-btn';
            deleteBtn.innerHTML = '×';
            deleteBtn.title = 'Supprimer cette image';
            
            deleteBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Êtes-vous sûr de vouloir supprimer cette image ?')) {
                    deleteForms[index].submit();
                }
            });
            
            thumbnail.appendChild(deleteBtn);
        });

        // Affichage du nom des fichiers sélectionnés
        const fileInput = document.querySelector('.file-upload-input');
        const fileLabel = document.querySelector('.file-upload-label span');
        
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                if (this.files.length === 1) {
                    fileLabel.textContent = this.files[0].name;
                } else {
                    fileLabel.textContent = `${this.files.length} fichiers sélectionnés`;
                }
            } else {
                fileLabel.textContent = 'Glissez-déposez vos fichiers ou cliquez pour parcourir';
            }
        });
    });
</script>
<x-app-layout>
    <div class="form-wrapper">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="post-form">
            @csrf

            <h2 class="form-title">Créer un nouvel article</h2>

            <div class="form-group">
                <label for="title" class="form-label">Titre :</label>
                <input type="text" id="title" name="title" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="content" class="form-label">Contenu :</label>
                <textarea id="content" name="content" class="form-textarea" required></textarea>
            </div>

            <div class="form-group">
                <label for="images" class="form-label">Galerie d'images (au moins 5) :</label>
                <input type="file" id="images" name="images[]" class="form-file" multiple required>
                <div class="file-hint">Sélectionnez au moins 5 images</div>
            </div>

            <div class="form-actions">
                <button type="submit" class="submit-btn">Publier</button>
            </div>
        </form>
    </div>

    <style>
        /* Garantit un espacement suffisant sous la navbar */
        .form-wrapper {
            padding-top: 80px; /* Ajustez cette valeur selon la hauteur de votre navbar */
            padding-bottom: 40px;
            min-height: 100vh;
            background-color: #f8fafc;
        }

        .post-form {
            max-width: 700px;
            margin: 0 auto;
            padding: 2.5rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .form-title {
            font-size: 1.75rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #1e293b;
        }

        .form-group {
            margin-bottom: 1.75rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 500;
            color: #334155;
        }

        .form-input, 
        .form-textarea {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #f8fafc;
            transition: all 0.3s ease;
        }

        .form-input:focus,
        .form-textarea:focus {
            border-color: #6366f1;
            outline: none;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
            background-color: #fff;
        }

        .form-textarea {
            min-height: 200px;
            resize: vertical;
        }

        .form-file {
            width: 100%;
            padding: 0.5rem;
            border: 1px dashed #cbd5e1;
            border-radius: 8px;
            background-color: #f8fafc;
        }

        .file-hint {
            font-size: 0.85rem;
            color: #64748b;
            margin-top: 0.5rem;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 2rem;
        }

        .submit-btn {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 0.875rem 2rem;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #4f46e5;
        }

        @media (max-width: 768px) {
            .form-wrapper {
                padding: 60px 20px 30px;
            }
            
            .post-form {
                padding: 1.5rem;
            }
        }
    </style>
</x-app-layout>
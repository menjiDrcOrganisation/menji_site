<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="post-form">
    @csrf

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

    <button type="submit" class="submit-btn">Publier</button>
</form>

<style>
    .post-form {
        max-width: 600px;
        margin: 2rem auto;
        padding: 2rem;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #333;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .form-input:focus, .form-textarea:focus {
        border-color: #4a90e2;
        outline: none;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
    }

    .form-textarea {
        min-height: 150px;
        resize: vertical;
    }

    .form-file {
        width: 100%;
        padding: 0.5rem;
    }

    .file-hint {
        font-size: 0.85rem;
        color: #666;
        margin-top: 0.25rem;
    }

    .submit-btn {
        background-color: #4a90e2;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #3a7bc8;
    }

    @media (max-width: 640px) {
        .post-form {
            padding: 1rem;
            margin: 1rem;
        }
    }
</style>
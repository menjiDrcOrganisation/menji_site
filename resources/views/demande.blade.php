@extends('layout')

@section('title', "Demande d'Événement")

@section('content')
<style>
    :root {
        --primary: #764BA2;
        --secondary: #FFB447;
        --accent: #6C63FF;
        --light: #F8F9FA;
        --dark: #343A40;
        --success: #28a745;
        --error: #dc3545;
        --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
    }

    .form-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .card-animated {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: none;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        opacity: 0;
        transform: translateY(30px);
        animation: cardEntrance 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
    }

    @keyframes cardEntrance {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-header {
        background: var(--gradient);
        color: white;
        padding: 1.5rem 2rem;
        border-bottom: none;
        position: relative;
        overflow: hidden;
    }

    .card-header h3 {
        margin: 0;
        font-weight: 600;
        position: relative;
        z-index: 1;
    }

    .card-body {
        padding: 2.5rem;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: var(--dark);
        transition: color 0.3s;
    }

    .form-control, .form-select {
        border-radius: 10px;
        padding: 0.75rem 1rem;
        border: 2px solid #e9ecef;
        transition: all 0.3s;
        background-color: #fff;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
        transform: translateY(-2px);
    }

    .form-control.is-invalid {
        border-color: var(--error);
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }

    .invalid-feedback {
        display: none;
        color: var(--error);
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .form-control.is-invalid + .invalid-feedback {
        display: block;
    }

    .form-group {
        margin-bottom: 1.5rem;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 0.6s forwards;
    }

    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.2s; }
    .form-group:nth-child(3) { animation-delay: 0.3s; }
    .form-group:nth-child(4) { animation-delay: 0.4s; }
    .form-group:nth-child(5) { animation-delay: 0.5s; }
    .form-group:nth-child(6) { animation-delay: 0.6s; }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn {
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-success {
        background: var(--gradient);
        border: none;
        color: white;
    }

    .btn-animate {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .btn-animate::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background: rgba(255, 255, 255, 0.2);
        transition: all 0.3s;
        z-index: -1;
    }

    .btn-animate:hover {
        transform: translateY(-3px);
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-animate:hover::before {
        width: 100%;
    }

    .file-upload-container {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }

    .file-upload-container input[type="file"] {
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
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1rem;
        background-color: #f8f9fa;
        border: 2px dashed #dee2e6;
        border-radius: 10px;
        transition: all 0.3s;
        cursor: pointer;
        text-align: center;
    }

    .file-upload-label:hover {
        border-color: var(--primary);
        background-color: rgba(118, 75, 162, 0.05);
    }

    .file-upload-label i {
        margin-right: 0.5rem;
        color: var(--primary);
    }

    .progress-bar {
        height: 4px;
        background: var(--gradient);
        width: 0%;
        transition: width 0.5s;
        border-radius: 2px;
        margin-top: 0.5rem;
    }

    .character-count {
        font-size: 0.8rem;
        color: #6c757d;
        text-align: right;
        margin-top: 0.25rem;
    }

    .alert {
        border-radius: 10px;
        border: none;
        padding: 1rem 1.5rem;
    }

    .alert-success {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
    }

    .alert-danger {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
        
        .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .d-flex.justify-content-end.gap-2 {
            flex-direction: column;
        }
    }
</style>

<div class="container my-5">
    <div class="form-container">
        <div class="card shadow-sm card-animated">
            <div class="card-header">
                <h3><i class="fas fa-calendar-plus me-2"></i>Faire une demande pour un Événement</h3>
            </div>

            <div class="card-body">
                <!-- Messages d'alerte -->
                <div id="alertContainer"></div>

                <!-- Formulaire avec action vide car on utilise JavaScript pour l'envoi -->
                <form action="" method="POST" enctype="multipart/form-data" id="eventForm">
                    @csrf

                    <div class="form-group">
                        <label for="nom_evenement" class="form-label">
                            Nom de l'Événement <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="nom_evenement" id="nom_evenement" class="form-control" 
                               value="{{ old('nom_evenement') }}" required maxlength="255"
                               placeholder="Entrez le nom de l'événement">
                        <div class="invalid-feedback">Le nom de l'événement est requis (maximum 255 caractères).</div>
                    </div>

                    <div class="form-group">
                        <label for="contact_organisateur" class="form-label">
                            Contact de l'Organisateur <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="contact_organisateur" id="contact_organisateur" class="form-control" 
                               value="{{ old('contact_organisateur') }}" required maxlength="255"
                               placeholder="Email ou téléphone de contact">
                        <div class="invalid-feedback">Le contact de l'organisateur est requis (maximum 255 caractères).</div>
                    </div>

                    <div class="form-group">
                        <label for="type_evenement" class="form-label">
                            Type d'Événement <span class="text-danger">*</span>
                        </label>
                        <select name="type_evenement" id="type_evenement" class="form-select" required>
                            <option value="">-- Sélectionner un type --</option>
                            <option value="conference" {{ old('type_evenement') == 'conference' ? 'selected' : '' }}>Conférence</option>
                            <option value="atelier" {{ old('type_evenement') == 'atelier' ? 'selected' : '' }}>Atelier</option>
                            <option value="seminaire" {{ old('type_evenement') == 'seminaire' ? 'selected' : '' }}>Séminaire</option>
                            <option value="formation" {{ old('type_evenement') == 'formation' ? 'selected' : '' }}>Formation</option>
                            <option value="team-building" {{ old('type_evenement') == 'team-building' ? 'selected' : '' }}>Team Building</option>
                            <option value="concert" {{ old('type_evenement') == 'concert' ? 'selected' : '' }}>Concert</option>
                            <option value="exposition" {{ old('type_evenement') == 'exposition' ? 'selected' : '' }}>Exposition</option>
                            <option value="competition" {{ old('type_evenement') == 'competition' ? 'selected' : '' }}>Compétition</option>
                            <option value="autre" {{ old('type_evenement') == 'autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        <div class="invalid-feedback">Veuillez sélectionner un type d'événement.</div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">
                            Description de l'Événement <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" id="description" class="form-control" rows="4" 
                                  placeholder="Décrire l'événement en détail..." required>{{ old('description') }}</textarea>
                        <div class="character-count"><span id="charCount">0</span> caractères</div>
                        <div class="progress-bar" id="descriptionProgress"></div>
                        <div class="invalid-feedback">La description de l'événement est requise.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Affiche de l'Événement
                        </label>
                        <div class="file-upload-container">
                            <div class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span id="fileLabel">Choisir une affiche (JPEG, PNG, JPG - max. 2MB)</span>
                            </div>
                            <input type="file" name="affiche" id="affiche" class="form-control" 
                                   accept="image/jpeg,image/png,image/jpg">
                            <div class="invalid-feedback" id="imageError"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4 form-group">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary btn-animate">
                            <i class="fas fa-times me-2"></i>Annuler
                        </a>
                        <button type="submit" class="btn btn-success btn-animate" id="submitBtn">
                            <i class="fas fa-paper-plane me-2"></i>Soumettre la demande
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('eventForm');
    const description = document.getElementById('description');
    const charCount = document.getElementById('charCount');
    const progressBar = document.getElementById('descriptionProgress');
    const fileInput = document.getElementById('affiche');
    const fileLabel = document.getElementById('fileLabel');
    const submitBtn = document.getElementById('submitBtn');
    const alertContainer = document.getElementById('alertContainer');

    // URL de l'API externe
    const API_URL = 'https://gestionticket.menjidrc.com/api/demande-evenement';

    // Fonction pour afficher les alertes
    function showAlert(message, type = 'success') {
        const alert = document.createElement('div');
        alert.className = `alert alert-${type} alert-dismissible fade show`;
        alert.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        alertContainer.appendChild(alert);
        
        setTimeout(() => {
            if (alert.parentNode) {
                alert.remove();
            }
        }, 5000);
    }

    // Compteur de caractères pour la description
    description.addEventListener('input', function() {
        const count = this.value.length;
        charCount.textContent = count;
        
        const progress = Math.min((count / 1000) * 100, 100);
        progressBar.style.width = `${progress}%`;
        
        if (progress > 90) {
            progressBar.style.background = 'linear-gradient(135deg, #ff6b6b, #ee5a24)';
        } else if (progress > 75) {
            progressBar.style.background = 'linear-gradient(135deg, #ffa726, #ff9800)';
        } else {
            progressBar.style.background = 'var(--gradient)';
        }
    });

    // Gestion de l'upload de fichier
    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const file = this.files[0];
            const maxSize = 2 * 1024 * 1024;
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            
            if (!validTypes.includes(file.type)) {
                showAlert('❌ Format de fichier non supporté. Utilisez JPEG, PNG ou JPG.', 'danger');
                this.value = '';
                fileLabel.textContent = 'Choisir une affiche (JPEG, PNG, JPG - max. 2MB)';
                return;
            }
            
            if (file.size > maxSize) {
                showAlert('❌ Le fichier est trop volumineux. Taille max: 2MB.', 'danger');
                this.value = '';
                fileLabel.textContent = 'Choisir une affiche (JPEG, PNG, JPG - max. 2MB)';
                return;
            }
            
            fileLabel.textContent = file.name;
        } else {
            fileLabel.textContent = 'Choisir une affiche (JPEG, PNG, JPG - max. 2MB)';
        }
    });

    // Validation côté client
    function validateForm() {
        let isValid = true;
        const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        return isValid;
    }

    // Événement de soumission du formulaire
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        if (!validateForm()) {
            showAlert('❌ Veuillez corriger les erreurs dans le formulaire.', 'danger');
            return;
        }

        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Envoi en cours...';
        submitBtn.disabled = true;

        try {
            const formData = new FormData();
            
            // Ajouter les champs avec les noms exacts attendus par l'API
            formData.append('nom_evenement', document.getElementById('nom_evenement').value);
            formData.append('contact_organisateur', document.getElementById('contact_organisateur').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('type_evenement', document.getElementById('type_evenement').value);
            formData.append('statut', 'en_attente'); // Valeur par défaut

            // Ajouter le fichier affiche s'il existe
            const afficheFile = document.getElementById('affiche').files[0];
            if (afficheFile) {
                formData.append('affiche', afficheFile);
            }

            const response = await fetch(API_URL, {
                method: 'POST',
                body: formData,
                // Note: Pas besoin de headers CSRF pour une API externe
                // Les headers Content-Type seront automatiquement définis par le navigateur pour FormData
            });

            const data = await response.json();

            if (response.ok) {
                showAlert('✅ Demande d\'événement envoyée avec succès ! Votre demande est en attente de validation.', 'success');
                form.reset();
                charCount.textContent = '0';
                progressBar.style.width = '0%';
                fileLabel.textContent = 'Choisir une affiche (JPEG, PNG, JPG - max. 2MB)';
                
                // Redirection après succès
                setTimeout(() => {
                    window.location.href = "{{ url('/') }}";
                }, 3000);
            } else {
                let errorMessage = '❌ Une erreur est survenue lors de l\'envoi de la demande.';
                if (data.errors) {
                    errorMessage = '❌ Veuillez corriger les erreurs suivantes:<br>' + 
                        Object.values(data.errors).flat().join('<br>');
                } else if (data.message) {
                    errorMessage = data.message;
                }
                showAlert(errorMessage, 'danger');
            }
        } catch (error) {
            console.error('Erreur réseau:', error);
            showAlert('⚠️ Impossible de contacter le serveur. Vérifiez votre connexion internet.', 'danger');
        } finally {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    });

    // Validation en temps réel
    form.querySelectorAll('input, select, textarea').forEach(input => {
        input.addEventListener('blur', validateForm);
        input.addEventListener('input', function() {
            this.classList.remove('is-invalid');
        });
    });

    // Initialiser le compteur de caractères
    charCount.textContent = description.value.length;
    const initialProgress = Math.min((description.value.length / 1000) * 100, 100);
    progressBar.style.width = `${initialProgress}%`;
});
</script>
@endsection
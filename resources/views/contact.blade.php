@extends('layout')
@section('title', 'Menji Drc - Contact')

@section('content')
<div class="contact-section pourquoi-menji-section" style="padding: 140px 0 80px;">
    <!-- Flash Message Container -->
    <div id="flashMessageContainer"></div>

    <div class="container">
        <!-- En-tête de section -->
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <div class="menji-contact-badge">Contact</div>
            <h2 class="display-5 fw-bold mb-3">Parlons de votre projet</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Notre équipe est prête à transformer vos idées en réalité. 
                Contactez-nous pour une consultation gratuite et personnalisée.
            </p>
        </div>

        <div class="row g-5 justify-content-center">
            <!-- Carte de contact principale -->
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="menji-contact-card">
                    <div class="contact-form-header">
                        <h3 class="menji-contact-title">
                            <i class="bi bi-send-fill me-2"></i>Envoyez-nous un message
                        </h3>
                        <p class="menji-contact-subtitle">
                            Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais
                        </p>
                    </div>
                    
                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                        @csrf
                    
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Votre nom complet</label>
                                    <input type="text" class="form-control menji-input" name="name" 
                                           placeholder="John Doe" value="{{ old('name') }}" required>
                                    <div class="form-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Votre adresse email</label>
                                    <input type="email" class="form-control menji-input" name="email" 
                                           placeholder="john@example.com" value="{{ old('email') }}" required>
                                    <div class="form-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label">Sujet de votre message</label>
                            <input type="text" class="form-control menji-input" name="subject" 
                                   placeholder="Ex: Développement d'application mobile" value="{{ old('subject') }}">
                            <div class="form-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label">Service concerné</label>
                            <select class="form-control menji-select" name="service" required>
                                <option value="" disabled selected>Choisissez un service</option>
                                <option value="Développement Web" {{ old('service') == 'Développement Web' ? 'selected' : '' }}>
                                    🌐 Développement Web
                                </option>
                                <option value="Sécurité Informatique" {{ old('service') == 'Sécurité Informatique' ? 'selected' : '' }}>
                                    🔒 Sécurité Informatique
                                </option>
                                <option value="Solutions Cloud" {{ old('service') == 'Solutions Cloud' ? 'selected' : '' }}>
                                    ☁️ Solutions Cloud
                                </option>
                                <option value="UI/UX Design" {{ old('service') == 'UI/UX Design' ? 'selected' : '' }}>
                                    🎨 UI/UX Design
                                </option>
                                <option value="Consultation" {{ old('service') == 'Consultation' ? 'selected' : '' }}>
                                    💼 Consultation
                                </option>
                                <option value="Autre" {{ old('service') == 'Autre' ? 'selected' : '' }}>
                                    💡 Autre demande
                                </option>
                            </select>
                            <div class="form-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label class="form-label">Décrivez votre projet ou demande</label>
                            <textarea class="form-control menji-textarea" name="message" rows="6" 
                                      placeholder="Parlez-nous de votre projet, vos objectifs, votre budget et vos délais..." required>{{ old('message') }}</textarea>
                            <div class="form-icon textarea-icon">
                                <i class="bi bi-pencil"></i>
                            </div>
                        </div>
                        
                        <div class="form-footer">
                            <div class="form-check menji-checkbox">
                                <input class="form-check-input" type="checkbox" id="consentCheck" name="consent" {{ old('consent') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="consentCheck">
                                    J'accepte la <a href="#" class="text-decoration-none">politique de confidentialité</a>
                                </label>
                            </div>
                            <button type="submit" class="btn menji-btn-primary" id="submitBtn">
                                <i class="bi bi-send-fill me-2"></i> 
                                <span class="btn-text">Envoyer le message</span>
                                <span class="btn-spinner d-none">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    Envoi en cours...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Variables de couleurs pour Menji */
    :root {
        --menji-primary: #2b6cb0;
        --menji-secondary: #4299e1;
        --menji-accent: #38b2ac;
        --menji-gradient: linear-gradient(135deg, #2b6cb0 0%, #4299e1 100%);
        --menji-light: #f7fafc;
        --menji-dark: #2d3748;
        --menji-shadow: 0 10px 25px rgba(43, 108, 176, 0.1);
        --menji-border: #e2e8f0;
        --menji-success: #48bb78;
        --menji-error: #f56565;
    }
    
    .contact-section {
        background: var(--menji-light);
        position: relative;
        overflow: hidden;
    }
    
    .contact-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: var(--menji-gradient);
        border-radius: 50%;
        opacity: 0.05;
        z-index: 0;
    }
    
    .contact-section::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -8%;
        width: 300px;
        height: 300px;
        background: var(--menji-gradient);
        border-radius: 50%;
        opacity: 0.05;
        z-index: 0;
    }
    
    .contact-section .container {
        position: relative;
        z-index: 1;
    }
    
    .menji-contact-badge {
        display: inline-block;
        padding: 8px 20px;
        background: var(--menji-gradient);
        color: white;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
        letter-spacing: 1px;
        box-shadow: 0 4px 6px rgba(43, 108, 176, 0.2);
    }
    
    /* Carte de contact principale */
    .menji-contact-card {
        background: white;
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: var(--menji-shadow);
        border: 1px solid var(--menji-border);
        position: relative;
        overflow: hidden;
        height: 100%;
    }
    
    .menji-contact-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--menji-gradient);
    }
    
    .contact-form-header {
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid var(--menji-border);
    }
    
    .menji-contact-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--menji-dark);
        margin-bottom: 0.5rem;
    }
    
    .menji-contact-subtitle {
        color: #666;
        font-size: 0.95rem;
    }
    
    /* Styles des formulaires */
    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--menji-dark);
        font-size: 0.9rem;
    }
    
    .menji-input,
    .menji-select,
    .menji-textarea {
        width: 100%;
        padding: 0.875rem 1rem 0.875rem 3rem;
        border: 1px solid var(--menji-border);
        border-radius: 10px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: white;
    }
    
    .menji-input:focus,
    .menji-select:focus,
    .menji-textarea:focus {
        border-color: var(--menji-secondary);
        box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
        outline: none;
        transform: translateY(-1px);
    }
    
    .menji-textarea {
        resize: vertical;
        min-height: 150px;
    }
    
    .form-icon {
        position: absolute;
        left: 1rem;
        top: 2.5rem;
        color: var(--menji-secondary);
        font-size: 1.1rem;
        pointer-events: none;
    }
    
    .textarea-icon {
        top: 2.2rem;
    }
    
    /* Checkbox personnalisé */
    .menji-checkbox {
        padding-left: 2rem;
    }
    
    .menji-checkbox .form-check-input {
        width: 1.2em;
        height: 1.2em;
        margin-left: -2rem;
        border: 2px solid var(--menji-border);
    }
    
    .menji-checkbox .form-check-input:checked {
        background-color: var(--menji-secondary);
        border-color: var(--menji-secondary);
    }
    
    .menji-checkbox .form-check-input:focus {
        box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.25);
    }
    
    /* Bouton */
    .menji-btn-primary {
        background: var(--menji-gradient);
        border: none;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .menji-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(43, 108, 176, 0.3);
    }
    
    .menji-btn-primary:active {
        transform: translateY(-1px);
    }
    
    /* Carte d'informations */
    .menji-info-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: var(--menji-shadow);
        border: 1px solid var(--menji-border);
        height: 100%;
    }
    
    .info-header {
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid var(--menji-border);
    }
    
    .info-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--menji-dark);
    }
    
    .info-items {
        margin-bottom: 2rem;
    }
    
    .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        padding: 1rem;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .info-item:hover {
        background: var(--menji-light);
    }
    
    .info-icon {
        width: 40px;
        height: 40px;
        background: var(--menji-gradient);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .info-content h5 {
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--menji-dark);
        margin-bottom: 0.25rem;
    }
    
    .info-content p {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 0;
    }
    
    /* Liens sociaux */
    .info-social {
        padding-top: 1.5rem;
        border-top: 1px solid var(--menji-border);
    }
    
    .social-links {
        display: flex;
        gap: 1rem;
    }
    
    .social-link {
        width: 40px;
        height: 40px;
        background: var(--menji-light);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--menji-dark);
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }
    
    .social-link:hover {
        background: var(--menji-gradient);
        color: white;
        transform: translateY(-3px);
    }
    
    /* Footer du formulaire */
    .form-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        padding-top: 1.5rem;
        border-top: 1px solid var(--menji-border);
    }
    
    /* Flash messages */
    #flashMessageContainer {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        max-width: 400px;
    }
    
    .menji-alert {
        border: none;
        border-radius: 10px;
        padding: 1rem 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        animation: slideInRight 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .menji-alert-success {
        background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
        color: white;
    }
    
    .menji-alert-danger {
        background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%);
        color: white;
    }
    
    .menji-alert .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.8;
    }
    
    .menji-alert .btn-close:hover {
        opacity: 1;
    }
    
    /* Animations */
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes fadeOut {
        to {
            opacity: 0;
            transform: translateX(100%);
        }
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .menji-contact-card,
        .menji-info-card {
            padding: 1.75rem;
        }
        
        .form-footer {
            flex-direction: column;
            align-items: stretch;
        }
        
        .menji-btn-primary {
            width: 100%;
        }
    }
    
    @media (max-width: 768px) {
        .contact-section {
            padding: 120px 0 60px !important;
        }
        
        .section-header h2 {
            font-size: 2rem;
        }
        
        .menji-contact-title {
            font-size: 1.35rem;
        }
        
        .menji-contact-card,
        .menji-info-card {
            padding: 1.5rem;
        }
        
        .info-item {
            padding: 0.75rem;
        }
    }
    
    @media (max-width: 576px) {
        .menji-input,
        .menji-select,
        .menji-textarea {
            padding: 0.75rem 1rem 0.75rem 2.5rem;
        }
        
        .form-icon {
            left: 0.75rem;
            font-size: 1rem;
        }
        
        .menji-contact-badge {
            padding: 6px 16px;
            font-size: 0.8rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des messages flash
    @if(session('success'))
        showFlashMessage("{{ session('success') }}", 'success');
    @endif

    @if($errors->any())
        showFlashMessage("{{ implode(' ', $errors->all()) }}", 'danger');
    @endif

    // Gestion du formulaire
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    
    if (contactForm && submitBtn) {
        contactForm.addEventListener('submit', function(e) {
            // Validation frontale supplémentaire
            if (!this.checkValidity()) {
                e.preventDefault();
                highlightInvalidFields();
                return;
            }
            
            // Changer l'état du bouton
            const btnText = submitBtn.querySelector('.btn-text');
            const btnSpinner = submitBtn.querySelector('.btn-spinner');
            
            if (btnText && btnSpinner) {
                btnText.classList.add('d-none');
                btnSpinner.classList.remove('d-none');
                submitBtn.disabled = true;
            }
        });
    }

    // Effets de focus sur les champs
    const formInputs = document.querySelectorAll('.menji-input, .menji-select, .menji-textarea');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
        
        // Validation en temps réel
        input.addEventListener('input', function() {
            validateField(this);
        });
    });
});

function showFlashMessage(message, type) {
    const container = document.getElementById('flashMessageContainer');
    const alert = document.createElement('div');
    alert.className = `menji-alert menji-alert-${type} alert-dismissible`;
    alert.role = 'alert';
    alert.innerHTML = `
        <i class="bi ${type === 'success' ? 'bi-check-circle' : 'bi-exclamation-circle'} fs-5"></i>
        <div class="flex-grow-1">${message}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    container.appendChild(alert);
    
    // Fermer automatiquement après 5 secondes
    const autoClose = setTimeout(() => {
        closeAlert(alert);
    }, 5000);
    
    // Empêcher la fermeture automatique au hover
    alert.addEventListener('mouseenter', () => clearTimeout(autoClose));
    alert.addEventListener('mouseleave', () => {
        setTimeout(() => closeAlert(alert), 5000);
    });
}

function closeAlert(alert) {
    alert.style.animation = 'fadeOut 0.3s ease forwards';
    setTimeout(() => {
        if (alert.parentNode) {
            alert.parentNode.removeChild(alert);
        }
    }, 300);
}

function highlightInvalidFields() {
    const invalidFields = document.querySelectorAll('.form-control:invalid');
    invalidFields.forEach(field => {
        field.style.borderColor = 'var(--menji-error)';
        field.style.boxShadow = '0 0 0 3px rgba(245, 101, 101, 0.15)';
        
        // Réinitialiser la mise en forme lors de la saisie
        field.addEventListener('input', function() {
            this.style.borderColor = '';
            this.style.boxShadow = '';
        }, { once: true });
    });
    
    // Afficher un message d'erreur
    if (invalidFields.length > 0) {
        showFlashMessage('Veuillez corriger les erreurs dans le formulaire', 'danger');
        
        // Faire défiler jusqu'au premier champ invalide
        invalidFields[0].scrollIntoView({ 
            behavior: 'smooth', 
            block: 'center' 
        });
    }
}

function validateField(field) {
    const formGroup = field.parentElement;
    
    if (field.validity.valid) {
        formGroup.classList.remove('invalid');
        formGroup.classList.add('valid');
    } else {
        formGroup.classList.remove('valid');
        formGroup.classList.add('invalid');
    }
}
</script>
@endsection
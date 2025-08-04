@extends('layout')
@section('title', 'Menji Drc - Contact')

@section('content')
<div class="contact-container  pourquoi-menji-sectionT">
    <!-- Flash Message Container -->
    <div id="flashMessageContainer"></div>

    <div class="contact-card">
        <div class="section-title">
            <h2>Envoyez-nous un message</h2>
            <p>Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais</p>
        </div>
        
        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
            @csrf
        
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Votre nom complet" value="{{ old('name') }}" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Votre adresse email" value="{{ old('email') }}" required>
                </div>
            </div>
            
            <input type="text" class="form-control" name="subject" placeholder="Sujet de votre message" value="{{ old('subject') }}">
            
            <select class="form-control" name="service" required>
                <option value="" disabled selected>Service concerné</option>
                <option value="Développement Web" {{ old('service') == 'Développement Web' ? 'selected' : '' }}>Développement Web</option>
                <option value="Sécurité Informatique" {{ old('service') == 'Sécurité Informatique' ? 'selected' : '' }}>Sécurité Informatique</option>
                <option value="Solutions Cloud" {{ old('service') == 'Solutions Cloud' ? 'selected' : '' }}>Solutions Cloud</option>
                <option value="UI/UX Design" {{ old('service') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                <option value="Consultation" {{ old('service') == 'Consultation' ? 'selected' : '' }}>Consultation</option>
                <option value="Autre" {{ old('service') == 'Autre' ? 'selected' : '' }}>Autre demande</option>
            </select>
            
            <textarea class="form-control" name="message" rows="6" placeholder="Décrivez votre projet ou demande..." required>{{ old('message') }}</textarea>
            
            <div class="form-footer">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="consentCheck" name="consent" {{ old('consent') ? 'checked' : '' }} required>
                    <label class="form-check-label" for="consentCheck">
                        J'accepte la politique de confidentialité
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <i class="bi bi-send-fill me-2"></i> Envoyer
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #f48915;
        --light-color: #f8f9fa;
    }
    
    .contact-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 0 1rem;
        margin-top: 100px;
    }
    
    .contact-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        padding: 2.5rem;
        margin-top: 2rem;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .section-title h2 {
        color: var(--primary-color);
        margin-bottom: 0.5rem;
    }
    
    .section-title p {
        color: #666;
    }
    
    .form-control {
        width: 100%;
        padding: 0.875rem 1rem;
        margin-bottom: 1.25rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }
    
    .form-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1.5rem;
    }
    
    .btn-primary {
        background-color: var(--accent-color);
        border: none;
        padding: 0.75rem 1.75rem;
        border-radius: 8px;
        color: white;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #e07b0c;
        transform: translateY(-2px);
    }
    
    #flashMessageContainer {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
    }
    
    .alert {
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        opacity: 1;
        transition: opacity 0.5s ease;
    }
    
    .alert.fade-out {
        opacity: 0;
    }
    
    @media (max-width: 768px) {
        .contact-card {
            padding: 1.5rem;
        }
        
        .form-footer {
            flex-direction: column;
            gap: 1rem;
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
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            if (submitBtn) {
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Envoi en cours...';
                submitBtn.disabled = true;
            }
        });
    }
});

function showFlashMessage(message, type) {
    const container = document.getElementById('flashMessageContainer');
    const alert = document.createElement('div');
    alert.className = `alert alert-${type} alert-dismissible fade show`;
    alert.role = 'alert';
    alert.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    container.appendChild(alert);
    
    // Fermer automatiquement après 3 secondes
    setTimeout(() => {
        alert.classList.add('fade-out');
        setTimeout(() => alert.remove(), 500);
    }, 3000);
}
</script>
@endsection
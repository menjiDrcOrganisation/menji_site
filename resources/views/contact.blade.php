@extends('layout')
@section('title', 'Menji Drc - Contact')

@section('content')
<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --dark-color: #1a1a2e;
        --light-color: #f8f9fa;
    }
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        line-height: 1.6;
    }
    
    .contact-hero {
        background: 
            linear-gradient(to right, rgba(44, 62, 80, 0.85), rgba(26, 26, 46, 0.85)),
            url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0;
        position: relative;
        text-align: center;
    }
    
    .contact-card {
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: all 0.3s ease;
        border: none;
        height: 100%;
        background: white;
    }
    
    .contact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }
    
    .contact-icon {
        font-size: 2.5rem;
        color: var(--accent-color);
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }
    
    .contact-card:hover .contact-icon {
        transform: scale(1.1);
    }
    
    .form-control {
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
    }
    
    .btn-primary {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
        padding: 15px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
    }
    
    .map-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        height: 100%;
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
    }
    
    .map-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }
    
    .opening-hours {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    
    .table-bordered {
        border-color: #e0e0e0;
    }
    
    .table-bordered td {
        padding: 15px;
    }
    
    @media (max-width: 768px) {
        .contact-hero {
            padding: 100px 0;
        }
        
        .contact-hero h1 {
            font-size: 2.5rem;
        }
    }
</style>

<!-- Hero Section avec image de fond -->
<section class="contact-hero">
    <div class="container">
        <h1 class="display-3 fw-bold mb-4">Contactez notre équipe</h1>
        <p class="lead fs-4">Nous sommes là pour concrétiser vos projets digitaux</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="#contact-form" class="btn btn-primary btn-lg px-4">
                <i class="bi bi-envelope me-2"></i> Écrire un message
            </a>
            <a href="#map" class="btn btn-outline-light btn-lg px-4">
                <i class="bi bi-geo-alt me-2"></i> Nous trouver
            </a>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Adresse -->
            <div class="col-md-4">
                <div class="contact-card p-4 text-center">
                    <i class="bi bi-geo-alt contact-icon"></i>
                    <h3>Notre Adresse</h3>
                    <p>Avenue des Technologies 123<br>Gombe, Kinshasa<br>République Démocratique du Congo</p>
                    <a href="#map" class="btn btn-outline-primary mt-3">
                        <i class="bi bi-map me-2"></i> Voir sur la carte
                    </a>
                </div>
            </div>
            
            <!-- Email -->
            <div class="col-md-4">
                <div class="contact-card p-4 text-center">
                    <i class="bi bi-envelope contact-icon"></i>
                    <h3>Email</h3>
                    <p>info@menjidrc.com<br>support@menjidrc.com</p>
                    <a href="mailto:info@menjidrc.com" class="btn btn-outline-primary mt-3">
                        <i class="bi bi-send me-2"></i> Nous écrire
                    </a>
                </div>
            </div>
            
            <!-- Téléphone -->
            <div class="col-md-4">
                <div class="contact-card p-4 text-center">
                    <i class="bi bi-telephone contact-icon"></i>
                    <h3>Téléphone</h3>
                    <p>+243 81 234 5678<br>+243 89 876 5432</p>
                    <a href="tel:+243812345678" class="btn btn-outline-primary mt-3">
                        <i class="bi bi-telephone-outbound me-2"></i> Appeler maintenant
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section id="contact-form" class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Formulaire -->
            <div class="col-lg-6">
                <div class="section-title mb-5">
                    <h2>Envoyez-nous un message</h2>
                    <p>Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais</p>
                </div>
                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Votre nom complet" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Votre adresse email" required>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Sujet de votre message">
                    <select class="form-control">
                        <option value="" disabled selected>Service concerné</option>
                        <option>Développement Web</option>
                        <option>Sécurité Informatique</option>
                        <option>Solutions Cloud</option>
                        <option>UI/UX Design</option>
                        <option>Consultation</option>
                        <option>Autre demande</option>
                    </select>
                    <textarea class="form-control" rows="6" placeholder="Décrivez votre projet ou demande..." required></textarea>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consentCheck" required>
                            <label class="form-check-label small" for="consentCheck">
                                J'accepte la politique de confidentialité
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary px-5">
                            <i class="bi bi-send-fill me-2"></i> Envoyer
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Carte -->
            <div id="map" class="col-lg-6">
                <div class="section-title mb-5">
                    <h2>Nous localiser</h2>
                    <p>Visitez nos bureaux pour discuter de votre projet en personne</p>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.372665627372!2d15.297758315331316!3d-4.322879146987189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3391a6d5e9a5%3A0x1a6a3391a6d5e9a5!2sKinshasa!5e0!3m2!1sfr!2scd!4v1620000000000!5m2!1sfr!2scd" 
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Heures d'ouverture -->
<section class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="opening-hours">
                    <div class="section-title text-center mb-5">
                        <h2>Horaires d'ouverture</h2>
                        <p>Nos disponibilités pour vous accueillir</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Lundi - Vendredi</td>
                                    <td>8h00 - 18h00</td>
                                    <td><i class="bi bi-check-circle-fill text-success"></i> Ouvert</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Samedi</td>
                                    <td>9h00 - 13h00</td>
                                    <td><i class="bi bi-check-circle-fill text-success"></i> Ouvert</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Dimanche</td>
                                    <td>-</td>
                                    <td><i class="bi bi-x-circle-fill text-danger"></i> Fermé</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-info mt-4 text-center">
                        <i class="bi bi-info-circle-fill me-2"></i> Pour les urgences en dehors des heures d'ouverture, contactez-nous par téléphone au <strong>+243 89 876 5432</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simulation d'envoi
        const submitBtn = this.querySelector('button[type="submit"]');
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Envoi en cours...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            alert('Merci pour votre message! Nous vous contacterons dans les plus brefs délais.');
            this.reset();
            submitBtn.innerHTML = '<i class="bi bi-send-fill me-2"></i> Envoyer';
            submitBtn.disabled = false;
        }, 1500);
    });
</script>

@endsection
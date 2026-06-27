<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Audit Gratuit | Menji DRC</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header class="oc-navbar">
        <div class="container nav-container">
            <div class="logo"><a href="{{ route('accueil') }}">MENJI<span>DRC</span></a></div>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('apropos') }}">À propos</a></li>
                    <li><a href="{{ route('realisations') }}">Nos réalisations</a></li>
                    <li><a href="{{ route('contact') }}" class="active-link">Contact</a></li>
                </ul>
            </nav>
            <a href="https://wa.me/243810000000" class="btn-primary">WhatsApp Direct</a>
        </div>
    </header>

    <main class="container contact-page">
        @if (session('success'))
            <div class="oc-form-box" style="margin-bottom: 20px;">
                <strong>Message envoyé</strong>
                <p style="margin-top: 8px;">{{ session('success') }}</p>
            </div>
        @endif

        <div class="contact-grid">
            <div class="contact-info">
                <span class="badge">Audit gratuit sous 24h</span>
                <h1>Prêt à passer au <span class="highlight">niveau supérieur</span> pour votre entreprise ?</h1>
                <p>Discutons de vos besoins et recevez un audit digital complet pour votre entreprise.</p>

                <div class="info-details">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <p>contact@menjidrc.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <strong>Bureau</strong>
                            <p>Gombe, Kinshasa, RDC</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-container">
                <form class="oc-form-box" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Votre Nom ou Entreprise</label>
                        <input type="text" name="name" placeholder="Ex: Jean Mukendi" required>
                    </div>
                    <div class="form-group">
                        <label>Email de contact</label>
                        <input type="email" name="email" placeholder="nom@entreprise.cd" required>
                    </div>
                    <div class="form-group">
                        <label>Service souhaité</label>
                        <input type="text" name="service" placeholder="Ex: Développement web" required>
                    </div>
                    <div class="form-group">
                        <label>Quel est votre défi actuel ?</label>
                        <textarea name="message" rows="4" placeholder="Ex: Sécuriser mes données, créer une application..." minlength="10" required></textarea>
                    </div>
                    <input type="hidden" name="subject" value="Demande de contact depuis la page Contact">
                    <label>
                        <input type="checkbox" name="consent" value="1" required>
                        J'accepte d'être recontacté par Menji DRC.
                    </label>
                    <button type="submit" class="btn-submit">Obtenir mon audit gratuit <i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </main>

    <footer class="oc-footer">
        <div class="container">
            <p>&copy; 2026 Menji DRC. Innovation digitale à Kinshasa.</p>
        </div>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

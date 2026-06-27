<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de devis | Menji DRC</title>
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
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <a href="https://wa.me/243810000000" class="btn-primary">WhatsApp Direct</a>
        </div>
    </header>

    <main class="container contact-page">
        <div class="contact-grid">
            <div class="contact-info">
                <span class="badge">Devis personnalisé</span>
                <h1>Parlons de votre <span class="highlight">projet</span></h1>
                <p>Décrivez votre besoin et nous vous envoyons une proposition adaptée.</p>
            </div>

            <div class="contact-form-container">
                <form class="oc-form-box" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nom / Entreprise</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Service demandé</label>
                        <input type="text" name="service" required>
                    </div>
                    <div class="form-group">
                        <label>Détails du projet</label>
                        <textarea name="message" rows="5" minlength="10" required></textarea>
                    </div>
                    <input type="hidden" name="subject" value="Demande de devis">
                    <label>
                        <input type="checkbox" name="consent" value="1" required>
                        J'accepte d'être recontacté par Menji DRC.
                    </label>
                    <button type="submit" class="btn-submit">Envoyer la demande</button>
                </form>
            </div>
        </div>
    </main>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

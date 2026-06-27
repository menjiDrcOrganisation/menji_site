<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
    @yield('title')
  </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/Logo_menji.png') }}" rel="icon">
  <link href="{{ asset('assets/img/Logo_menji.png') }}" rel="apple-touch-icon"> 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <style>
    /* Styles pour le dropdown des services */
    .navmenu .dropdown {
      position: relative;
    }

    .navmenu .dropdown-content {
      display: none;
      position: absolute;
      background: white;
      min-width: 200px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      border-radius: 5px;
      z-index: 1000;
      top: 100%;
      left: 0;
      padding: 10px 0;
    }

    .navmenu .dropdown-content li {
      list-style: none;
      margin: 0;
    }

    .navmenu .dropdown-content a {
      display: block;
      padding: 8px 20px;
      color: #333;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .navmenu .dropdown-content a:hover {
      background: #f8f9fa;
      color: #007bff;
    }

    .navmenu .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Style pour le lien actif */
    .navmenu a.active {
      /* color: #007bff !important; */
      font-weight: bold;
    }
  </style>
</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top bg-light">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('accueil') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('assets/img/Logo_menji.png') }}" alt=""> 
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('accueil') }}" data-page="accueil">Accueil</a></li>
          <li><a href="{{ route('apropos') }}" data-page="apropos">A propos</a></li>
          <li class="dropdown">
            <a href="#" data-page="services">Services <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-content">
              <li><a href="#">Développement Mobile</a></li>
              <li><a href="#">Développement Web</a></li>
              <li><a href="#">UI/UX Design</a></li>
              <li><a href="#">Sécurité Informatique</a></li>
              <li><a href="#">Cloud Computing</a></li>
            </ul>
          </li>
          <li><a href="{{ route('blog.index') }}" data-page="blog">Blog</a></li>
          <li><a href="{{ route('contact') }}" data-page="contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  @yield('content')

  <footer id="footer" class="footer dark-background">
    <!-- Votre footer reste inchangé -->
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('accueil') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/Logo_menjid.png') }}" alt="">
          </a>
          <div class="footer-contact pt-3">
            <p class="mt-3"><strong>Phone:</strong> <span>+243 893 572 418 </span></p>
            <p><strong>Email:</strong> <span>menjidrc@menjidrc.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('accueil') }}">Accueil</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('apropos') }}">A propos</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('blog.index') }}">Blog</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Développement Mobile</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Développement Web</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">UI/UX Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Sécurité Informatique</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Cloud Computing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Notre Newsletter</h4>
          <p>Abonnez-vous à notre newsletter pour recevoir les dernières actualités sur nos produits et services !</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email" placeholder="Votre email">
              <input type="submit" value="S'abonner">
            </div>
            <div class="loading">Envoi en cours...</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre demande d'abonnement a bien été envoyée. Merci !</div>
          </form>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Menji Drc</strong> <span>Tous droits réservés.</span></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
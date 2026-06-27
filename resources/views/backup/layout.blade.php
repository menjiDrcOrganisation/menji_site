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
<!-- Favicons -->
  <link href="{{ asset('assets/img/Logo_menji.png') }}" rel="icon">
  <link href="{{ asset('assets/img/Logo_menji.png') }}" rel="apple-touch-icon"> 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> --}}
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top bg-light">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/Logo_menji.png') }}"alt=""> 
        {{-- <h1 class="sitename">Menjidrc</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('accueil') }}" class="active">Accueil</a></li>
          <li><a href="{{ route('apropos') }}">A propos</a></li>
          <li><a href=" ">Services</a></li>
          <li><a href="{{ route('blog.index') }}">Blog</a></li>
          {{-- <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="cta-btn" href="index.html#about">Se connecter</a> --}}

    </div>
  </header>
@yield('content')
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src={{ asset('assets/img/Logo_menjid.png') }} alt="">
            {{-- <span class="sitename">Dewi</span> --}}
          </a>
          <div class="footer-contact pt-3">
            {{-- <p>A108 Adam Street</p>
            <p>New York, NY 535022</p> --}}
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
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
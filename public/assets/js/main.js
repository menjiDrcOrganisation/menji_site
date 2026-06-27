(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    
    if (!selectHeader || !selectBody) return;
    
    if (!selectHeader.classList.contains('scroll-up-sticky') && 
        !selectHeader.classList.contains('sticky-top') && 
        !selectHeader.classList.contains('fixed-top')) return;
        
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  let scrollTimeout;
  function handleScroll() {
    if (scrollTimeout) {
      window.cancelAnimationFrame(scrollTimeout);
    }
    scrollTimeout = window.requestAnimationFrame(toggleScrolled);
  }

  document.addEventListener('scroll', handleScroll, { passive: true });
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToggle() {
    const body = document.querySelector('body');
    if (!body || !mobileNavToggleBtn) return;
    
    body.classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToggle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToggle();
      }
    });
  });

  /**
   * Gestion du menu actif amélioré
   */
  function initActiveMenu() {
    const navLinks = document.querySelectorAll('#navmenu a[data-page]');
    const currentPath = window.location.pathname;
    
    // Fonction pour déterminer la page actuelle
    function getCurrentPage() {
      if (currentPath.includes('blog')) return 'blog';
      if (currentPath.includes('apropos')) return 'apropos';
      if (currentPath.includes('contact')) return 'contact';
      if (currentPath === '/' || currentPath.includes('accueil')) return 'accueil';
      return 'accueil'; // page par défaut
    }
    
    const currentPage = getCurrentPage();
    
    // Retirer la classe active de tous les liens
    navLinks.forEach(link => {
      link.classList.remove('active');
    });
    
    // Ajouter la classe active au lien correspondant
    const activeLink = document.querySelector(`#navmenu a[data-page="${currentPage}"]`);
    if (activeLink) {
      activeLink.classList.add('active');
    }
    
    // Gestion du click sur les liens
    navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        // Si c'est le lien Services (dropdown), on ne change pas l'état actif
        if (this.getAttribute('data-page') === 'services' && this.getAttribute('href') === '#') {
          e.preventDefault();
          return;
        }
        
        // Retirer active de tous les liens
        navLinks.forEach(l => l.classList.remove('active'));
        
        // Ajouter active au lien cliqué
        this.classList.add('active');
        
        // Stocker l'état dans sessionStorage pour persistance
        sessionStorage.setItem('activeMenu', this.getAttribute('data-page'));
      });
    });
    
    // Restaurer l'état du menu depuis sessionStorage
    const savedActiveMenu = sessionStorage.getItem('activeMenu');
    if (savedActiveMenu && savedActiveMenu !== currentPage) {
      navLinks.forEach(link => link.classList.remove('active'));
      const savedLink = document.querySelector(`#navmenu a[data-page="${savedActiveMenu}"]`);
      if (savedLink) {
        savedLink.classList.add('active');
      }
    }
  }

  /**
   * Gestion du dropdown des services
   */
  function initServicesDropdown() {
    const servicesDropdown = document.querySelector('.navmenu .dropdown');
    
    if (servicesDropdown) {
      const dropdownContent = servicesDropdown.querySelector('.dropdown-content');
      
      // Survol pour desktop
      servicesDropdown.addEventListener('mouseenter', function() {
        if (window.innerWidth > 992) { // Desktop seulement
          dropdownContent.style.display = 'block';
        }
      });
      
      servicesDropdown.addEventListener('mouseleave', function() {
        if (window.innerWidth > 992) {
          dropdownContent.style.display = 'none';
        }
      });
      
      // Click pour mobile
      const servicesLink = servicesDropdown.querySelector('a[data-page="services"]');
      servicesLink.addEventListener('click', function(e) {
        if (window.innerWidth <= 992) { // Mobile seulement
          e.preventDefault();
          dropdownContent.style.display = 
            dropdownContent.style.display === 'block' ? 'none' : 'block';
        }
      });
      
      // Fermer le dropdown en cliquant ailleurs
      document.addEventListener('click', function(e) {
        if (!servicesDropdown.contains(e.target)) {
          dropdownContent.style.display = 'none';
        }
      });
    }
  }

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      setTimeout(() => {
        preloader.remove();
      }, 500);
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }

  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', handleScroll);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
        offset: 100
      });
    }
  }
  
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', aosInit);
  } else {
    aosInit();
  }

  /**
   * Initiate glightbox
   */
  function initGlightbox() {
    if (typeof GLightbox !== 'undefined') {
      const glightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
      });
    }
  }
  
  window.addEventListener('load', initGlightbox);

  /**
   * Initiate Pure Counter
   */
  function initPureCounter() {
    if (typeof PureCounter !== 'undefined') {
      new PureCounter();
    }
  }
  
  window.addEventListener('load', initPureCounter);

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    if (typeof Swiper === 'undefined') return;
    
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      const swiperConfig = swiperElement.querySelector(".swiper-config");
      if (!swiperConfig) return;
      
      try {
        let config = JSON.parse(swiperConfig.innerHTML.trim());
        new Swiper(swiperElement, config);
      } catch (error) {
        console.error('Erreur parsing Swiper config:', error);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Init isotope layout and filters
   */
  function initIsotope() {
    if (typeof Isotope === 'undefined' || typeof imagesLoaded === 'undefined') return;
    
    document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
      let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
      let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
      let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

      const isotopeContainer = isotopeItem.querySelector('.isotope-container');
      if (!isotopeContainer) return;

      let initIsotope;
      
      imagesLoaded(isotopeContainer, function() {
        initIsotope = new Isotope(isotopeContainer, {
          itemSelector: '.isotope-item',
          layoutMode: layout,
          filter: filter,
          sortBy: sort
        });
      });

      const filterElements = isotopeItem.querySelectorAll('.isotope-filters li');
      filterElements.forEach(function(filterElement) {
        filterElement.addEventListener('click', function() {
          const activeFilter = isotopeItem.querySelector('.isotope-filters .filter-active');
          if (activeFilter) {
            activeFilter.classList.remove('filter-active');
          }
          this.classList.add('filter-active');
          
          if (initIsotope) {
            initIsotope.arrange({
              filter: this.getAttribute('data-filter') || '*'
            });
            
            if (typeof AOS !== 'undefined') {
              AOS.refresh();
            }
          }
        }, false);
      });
    });
  }

  window.addEventListener('load', initIsotope);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  function handleHashScroll() {
    if (window.location.hash) {
      const targetElement = document.querySelector(window.location.hash);
      if (targetElement) {
        setTimeout(() => {
          const scrollMarginTop = getComputedStyle(targetElement).scrollMarginTop;
          const offset = targetElement.offsetTop - parseInt(scrollMarginTop || '0');
          
          window.scrollTo({
            top: Math.max(0, offset),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  }

  window.addEventListener('load', handleHashScroll);

  /**
   * Initialisation générale
   */
  function initAll() {
    initActiveMenu();
    initServicesDropdown();
  }

  // Initialiser quand le DOM est prêt
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAll);
  } else {
    initAll();
  }

  /**
   * Gestionnaire d'erreurs global
   */
  window.addEventListener('error', function(e) {
    console.error('Erreur JavaScript:', e.error);
  });

})();
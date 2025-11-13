/**
* Template Name: Dewi
* Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    
    // Vérification de l'existence des éléments
    if (!selectHeader || !selectBody) return;
    
    if (!selectHeader.classList.contains('scroll-up-sticky') && 
        !selectHeader.classList.contains('sticky-top') && 
        !selectHeader.classList.contains('fixed-top')) return;
        
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  // Événements de scroll optimisés avec debounce
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
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      
      const parent = this.parentNode;
      const nextSibling = parent.nextElementSibling;
      
      if (parent && nextSibling) {
        parent.classList.toggle('active');
        nextSibling.classList.toggle('dropdown-active');
      }
      
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      // Ajout d'un délai pour une transition fluide
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
  document.addEventListener('scroll', handleScroll); // Réutilise la fonction debounce

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
  
  // Attendre que le DOM soit complètement chargé
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

        if (swiperElement.classList.contains("swiper-tab")) {
          initSwiperWithCustomPagination(swiperElement, config);
        } else {
          new Swiper(swiperElement, config);
        }
      } catch (error) {
        console.error('Erreur parsing Swiper config:', error);
      }
    });
  }

  function initSwiperWithCustomPagination(swiperElement, config) {
    // Implémentation de base pour la pagination personnalisée
    // À adapter selon vos besoins spécifiques
    const swiper = new Swiper(swiperElement, {
      ...config,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
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

      // Gestion des filtres
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
            
            // Réinitialiser AOS après réorganisation
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
   * Navmenu Scrollspy
   */
  function initScrollspy() {
    const navmenulinks = document.querySelectorAll('.navmenu a');
    if (navmenulinks.length === 0) return;

    function navmenuScrollspy() {
      let foundActive = false;
      
      navmenulinks.forEach(navmenulink => {
        if (!navmenulink.hash) return;
        
        const section = document.querySelector(navmenulink.hash);
        if (!section) return;
        
        const rect = section.getBoundingClientRect();
        const position = window.scrollY + 200;
        
        // Vérifier si la section est dans la vue
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          if (!foundActive) {
            // Retirer active de tous les liens
            document.querySelectorAll('.navmenu a.active').forEach(link => {
              link.classList.remove('active');
            });
            
            navmenulink.classList.add('active');
            foundActive = true;
          }
        }
      });
    }

    window.addEventListener('load', navmenuScrollspy);
    document.addEventListener('scroll', handleScroll); // Réutilise le debounce
  }

  // Initialiser le scrollspy après le chargement
  window.addEventListener('load', initScrollspy);

  /**
   * Gestionnaire d'erreurs global
   */
  window.addEventListener('error', function(e) {
    console.error('Erreur JavaScript:', e.error);
  });

})();

<script>

  /* ============================================================
   MENU THÈMES - JavaScript à ajouter à scripts.php
   ============================================================ */

// Toggle du menu thèmes
const themesMenu = document.querySelector('.themes-menu');
const themesToggle = document.querySelector('.themes-toggle');

if (themesToggle && themesMenu) {
  themesToggle.addEventListener('click', function(e) {
    e.stopPropagation();
    themesMenu.classList.toggle('open');
    
    // Accessibilité
    const isOpen = themesMenu.classList.contains('open');
    themesToggle.setAttribute('aria-expanded', isOpen);
    document.querySelector('.themes-dropdown').setAttribute('aria-hidden', !isOpen);
  });
  
  // Fermer en cliquant ailleurs
  document.addEventListener('click', function(e) {
    if (!themesMenu.contains(e.target)) {
      themesMenu.classList.remove('open');
      themesToggle.setAttribute('aria-expanded', 'false');
      document.querySelector('.themes-dropdown').setAttribute('aria-hidden', 'true');
    }
  });
  
  // Fermer avec Escape
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && themesMenu.classList.contains('open')) {
      themesMenu.classList.remove('open');
      themesToggle.setAttribute('aria-expanded', 'false');
      themesToggle.focus();
    }
  });
}

  // Éléments
  const header = document.getElementById('header');
  const backToTop = document.getElementById('backToTop');
  
  // Écouteur de scroll optimisé - combine header et backToTop
  let scrollTimeout;
  window.addEventListener('scroll', () => {
    // Throttling pour optimiser les performances
    if (!scrollTimeout) {
      scrollTimeout = setTimeout(() => {
        const scrollY = window.scrollY;
        
        // Effet header scrollé
        if (scrollY > 100) {
          header.classList.add('header-scrolled');
        } else {
          header.classList.remove('header-scrolled');
        }
        
        // Bouton retour en haut
        if (scrollY > 300) {
          backToTop.classList.add('visible');
        } else {
          backToTop.classList.remove('visible');
        }
        
        scrollTimeout = null;
      }, 10);
    }
  });

  // Click sur bouton retour en haut
  if (backToTop) {
    backToTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Toggle bandeau d'urgence
  function toggleEmergency() {
    const banner = document.getElementById('emergencyBanner');
    if (banner) {
      banner.classList.toggle('minimized');
    }
  }

  // Smooth scroll pour les ancres
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href !== '#' && href !== '#top') {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          const offsetTop = target.offsetTop - 130;
          window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // Animate on scroll (si éléments présents)
  const animatedElements = document.querySelectorAll('.animate-on-scroll');
  if (animatedElements.length > 0) {
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    animatedElements.forEach(el => {
      observer.observe(el);
    });
  }
</script>

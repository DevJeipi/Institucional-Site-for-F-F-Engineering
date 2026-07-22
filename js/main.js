/**
 * F&F Engenharia - Scripts Principais
 * Funcionalidades interativas, menu acessível e suporte a formulários.
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initSmoothScroll();
    initFormHandling();
});

/**
 * Adiciona classe ao header quando a página é rolada para efeito de vidro/sombra
 */
function initHeaderScroll() {
    const header = document.querySelector('.hFixa');
    if (!header) return;

    const handleScroll = () => {
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // Executa na carga inicial
}

/**
 * Inicializa o menu mobile com acessibilidade e animações suaves
 */
function initMobileMenu() {
    const menuToggleBtn = document.querySelector('.menu-mobile-btn');
    const mobileNav = document.querySelector('.menu-mobile-nav');
    
    if (!menuToggleBtn || !mobileNav) return;

    const toggleMenu = (open) => {
        const isCurrentlyOpen = mobileNav.classList.contains('active');
        const shouldOpen = open !== undefined ? open : !isCurrentlyOpen;

        if (shouldOpen) {
            mobileNav.classList.add('active');
            menuToggleBtn.setAttribute('aria-expanded', 'true');
            menuToggleBtn.setAttribute('aria-label', 'Fechar menu de navegação');
            const icon = menuToggleBtn.querySelector('i');
            if (icon) {
                icon.className = 'fa-solid fa-xmark';
            }
        } else {
            mobileNav.classList.remove('active');
            menuToggleBtn.setAttribute('aria-expanded', 'false');
            menuToggleBtn.setAttribute('aria-label', 'Abrir menu de navegação');
            const icon = menuToggleBtn.querySelector('i');
            if (icon) {
                icon.className = 'fa-solid fa-bars';
            }
        }
    };

    menuToggleBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMenu();
    });

    // Fechar ao clicar num link
    const mobileLinks = mobileNav.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });

    // Fechar ao clicar fora
    document.addEventListener('click', (e) => {
        if (mobileNav.classList.contains('active') && 
            !mobileNav.contains(e.target) && 
            !menuToggleBtn.contains(e.target)) {
            toggleMenu(false);
        }
    });

    // Fechar ao pressionar a tecla ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
            toggleMenu(false);
        }
    });
}

/**
 * Rolagem suave para âncoras internas
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href*="#"]:not([href="#"])');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const hashIndex = href.indexOf('#');
            if (hashIndex === -1) return;

            const targetId = href.substring(hashIndex);
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                if (window.location.pathname === '/' || 
                    window.location.pathname.endsWith('index.html') || 
                    (!href.startsWith('http') && !href.includes('.html'))) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.hFixa')?.offsetHeight || 80;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/**
 * Feedback para submissão de formulários
 */
function initFormHandling() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"], input[type="submit"]');
            if (submitBtn) {
                if (submitBtn.tagName === 'INPUT') {
                    submitBtn.value = 'Enviando...';
                } else {
                    submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Enviando...';
                }
                submitBtn.disabled = true;
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.mobile-menu-button');
    const navMenu = document.querySelector('.nav-menu');
    const reviewsWrapper = document.querySelector('.reviews-wrapper');
    const prevButton = document.querySelector('.slider-arrow.prev');
    const nextButton = document.querySelector('.slider-arrow.next');
    const reviewItems = document.querySelectorAll('.review-item');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const closeModal = document.querySelector('.close-modal');
    const hamburger = document.querySelector('.hamburger-menu');
    const mobileMenu = document.querySelector('.mobile-menu-container');

    let scrollAmount = 0;

    // Мобільне меню для десктопної навігації
    if (menuButton && navMenu) {
        menuButton.addEventListener('click', () => {
            menuButton.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Закриваємо меню при кліку на посилання
        const menuLinks = document.querySelectorAll('.nav-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuButton.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // Слайдер відгуків
    if (prevButton && nextButton && reviewsWrapper) {
        prevButton.addEventListener('click', () => {
            reviewsWrapper.scrollBy({ left: -300, behavior: 'smooth' });
        });

        nextButton.addEventListener('click', () => {
            reviewsWrapper.scrollBy({ left: 300, behavior: 'smooth' });
        });
    }

    // Відкриття модального вікна зображення
    if (modal && modalImage && reviewItems.length > 0) {
        reviewItems.forEach((item) => {
            item.addEventListener('click', (event) => {
                const imgSrc = event.target.getAttribute('src');
                modalImage.setAttribute('src', imgSrc);
                modal.style.display = 'flex';
            });
        });

        // Закриття модального вікна
        if (closeModal) {
            closeModal.addEventListener('click', () => {
                modal.style.display = 'none';
            });
        }

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }

    // Гамбургер-меню для мобільного меню
    if (hamburger && mobileMenu) {
        // Функція для закриття мобільного меню
        const closeMobileMenu = () => {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        };

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Закриття мобільного меню при кліку на посилання
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });

        // Закриття мобільного меню при кліку поза його межами
        document.addEventListener('click', (event) => {
            if (!hamburger.contains(event.target) && !mobileMenu.contains(event.target)) {
                closeMobileMenu();
            }
        });

        // Закриття мобільного меню при зміні розміру вікна до десктопного розміру
        window.addEventListener('resize', () => {
            if (window.innerWidth > 991) {
                closeMobileMenu();
            }
        });
    }
});
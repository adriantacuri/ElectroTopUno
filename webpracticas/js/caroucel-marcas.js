document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.querySelector('.carousel-control.prev');
    const nextButton = document.querySelector('.carousel-control.next');
    const carousel = document.querySelector('.caroucel-mark');
    const items = document.querySelectorAll('.card-feature');
    let currentIndex = 0;
    const itemsToShow = window.innerWidth <= 768 ? 2 : 4;
    const totalItems = items.length;

    function updateCarousel() {
        const offset = -currentIndex * (100 / itemsToShow);
        carousel.style.transform = `translateX(${offset}%)`;
    }

    nextButton.addEventListener('click', () => {
        if (currentIndex < totalItems - itemsToShow) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - itemsToShow;
        }
        updateCarousel();
    });

    // Recalcular cuando se redimensiona la ventana
    window.addEventListener('resize', () => {
        currentIndex = 0; // Resetear índice
        updateCarousel();
    });

    updateCarousel(); // Inicializar carrusel
});
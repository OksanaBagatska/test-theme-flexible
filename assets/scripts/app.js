document.addEventListener('DOMContentLoaded', function () {
    let cards = document.querySelectorAll('.js-cards-item');

    function checkVisibility() {
        cards.forEach(function (card, index) {
            let rect = card.getBoundingClientRect(),
                windowHeight = window.innerHeight || document.documentElement.clientHeight;

            if (rect.top <= windowHeight && rect.bottom >= 0 && !card.classList.contains('visible')) {
                setTimeout(function () {
                    card.classList.add('visible');
                }, 400 * index);
            }
        });
    }

    checkVisibility();

    window.addEventListener('scroll', checkVisibility);

    // Для кожного слайдера створюємо окремий об'єкт
    const sliders = document.querySelectorAll('.js-slider-gallery');

    sliders.forEach(function (slider) {
        console.log(slider);
        const swiper = new Swiper(slider, {
            loop: true,
            autoHeight: false,
            freeMode: true,
            grabCursor: true,
            mousewheel: true,
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: slider.querySelector('.swiper-pagination'),
                clickable: true,
            },
            breakpoints: {
                800: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                }
            }
        });

        const sliderContainer = slider.closest('.js-gallery-row');

        const nextButton = sliderContainer.querySelector('.swiper-button-next');
        const prevButton = sliderContainer.querySelector('.swiper-button-prev');

        nextButton.addEventListener('click', function () {
            swiper.slideNext();
        });

        prevButton.addEventListener('click', function () {
            swiper.slidePrev();
        });
    });

});


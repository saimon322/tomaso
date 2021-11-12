import Swiper from 'swiper/swiper-bundle.min.js';


const startupsSlider = document.querySelector('.slider--main-vertical .swiper-slider');

const bp576 = window.matchMedia('(min-width: 576px)');
let step = 0;

if (startupsSlider) {
    const startups = new Swiper(startupsSlider, {
        // loop: true,
        speed: 500,
        direction: 'vertical',
        autoHeight: true,

        pagination: {
            el: '.main-vertical--pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },
        navigation: {
            nextEl: '.main-vertical__next',
            prevEl: '.main-vertical__prev',
        },
        breakpoints: {
            0: {
                direction: 'horizontal',
                spaceBetween: 10,
                slidesPerView: 'auto',
                centeredSlides: true,
                autoHeight: true,
                navigation: false,
            },
            768: {
                direction: 'vertical',
                slidesPerView: 1,
                autoHeight: false,
            }
        },
    });

    const checkStartupsBulletsMobile = (bp) => {
        startups.on('slideChange', swiper => {
            if (!bp.matches) {
                const currentStep = 46;
                const active = swiper.activeIndex;
                const prev = swiper.previousIndex;
                const directionRight = active > prev;

                if (directionRight && active > 1) {
                    step = -prev * currentStep;
                    startupsPagination.style.transform = 'translateX(' + step + 'px)';
                }

                if (!directionRight && active > 0) {
                    step = (active - 1 === 0) ? 0 : -(active - 1) * currentStep;
                    startupsPagination.style.transform = 'translateX(' + step + 'px)';
                }
            } else {
                startupsPagination.hasAttribute('style') && startupsPagination.removeAttribute('style');
            }
        });
    }

    checkStartupsBulletsMobile(bp576);
    bp576.onchange = checkStartupsBulletsMobile;
}


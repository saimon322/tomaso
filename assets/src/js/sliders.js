import Swiper from 'swiper/swiper-bundle.min.js';


const startupsSlider = document.querySelector('.slider__main-vertical');

const bp576 = window.matchMedia('(min-width: 576px)');
let step = 0;

if (startupsSlider) {
    const startups = new Swiper(startupsSlider, {
        loop: true,
        // slidesOffsetAfter: 40,
        slidesOffsetBefore: 40,
        spaceBetween: 10,
        slidesPerView: 1.25,
        speed: 500,
        autoHeight: true,
        pagination: {
            el: '.main-vertical--pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '" data-year="' + this.slides[index].dataset.year + '"></span>';
            },
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


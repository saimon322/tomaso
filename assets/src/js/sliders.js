import Swiper from 'swiper/swiper-bundle.min.js';


const startupsSliderTop = document.querySelector('.slider--main-vertical-top .swiper-slider');
const startupsSliderMiddle = document.querySelector('.slider--main-vertical-middle .swiper-slider');
const startupsSliderBottom = document.querySelector('.slider--main-vertical-bottom .swiper-slider');

const bp576 = window.matchMedia('(min-width: 576px)');
let step = 0;

function optionsFunc(sliderPref) {
    let optionsParams = {
        loop: true,
        speed: 500,
        direction: 'vertical',
        slidesPerView: 'auto',
        centeredSlides: true,
        autoHeight: true,

        pagination: {
            el: '.main-vertical-'+sliderPref+'__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },
        navigation: {
            nextEl: '.main-vertical-'+sliderPref+'__next',
            prevEl: '.main-vertical-'+sliderPref+'__prev',
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
            }
        },
    };

    return optionsParams;
}

if (startupsSliderTop) {
    const startupsTop = new Swiper(startupsSliderTop, optionsFunc('top'));
}
if (startupsSliderMiddle) {
    const startupsMiddle = new Swiper(startupsSliderMiddle, optionsFunc('middle'));
}
if (startupsSliderBottom) {
    const startupsBottom = new Swiper(startupsSliderBottom, optionsFunc('bottom'));
}

// if (startupsSlider) {
    // const startupsTop = new Swiper(startupsSlider, optionsFunc('top'));
    // const startupsMiddle = new Swiper(startupsSlider, optionsFunc('middle'));
    // const startupsBottom = new Swiper(startupsSlider, optionsFunc('bottom'));

    // const checkStartupsBulletsMobile = (bp) => {
    //     startups.on('slideChange', swiper => {
    //         if (!bp.matches) {
    //             const currentStep = 46;
    //             const active = swiper.activeIndex;
    //             const prev = swiper.previousIndex;
    //             const directionRight = active > prev;
    //
    //             if (directionRight && active > 1) {
    //                 step = -prev * currentStep;
    //                 startupsPagination.style.transform = 'translateX(' + step + 'px)';
    //             }
    //
    //             if (!directionRight && active > 0) {
    //                 step = (active - 1 === 0) ? 0 : -(active - 1) * currentStep;
    //                 startupsPagination.style.transform = 'translateX(' + step + 'px)';
    //             }
    //         } else {
    //             startupsPagination.hasAttribute('style') && startupsPagination.removeAttribute('style');
    //         }
    //     });
    // }
    //
    // checkStartupsBulletsMobile(bp576);
    // bp576.onchange = checkStartupsBulletsMobile;
// }


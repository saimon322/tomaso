import Swiper from 'swiper/swiper-bundle.min.js';


const vertSliderTop = document.querySelector('.slider--main-vertical-top .swiper-slider');
const vertSliderMiddle = document.querySelector('.slider--main-vertical-middle .swiper-slider');
const vertSliderBottom = document.querySelector('.slider--main-vertical-bottom .swiper-slider');
const meatSlider = document.querySelector('.products_slider');

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

if (vertSliderTop) {
    const vertTop = new Swiper(vertSliderTop, optionsFunc('top'));
}
if (vertSliderMiddle) {
    const vertMiddle = new Swiper(vertSliderMiddle, optionsFunc('middle'));
}
if (vertSliderBottom) {
    const vertBottom = new Swiper(vertSliderBottom, optionsFunc('bottom'));
}


if (meatSlider) {
    const meats = new Swiper (meatSlider, {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 40,

        breakpoints: {
            768: {
                slidesPerView: 3,
                centeredSlides: true,
            },
            1024: {
                slidesPerView: 4
            },
            1440: {
                slidesPerView: 6,
            }
        },

        navigation: {
            nextEl: '.products_arrow--right',
            prevEl: '.products_arrow--left',
        },
    })
}

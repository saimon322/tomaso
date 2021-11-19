import Swiper from 'swiper/swiper-bundle.min.js';


const vertSliderTop = document.querySelector('.slider--main-vertical-top .swiper-slider');
const vertSliderMiddle = document.querySelector('.slider--main-vertical-middle .swiper-slider');
const vertSliderBottom = document.querySelector('.slider--main-vertical-bottom .swiper-slider');
const meatSlider = document.querySelector('.products_slider');
const aboutSlider = document.querySelector('.about--slider__slider')
const antibioSlider = document.querySelector('.antibio-slider__swiper');
const fancymapsSlider = document.querySelector('.fancymaps__maps');
const attitudeSlider = document.querySelector('.attitude_slider');
const excursionSlider = document.querySelector('.excursion-slider__swiper');
const excursionGallerySlider = document.querySelector('.excursion-gallery__swiper');
const historySlider = document.querySelector('.history-slider__swiper');

const bp576 = window.matchMedia('(min-width: 576px)');
const bp992 = window.matchMedia('(min-width: 992px)');
const bp1440 = window.matchMedia('(min-width: 1440px)');
let step = 0;

function optionsFunc(sliderPref) {
    let optionsParams = {
        loop: true,
        speed: 500,
        direction: 'vertical',
        slidesPerView: 'auto',
        centeredSlides: true,
        // autoHeight: true,

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
    const slidesWeb = meatSlider.dataset.slidesweb;
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
                slidesPerView: slidesWeb,
            }
        },

        navigation: {
            nextEl: '.products_arrow--right',
            prevEl: '.products_arrow--left',
        },
    })
}

if (aboutSlider) {
    const abouts = new Swiper(aboutSlider, {
        loop: true,
        speed: 500,
        slidesPerView: 'auto',

        pagination: {
            el: '.about--slider__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">0' + ++index + '</span>';
            },
        },

        breakpoints: {
            1024: {
                centeredSlides: true,
                pagination: false,
                autoplay: {
                    enabled: true,
                    delay: 10000,
                    disableOnInteraction: false,
                },
            },
        },
    });
}

if (antibioSlider) {
    const antibiotics = new Swiper(antibioSlider, {

        loop: true,
        speed: 500,
        slidesPerView: 1,
        autoHeight: true,

        pagination: {
            el: '.antibio-slider__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">0' + ++index + '</span>';
            },
        },

        breakpoints: {
            1024: {
                pagination: false,
                autoplay: {
                    enabled: true,
                    delay: 10000,
                    disableOnInteraction: false,
                },
                grabCursor: true,
            },
        },

    });
}

if (attitudeSlider) {
    const attitude = new Swiper(attitudeSlider, {

        speed: 500,
        slidesPerView: 'auto',
        calculateHeight:true,

        pagination: {
            el: '.attitude_slider__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },

        breakpoints: {
            1024: {
                pagination: false,
                autoplay: {
                    enabled: true,
                    delay: 5000,
                    disableOnInteraction: false,
                },
                grabCursor: true,
            },
        },

    });
}


if (fancymapsSlider) {
    const content = document.querySelectorAll('.fancymaps__logo');
    const headElements = document.querySelectorAll('.fancymaps__content');
    const fancymapsLinks = document.querySelectorAll('.where_buy__item-link');
    const fancymaps = new Swiper(fancymapsSlider, {
        pagination: {
            el: '.fancymaps__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"><img src="' + (content[index].src) + '"></span>';
            },
        },

        on: {
            init: function() {
                let realIndex = this.realIndex;
                headElements.forEach(el => {
                    el.style.display = 'none';
                })
                headElements[realIndex].style.display = 'flex';
            },
            slideChange: function() {
                let realIndex = this.realIndex;
                headElements.forEach(el => {
                    el.style.display = 'none';
                })
                headElements[realIndex].style.display = 'flex';
            },
        }
    });
    for(let i = 0; i < fancymapsLinks.length; i++) {
        fancymapsLinks[i].addEventListener('click', function() {
            fancymaps.slideTo(i);
        });
    }

}

if (excursionSlider) {
    const paginationTexts = document.querySelectorAll('.excursion-slider__header');
    const excursions = new Swiper(excursionSlider, {
        loop: true,
        pagination: {
            el: '.excursion-slider__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                if (bp992.matches) {
                    return '<span class="' + className + '"><span class="excursion-slider__pagination-num">0' + (index + 1) + '. </span>' + paginationTexts[index].innerText + '</span>';
                } else {
                    return '<span class="' + className + '">0' + ++index + '.</span>';
                }
            },
        },
    });
}

if (excursionGallerySlider) {
    const excursionGallery = new Swiper(excursionGallerySlider, {
        loop: true,
        slidesPerView: 'auto',
        pagination: {
            el: '.excursion-gallery__pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.excursion-gallery__next',
            prevEl: '.excursion-gallery__prev',
        },
        breakpoints: {
            992: {
                spaceBetween: 15,
                allowTouchMove: true,
                grabCursor: true,
            },
        },
    })
}

if (historySlider) {
    const years = document.querySelectorAll('.history-slider__subheader');
    const headers = document.querySelectorAll('.history-slider__header');
    const histories = new Swiper(historySlider, {
        loop: true,
        slidesPerView: 'auto',
        pagination: {
            el: '.history-slider__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                if (bp1440.matches) {
                    return '<span class="' + className + '">' + '<span class="history-slider__pagination-year">' + years[index].innerText + '</span><span class="history-slider__pagination-header">' + headers[index].innerText + '</span>' + '</span>';
                } else {
                    return '<span class="' + className + '">' + years[index].innerText + '</span>';
                }
            },
        },
        breakpoints: {
            992: {
                slideToClickedSlide: true,
                centeredSlides: true,
                allowTouchMove: true,
            },
        },
    })
}
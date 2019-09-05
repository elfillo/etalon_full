var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    //spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1280: {
            slidesPerView: 1,
            spaceBetween: 0
        },
    }
});

var swiper_sale = new Swiper('.sale-slider', {
    /*slidesPerView: 3,
    //spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1280: {
            slidesPerView: 1,
            spaceBetween: 0
        },
    }*/
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
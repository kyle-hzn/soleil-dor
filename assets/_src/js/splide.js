/* eslint-disable no-undef */
const slider1 = document.querySelector('.splide');
const slider2 = document.querySelector('#splide2');

if (slider1) {
document.addEventListener( 'DOMContentLoaded', function() {
    new Splide( '#splide1', {
        type   : 'loop',
        gap: '1rem',
        perPage: 2,
        perMove: 1,
        autoplay: 500,
        breakpoints: {
            640: {
                perPage: 1,
            },
        },
        classes: {
            arrows: 'splide__arrows hp-reviews__list__arrows',
            arrow : 'splide__arrow hp-reviews__list__arrow',
            prev  : 'splide__arrow--prev hp-reviews__list__arrow-prev',
            next  : 'splide__arrow--next hp-reviews__list__arrow-next',
      },
    } ).mount();
  } );
}

if (slider2) {
document.addEventListener( 'DOMContentLoaded', function() {
  new Splide( '#splide2', {
        type   : 'loop',
        gap: '1rem',
        perPage: 1,
        perMove: 1,
        autoplay: 500,
        pagination: true,
    } ).mount();
  } );
}

/* eslint-disable no-undef */
document.addEventListener( 'DOMContentLoaded', function() {
    let splide = new Splide( '.splide', {
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
    } );
      
    splide.mount();
  } );
  
/* eslint-disable no-undef */
/* eslint-disable new-cap */
ScrollReveal().reveal('.reveal--translate',
    {duration: 800,
      origin: 'bottom',
      distance: '40px',
      viewFactor: 0.1,
      interval: 200,
      reset: false,
      scale: 1,
      delay: 0,
    });

ScrollReveal().reveal('.reveal--fade',
    {duration: 800,
      origin: 'center',
      viewFactor: 0.1,
      interval: 200,
      reset: false,
      scale: 1,
      delay: 100,
    });

const lenis = new Lenis()

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
/* eslint-disable no-inner-declarations */

function initAcc(elem, option) {
    // addEventListener on mouse click
    document.addEventListener('click', function(e) {
      // check is the right element clicked
      if (!e.target.matches(elem+' .hp-faq__list__item__title')) return;
      else {
        // check if element contains active class
        if (!e.target.parentElement.classList.contains('hp-faq__list__item--active')) {
          if (option==true) {
            // if option true remove active class from all other accordions
            const elementList = document.querySelectorAll(elem +' .hp-faq__list__item');
            Array.prototype.forEach.call(elementList, function(e) {
              e.classList.remove('hp-faq__list__item--active');
            });
          }
          // add active class on cliked accordion
          e.target.parentElement.classList.add('hp-faq__list__item--active');
        } else {
          // remove active class on cliked accordion
          e.target.parentElement.classList.remove('hp-faq__list__item--active');
        }
      }
    });
  }

// activate accordion function
initAcc('.hp-faq__list', true);

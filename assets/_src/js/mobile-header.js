const menuToggle = document.querySelector('.header__burgerbox');
const bodyWrap = document.body;

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('header__burgerbox--active');
});

if (menuToggle) {
    menuToggle.addEventListener('click', function() {
      const menuWrap = document.querySelector('.mobile-menu');
      if (menuWrap.classList.contains('mobile-menu--inactive')) {
        menuWrap.classList.add('mobile-menu--active');
        menuWrap.classList.remove('mobile-menu--inactive');
        bodyWrap.classList.add('overflow-y--none');
      } else if (menuWrap.classList.contains('mobile-menu--active')) {
        menuWrap.classList.add('mobile-menu--inactive');
        menuWrap.classList.remove('mobile-menu--active');
        bodyWrap.classList.remove('overflow-y--none');
      }
    });
  }
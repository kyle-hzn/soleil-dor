const scrollLinks = document.querySelectorAll('.scroll-icon');
const spaceOnTop = 124;

scrollLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const targetClass = link.dataset.target;
    const targetElem = document.querySelector(`.${targetClass}`);
    const topOffset = targetElem.offsetTop - spaceOnTop;
    window.scrollTo({
      top: topOffset,
      behavior: 'smooth'
    });
  });
});
const link1 = document.querySelector('.header__ddlink1');
const link2 = document.querySelector('.header__ddlink2');
const body = document.querySelector('.app-main');
const ddMenu1 = document.querySelector('.header-dropdown--1');
const ddMenu2 = document.querySelector('.header-dropdown--2');

if (link1) {
    link1.addEventListener('click', () => {
    link1.classList.toggle('header__ddlink1--active');
    if (ddMenu1.classList.contains('header-dropdown--inactive')) {
        ddMenu1.classList.add('header-dropdown--active');
        ddMenu1.classList.remove('header-dropdown--inactive');
    } else if (ddMenu1.classList.contains('header-dropdown--active')) {
        ddMenu1.classList.add('header-dropdown--inactive');
        ddMenu1.classList.remove('header-dropdown--active');
    }
    ddMenu2.classList.add('header-dropdown--inactive');
    ddMenu2.classList.remove('header-dropdown--active');
    link2.classList.remove('header__ddlink2--active');
    });

    body.addEventListener('click', () => {
        if (ddMenu1.classList.contains('header-dropdown--active')) {
            ddMenu1.classList.add('header-dropdown--inactive');
            ddMenu1.classList.remove('header-dropdown--active');
            link1.classList.remove('header__ddlink1--active');
        } else if (ddMenu2.classList.contains('header-dropdown--active')) {
            ddMenu2.classList.add('header-dropdown--inactive');
            ddMenu2.classList.remove('header-dropdown--active');
            link2.classList.remove('header__ddlink2--active');
        }
    });

    link2.addEventListener('click', () => {
    link2.classList.toggle('header__ddlink2--active');
    if (ddMenu2.classList.contains('header-dropdown--inactive')) {
        ddMenu2.classList.add('header-dropdown--active');
        ddMenu2.classList.remove('header-dropdown--inactive');
    } else if (ddMenu2.classList.contains('header-dropdown--active')) {
        ddMenu2.classList.add('header-dropdown--inactive');
        ddMenu2.classList.remove('header-dropdown--active');
    }
    ddMenu1.classList.add('header-dropdown--inactive');
    ddMenu1.classList.remove('header-dropdown--active');
    link1.classList.remove('header__ddlink1--active');
    });
}
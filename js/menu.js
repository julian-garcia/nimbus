const mobileMenuContainer = document.querySelector('.nav-mobile');
const mobileMenu = document.querySelector('.nav-mobile__menu');
const mobileToggle = document.querySelector('.nav-mobile-toggle');
const mobileClose = document.querySelector('.nav-menu__close');

mobileMenuContainer.addEventListener('click', (e) => showSubMenu(e));

function showSubMenu(e) {
  if (e.target.classList.contains('menu-item')) {
    const subMenu = e.target.querySelector('.nav-mobile .sub-menu');
    if (subMenu) { 
      subMenu.classList.toggle('show');
    }
  }
  if (e.target.classList.contains('nav-menu__close')) {
    e.target.style.display = 'none';
    mobileMenu.style.display = 'none';
    mobileToggle.style.display = 'block';
  }
  if (e.target.classList.contains('nav-mobile-toggle')) {
    e.target.style.display = 'none';
    mobileMenu.style.display = 'block';
    mobileClose.style.display = 'block';
  }
}
const logo = document.querySelector('.logo');
let logoWidth;

window.addEventListener('DOMContentLoaded', calcLogoWidth);
window.addEventListener('scroll', calcLogoWidth);
window.addEventListener('resize', calcLogoWidth);

function reduceLogoSize() {
  if (window.pageYOffset > 100) {
    logo.style.width = 'calc(' + logoWidth + ' * .5)';
  } else {
    logo.style.width = logoWidth;
  }
}

function calcLogoWidth() {
  const tabletMediaQuery = window.matchMedia("(min-width: 700px)");
  const desktopMediaQuery = window.matchMedia("(min-width: 1200px)");

  if (desktopMediaQuery.matches) {
    logoWidth = '230px';
  } else if (tabletMediaQuery.matches) {
    logoWidth = '130px';
  } else {
    logoWidth = '100px';
  }
  
  reduceLogoSize();
}
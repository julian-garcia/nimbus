const logo = document.querySelector('.logo');
let logoMaxWidth;

window.addEventListener('scroll', calcLogoMaxWidth);
window.addEventListener('resize', calcLogoMaxWidth);

function reduceLogoSize() {
  if (window.pageYOffset > 100) {
    logo.style.maxWidth = 'calc(' + logoMaxWidth + ' * .5)';
  } else {
    logo.style.maxWidth = logoMaxWidth;
  }
}

function calcLogoMaxWidth() {
  const tabletMediaQuery = window.matchMedia("(min-width: 700px)");
  const desktopMediaQuery = window.matchMedia("(min-width: 1200px)");

  if (desktopMediaQuery.matches) {
    logoMaxWidth = '230px';
  } else if (tabletMediaQuery.matches) {
    logoMaxWidth = '130px';
  } else {
    logoMaxWidth = '100px';
  }
  
  reduceLogoSize();
}
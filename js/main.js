const slider = document.querySelector('[class$="slider"]');
const sliderBullets = document.querySelector('[class$="bullets"]');
const slides = document.querySelectorAll('[class$="slide"]');
const logo = document.querySelector('.logo');
let logoMaxWidth;
let bullets;

document.addEventListener('DOMContentLoaded', () => {
  calcLogoMaxWidth();
  slides.forEach((slide, i) => {
    const bulletElement = document.createElement('i');

    if (i === 0) {
      slide.classList.add('show');
      bulletElement.className = 'fas fa-circle bullet active';
    } else {
      slide.classList.remove('show');
      bulletElement.className = 'fas fa-circle bullet';
    }
    
    bulletElement.setAttribute('data-bullet', i + 1);
    sliderBullets.appendChild(bulletElement);
  });
  bullets = document.querySelectorAll('.bullet');
  startSlider();
});

if (slider) {
  slider.addEventListener('click', (e) => {
    if (e.target.classList.contains('bullet')) {
      const slideNumber = e.target.getAttribute('data-bullet');
      moveSlide(slideNumber);
    }
  });
}

window.addEventListener('scroll', calcLogoMaxWidth);
window.addEventListener('resize', calcLogoMaxWidth);

function startSlider() {
  let slideNum = 2;
  if (!slider) return;
  setInterval(() => {
    moveSlide(slideNum);
    if (slideNum < bullets.length) { slideNum++; } else { slideNum = 1; }
  }, 6000);
}

function moveSlide(slideNumber) {
  slides.forEach(slide => { slide.classList.remove('show'); });
  bullets.forEach(bullet => { bullet.classList.remove('active'); });
  document.querySelector(`[data-slide="${slideNumber}"]`)
    .classList.add('show');
  document.querySelector(`[data-bullet="${slideNumber}"]`)
    .classList.add('active');
}

function reduceLogoSize() {
  if (window.pageYOffset > 300) {
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
const slider = document.querySelector('[class$="slider"]');
const sliderBullets = document.querySelector('[class$="bullets"]');
const slides = document.querySelectorAll('[class$="slide"]');
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

const videoImg = document.querySelector('.video-image');
const videoIcon = document.querySelector('.video-icon');
const videoIframe = document.querySelector('.video-iframe');

if (videoIframe) {
  videoImg.addEventListener('click', showIframe);
  videoIcon.addEventListener('click', showIframe);
}

function showIframe() {
  videoImg.style.display = 'none';
  videoIcon.style.display = 'none';
  videoIframe.src = 'https://www.youtube.com/embed/hL2cALEKqO8?autoplay=1';
  videoIframe.style.display = 'block';
}
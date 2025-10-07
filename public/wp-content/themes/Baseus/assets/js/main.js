const yellow = document.querySelector('.contact-yellow');
const black = document.querySelector('.contact-black');

/*
  Масив секцій і кольорів:
  — selector: CSS-селектор блоку
  — color: 'yellow' або 'black'
*/
const colorMap = [
  { selector: '.header', color: 'yellow' },
  { selector: '.top-sales', color: 'black' },
  { selector: '.new-arrivals', color: 'black' },
  { selector: '.footer', color: 'yellow' }
];

function isIconOverBlock(block) {
  const rect = block.getBoundingClientRect();
  const iconY = window.innerHeight - 20 - 30; // bottom: 20px, height: 60px
  return iconY >= rect.top && iconY <= rect.bottom;
}

function updateIconColor() {
  let currentColor = 'black'; // колір за замовчуванням

  for (const entry of colorMap) {
    const blocks = document.querySelectorAll(entry.selector);
    for (const block of blocks) {
      if (isIconOverBlock(block)) {
        currentColor = entry.color;
        break;
      }
    }
  }

  if (currentColor === 'yellow') {
    yellow.classList.add('active');
    black.classList.remove('active');
  } else {
    yellow.classList.remove('active');
    black.classList.add('active');
  }
}

window.addEventListener('scroll', updateIconColor);
window.addEventListener('load', updateIconColor);
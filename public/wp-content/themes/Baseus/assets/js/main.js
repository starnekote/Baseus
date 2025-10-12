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


document.addEventListener("DOMContentLoaded", function () {
    const sortBtn = document.getElementById("sort-btn");
    const sort = document.getElementById("sort");
      sortBtn.addEventListener('click', function() {
        sort.classList.toggle("show");
      });
    });

document.addEventListener("DOMContentLoaded", function () {
  const filterBtn = document.getElementById("filter-btn");
  const filter = document.getElementById("filter");
  const cross = document.getElementById("cross");

  // відкриття/закриття при натисканні кнопки
  filterBtn.addEventListener("click", function () {
    filter.classList.toggle("show");
  });

  // закриття при натисканні на хрестик
  cross.addEventListener("click", function () {
    filter.classList.remove("show");
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const options = document.querySelectorAll(".option");
  const lengthPickers = document.querySelectorAll(".length-picker");
  const colorPickers = document.querySelectorAll(".color-picker");

  options.forEach(option => {
    option.addEventListener("click", function () {
      // якщо цей елемент уже активний — просто знімаємо всі активні
      if (this.classList.contains("active")) {
        this.classList.remove("active");
      } else {
        // інакше — спочатку знімаємо активність з усіх
        options.forEach(opt => opt.classList.remove("active"));
        // і робимо активним лише поточний
        this.classList.add("active");
      }
    });
  });
  lengthPickers.forEach(lengthPicker => {
    lengthPicker.addEventListener("click", function () {
      // якщо цей елемент уже активний — просто знімаємо всі активні
      if (this.classList.contains("active")) {
        this.classList.remove("active");
      } else {
        // інакше — спочатку знімаємо активність з усіх
        lengthPickers.forEach(opt => opt.classList.remove("active"));
        // і робимо активним лише поточний
        this.classList.add("active");
      }
    });
  });
    colorPickers.forEach(colorPicker => {
    colorPicker.addEventListener("click", function () {
      // якщо цей елемент уже активний — просто знімаємо всі активні
      if (this.classList.contains("active")) {
        this.classList.remove("active");
      } else {
        // інакше — спочатку знімаємо активність з усіх
        colorPickers.forEach(opt => opt.classList.remove("active"));
        // і робимо активним лише поточний
        this.classList.add("active");
      }
    });
  });
});
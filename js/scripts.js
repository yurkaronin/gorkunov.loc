// Глобальные переменные
const menuButton = document.querySelector('.nav-button');
const footerLink = document.querySelector('.footer__head-link');
const mobileLink = document.querySelectorAll('.mobile-menu__link');
// Функции
// функция подключения скриптов
function includeFiles(url) {
  var script = document.createElement('script');
  script.src = url;
  document.getElementsByTagName('head')[0].appendChild(script);
};

// модификация шапки
function headerChange() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > 10) {
    document.body.classList.add('header-sticky');
  } else {
    document.body.classList.remove('header-sticky');
  }
};

// Основная рабочая область
document.addEventListener("DOMContentLoaded", () => {
  // подключаем файлы тут
  includeFiles("./js/parts/accordion.js");
  includeFiles("./js/parts/smoothscroll.js");

  // небольшие программы
  // Проверяем состояние прокрутки страницы. если прокрутка есть - перекрашиваем шапку
  headerChange();
  // отслеживаем событие прокрутки страницы > модификация шапки
  document.addEventListener('scroll', e => {
    headerChange();
  });
  // при клике по кнопке вызова меню - добавляем служебный класс на body
  menuButton.addEventListener('click', function () {
    document.body.classList.toggle('mob-menu-open');
    menuButton.classList.toggle('open');
  });
  // аккордеон меню в подвале (только под мобилки)
  if (window.screen.width <= 768) {
    footerLink.classList.toggle('active');

    footerLink.addEventListener('click', function (e) {
      e.preventDefault();
      footerLink.classList.toggle('active');
    });
  };
  // аккордеон меню в шапке (от 1100px)
  if (window.screen.width <= 1100) {
    for (let item of mobileLink) {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        item.classList.toggle('active');
      });
    };

  };

  let buttons = document.querySelectorAll('.ripple');
for( let item of buttons) {
  item.onmousemove = function(e) {
    let x = e.pageX - item.offsetLeft;
    let y = e.pageY - item.offsetTop;

    item.style.setProperty('--x', x + 'px');
    item.style.setProperty('--y', y + 'px');
  };
}







});


document.addEventListener('click', e => console.log(e.target));

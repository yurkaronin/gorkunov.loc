<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Горкунов: Главная страница</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body">

  <?php include './components/header.php';?>

  <main>
    <!-- первый экран  -->
    <section class="first">
      <div class="wrapper">
        <div class="first__flex">
          <h1 class="visually-hidden">УК Горкунов: Рынок, инвестиции и консультационные услуги</h1>
          <div class="first__details">
            <p class="subtitle">Инвестируем в фондовый рынок вместе</p>
            <p class="title"><span>2022</span> - время возможностей</p>

            <a href="#" class="button first__button">Присоединиться</a>
          </div>

          <a href="#" class="link-more">
            <span class="button">
              <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 10L7 16M7 16L13 10M7 16L7 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
            </span>
            <span class="link-more__text">мои услуги</span>
          </a>

        </div>

      </div>
    </section>

    <section class="services">
      <div class="wrapper">
        <h2 class="visually-hidden">Список услуг</h2>

        <ul class="services__list">

          <li class="services__item accordion">

            <div class="accordion__top">
              <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12L5 16M5 16L9 12M5 16L5 8" stroke="#00F0C0" stroke-width="2" />
                <path class="line" d="M5 8L5 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
              <h3 class="accordion__title">Идеи по рынку</h3>
            </div>

            <div class="accordion__body">
              <div class="services__item-grid">
                <div class="services__item-left">
                  <h3 class="services__subtitle">Идеи по рынку</h3>
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций,
                    еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги,
                    полно но не
                    очень длинно буквально пару строк.</p>

                  <div class="services__buttons">

                    <a class="button button--icon" href="#">
                      <span>подробнее</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#1B1E1E" stroke-width="2" />
                      </svg>
                    </a>

                    <a class="button button--transparent button--icon" href="#">
                      <span>Все услуги</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#00F0C0" stroke-width="2" />
                      </svg>
                    </a>

                  </div>
                </div>
                <div class="services__item-right">
                  <img src="./img/services/1.jpg" alt="картинка услуги" width="808">
                </div>
              </div>



            </div>
          </li>
          <li class="services__item accordion">

            <div class="accordion__top">
              <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12L5 16M5 16L9 12M5 16L5 8" stroke="#00F0C0" stroke-width="2" />
                <path class="line" d="M5 8L5 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
              <h3 class="accordion__title">База знаний</h3>
            </div>

            <div class="accordion__body">
              <div class="services__item-grid">
                <div class="services__item-left">
                  <h3 class="services__subtitle">База знаний</h3>
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций,
                    еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги,
                    полно но не
                    очень длинно буквально пару строк.</p>

                  <div class="services__buttons">

                    <a class="button button--icon" href="#">
                      <span>подробнее</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#1B1E1E" stroke-width="2" />
                      </svg>
                    </a>

                    <a class="button button--transparent button--icon" href="#">
                      <span>Все услуги</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#00F0C0" stroke-width="2" />
                      </svg>
                    </a>

                  </div>
                </div>
                <div class="services__item-right">
                  <img src="./img/services/2.jpg" alt="картинка услуги" width="808">
                </div>
              </div>



            </div>
          </li>
          <li class="services__item accordion">

            <div class="accordion__top">
              <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12L5 16M5 16L9 12M5 16L5 8" stroke="#00F0C0" stroke-width="2" />
                <path class="line" d="M5 8L5 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
              <h3 class="accordion__title">Вебинары</h3>
            </div>

            <div class="accordion__body">
              <div class="services__item-grid">
                <div class="services__item-left">
                  <h3 class="services__subtitle">Вебинары</h3>
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций,
                    еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги,
                    полно но не
                    очень длинно буквально пару строк.</p>

                  <div class="services__buttons">

                    <a class="button button--icon" href="#">
                      <span>подробнее</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#1B1E1E" stroke-width="2" />
                      </svg>
                    </a>

                    <a class="button button--transparent button--icon" href="#">
                      <span>Все услуги</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#00F0C0" stroke-width="2" />
                      </svg>
                    </a>

                  </div>
                </div>
                <div class="services__item-right">
                  <img src="./img/services/3.jpg" alt="картинка услуги" width="808">
                </div>
              </div>



            </div>
          </li>
          <li class="services__item accordion">

            <div class="accordion__top">
              <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12L5 16M5 16L9 12M5 16L5 8" stroke="#00F0C0" stroke-width="2" />
                <path class="line" d="M5 8L5 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
              <h3 class="accordion__title">Торговые сигналы</h3>
            </div>

            <div class="accordion__body">
              <div class="services__item-grid">
                <div class="services__item-left">
                  <h3 class="services__subtitle">Торговые сигналы</h3>
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций,
                    еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги,
                    полно но не
                    очень длинно буквально пару строк.</p>

                  <div class="services__buttons">

                    <a class="button button--icon" href="#">
                      <span>подробнее</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#1B1E1E" stroke-width="2" />
                      </svg>
                    </a>

                    <a class="button button--transparent button--icon" href="#">
                      <span>Все услуги</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#00F0C0" stroke-width="2" />
                      </svg>
                    </a>

                  </div>
                </div>
                <div class="services__item-right">
                  <img src="./img/services/4.jpg" alt="картинка услуги" width="808">
                </div>
              </div>



            </div>
          </li>
          <li class="services__item accordion">

            <div class="accordion__top">
              <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12L5 16M5 16L9 12M5 16L5 8" stroke="#00F0C0" stroke-width="2" />
                <path class="line" d="M5 8L5 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
              <h3 class="accordion__title">Частные консультации</h3>
            </div>

            <div class="accordion__body">
              <div class="services__item-grid">
                <div class="services__item-left">
                  <h3 class="services__subtitle">Частные консультации</h3>
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций,
                    еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги,
                    полно но не
                    очень длинно буквально пару строк.</p>

                  <div class="services__buttons">

                    <a class="button button--icon" href="#">
                      <span>подробнее</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#1B1E1E" stroke-width="2" />
                      </svg>
                    </a>

                    <a class="button button--transparent button--icon" href="#">
                      <span>Все услуги</span>
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#00F0C0" stroke-width="2" />
                      </svg>
                    </a>

                  </div>
                </div>
                <div class="services__item-right">
                  <img src="./img/services/5.jpg" alt="картинка услуги" width="808">
                </div>
              </div>

            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="personal-card">
      <div class="wrapper">
        <div class="personal-card__grid">
          <div class="personal-card__photo">
            <img src="./img/photo/1.png" alt="Фотография Вадим горкунов" width="808">
          </div>
          <div class="personal-card__description">
            <h2 class="personal-card__title">Вадим горкунов</h2>
            <p class="personal-card__lead">Финансовый брокер, выполняю посреднические функции между продавцом и
              покупателем на фондовой, товарной, валютной биржах</p>
            <div class="personal-card__details">
              <ul class="personal-card__list">
                <li>Родился 25.10.1986 г.Радужный ХМАО Тюменской область.</li>
                <li>Закончил среднеобразовательную школу №2 г.Радужный.</li>
                <li>В 2004 году поступил в КУБГУ на факультет прикладной математике, специализация информатика в
                  экономике.</li>
                <li>В 2009 году успешно получил диплом.</li>
                <li>На фондовом рынке с 2006 года.</li>
                <li>В 2008 году начал карьеру в компании "Финам".</li>
                <li>2009-2013 работа в компаний "Атон".</li>
                <li>2013-2015 работа над проектами gorkunov-invest.ru и горкунов.рф</li>
                <li>2015 запуск проектов gorkunov-invest.ru и горкунов.рф, работа в компании "Открытие Брокер"</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="benefits">
      <div class="wrapper">
        <h2 class="visually-hidden">Преимущества УК Горкунов</h2>
        <ul class="benefits__grid">

          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="43" height="46" fill="none">
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" d="M33 14V5l-4-4H1v44h32v-2" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" d="M27 4v3h3M7 14h10M7 10h5M7 31v9M11 36v4M15 31v9M19 33v7" />
                <path stroke="#00F0C0" stroke-miterlimit="10" stroke-width="2"
                  d="M42 18H24v22h18V18ZM24 25h18M24 30h18M24 35h12M30 40V25M36 40V25" />
              </svg>
            </div>
            <h3 class="benefits__name">Пример достижения например 16 лет на фондовом рынке </h3>
            <p class="benefits__description">Пример описания достижения, полно но не очень длинно. </p>
          </li>

          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none">
                <path stroke="#00F0C0" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                  d="M25 21v-9h6v7M28 3v9M37 20v-4h6v7M40 7v9M19 7h-6v19h6V7ZM16 0v7M16 26v8M7 19H1v21h6V19ZM4 10v9M4 40v8" />
                <path stroke="#00F0C0" stroke-miterlimit="10" stroke-width="2"
                  d="M33 42.95c6.075 0 11-4.679 11-10.45 0-5.771-4.925-10.45-11-10.45S22 26.729 22 32.5c0 5.771 4.925 10.45 11 10.45Z" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="m41 40 6 6" />
              </svg>
            </div>
            <h3 class="benefits__name">Пример достижения например 16 лет на фондовом рынке </h3>
            <p class="benefits__description">Пример описания достижения, полно но не очень длинно. </p>
          </li>

          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="46" fill="none">
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2"
                  d="M14.43 31.108c-.145 1.958-.917 4.311-2.984 6.205-1.652 1.514-2.442 5.64-2.442 5.64l1.832 1.467" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" d="M12.288 36.435c.994.132 4.455.442 8.303-1.071" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2"
                  d="M20.708 33.669c.01 1.566-.568 4.022-.17 5.625.398 1.603 3.25 5.143 3.25 5.143M26.682 33.418c-.457 1.134-1.743 5.878-1.743 5.878l.947 3.812 1.903 1.146M29.118 35.45s.952 4.61 1.356 5.354c.404.743 4.65 3.447 4.65 3.447M12.759 40.706l1.118 2.385 1.72.955" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2"
                  d="M38.134 28.308c.515-1.185.866-2.683.618-2.992-.248-.309-1.707-.274-2.57.537 0 0-3.626-.996-5.707-2.856-2.081-1.86-4.164-2.911-7.635-2.124-3.471.787-6.895-.548-10.106-.667-4.723-.175-10.018 3.411-10.92 7.857.346 5.191 2.464 5.306 2.602 9.454.07 2.121 1.467 6.515 1.467 6.515" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2"
                  d="M38.667 26.75c.93.803 2.618 3.423 2.618 3.423l-.126 1.451s2.055 2.534 2.217 2.813c-.054.689-1.74 2.113-1.74 2.113s-3.424-.093-3.915-.211c-.491-.118-1.87-.318-2.35-1.039-3.595-1.458-8.73.949-9.814 1.775M39 22v-6h-8M31 19v-8h-8M23 17V6h-8M15 17V1H7v16" />
              </svg>
            </div>
            <h3 class="benefits__name">Пример достижения например 16 лет на фондовом рынке </h3>
            <p class="benefits__description">Пример описания достижения, полно но не очень длинно. </p>
          </li>

          <li class="benefits__item">
            <div class="benefits__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="40" fill="none">
                <path stroke="#00F0C0" stroke-miterlimit="10" stroke-width="2"
                  d="M19.983 38.489c-1.573.346-3.287.511-5.081.511" />
                <path stroke="#00F0C0" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                  d="M14.902 39C7.214 39 1.004 35.305 1 28c.007-5.285 5.893-12.228 12-18 0 0-4-5-4.479-7.173C12 0 16 3 20.51 2.283 21 4 17 10 17 10c3.811 3.602 7.311 8.083 9.589 12.025" />
                <path stroke="#00F0C0" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M11 10h8" />
                <path stroke="#00F0C0" stroke-miterlimit="10" stroke-width="2"
                  d="M31 25h-8v14h8V25ZM39 12h-8v27h8V12ZM47 20h-8v19h8V20Z" />
              </svg>
            </div>
            <h3 class="benefits__name">Пример достижения например 16 лет на фондовом рынке </h3>
            <p class="benefits__description">Пример описания достижения, полно но не очень длинно. </p>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'
    ?>
</body>

</html>

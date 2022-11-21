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
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций, еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги, полно но не
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
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций, еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги, полно но не
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
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций, еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги, полно но не
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
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций, еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги, полно но не
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
                  <p class="services__lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций, еврооблигаций,
                    срочных
                    контрактов.</p>
                  <p class="services__text">Пример описания услуги, полно но не очень длинно. Пример описания услуги, полно но не
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
  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'
    ?>
</body>

</html>

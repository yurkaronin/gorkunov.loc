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
            <button class="accordion__top active" type="button">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4L5 8M5 8L9 4M5 8L5 0" stroke="#00F0C0" stroke-width="2" />
              </svg>
              <h3 class="accordion__title">Идеи по рынку</h3>
            </button>
            <div class="accordion__body">

              <h3 class="title">Идеи по рынку</h3>
              <p class="lead">Прямой доступ на биржевой валютный рынок. Покупка акций, облигаций, еврооблигаций, срочных
                контрактов.</p>
              <hr>
              <p class="text">Пример описания услуги, полно но не очень длинно. Пример описания услуги, полно но не
                очень длинно буквально пару строк.</p>

              <div class="buttons">

                <a class="button" href="#">
                  <span>подробнее</span>
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#1B1E1E" stroke-width="2" />
                  </svg>
                </a>

                <a class="button button--transparent" href="#">
                  <span>Все услуги</span>
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 9L8.5 5M8.5 5L4.5 1M8.5 5L0.5 5" stroke="#00F0C0" stroke-width="2" />
                  </svg>
                </a>

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

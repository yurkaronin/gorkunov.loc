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
  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'
    ?>
</body>

</html>

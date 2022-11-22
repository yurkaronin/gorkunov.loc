<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Автонаследование</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body body--inner-page">

  <?php include './components/header.php';?>

  <main>

    <?php
    // Первый экран для внутренней страницы
    include './components/first-screen-inner-page.php';
    // Часто задаваемые вопросы
    include './components/faq.php';
    // реимущества - вариант 2 (отличия - наличие заголовка в секции)
    include './components/benefits-2.php';
    // Анонсы стратегий
    include './components/announce-cards.php';
    ?>

    <section class="call-to-action">
      <div class="wrapper">
        <div class="grid-layer">
          <div class="grid-layer__left">
            <h2 class="call-to-action__title">Заказать звонок</h2>
            <p class="call-to-action__subtitle">Вы заинтересовались нашим предложением, но что-то еще не понятно. Заполните простую форму и мы свяжемся с вами в ближайшее время.</p>
            <a class="button" href="#">
              <span>Заказать</span>
            </a>
          </div>
          <div class="grid-layer__right">
            <img src="./img/phone.jpg" alt="фотография телефона" width="808">
          </div>
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
